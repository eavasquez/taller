with(document.ingresarProducto){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && producto.value==""){
			ok=false;
			alert("Debe ingresar el nombre del producto");
			producto.focus();
		}
		if(ok && marca.value==""){
			ok=false;
			alert("Debe ingresar la marca del producto");
			marca.focus();
		}
		if(ok && cantidad.value==""){
			ok=false;
			alert("Debe ingresar la cantidad del producto");
			cantidad.focus();
		}
		if(ok && precio.value==""){
			ok=false;
			alert("Debe ingresar el precio unitario del producto");
			precio.focus();
		}
		if(ok && comentario.value==""){
			ok=false;
			alert("Debe ingresar un comentario del producto");
			comentario.focus();
		}



		if(ok){ submit(); }
	}
}
