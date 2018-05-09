$(function() {
	var fadeTime = 300;
	
	$('.btn.btn-primary.precio').click( function (e) { 
		e.preventDefault();

		var accion=$(this).data("accion"), code=$(this).data("code"), precio=$(this).data("precio"), cantidad=$(this).data("cantidad")
		datos = {"accion":accion, "code":code, "precio":precio,"cantidad":cantidad};

		$.ajax({
			url: "/integrador6.3/includes/compras.php",
			type: "GET",
			data: datos
			}).done(function(respuesta){
			if (respuesta.estado === "ok") {
				var carrito = respuesta.carrito
				$("#totalcompras").html(carrito)
			}
		});
	});
	
	$('.product-removal button').click( function(e) {
		e.preventDefault();
		removeItem(this);
	});
	
	
	$('.product-quantity input').change( function() {
 	 	ucantidad(this);
	});
	
	function ucantidad(quantityInput){
		var productRow = $(quantityInput).parent().parent();
		var accion="UCAN", code=$(quantityInput).data("code") ;
	  
		datos = {"accion":accion, "code":code,"cantidad":$(quantityInput).val() };

		$.ajax({
		url: "/integrador6.3//includes/compras.php",
		type: "GET",
		data: datos
		}).done(function(respuesta){
			if (respuesta.estado === "ok") {
				var carrito = respuesta.carrito
				$("#totalcompras").html(carrito)
				productRow.children('.product-line-price').each(function () {
					$(this).fadeOut(fadeTime, function() {
						$(this).text(respuesta.total.toFixed(2));
						$(this).fadeIn(fadeTime);
					});
				});  
			}
		});
	  
	  /*
	  var price = parseFloat(productRow.children('.product-price').text());
	  var quantity = $(quantityInput).val();
	  var linePrice = price * quantity;
	   

	  productRow.children('.product-line-price').each(function () {
		$(this).fadeOut(fadeTime, function() {
		  $(this).text(linePrice.toFixed(2));
		  recalculateCart();
		  $(this).fadeIn(fadeTime);
		});
	  });  
	  */
	}
 
	
		
	function removeItem(removeButton){
		var productRow = $(removeButton).parent().parent();
		productRow.slideUp(fadeTime, function() {
			var accion="DEL", code=$(removeButton).data("code") ;
			productRow.remove();
			
			datos = {"accion":accion, "code":code, };

			$.ajax({
			url: "/integrador6.3/includes/compras.php",
			type: "GET",
			data: datos
			}).done(function(respuesta){
				if (respuesta.estado === "ok") {
					var carrito = respuesta.carrito
					$("#totalcompras").html(carrito)
				}
			});
						
		});
	}

		
});