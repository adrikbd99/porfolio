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
                <li><a class="elemento_menu" href="#sobre_mi">SOBRE MI</a></li>
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
                    <li><a class="elemento_menu" href="#sobre_mi">SOBRE MI</a></li>
                    <li><a class="elemento_menu" href="#proyectos">PROYECTOS</a></li>
                    <li><a class="elemento_menu" href="#contacto">CONTACTO</a></li>
                    <button type="button" class="boton_cv">
                        <a href="IMG/CV_Adrián_García_González.pdf" target="blank" download="CV_Adrián_García_González" title="Descargar CV">Descargar CV</a>
                    </button>
                    <div class="rrss_responsive">
                        <a href="https://www.google.com" target="_blank" title="Mi perfil de GitHub"><i class="fab fa-github-square elementos_rrss"></i></a>
                        <a href="https://www.google.com" target="_blank" title="Mi perfil de Linkedin"><i class="fab fa-linkedin elementos_rrss"></i></a>
                        <a href="https://www.google.com" target="_blank" title="Mi perfil de Twitter"><i class="fab fa-twitter-square elementos_rrss"></i></a>
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
        <section class="sobre_mi" id="sobre_mi">
            <div class="contenido_imagen">
                <div class="imagen">
                    <!-- <img src="IMG/patron_imagen.png" class="patron_imagen" alt="patrón de puntos"> -->
                    <img src="IMG/perfil.png" alt="foto de perfil">
                </div>
            </div>
            <div class="contenido_sobre_mi">
                <h2>SOBRE MI</h2>
                <div class="pestanas">
                    <p class="pestana_activa" data-bs-toggle="#pestana1">PERFIL</p>
                    <p data-bs-toggle="#pestana2">ESTUDIOS</p>
                    <p data-bs-toggle="#pestana3">HABILIDADES</p>
                </div>
                <div class="contenido_pestanas">
                    <div id="pestana1">
                        <p>¡Hola! Yo soy Adrián.</p>
                        <p>Supongo que aquí debo contar un poco sobre mi, mis aptitudes, mis metas... Pues bien, empecé en esto de la informática allá por 2018, cuando decidí estudiar un grado medio de <i>Sistemas Microinformáticos y Redes</i>. En él aprendí muchas cosas, pero me dí cuenta de que la programación en general me llamaba mucho la atención, por lo que nada más acabar me inscribí en el grado superior de <i>Desarrollo de Aplicaciones Web</i>.</p>
                        <p>Este es el ciclo que estoy cursando en estos momentos y en el que de momento he aprendido los conceptos generales de la programación además de todo lo relacionado con el desarrollo web. Mi meta es seguir aprendiendo y mejorar día a día para ser un desarrollador profesional.</p>
                    </div>
                    <div id="pestana2">
                        <div class="curso">
                            <h3>Sistemas Microinformáticos y Redes</h3>
                            <div class="info_curso">
                                <p><i class="fas fa-school"></i>Zubiri Manteo</p>
                                <p><i class="far fa-clock"></i>2000H</p>
                                <p><i class="far fa-calendar-alt"></i>2018-2020</p>
                            </div>
                        </div>
                        <div class="curso">
                            <h3>Desarrollo de Aplicaciones Web</h3>
                            <div class="info_curso">
                                <p><i class="fas fa-school"></i>Zubiri Manteo</p>
                                <p><i class="far fa-clock"></i>2000H</p>
                                <p><i class="far fa-calendar-alt"></i>2020-2022*</p>
                            </div>
                        </div>
                    </div>
                    <div id="pestana3">
                        <div class="categoria_habilidad">
                            <h3>Front-end</h3>
                            <div class="habilidad">
                                <div class="icono_habilidad"><img src="IMG/tecnologias/html.png" alt="HTML"></div>
                                <p>HTML</p>
                            </div>
                            <div class="habilidad">
                                <div class="icono_habilidad"><img src="IMG/tecnologias/css.png" alt="CSS"></div>
                                <p>CSS</p>
                            </div>
                            <div class="habilidad">
                                <div class="icono_habilidad"><img src="IMG/tecnologias/bootstrap.png" alt="BOOTSTRAP"></div>
                                <p>BOOTSTRAP</p>
                            </div>
                            <div class="habilidad">
                                <div class="icono_habilidad"><img src="IMG/tecnologias/js.png" alt="JAVASCRIPT"></div>
                                <p>JAVASCRIPT</p>
                            </div>
                            <div class="habilidad">
                                <div class="icono_habilidad"><img src="IMG/tecnologias/jquery.png" alt="JQUERY"></div>
                                <p>JQUERY</p>
                            </div>
                        </div>
                        <div class="categoria_habilidad">
                            <h3>Back-end</h3>
                            <div class="habilidad">
                                <div class="icono_habilidad"><img src="IMG/tecnologias/java.png" alt="JAVA"></div>
                                <p>JAVA</p>
                            </div>
                            <div class="habilidad">
                                <div class="icono_habilidad"><img src="IMG/tecnologias/php.png" alt="PHP"></div>
                                <p>PHP</p>
                            </div>
                            <div class="habilidad">
                                <div class="icono_habilidad"><img src="IMG/tecnologias/laravel.png" alt="LARAVEL"></div>
                                <p>LARAVEL</p>
                            </div>
                            <div class="habilidad">
                                <div class="icono_habilidad"><img src="IMG/tecnologias/sql.jpg" alt="SQL"></div>
                                <p>SQL</p>
                            </div>
                        </div>
                        <div class="categoria_habilidad">
                            <h3>Despliegue Web</h3>
                            <div class="habilidad">
                                <div class="icono_habilidad"><img src="IMG/tecnologias/apache.jpg" alt="APACHE"></div>
                                <p>APACHE</p>
                            </div>
                            <div class="habilidad">
                                <div class="icono_habilidad"><img src="IMG/tecnologias/aws.png" alt="AWS"></div>
                                <p>AWS</p>
                            </div>
                            <div class="habilidad">
                                <div class="icono_habilidad"><img src="IMG/tecnologias/docker.png" alt="DOCKER"></div>
                                <p>DOCKER</p>
                            </div>
                            <div class="habilidad">
                                <div class="icono_habilidad"><img src="IMG/tecnologias/ssh.png" alt="SSH"></div>
                                <p>SSH</p>
                            </div>
                            <div class="habilidad">
                                <div class="icono_habilidad"><img src="IMG/tecnologias/dns.png" alt="DNS"></div>
                                <p>DNS</p>
                            </div>
                        </div>
                        <div class="categoria_habilidad">
                            <h3>Sistemas</h3>
                            <div class="habilidad">
                                <div class="icono_habilidad"><img src="IMG/tecnologias/windows.png" alt="WINDOWS"></div>
                                <p>WINDOWS</p>
                            </div>
                            <div class="habilidad">
                                <div class="icono_habilidad"><img src="IMG/tecnologias/linux.png" alt="LINUX"></div>
                                <p>LINUX</p>
                            </div>
                            <div class="habilidad">
                                <div class="icono_habilidad"><img src="IMG/tecnologias/redes.png" alt="REDES"></div>
                                <p>REDES</p>
                            </div>
                            <div class="habilidad">
                                <div class="icono_habilidad"><img src="IMG/tecnologias/git.png" alt="GIT"></div>
                                <p>GIT</p>
                            </div>
                            <div class="habilidad">
                                <div class="icono_habilidad"><img src="IMG/tecnologias/github.png" alt="GITHUB"></div>
                                <p>GITHUB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </section>
        <section class="proyectos" id="proyectos">
            <h2>PROYECTOS</h2>
            <div class="contenido_proyecto">

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
            <p>Desarrollado por Adrián García González © <span id="fecha"></span></p>
            <div class="rrss_pie">
                <a href="https://www.google.com" target="_blank" title="Mi perfil de GitHub"><i class="fab fa-github-square elementos_rrss"></i></a>
                <a href="https://www.google.com" target="_blank" title="Mi perfil de Linkedin"><i class="fab fa-linkedin elementos_rrss"></i></a>
                <a href="https://www.google.com" target="_blank" title="Mi perfil de Twitter"><i class="fab fa-twitter-square elementos_rrss"></i></a>
            </div>
        </footer>
        <div class="rrss" id="rrss">
            <i class="fas fa-hashtag"></i>
            <div class="menu_rrss" id="menu_rrss">
                <a href="https://www.google.com" target="_blank" title="Mi perfil de GitHub"><i class="fab fa-github-square elementos_rrss"></i></a>
                <a href="https://www.google.com" target="_blank" title="Mi perfil de Linkedin"><i class="fab fa-linkedin elementos_rrss"></i></a>
                <a href="https://www.google.com" target="_blank" title="Mi perfil de Twitter"><i class="fab fa-twitter-square elementos_rrss"></i></a>
            </div>
        </div>
        <div class="flecha_subir">
            <a href="#inicio" title="Ir arriba"><i class="fas fa-arrow-alt-circle-up"></i></a>
        </div>
    </div>
</body>
</html>