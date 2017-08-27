
//variables para validación del formulario

var boton = document.querySelector("#button");
var nombreInput = document.querySelector("#recipient-name");
var mailInput = document.querySelector("#recipient-email");
var ideaInput = document.querySelector("#message-text");
var formulario = document.querySelector("#formContacto");
var expresionUsuario = /^[a-zA-Z0-9 ]*$/;
var expresionMail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var expresionMensaje = /^[a-zA-Z0-9\?\!\$áéíóú ]*$/;
var alturaPantalla = window.innerHeight;
var datosok = false;
/*===============================================================
=            VALIDAR EL FORMULARIO AL INGRESAR DATOS            =
===============================================================*/

//validar nombre
$("#recipient-name").on("focusout", function(){
	if(nombreInput.value === "" || expresionUsuario.test(nombreInput.value) == false){
		nombreInput.className = "form-control error";
		datosok = false;
		return false;	
	} else {
		nombreInput.className = "form-control";
		datosok = true;
	}
});

//validar correo
$("#recipient-email").on("focusout", function(){
	if(mailInput.value === "" || expresionMail.test(mailInput.value) == false){
		mailInput.className = "form-control error";
		return false;
		datosok = false;
	} else {
		mailInput.className = "form-control";
		datosok = true;
	}
});

//validar idea
$("#message-text").on("focusout", function(){
	if(ideaInput.value === "" || expresionMensaje.test(ideaInput.value) == false){
		ideaInput.className = "form-control error";
		return false;
	} else {
		ideaInput.className = "form-control";
	}
});

$("#message-text").on("keyup", function(){
	if(datosok){
		boton.className = "btn btn-formu-active";
	}
});

/*=====  End of VALIDAR EL FORMULARIO AL INGRESAR DATOS  ======*/

/*=========================================================
=            VALIDAR FORMULARIO AL HACER ENVIAR            =
=========================================================*/

$('#button').on("click", function(){
	
	// validar usuario
	if(nombreInput.value === "" || expresionUsuario.test(nombreInput.value) == false){
		nombreInput.className = "form-control error";
		nombreInput.focus();
		return false;	
	} else {
		nombreInput.className = "form-control";
	}

	// validar correo
	if(mailInput.value === "" || expresionMail.test(mailInput.value) == false){
		mailInput.className = "form-control error";
		mailInput.focus();
		return false;
	} else {
		mailInput.className = "form-control";	
	}

	// validar mensaje
		if(ideaInput.value === "" || expresionMensaje.test(ideaInput.value) == false){
		ideaInput.className = "form-control error";
		ideaInput.focus();
		return false;
	} else {
		ideaInput.className = "form-control";	
	}

	return true;

});

/*=====  End of VALIDAR FORMULARIO AL ENVIAR  ======*/


/*===========================================
=            ENVIO DE FORMULARIO            =
===========================================*/

$('form.ajax').on('submit', function() {
		
		var that = $(this),
			url = that.attr('action'),
			type = that.attr('method'),
			data = {};
			
		that.find('[name]').each(function(index, value) {
			var that = $(this),
				name = that.attr('name'),
				value = that.val();
				
			data[name] = value;
		});
		$.ajax({

			url: url,
			type: type,
			data: data,
			beforeSend:function(){  
            	$('#enviando').css("display", "block");
            },
	        complete:function(){
	        	$('#enviando').css("display", "none");
	        },
			success: function(response) {
				$('#form-alert').show();
				$('#modal-body').hide();
			}
	        
		});
		
		return false;

});

/*=====  End of ENVIO DE FORMULARIO  ======*/


/*==============================================
=            AL CARGAR EL DOCUMENTO            =
==============================================*/

$(document).ready(function(){

	//ocultar el msj de éxito del formulario
    $('#form-alert').hide();
    $('#enviando').css("display", "none");

    //boton scroll top
    $('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});

	//agregar clases a botones de idioma activo
	var lang = $('#lang').val();
	if (lang == 0) {
		esp.className = "btn btn-languaje-active";
		espxs.className = "btn btn-languaje-active";
		eng.className = "btn btn-languaje";
		engxs.className = "btn btn-languaje";
	} else {
		eng.className = "btn btn-languaje-active";
		engxs.className = "btn btn-languaje-active";
		esp.className = "btn btn-languaje";
		espxs.className = "btn btn-languaje";
	}

	//transformacion del menu hamburguesa
	$('#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});

});

/*=====  End of AL CARGAR EL DOCUMENTO  ======*/

/*================================================
=            DESLIZAR A LAS SECCIONES            =
================================================*/

$(function(){
    $('a[href*=#]').click(function() {
    	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

            if ($target.length) {
                 var targetOffset = $target.offset().top;
                 $('html,body').animate({scrollTop: targetOffset}, 500);
                 return false;
            }
    	}
   	});
});

/*=====  End of DESLIZAR A LAS SECCIONES  ======*/

/*=========================================================================
=            AGREGAR CLASE A BOTONES DE IDIOMAS AL HACER CLICK            =
=========================================================================*/

var btnEsp = $("esp");
var btnEng = $("eng");
var btnXsEsp = $("espxs");
var btnXsEng = $("engxs");

	btnEsp.on("click",function(){
		this.className = "btn btn-languaje-active";
		btnEng.className = "btn btn-languaje";
	});

	btnEng.on("click", function(){
		this.className = "btn btn-languaje-active";
		btnEsp.className = "btn btn-languaje";
	});

	btnXsEsp.on("click", function(){
		this.className = "btn btn-languaje-active";
		btnXsEng.className = "btn btn-languaje";
	});

	btnXsEng.on("click", function(){
		this.className = "btn btn-languaje-active";
		btnXsEsp.className = "btn btn-languaje";
	});

/*=====  End of AGREGAR CLASE A BOTONES DE IDIOMAS AL HACER CLICK  ======*/

/*========================================================
=            CENTRADO VERTICAL DEL FORMULARIO            =
========================================================*/

$(".centradoForm").on("click", function(){
	var alturaDiv = 547; // document.getElementById("modal-dialog").clientHeight;
	var margen = (alturaPantalla - alturaDiv) / 2+"px";
	$(".modal-content").css("marginTop", margen);
	$(".modal-content").css("marginBottom", margen);
});

// function setModalMaxHeight(element) {
//   this.$element     = $(element);  
//   this.$content     = this.$element.find('.modal-content');
//   var borderWidth   = this.$content.outerHeight() - this.$content.innerHeight();
//   var dialogMargin  = $(window).width() < 768 ? 20 : 60;
//   var contentHeight = $(window).height() - (dialogMargin + borderWidth);
//   var headerHeight  = this.$element.find('.modal-header').outerHeight() || 0;
//   var footerHeight  = this.$element.find('.modal-footer').outerHeight() || 0;
//   var maxHeight     = contentHeight - (headerHeight + footerHeight);

//   this.$content.css({
//       'overflow': 'hidden'
//   });
  
//   this.$element
//     .find('.modal-body').css({
//       'max-height': maxHeight,
//       'overflow-y': 'auto'
//   });
// }

// $('.modal').on('show.bs.modal', function() {
//   $(this).show();
//   setModalMaxHeight(this);
// });

// $(window).resize(function() {
//   if ($('.modal.in').length != 0) {
//     setModalMaxHeight($('.modal.in'));
//   }
// });


/*================================================================
=            Desplegar menu en pantallas de celulares            =
================================================================*/

// VARIALBES
var anchoPantalla = window.innerWidth;
var alturaBTN = ((alturaPantalla - 463.5) * 0.5898 ) + 30;
var marignTOP = (alturaPantalla - 463.5) * 0.4102;

// FUNCIONES
if (anchoPantalla < 767) {
	document.getElementById("btn-languaje").setAttribute("style","height:"+alturaBTN+"px; margin-top:"+marignTOP+"px");
}

/*=====  End of Desplegar menu en pantallas de celulares  ======*/

/*===================================================
= ocultar y mostrar el boton "ir arriba" respecto al formulario =
===================================================*/

$(".centradoForm").on("click", function(){
	$('.ir-arriba').hide();
});

/*== End of ocultar y mostrar el boton "ir arriba" respecto al formulario ==*/







