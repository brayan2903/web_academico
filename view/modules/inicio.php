    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="public/js/web_inicio.js?rev=<?php echo time(); ?>"></script>
    <script src="public/js/web_slider.js?rev=<?php echo time(); ?>"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Carousel Start -->
    <!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" id="items_slider">

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->
    <!-- Carousel End -->
    <!-- esto es nuevo particles -->
    <!-- Particles Background Start -->
    <!-- Particles Background Start -->
    <div id="particles-js">
        <div class="content-header">
            <h1 class="text-white wow fadeInDown">VICERRECTORADO ACADEMICO DE LA UNIVERSIDAD NACIONAL DEL ALTIPLANO</h1>
            <!-- <p class="text-white wow fadeInDown">VICERRECTORADO ACADEMICO DE LA UNIVERSIDAD NACIONAL DEL ALTIPLANO</p>-->
        </div>
        <div class="content-categories mt-5">
        <div class="container-xxl py-4">
            <div class="container">
                <div class="row g-4 justify-content-center services">
                    <!-- Tarjeta 1 -->
                    <div class="services col-lg-2 col-6 animated zoomIn" data-wow-delay="0.1s">
                        <a class="category-item" href="eventos">
                            <div class="category-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Carga Académica" class="category-logo">
                            </div>
                            <p class="category-text text-white">CARGA ACADÉMICA<br>SISCAD</p>
                        </a>
                    </div>
                    <!-- Tarjeta 2 -->
                    <div class="services col-lg-2 col-6 animated zoomIn" data-wow-delay="0.3s">
                        <a class="category-item" href="noticias">
                            <div class="category-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/3976/3976625.png" alt="Nivelación Ingresantes" class="category-logo">
                            </div>
                            <p class="category-text text-white">NIVELACIÓN<br>INGRESANTES</p>
                        </a>
                    </div>
                    <!-- Tarjeta 3 -->
                    <div class="services col-lg-2 col-6 animated zoomIn" data-wow-delay="0.5s">
                        <a class="category-item" href="convocatorias">
                            <div class="category-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/2997/2997243.png" alt="Cursos y Certificados" class="category-logo">
                            </div>
                            <p class="category-text text-white">CURSOS Y<br>CERTIFICADOS</p>
                        </a>
                    </div>
                    <!-- Tarjeta 4 -->
                    <div class="services col-lg-2 col-6 animated zoomIn" data-wow-delay="0.7s">
                        <a class="category-item" href="#">
                            <div class="category-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/2247/2247728.png" alt="Capacitaciones" class="category-logo">
                            </div>
                            <p class="category-text text-white">CAPACITACIONES</p>
                        </a>
                    </div>
                    <!-- Tarjeta 5 -->
                    <div class="services col-lg-2 col-6 animated zoomIn" data-wow-delay="0.9s">
                        <a class="category-item" href="#">
                            <div class="category-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/4207/4207253.png" alt="Diplomados VRA" class="category-logo">
                            </div>
                            <p class="category-text text-white">DIPLOMADOS<br>VRA</p>
                        </a>
                    </div>
                    <!-- Tarjeta 6 -->
                    <div class="services col-lg-2 col-6 animated zoomIn" data-wow-delay="1.1s">
                        <a class="category-item" href="reclamos">
                            <div class="category-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/6195/6195702.png" alt="Asistencia Docentes" class="category-logo">
                            </div>
                            <p class="category-text text-white">ASISTENCIA<br>DOCENTES</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .category-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
        }

        .category-box {
            background-color: rgba(255, 255, 255, 0.5); /* Blanco transparente */
            padding: 10px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 150px; /* Tamaño base */
            transition: transform 0.3s ease-in-out;
        }

        .category-logo {
            max-width: 100%;
            height: auto;
            transition: filter 0.3s ease-in-out, transform 0.3s ease-in-out;
        }

        .category-text {
            margin-top: 10px;
            font-size: 14px;
            font-weight: bold;
            color: #000;
            text-align: center;
        }

        /* Efecto al pasar el mouse */
        .category-item:hover .category-logo {
            filter: grayscale(100%);
            transform: scale(1.1); /* Pequeña animación al pasar el mouse */
        }

        /* 📌 📱 Responsividad para pantallas pequeñas */
        @media (max-width: 576px) { /* Teléfonos */
            .category-box {
                max-width: 120px; /* Reduce tamaño en móviles */
            }

            .category-text {
                font-size: 12px; /* Reduce tamaño del texto en móviles */
            }
        }

        /* 📌 🖥️ Responsividad para tablets */
        @media (min-width: 768px) { /* Tablets */
            .category-box {
                max-width: 140px; /* Ajuste intermedio */
            }

            .category-text {
                font-size: 16px; /* Texto más grande en tablets */
            }
        }

        /* 📌 🖥️ Pantallas grandes */
        @media (min-width: 1200px) { /* Desktops grandes */
            .category-box {
                max-width: 180px; /* Aumenta el tamaño del contenedor */
            }

            .category-text {
                font-size: 18px; /* Texto más grande para mejor visibilidad */
            }
        }
    </style>

    </div>

    <!-- Particles Background End -->
    <div class="container animated zoomIn" >
            <h1 class="fw-bold" id="titulo">DIRECCIONES DEL VICERRECTORADO ACADÉMICO</h1>
            <div class="linea-dividida" id="linea">
                <div class="segmento"></div>
                <div class="punto-blanco"></div>
                <div class="segmento"></div>
            </div>
        </div>

    <div class="container my-5">
        <div class="row g-4 justify-content-center">
            <!-- Dirección 1 -->
            <div class="col-lg-3 col-md-6 animated zoomIn">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="fas fa-cogs fa-2x text-primary"></i> <!-- Ícono representativo -->
                        </div>
                        <h5 class="card-title">Dirección de Gestión Académica</h5>
                        <p class="card-text text-muted">
                            Responsable de planificar, organizar, dirigir, supervisar y evaluar las actividades académicas de la universidad. Está a cargo de un docente ordinario, propuesto por el Vicerrector Académico y ratificado por el Consejo Universitario, por un período de dos (02) años.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Dirección 2 -->
            <div class="col-lg-3 col-md-6 animated zoomIn">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="fas fa-user-check fa-2x text-primary"></i> <!-- Ícono representativo -->
                        </div>
                        <h5 class="card-title">Dirección de Admisión</h5>
                        <p class="card-text text-muted">
                            Responsable de planear, normar y asesorar las distintas modalidades de procesos de admisión y selección de postulantes de pregrado, posgrado, y segunda especialización, así como de mantener actualizada la información de los procesos de admisión.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Dirección 3 -->
            <div class="col-lg-3 col-md-6 animated zoomIn">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="fas fa-hands-helping fa-2x text-primary"></i> <!-- Ícono representativo -->
                        </div>
                        <h5 class="card-title">Dirección de Bienestar Universitario</h5>
                        <p class="card-text text-muted">
                            Responsable de planificar, organizar y dirigir la prestación de servicios de comedores, asistencia social. Así como la promoción del deporte para los estudiantes, docentes y personal no docente, está a cargo de un docente ordinario.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Dirección 4 -->
            <div class="col-lg-3 col-md-6 animated zoomIn">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="fas fa-paint-brush fa-2x text-primary"></i> <!-- Ícono representativo -->
                        </div>
                        <h5 class="card-title">Dirección de Proyección Social y Extensión Cultural</h5>
                        <p class="card-text text-muted">
                            Responsable de promover, organizar, dirigir y supervisar las actividades de proyección social y extensión cultural de la universidad, orientados hacia la comunidad, con el fin de coadyuvar al desarrollo de la región, revalorando la identidad cultural.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Category End -->

    <div class="container-xxl py-6">
        <div class="container">
            <div class="row">
    <!-- Accesos Directos -->
        <div class="col-lg-12 access__direct animated zoomIn mb-5">
            <h2 class="text-center p-3 border-bottom-style mb-4 animated zoomIn">Plataformas de Acceso Universitarias</h2>
            
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-4 col-sm-6 text-center mb-3">
                        <a href="https://admision.unap.edu.pe/index" class="d-block">
                            <img src="./public/img/admision.png" alt="Admisión" class="img-fluid animated zoomIn" style="max-height: 100px;">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 text-center mb-3">
                        <a href="https://tramites.unap.edu.pe/" class="d-block">
                            <img src="./public/img/archivoacade.png" alt="Trámites" class="img-fluid animated zoomIn" style="max-height: 100px;">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 text-center mb-3">
                        <a href="https://biblioteca.unap.edu.pe/opac_css/" class="d-block">
                            <img src="./public/img/bibliotecasunap.png" alt="Biblioteca" class="img-fluid animated zoomIn" style="max-height: 100px;">
                        </a>
                    </div>

                    <div class="col-md-3 col-sm-6 text-center mb-3">
                        <a href="https://repositorio.unap.edu.pe/" class="d-block">
                            <img src="./public/img/repositoriot.png" alt="Repositorio" class="img-fluid animated zoomIn" style="max-height: 100px;">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center mb-3">
                        <a href="https://vriunap.pe/pilar" class="d-block">
                            <img src="./public/img/pilar1.png" alt="Portal de Investigación" class="img-fluid animated zoomIn" style="max-height: 100px;">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center mb-3">
                        <a href="https://aulavirtual2.unap.edu.pe/login?ReturnUrl=%2F" class="d-block">
                            <img src="./public/img/aulav.png" alt="Aula Virtual" class="img-fluid animated zoomIn" style="max-height: 100px;">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center mb-3">
                        <a href="https://surl.lu/ckeqrx" class="d-block">
                            <img src="./public/img/intranetuna1.png" alt="Intranet" class="img-fluid animated zoomIn" style="max-height: 100px;">
                        </a>
                    </div> 
                </div>
                
            </div>
        </div>
                <!-- Publicaciones Recientes -->
                
                <div class="col-lg-12">
                    <h5 class="text-left p-3 border-bottom-style mb-5 animated zoomIn" data-wow-delay="0.8s"></h5><br>
                    <!-- <h5 class="text-left p-3 mb-5 wow fadeInDown" data-wow-delay="0.8s">EVENTOS</h5> -->
                    <!-- <h2 class="text-center p-3  wow zoomIn" data-wow-delay="0.1s">EVENTOS VICERRECTORADOA CADEMICO</h2> -->

                    <div class="container animated zoomIn" >
                        <h2 class="fw-bold" id="titulo">EVENTOS VICERRECTORADO ACADEMICO</h2>
                        <div class="linea-dividida" id="linea">
                            <div class="segmento"></div>
                            <div class="punto-blanco"></div>
                            <div class="segmento"></div>
                        </div>
                    </div>

                    <div class="tab-class text-center animated zoomIn" data-wow-delay="0.9s">
                        <div class="tab-content mt-4">
                            <div id="tab-1" class="tab-pane fade show p-0 active"></div>
                            <div id="tab-3" class="tab-pane fade show p-0"></div>
                        </div>
                        <div class="pt-4"></div>
                        <!-- <h5 class="text-left p-3 mb-5 wow fadeInDown" data-wow-delay="0.8s">NOTICIAS</h5> -->
                        <br>
                        <br>
                        
                        <!-- <h2 class="text-center p-3  wow zoomIn" data-wow-delay="0.1s">NOTICIAS VICERRECTORADO CADEMICO</h2> -->



                        <div class="container animated zoomIn" >
                            <h2 class="fw-bold" id="titulo">NOTICIAS VICERRECTORADO ACADEMICO</h2>
                            <div class="linea-dividida" id="linea">
                                <div class="segmento"></div>
                                <div class="punto-blanco"></div>
                                <div class="segmento"></div>
                            </div>
                        </div>

                        <div class="pt-4 tab-class text-center animated zoomIn" data-wow-delay="0.9s">
                            <!-- <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5 gap-3 ">
                                <li class="nav-item">
                                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                        <h6 class="mt-n1 mb-0">Noticias</h6>
                                    </a>
                                </li>
                            </ul> -->
                            <div class="tab-content2">
                                <div id="tab-2" class="tab-pane fade show p-0 active"></div>
                            </div>
                        </div>
                        <!-- <div class="pt-4 tab-class text-center wow fadeInDown" data-wow-delay="0.9s">
                            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5 gap-3 ">
                                <li class="nav-item">
                                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-3">
                                        <h6 class="mt-n1 mb-0">Convocatorias</h6>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content2">
                                <div id="tab-3" class="tab-pane fade show p-0 active"></div>
                            </div>
                        </div> -->
                    </div>
                </div>
                
                <!-- Redes Sociales -->
                <div class="container text-center animated zoomIn mt-4">
                <div class="container animated zoomIn" >
            <h1 class="fw-bold" id="titulo">Redes Sociales</h1>
            <div class="linea-dividida" id="linea">
                <div class="segmento"></div>
                <div class="punto-blanco"></div>
                <div class="segmento"></div>
            </div>
        </div><br><br>

                    <div class="row justify-content-center">
                        <!-- Facebook -->
                        <div class="col-md-4">
                            <h6 class="mb-3">Síguenos en Facebook</h6>
                            <div class="fb-page"
                                data-href="https://www.facebook.com/VicerrectoradoAcademicoVRAUNAP"
                                data-tabs="timeline"
                                data-width="320"
                                data-height="350"
                                data-small-header="false"
                                data-adapt-container-width="true"
                                data-hide-cover="false"
                                data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/VicerrectoradoAcademicoVRAUNAP" class="fb-xfbml-parse-ignore">
                                    <a href="https://www.facebook.com/VicerrectoradoAcademicoVRAUNAP">Vicerrectorado Académico VRA UNAP</a>
                                </blockquote>
                            </div>
                            <p class="mt-2">
                                <a href="https://www.facebook.com/VicerrectoradoAcademicoVRAUNAP" target="_blank">Ver en Facebook</a>
                            </p>
                        </div>

                        <!-- YouTube -->
                        <div class="col-md-4">
                            <h6 class="mb-3">Nuestro Canal de YouTube</h6>
                            <iframe 
                                width="320" 
                                height="180" 
                                src="https://www.youtube.com/embed/videoseries?list=UU-9FckLePjWjezz1wlkziqQ" 
                                title="Canal de YouTube - VRA UNAP" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                            <p class="mt-2">
                                <a href="https://www.youtube.com/@VRAUNAP" target="_blank">Ver en YouTube</a>
                            </p>
                        </div>

                        <!-- TikTok -->
                        <div class="col-md-4">
                            <h6 class="mb-3">Síguenos en TikTok</h6>
                            <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@vicerrectorado_academico" data-video-id="" style="max-width: 320px; min-width: 320px;">
                                <iframe 
                                    width="320" 
                                    height="180" 
                                    src="https://www.tiktok.com/embed/@vicerrectorado_academico" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope">
                                </iframe>
                            </blockquote>
                            <p class="mt-2">
                                <a href="https://www.tiktok.com/@vicerrectorado_academico" target="_blank">Ver en TikTok</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Facebook SDK -->
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v12.0" nonce="FbPageSDK"></script>

                <!-- TikTok SDK -->
                <script async src="https://www.tiktok.com/embed.js"></script>

            </div>
        </div>
    </div>

    <!-- Script del SDK de Facebook -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v16.0"></script>


    <div class="container-fluid bg-primary py-5">
        <div class="container">
            <div class="row text-center text-white">
                <!-- Facultades -->
                <div class="col-md-2 col-6 mb-4">
                    <div class="metric-item">
                        <i class="fa-solid fa-school fa-3x mb-3 text-white"></i>
                        <h4 class="mb-1 text-white">11</h4>
                        <p class="mb-0">Facultades</p>
                    </div>
                </div>
                
                <!-- Carreras Profesionales -->
                <div class="col-md-2 col-6 mb-4">
                    <div class="metric-item">
                        <i class="fa-solid fa-graduation-cap fa-3x mb-3 text-white"></i>
                        <h4 class="mb-1 text-white">30</h4>
                        <p class="mb-0">Carreras Profesionales</p>
                    </div>
                </div>
                
                <!-- Grupos de Investigación -->
                <div class="col-md-2 col-6 mb-4">
                    <div class="metric-item">
                        <i class="fa-solid fa-users-cog fa-3x mb-3 text-white"></i>
                        <h4 class="mb-1 text-white">42</h4>
                        <p class="mb-0">Grupos de Investigación</p>
                    </div>
                </div>
                
                <!-- Laboratorios -->
                <div class="col-md-2 col-6 mb-4">
                    <div class="metric-item">
                        <i class="fa-solid fa-microscope fa-3x mb-3 text-white"></i>
                        <h4 class="mb-1 text-white">28</h4>
                        <p class="mb-0">Laboratorios</p>
                    </div>
                </div>
                
                <!-- Herramientas de Investigación -->
                <div class="col-md-2 col-6 mb-4">
                    <div class="metric-item">
                        <i class="fa-solid fa-tools fa-3x mb-3 text-white"></i>
                        <h4 class="mb-1 text-white">120+</h4>
                        <p class="mb-0">Herramientas de Investigación</p>
                    </div>
                </div>
                
                <!-- Investigadores -->
                <div class="col-md-2 col-6 mb-4">
                    <div class="metric-item">
                        <i class="fa-solid fa-user-tie fa-3x mb-3 text-white"></i>
                        <h4 class="mb-1 text-white">104</h4>
                        <p class="mb-0">Investigadores RENACYT</p>
                    </div>
                </div>
            </div>
            
            <!-- Información Adicional -->
            <div class="row text-center text-white mt-4">
                <div class="col-12">
                    <p class="lead">
                        Impulsando la investigación, la innovación y el desarrollo científico
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 animated zoomIn" data-wow-delay="0.1s">
        <div class="container">
            <h3 class="text-center mb-5 p-3 border-bottom-style">Servicios en linea</h3>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <a href="#">
                        <img src="./public/img/icons/link1.jpg" alt="">
                    </a>
                </div>
                <div class="testimonial-item">
                    <a href="#">
                        <img src="./public/img/icons/link2.jpg" alt="">
                    </a>
                </div>
                <div class="testimonial-item">
                    <a href="#">
                        <img src="./public/img/icons/link3.jpg" alt="">
                    </a>
                </div>
                <div class="testimonial-item">
                    <a href="#">
                        <img src="./public/img/icons/link4.jpg" alt="">
                    </a>
                </div>
                <div class="testimonial-item">
                    <a href="#">
                        <img src="./public/img/icons/link5.jpg" alt="">
                    </a>
                </div>
                <div class="testimonial-item">
                    <a href="#">
                        <img src="./public/img/icons/link6.jpg" alt="">
                    </a>
                </div>
                <div class="testimonial-item">
                    <a href="#">
                        <img src="./public/img/icons/link7.jpg" alt="">
                    </a>
                </div>
                <div class="testimonial-item">
                    <a href="#">
                        <img src="./public/img/icons/link8.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Agrega el siguiente código donde quieras que aparezca el modal -->
    <?php //include('modal_slider.php'); 
    ?>




    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v16.0" nonce="P4TS2NgO"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            traer_slider();
            traer_recientes_comunicados();
            traer_recientes_oficios();
            traer_recientes_convocatorias();

            mostrar_comunicado_externo();
        });
    </script>
  
<style>
    .job-item {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.job-item:hover {
    transform: scale(1.03); /* Efecto de zoom al pasar el mouse */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.95); /* Sombra */
}

.job-item img {
    object-fit: cover; /* Ajusta la imagen dentro de su contenedor */
    border-radius: 8px;
    width: 100%; /* Ajuste responsivo */
    height: auto; /* Evita distorsiones */
    max-height: 200px; /* Limita la altura en pantallas grandes */
}

.btn-sm {
    font-size: 0.9rem; /* Tamaño pequeño del botón */
}

        #particles-js {
            position: relative;
            width: 100%;
            height: 500px; /* Altura ajustada */
            background-image: url('./public/img/gala2.jpg'); /* Reemplaza esto con la ruta correcta */
            background-size: cover; /* Asegura que la imagen cubra todo el área */
            background-position: center; /* Centra la imagen */
            background-repeat: no-repeat; /* Evita que la imagen se repita */
            overflow: hidden;
            z-index: 1; /* Fondo al nivel más bajo */
        }

        .content-header {
        position: absolute;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
        z-index: 2; /* Encima de las partículas */
        font-size: 1.8rem;
        color: #fff;
        }

        .content-categories {
        position: absolute;
        bottom: 50px; /* Ajusta la distancia desde el fondo */
        left: 50%;
        transform: translateX(-50%);
        z-index: 3; /* Encima de las partículas */
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px; /* Espaciado entre las cajas */
        width: 90%;
        }

        .cat-item {
        background-color: rgba(0, 0, 0, 0.8); /* Fondo semitransparente */
        border-radius: 10px;
        transition: transform 0.3s ease, background-color 0.3s ease;
        text-align: center;
        color: #fff;
        width: 150px;
        height: 120px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        }

        .cat-item:hover {
        transform: scale(1.05);
        background-color: rgba(0, 0, 0, 1); /* Fondo más oscuro al pasar el mouse */
        }

        
        /* 📌 Responsividad para pantallas pequeñas */
        @media (max-width: 768px) {
            .content-header {
                font-size: 1.5rem;
                top: 10px;
            }

            .content-categories {
                bottom: 20px;
                width: 95%;
            }

            .cat-item {
                width: 45%; /* Cambia a 2 por fila */
                min-width: 100px;
                padding: 10px;
            }

            #particles-js {
                height: 700px; /* Reduce la altura en móviles */
            }
        }

        /* 📌 Responsividad para pantallas extra pequeñas */
        @media (max-width: 480px) {
            .cat-item {
                width: 90%; /* Solo 1 por fila */
            }

            .content-header {
                font-size: 1.2rem;
            }
        }

        </style>

        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script>
            particlesJS("particles-js", {
                particles: {
                    number: {
                        value: 80,
                        density: {
                            enable: true,
                            value_area: 800
                        }
                    },
                    color: {
                        value: "#ffffff"
                    },
                    shape: {
                        type: "circle",
                        stroke: {
                            width: 0,
                            color: "#000000"
                        },
                        polygon: {
                            nb_sides: 5
                        }
                    },
                    opacity: {
                        value: 0.5,
                        random: false,
                        anim: {
                            enable: false,
                            speed: 1,
                            opacity_min: 0.1,
                            sync: false
                        }
                    },
                    size: {
                        value: 5,
                        random: true,
                        anim: {
                            enable: false,
                            speed: 40,
                            size_min: 0.1,
                            sync: false
                        }
                    },
                    line_linked: {
                        enable: true,
                        distance: 150,
                        color: "#ffffff",
                        opacity: 0.4,
                        width: 1
                    },
                    move: {
                        enable: true,
                        speed: 6,
                        direction: "none",
                        random: false,
                        straight: false,
                        out_mode: "out",
                        bounce: false,
                        attract: {
                            enable: false,
                            rotateX: 600,
                            rotateY: 1200
                        }
                    }
                },
                interactivity: {
                    detect_on: "canvas",
                    events: {
                        onhover: {
                            enable: true,
                            mode: "repulse"
                        },
                        onclick: {
                            enable: true,
                            mode: "push"
                        },
                        resize: true
                    },
                    modes: {
                        grab: {
                            distance: 400,
                            line_linked: {
                                opacity: 1
                            }
                        },
                        bubble: {
                            distance: 400,
                            size: 40,
                            duration: 2,
                            opacity: 8,
                            speed: 3
                        },
                        repulse: {
                            distance: 200,
                            duration: 0.4
                        },
                        push: {
                            particles_nb: 4
                        },
                        remove: {
                            particles_nb: 2
                        }
                    }
                },
                retina_detect: true
            });
        </script>

    <style>
            .container {
                text-align: center;
                margin-top: 50px;
            }

            .linea-dividida {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 5px;
                width: fit-content;
                margin-left: auto;
                margin-right: auto;
                position: relative;
            }

            .segmento {
                width: 50px;
                height: 4px;
                background-color: #007bff;
                border-radius: 4px;
            }

            .punto-blanco {
                width: 10px;
                height: 10px;
                background-color: white;
                border: 2px solid #007bff;
                border-radius: 50%;
                position: absolute;
                left: 0;
                animation: mover-punto 3s infinite alternate ease-in-out;
            }

            @keyframes mover-punto {
                0% { left: 0; }
                100% { left: calc(100% - 10px); }
            }
        </style>

        