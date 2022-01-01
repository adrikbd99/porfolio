<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="JS/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script defer src="JS/animaciones.js"></script>
    <title>Adrián García González</title>
</head>
<body>
    <div class="contenedor">
        <header class="cabecera" id="nav">
            <h1>ADRIÁN <span>GARCÍA GONZÁLEZ</span></h1>
            <ul>
                <li><a class="elemento_menu activo" href="#inicio">INICIO</a></li>
                <li><a class="elemento_menu" href="#habilidades">HABILIDADES</a></li>
                <li><a class="elemento_menu" href="#proyectos">PROYECTOS</a></li>
                <li><a class="elemento_menu" href="#contacto">CONTACTO</a></li>
                <button type="button" class="boton_cv">
                    <a href="IMG/CV_Adrián_García_González.pdf" target="blank" download="CV_Adrián_García_González" title="Descargar CV">Descargar CV</a>
                </button>
            </ul>
            <i class="fas fa-bars"></i>
            <div class="menu_responsive">
                <i class="fas fa-times"></i>
                <ul>
                    <li><a class="elemento_menu activo" href="#inicio">INICIO</a></li>
                    <li><a class="elemento_menu" href="#habilidades">HABILIDADES</a></li>
                    <li><a class="elemento_menu" href="#proyectos">PROYECTOS</a></li>
                    <li><a class="elemento_menu" href="#contacto">CONTACTO</a></li>
                    <button type="button" class="boton_cv">
                        <a href="IMG/CV_Adrián_García_González.pdf" target="blank" download="CV_Adrián_García_González" title="Descargar CV">Descargar CV</a>
                    </button>
                    <div class="rrss_responsive">
                        <a href="https://www.google.com" target="_blank" title="Mi perfil de GitHub"><i class="fab fa-github-square elementos_rrss"></i></a>
                        <a href="https://www.google.com" target="_blank" title="Mi perfil de Linkedin"><i class="fab fa-linkedin elementos_rrss"></i></a>
                        <a href="https://www.google.com" target="_blank" title="Mi correo electrónico"><i class="fas fa-envelope-square elementos_rrss"></i></a>
                    </div>
                </ul>
            </div>
        </header>
        <section class="inicio" id="inicio">
            <div class="contenido_inicio">
                <div class="info">
                    <h2>DESARROLLADOR <span>WEB</span></h2>
                    <p>El objetivo de este porfolio es mostrar mis habilidades y proyectos en el ámbito del desarrollo web, con la intención de ayudar a aquel que quiera informárse sobre mi.</p>
                </div>
                <button type="button" class="boton_ver_proyectos">
                    <a href="#proyectos">PROYECTOS</a>
                </button>
            </div>
        </section>
        <section class="habilidades" id="habilidades">
            <h2>HABILIDADES</h2>
            <div class="paneles_habilidades">
                <div class="panel">
                    <p class="cabecera_panel">FRONTEND</p>
                    <div class="iconos_habilidades">
                    <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/html.png" alt="">
                            <span>HTML</span>
                        </div>
                        <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/css.png" alt="">
                            <span>CSS</span>
                        </div>
                        <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/bootstrap.png" alt="">
                            <span>BOOTSTRAP</span>
                        </div>
                        <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/js.png" alt="">
                            <span>JAVASCRIPT</span>
                        </div>
                        <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/jquery.png" alt="">
                            <span>JQUERY</span>
                        </div> 
                    </div>
                </div>

                <div class="panel">
                    <p class="cabecera_panel">BACKEND</p>
                    <div class="iconos_habilidades">
                        <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/java.png" alt="">
                            <span>JAVA</span>
                        </div>
                        <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/php.png" alt="">
                            <span>PHP</span>
                        </div>
                        <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/laravel.png" alt="">
                            <span>LARAVEL</span>
                        </div>
                        <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/sql.jpg" alt="">
                            <span>SQL</span>
                        </div>
                    </div>
                </div>
                
                <div class="panel">
                    <p class="cabecera_panel">DESPLIEGUE WEB</p>
                    <div class="iconos_habilidades">
                        <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/apache.jpg" alt="">
                            <span>APACHE</span>
                        </div>
                        <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/aws.png" alt="">
                            <span>AWS</span>
                        </div>
                        <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/docker.png" alt="">
                            <span>DOCKER</span>
                        </div>
                        <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/ssh.png" alt="">
                            <span>SSH</span>
                        </div>
                        <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/dns.png" alt="">
                            <span>DNS</span>
                        </div>
                        <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/mariadb.jpg" alt="">
                            <span>MARIADB</span>
                        </div>
                        <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/xampp.png" alt="">
                            <span>XAMPP</span>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <p class="cabecera_panel">SISTEMAS</p>
                    <div class="iconos_habilidades">
                        <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/windows.png" alt="">
                            <span>WINDOWS</span>
                        </div>
                        <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/linux.png" alt="">
                            <span>LINUX</span>
                        </div>
                        <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/redes.png" alt="">
                            <span>REDES</span>
                        </div>
                        <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/git.png" alt="">
                            <span>GIT</span>
                        </div>
                        <div class="icono_habilidad top">
                            <img src="IMG/tecnologias/github.png" alt="">
                            <span>GITHUB</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="proyectos" id="proyectos">
            <h2>PROYECTOS</h2>
            <div class="componente_slider">
                <div class="contenedor_slider">
                    <div class="slider">
                        
                    </div>
                    <div class="boton_izda_slider">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="boton_dcha_slider">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                    <div class="indice_slider">
                        
                    </div>
                </div>
            </div>
        </section>
        <section class="contacto" id="contacto">
            <h2>CONTACTO</h2>
            <form method="post" action="#" class="formulario" id="formulario_contacto">
                <div class="input_email" id="input1">
                    <label for="email" class="label_formulario">Tu email</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="input_asunto" id="input2">
                    <label for="asunto" class="label_formulario">Asunto</label>
                    <input type="text" id="asunto" name="asunto">
                </div>
                <div class="input_mensaje" id="input3">
                    <label for="mensaje" class="label_formulario">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" cols="30" rows="5"></textarea>
                </div>
                <input type="submit" value="ENVIAR" class="boton_formulario">
            </form>
        </section>
        <footer class="pie">
            <p>Adrián García González © <span id="fecha"></span></p>
        </footer>
        <div class="rrss" id="rrss">
            <i class="fas fa-hashtag"></i>
            <div class="menu_rrss" id="menu_rrss">
                <a href="https://www.google.com" target="_blank" title="Mi perfil de GitHub"><i class="fab fa-github-square elementos_rrss"></i></a>
                <a href="https://www.google.com" target="_blank" title="Mi perfil de Linkedin"><i class="fab fa-linkedin elementos_rrss"></i></a>
                <a href="https://www.google.com" target="_blank" title="Mi correo electrónico"><i class="fas fa-envelope-square elementos_rrss"></i></a>
            </div>
        </div>
        <div class="flecha_subir">
            <a href="#inicio" title="Ir arriba"><i class="fas fa-arrow-alt-circle-up"></i></a>
        </div>
    </div>
</body>
</html>