// FIJAR BARRA DE NAVEGACIÓN
window.onscroll = function(){
    fijarSoltar();
    scrollActivo();
    ocultarMenu();
};

var nav = document.getElementById("nav");
var posicion_nav = nav.offsetTop;

function fijarSoltar(){
    if(window.pageYOffset > posicion_nav){
        nav.classList.add("fijar");
    }
    else{
        nav.classList.remove("fijar");
    }
}

// CLASE ACTIVA PARA LOS LINKS DEL MENÚ
var elementos_lista = document.getElementsByClassName("elemento_menu");

for (let i = 0; i < elementos_lista.length; i++) {
    elementos_lista[i].addEventListener("click", claseActiva);
}

function claseActiva(evento) {
    let elemento = evento.target;
    eliminarActiva();
    elemento.classList.add("activo");
}

function eliminarActiva() {
    for (let i = 0; i < elementos_lista.length; i++) {
        elementos_lista[i].classList.remove("activo");
    }
}

function scrollActivo() {
    let secciones = document.getElementsByTagName("section");
    for (let i = 0; i < secciones.length; i++) {
        let posicion_top_seccion = secciones[i].offsetTop;
        let posicion_bottom_seccion = secciones[i].offsetHeight;
        if((window.pageYOffset >= (posicion_top_seccion - 300)) && (window.pageYOffset <= (posicion_bottom_seccion + posicion_top_seccion))){
            eliminarActiva();
            elementos_lista[i].classList.add("activo");
        }
        else{
            elementos_lista[i].classList.remove("activo");
        }

    }
}

// ANIMACIÓN MENÚ RRSS
var menu = document.getElementById("rrss");
var menu_rrss = document.getElementById("menu_rrss");
menu.addEventListener("mouseover", mostrarRrss);
menu.addEventListener("mouseleave", ocultarRrss);

function mostrarRrss() {
    menu_rrss.style.transition = "height .3s ease-in-out";
    menu.style.height = "270px";
    menu_rrss.style.transition = "bottom .3s ease-in-out";
    menu_rrss.style.bottom = "70px";
}

function ocultarRrss() {
    setTimeout(function() {
        menu.style.height = "";
    }, 300);
    menu_rrss.style.transition = "bottom .3s ease-in-out";
    menu_rrss.style.bottom = "-145px";
}

// BOTON SUBIR ARRIBA ANIMACIÓN APARECER Y DESAPARECER
$(window).scroll(function(){
    if($(this).scrollTop() > 500){
        $('.flecha_subir').fadeIn();
    } 
    else if ($(this).scrollTop() > 100) {
        $('.flecha_subir').fadeOut();
    }
});


// ANIMACIÓN SUAVE SCROLL ENLACES (JQUERY)
$(document).ready(function () {
    $('a').click(function(){
        $('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top -100}, 300);});
});



// CAMBIAR AÑO AUTOMÁTICAMENTE
const elemento_fecha = document.getElementById('fecha');
var fecha = new Date();
var fecha = fecha.getFullYear();
elemento_fecha.innerHTML = fecha;

// PESTAÑAS SOBRE MI
const pestanas = $('.pestanas p');
pestanas.click(mostrarPestana);

function mostrarPestana() {
    const pestana = $(this);
    let id_pestana = pestana.attr('data-bs-toggle');

    ocultarPestanas();
    $(id_pestana).css('display', 'flex');

    pestanas.removeClass('pestana_activa');
    pestana.addClass('pestana_activa');
}

function ocultarPestanas() {
    $('.contenido_pestanas div').css('display', 'none');
}

// AJAX PROYECTOS
$.ajax({
    url: "JS/proyectos.json",
    dataType: "json",
    success: cargarProyectos
});

let num_proyecto = 0;

function cargarProyectos(json) {
    for (let i = 0; i < json.length; i++) {
        $('.contenido_proyecto').html($('.contenido_proyecto').html() + "<div class='carta_proyecto' style='background-image: url(" + json[i].imagen + ")'><div class='info_proyecto'><div class='encabezado_proyecto'><h3>" + json[i].nombre + "</h3><div class='tecnologias_fecha'>" + json[i].tecnologias + "<p class='fecha'>" + json[i].fecha + "</p></div></div><div class='descripcion_proyecto'><p>" + json[i].descripcion + "</p></div><div class='links_proyecto'><button type='button'><a href='" + json[i].website + "' target='_blank'>Link website</a></button><button type='button'><a href='" + json[i].github + "' target='_blank'>Link repositorio</a></button></div></div></div>");
    }
}

// MENU RESPONSIVE
const icono_menu = $('.cabecera > i');
const icono_cerrar = $('.menu_responsive i');
const menu_responsive = $('.menu_responsive');
const secciones_pagina = $('section');
const links_pagina = $('a');

icono_menu.click(desplegarMenu);
icono_cerrar.click(ocultarMenu);
secciones_pagina.click(ocultarMenu);
links_pagina.click(ocultarMenu);

function desplegarMenu() {
    icono_menu.removeClass('fa-bars');
    icono_menu.addClass('fa-times-circle');
    menu_responsive.css('transition', 'right .2s ease-in-out');
    menu_responsive.css('right', '0');

    icono_menu.click(ocultarMenu);
}

function ocultarMenu() {
    if($(window).width() <= 768) {
        menu_responsive.css("right", "-30%")
        icono_menu.addClass('fa-bars');
        icono_menu.removeClass('fa-times-circle');
        menu_responsive.css("transition", "all .3s ease")
    }

    if($(window).width() <= 550) {
        menu_responsive.css("right", "-50%")
        icono_menu.addClass('fa-bars');
        icono_menu.removeClass('fa-times-circle');
        menu_responsive.css("transition", "all .3s ease")
    }

    icono_menu.click(desplegarMenu);
}