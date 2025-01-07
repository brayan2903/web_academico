<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>VRA UNA-PUNO | Portal Web</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="./public/img/icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

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

</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <!--<div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Cargando...</span>
            </div>
        </div>-->
        <!-- Spinner End -->

        <!-- Header Start -->
        <header class="header__box d-flex justify-content-center px-2 justify-content-lg-between">
            <ul class="info__box d-lg-flex d-none">
                <li class="item__info"><i class="fa-solid fa-phone me-2"></i>+51987654321</li>
                <li class="item__info"><i class="fa-solid fa-envelope me-2"></i>correo@gmail.com</li>
            </ul>

            <ul class="social-box ">
                <li class="social-item"><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li class="social-item"><a href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                <li class="social-item"><a href="#" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                <li class="social-item"><a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                <li class="social-item"><a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                <li class="social-item"><a href="admin"><i class="fas fa-user-cog"></a></i>

            </ul>

        </header>
        <!-- Header End -->



        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="./" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5 wow fadeInRight">
                <img src="./public/img/logo.png" width="200" alt="" class="img-fluid ">

            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="./" class="nav-item nav-link active wow fadeInDown" data-wow-delay="0.1s">Inicio</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle wow fadeInDown" data-bs-toggle="dropdown" data-wow-delay="0.2s">Institucional</a>
                        <div class="dropdown-menu rounded-0 m-0 p-0">
                            <a href="nosotros" class="dropdown-item">Sobre Nosotros</a>
                            <a href="directorio" class="dropdown-item">Directorio</a>
                            <a href="documentosdegestion" class="dropdown-item">Documentos de Gestión</a>
                            <a href="organigrama" class="dropdown-item">Organigrama</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle wow fadeInDown" data-wow-delay="0.3s" data-bs-toggle="dropdown">Areas</a>
                        <div class="dropdown-menu rounded-0 m-0 p-0">
                            <a href="administracion" class="dropdown-item">Administración</a>
                            <a href="gestionInstitucional" class="dropdown-item">Area de Gestión Institucional</a>
                            <a href="gestionPedagogica" class="dropdown-item">Area de Gestión Pedagogica</a>
                            <a href="asesoriaJuridica" class="dropdown-item">Area de Asesoria Juridica</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle wow fadeInDown" data-wow-delay="0.4s" data-bs-toggle="dropdown">Convocatorias</a>
                        <div class="dropdown-menu rounded-0 m-0 p-0">
                            <a href="convocatoriasCas" class="dropdown-item">Convocatorias CAS</a>
                            <a href="convocatoriasDocente" class="dropdown-item">Convocatorias Docentes</a>
                            <a href="convocatoriasAuxiliar" class="dropdown-item">Convocatorias Auxiliares</a>
                            <a href="convocatoriasDirectivos" class="dropdown-item">Convocatorias Directivos</a>
                            <a href="convocatoriasCap" class="dropdown-item">Convocatorias CAP</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle wow fadeInDown" data-wow-delay="0.5s" data-bs-toggle="dropdown">Informacion</a>
                        <div class="dropdown-menu rounded-0 m-0 p-0">
                            <a href="comunicados" class="dropdown-item">Comunicados</a>
                            <a href="oficiosMultiples" class="dropdown-item">Oficios Multiples</a>
                        </div>
                    </div>
                    <a href="servicio" class="nav-item nav-link wow fadeInDown" data-wow-delay="0.6s">Servicio</a>
                    <a href="noticias" class="nav-item nav-link wow fadeInDown" data-wow-delay="0.7s">Noticias</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->