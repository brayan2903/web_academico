<!DOCTYPE html>
<html lang="es">

<head >
    <meta charset="utf-8">
    <title>Panel | Portal Web</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="./public/img/icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bd3728afdc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="./template/lib/animate/animate.min.css" rel="stylesheet">
    <link href="./template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./template/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./template/css/style.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./template/css/app.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="./public/DataTables/datatables.min.css" />

        <script type="text/javascript">
            function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'es',
                includedLanguages: 'es,en,fr,de,qu,ay', // Idiomas que quieres incluir
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
            }
        </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
    <style>
        .goog-te-gadget {
        font-family: inherit !important;
        font-size: 0.875rem !important;
        }
        .goog-te-gadget-simple {
        border-radius: 2px !important;
        border: 1px solid #ced4da !important;
        padding: 0.25rem 0.5rem !important;
        background-color: white !important;
        }
        .goog-te-gadget img {
        display: none !important;
        }
        .goog-te-menu-value span:first-child {
        font-size: 0.875rem !important;
        }
        .goog-te-banner-frame {
        display: none !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Cargando...</span>
            </div>
        </div> -->
        <!-- Spinner End -->

<!-- Header Start -->
<style>
        .header__box {
            
            padding: 10px 20px;
            color: white;
        }

        .infobox {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .iteminfo {
            font-size: 14px;
            color: white;
        }

        .iteminfo i {
            color: #ffcc00;
        }

        .social-box {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .social-item {
            margin: 0 10px;
            position: relative;
        }

        .social-item a {
            color: white;
            font-size: 18px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-item a:hover {
            color: #ffcc00;
        }

        .social-item a::after {
            content: attr(title);
            position: absolute;
            bottom: 0%;
            left: -150%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 12px;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .social-item a:hover::after {
            opacity: 1;
            visibility: visible;
        }

        @media (max-width: 991.98px) {
            .infobox {
                display: none;
            }

            .social-box {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <header class="header__box d-flex flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-between px-2">
        <ul class="infobox d-lg-flex d-none align-items-center">
            <li class="iteminfo me-3"><i class="fa-solid fa-phone me-2"></i>(123) 456-78</li>
            <li class="iteminfo"><i class="fa-solid fa-envelope me-2"></i>vracademico@unap.edu.pe</li>
            
        </ul>

        <ul class="social-box d-flex justify-content-center justify-content-lg-end">
            <!-- Admisión -->
            <li class="social-item"><a href="https://admision.unap.edu.pe/index" target="_blank" title="Admisión"><i class="fas fa-user-graduate"></i></a></li>
            
            <!-- Trámites -->
            <li class="social-item"><a href="https://tramites.unap.edu.pe/" target="_blank" title="Trámites"><i class="fas fa-file-alt"></i></a></li>
            
            <!-- Biblioteca -->
            <li class="social-item"><a href="https://biblioteca.unap.edu.pe/opac_css/" target="_blank" title="Biblioteca"><i class="fas fa-book"></i></a></li>
            
            <!-- Repositorio -->
            <li class="social-item"><a href="https://repositorio.unap.edu.pe/" target="_blank" title="Repositorio"><i class="fas fa-database"></i></a></li>
            
            <!-- Investigación -->
            <li class="social-item"><a href="https://vriunap.pe/pilar" target="_blank" title="Portal de Investigación"><i class="fas fa-microscope"></i></a></li>
            
            <!-- Aula Virtual -->
            <li class="social-item"><a href="https://aulavirtual2.unap.edu.pe/login?ReturnUrl=%2F" target="_blank" title="Aula Virtual"><i class="fas fa-chalkboard-teacher"></i></a></li>
            
            <!-- Intranet -->
            <li class="social-item"><a href="https://surl.lu/ckeqrx" target="_blank" title="Intranet"><i class="fas fa-network-wired"></i></a></li>
            <div class="language-container">
                            <div id="google_translate_element" class="language-selector"></div>
                        </div>
        </ul>
    </header>
<!-- Header End -->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="./" class="navbar-brand d-flex align-items-center text-center py-0 px-1 px-lg-2 wow fadeInRight">
                <img src="./public/img/logo.png" width="200" alt="" class="img-fluid ">
            </a>

            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="./" class="nav-item nav-link active animated zoomIn" data-wow-delay="0.1s">Inicio</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle animated zoomIn" data-bs-toggle="dropdown" data-wow-delay="0.1s">El VRA</a>
                        <div class="dropdown-menu rounded-0 m-0 p-0">
                            <a href="vra" class="dropdown-item">Acerca del VRA</a>
                            <a href="NuestroVicerrector" class="dropdown-item">Nuestro vicerrector</a>
                            <a href="misionyvision" class="dropdown-item">Misión y Visión</a>
                            <a href="organigramvra" class="dropdown-item">Organigrama</a>
                        </div>
                    </div>
                    <a href="autoridades" class="nav-item nav-link animated zoomIn" data-wow-delay="0.1s">Autoridades</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle animated zoomIn" data-wow-delay="0.1s" data-bs-toggle="dropdown">Dependencias</a>
                        <div class="dropdown-menu rounded-0 m-0 p-0">
                            <a href="dgea" class="dropdown-item">Dirección de gestión académica</a>
                            <a href="dad" class="dropdown-item">Dirección de Admisión</a>
                            <a href="dibu" class="dropdown-item">Dirección de Bienestar Universitaria</a>
                            <a href="dipec" class="dropdown-item">Dirección de proyección social y extención cultural</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle animated zoomIn" data-wow-delay="0.1s" data-bs-toggle="dropdown">Pregrado</a>
                        <div class="dropdown-menu rounded-0 m-0 p-0">
                            <a href="areas" class="dropdown-item">Areas de estudio</a>
                            <a href="escuelasprofesionales" class="dropdown-item">Escuelas Profesionales</a>
                            <a href="filiales" class="dropdown-item">Filiales</a>
                            <a href="departamentos" class="dropdown-item">Departamentos Academicos</a>
                            <!-- <a href="convocatoriasCap" class="dropdown-item">Directorio</a> -->
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle animated zoomIn" data-wow-delay="0.1s" data-bs-toggle="dropdown">institucionales</a>
                        <div class="dropdown-menu rounded-0 m-0 p-0">
                            <a href="eventos" class="dropdown-item">Estatuto</a>
                            <a href="noticias" class="dropdown-item">Normativa</a>
                        </div>
                    </div>
                    <a href="documentos" class="nav-item nav-link animated zoomIn" data-wow-delay="0.1s">Documentos</a>
                </div>

            </div>
            <!-- HTML Reorganizado -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-lg-0">
                    <div class="right-aligned-container">
                        <!-- Logos en la parte superior -->
                        <div class="logos-container">
                            <a href="https://transparencia.unap.edu.pe/web/" class="navbar-brand d-flex align-items-center text-center py-0 px-2 wow fadeInRight">
                                <img src="public/img/vra/logo-transparencia.png" class="img-fluid" alt="Logo Transparencia" width="150">
                            </a>
                            <a href="https://surl.li/kwjyfq" class="navbar-brand d-flex align-items-center text-center py-0 px-2 wow fadeInRight">
                                <img src="public/img/vra/logo-portal-transparencia.png" class="img-fluid" alt="Logo Portal Transparencia" width="150">
                            </a>
                            
                            
                        </div>
                        <!-- Selector de idiomas debajo -->
                        <div class="language-container">
                            <div id="google_translate_element" class="language-selector"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CSS para alinear correctamente -->
            <style>
                .right-aligned-container {
                    display: flex;
                    flex-direction: column;
                    align-items: flex-end;
                    width: 100%;
                    padding-right: 15px;
                }
                
                .logos-container {
                    display: flex;
                    justify-content: flex-end;
                    margin-bottom: 5px;
                }
                
                .language-container {
                    width: 100%;
                    display: flex;
                    justify-content: flex-end;
                    margin-top: 5px;
                }
                
                .language-selector {
                    margin-left: auto;
                }
                
                /* Ajustes específicos para los logos */
                .logos-container .navbar-brand {
                    margin-right: 10px;
                }
                
                .logos-container .navbar-brand:last-child {
                    margin-right: 0;
                }
                
                /* Ajustes adicionales para el widget de Google Translate */
                .goog-te-gadget {
                    margin-top: 5px;
                    margin-bottom: 5px;
                }
                
                /* Ajuste para dispositivos móviles */
                @media (max-width: 768px) {
                    .right-aligned-container {
                        align-items: center;
                        padding-right: 0;
                    }
                    
                    .logos-container {
                        justify-content: center;
                    }
                    
                    .language-container {
                        justify-content: center;
                    }
                }

            </style>
        </nav>
        <!-- Navbar End -->

        <?php
        if (isset($_GET["url"])) {
            switch ($_GET["url"]) {
                case "inicio":
                    include "view/modules/" . $_GET["url"] . ".php";
                    break;
                case "acercavra":
                    include "view/modules/institucional/" . $_GET["url"] . ".php";
                    break;
                case "vra":
                    include "view/modules/vra/" . $_GET["url"] . ".php";
                    break;
                case "NuestroVicerrector":
                    include "view/modules/vra/" . $_GET["url"] . ".php";
                    break;
                case "misionyvision":
                    include "view/modules/vra/" . $_GET["url"] . ".php";
                    break;
                case "organigramvra":
                    include "view/modules/vra/" . $_GET["url"] . ".php";
                    break;
                case "autoridades":
                    include "view/modules/vra/" . $_GET["url"] . ".php";
                    break;
                case "dgea":
                    include "view/modules/direcciones/" . $_GET["url"] . ".php";
                    break;
                case "dad":
                    include "view/modules/direcciones/" . $_GET["url"] . ".php";
                    break;
                case "dibu":
                    include "view/modules/direcciones/" . $_GET["url"] . ".php";
                    break;
                case "dipec":
                    include "view/modules/direcciones/" . $_GET["url"] . ".php";
                    break;
                case "areas":
                    include "view/modules/pregrado/" . $_GET["url"] . ".php";
                    break;
                case "escuelasprofesionales":
                    include "view/modules/pregrado/" . $_GET["url"] . ".php";
                    break;
                case "filiales":
                    include "view/modules/pregrado/" . $_GET["url"] . ".php";
                    break;
                case "escuelasfiliales":
                    include "view/modules/pregrado/" . $_GET["url"] . ".php";
                    break;
                case "departamentos":
                    include "view/modules/pregrado/" . $_GET["url"] . ".php";
                    break;
                case "documentos":
                    include "view/modules/documentos/" . $_GET["url"] . ".php";
                    break;
                    
                case "nosotrosxx":
                    include "view/modules/institucional/" . $_GET["url"] . ".php";
                    break;
                case "directorioxx":
                    include "view/modules/institucional/" . $_GET["url"] . ".php";
                    break;
                case "documentosdegestionxx":
                    include "view/modules/institucional/" . $_GET["url"] . ".php";
                    break;
                case "organigramaxx":
                    include "view/modules/institucional/" . $_GET["url"] . ".php";
                    break;
                case "administracionxx":
                    include "view/modules/administracion/" . $_GET["url"] . ".php";
                    break;
                case "gestionInstitucionalxx":
                    include "view/modules/gestionInstitucional/" . $_GET["url"] . ".php";
                    break;
                case "gestionPedagogicaxx":
                    include "view/modules/gestionPedagogica/" . $_GET["url"] . ".php";
                    break;
                case "asesoriaJuridicaxx":
                    include "view/modules/asesoriaJuridica/" . $_GET["url"] . ".php";
                    break;
                case "convocatoriasxx":
                    include "view/modules/convocatorias/" . $_GET["url"] . ".php";
                    break;
                case "convocatoriasCasxx":
                    include "view/modules/convocatorias/" . $_GET["url"] . ".php";
                    break;
                case "convocatoriasDocentexx":
                    include "view/modules/convocatorias/" . $_GET["url"] . ".php";
                    break;
                case "convocatoriasAuxiliarxx":
                    include "view/modules/convocatorias/" . $_GET["url"] . ".php";
                    break;
                case "convocatoriasDirectivosxx":
                    include "view/modules/convocatorias/" . $_GET["url"] . ".php";
                    break;
                case "convocatoriasCapxx":
                    include "view/modules/convocatorias/" . $_GET["url"] . ".php";
                    break;
                case "eventos":
                    include "view/modules/comunicados/" . $_GET["url"] . ".php";
                    break;
                case "noticias":
                    include "view/modules/oficios/" . $_GET["url"] . ".php";
                    break;
                case "servicioxx":
                    include "view/modules/servicio/" . $_GET["url"] . ".php";
                    break;
                case "documento":
                    include "view/modules/documento/" . $_GET["url"] . ".php";
                    break;
                case "documentoOficio":
                    include "view/modules/documento/" . $_GET["url"] . ".php";
                    break;


                case "documento":
                    include "view/modules/documento/" . $_GET["url"] . ".php";
                    break;
                case "documentoOficio":
                    //aqui nuevo
                case "evento":
                    include "view/modules/documento/" . $_GET["url"] . ".php";
                    break;
                case "noticia":
                    include "view/modules/documento/" . $_GET["url"] . ".php";
                    break;
                    //hasta aqyu
                case "reclamosxx":
                    include "view/modules/reclamos/" . $_GET["url"] . ".php";
                    break;
                case "admin":
                    header('Location: admin/index.php');
                    break;
                default:
                    include "view/modules/error/404.php";
                    break;
            }
        } else {
            require "view/modules/inicio.php";
        }


        ?>
<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-5 footer pt-1 mt-1 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-2">

        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Institucional</h5>
                <a class="btn btn-link text-white-50" href="nosotros">Sobre Nosotros</a>
                <a class="btn btn-link text-white-50" href="directorio">Directorio Institucional</a>
                <a class="btn btn-link text-white-50" href="documentosdegestion">Documentos de Gestion</a>
                <!-- 

                <h5 class="text-white mb-1">Ver Ubicacion en Google Maps</h5> 
                <div class="col-lg-12 col-md-6 d-flex justify-content-center align-items-center">
                    <a href="https://surl.li/cepqnp" id="maps"><img src="https://cdn-icons-png.flaticon.com/512/5323/5323926.png" width="100"></a>
                </div>-->
            </div>
            
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Enlaces Rapidos</h5>
                <a class="btn btn-link text-white-50" href="convocatorias">Convocatorias</a>
                <a class="btn btn-link text-white-50" href="eventos">Eventos</a>
                <a class="btn btn-link text-white-50" href="noticias">Noticias</a>
                <a class="btn btn-link text-white-50" href="https://biblioteca.unap.edu.pe/opac_css/">Biblioteca</a>
                <a class="btn btn-link text-white-50" href="https://vriunap.pe/pilar">Plataforma de Investigación</a>
                <a class="btn btn-link text-white-50" href="https://repositorio.unap.edu.pe/">Repositorio Institucional</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Contactenos</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Av. Floral Nº 1153 - Puno (Ciudad Universitaria)</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i> (123) 456-78</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>vracademico@unap.edu.pe</p>
                
            </div>
            
            <div class="col-lg-3 col-md-6 d-flex justify-content-center align-items-center"> 
            <h5 class="text-white mb-1">Ver Ubicacion en Google Maps</h5>
            <a href="https://surl.li/cepqnp" id="maps"><img src="https://cdn-icons-png.flaticon.com/512/5323/5323926.png" width="100"></a>
            </div>
            
        </div>
    </div>
    <div class="container">
        <div class="copyright d-flex justify-content-center">
            <div class="row justify-content-center">
                <span>Copyright <i class="fa-regular fa-copyright w-auto"></i> 2025<a href="./"> VRA UNA PUNO</a></span>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
<script >
    var idioma_espanol = {
            select: {
                rows: "%d fila seleccionada"
            },
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ning&uacute;n dato disponible en esta tabla",
            "sInfo": "Registros del (_START_ al _END_) total de _TOTAL_ registros",
            "sInfoEmpty": "Registros del (0 al 0) total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "<b>No se encontraron datos</b>",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
</script>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="./template/lib/wow/wow.min.js"></script>
<script src="./template/lib/easing/easing.min.js"></script>
<script src="./template/lib/waypoints/waypoints.min.js"></script>
<script src="./template/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<!-- Template Javascript -->
<script src="./template/js/main.js"></script>

<script type="text/javascript" src="./public/DataTables/datatables.min.js"></script>

<!-- Librerias  -->
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="./public/js/app.js"></script>
<script src="./public/js/chatbot.js" defer></script>

<script>
// Función mejorada para ocultar la barra superior de Google Translate
function hideGoogleTranslateBar() {
  // Oculta el iframe de Google Translate de múltiples formas
  var iframes = document.getElementsByTagName('iframe');
  for (var i = 0; i < iframes.length; i++) {
    if (iframes[i].className.indexOf('goog-te-banner-frame') > -1) {
      iframes[i].style.display = 'none';
    }
  }

  // Buscar por ID también
  var elements = document.querySelectorAll('iframe[id^=":"][id$=".container"]');
  for (var i = 0; i < elements.length; i++) {
    elements[i].style.display = 'none';
  }
  
  // Restaurar el body a su posición original
  document.body.style.top = '0px';
  document.body.style.position = 'static';
  
  // Eliminar clases que Google añade
  if (document.body.classList.contains('translated-rtl') || 
      document.body.classList.contains('translated-ltr')) {
    document.body.classList.remove('translated-rtl', 'translated-ltr');
  }
  
  // Ocultar con CSS también
  var style = document.createElement('style');
  style.innerHTML = `
    .goog-te-banner-frame, .goog-te-balloon-frame {display: none !important;} 
    body {top: 0px !important; position: static !important;}
  `;
  document.head.appendChild(style);
}

// Ejecutar varias veces después de cargar la página para asegurarnos
window.addEventListener('load', function() {
  // Inmediatamente
  hideGoogleTranslateBar();
  
  // Y luego cada 500ms durante 5 segundos
  for (let i = 1; i <= 10; i++) {
    setTimeout(hideGoogleTranslateBar, i * 500);
  }
});

// También ejecutar cuando cambia el idioma
document.addEventListener('click', function(e) {
  // Ejecutar hideGoogleTranslateBar si se hace clic en cualquier elemento del selector de Google
  if (e.target.closest('#google_translate_element')) {
    setTimeout(function() {
      for (let i = 1; i <= 10; i++) {
        setTimeout(hideGoogleTranslateBar, i * 500);
      }
    }, 1000);
  }
});

// Vigilar cambios en el DOM que puedan introducir el banner
const observer = new MutationObserver(function(mutations) {
  hideGoogleTranslateBar();
});

// Configurar el observer para vigilar cambios en el body
observer.observe(document.body, { 
  childList: true, 
  subtree: true 
});
</script>
</body>

</html>