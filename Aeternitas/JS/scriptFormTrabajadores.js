//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches





function validaSeccion() {

	/*
	if(document.fvalida.nombre.value.length==0){
		alert("Tiene que escribir su nombre")
		document.fvalida.nombre.focus()
		return 0;
	}
	if(document.fvalida.apellido.value.length==0){
		alert("Tiene que escribir sus apellidos")
		document.fvalida.apellido.focus()
		return 0;
	}
	
	if (document.fvalida.curp.value.length==0) {
		alert("Tiene que escribir su curp");
		document.fvalida.curp.focus();
		return 0;
	}
	
	if(document.fvalida.calle.value.length==0){
		alert("Tiene que escribir su calle")
		document.fvalida.calle.focus()
		return 0;
	}

	if(document.fvalida.numexterior.value.length==0){
		alert("Tiene que escribir su numero exterior")
		document.fvalida.correo.focus()
		return 0;
	}

	if(document.fvalida.colonia.value.length==0){
		alert("Tiene que escribir su colonia")
		document.fvalida.correo.focus()
		return 0;
	}

	if(document.fvalida.codigopostal.value.length==0){
		alert("Tiene que escribir su codigo postal")
		document.fvalida.correo.focus()
		return 0;
	}

	if(document.fvalida.telefono.value.length==0){
		alert("Tiene que escribir su telefono")
		document.fvalida.telefono.focus()
		return 0;
	}

	if(document.fvalida.correo.value.length==0){
		alert("Tiene que escribir su correo")
		document.fvalida.correo.focus()
		return 0;
	}

	if(document.fvalida.area.value.length==0){
		alert("Tiene que escoger su area")
		document.fvalida.area.focus()
		return 0;
	}
	if(document.fvalida.at_epo_id.value.length==0){
		alert("Tiene que escoger el id del Empleado Supervisor")
		document.fvalida.at_epo_id.focus()
		return 0;
	}
	if(document.fvalida.password.value.length==0){
		alert("Tiene que introducir una contraseña")
		document.fvalida.password.focus()
		return 0;
	}
	*/

	alert("Formulario enviado")
	document.fvalida.submit()

}


$(".next").click(function(){

	if(animating) return false;
	animating = true;

	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});
