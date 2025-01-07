<?php
session_start();
if (isset($_SESSION['S_ID'])) {
    header('Location: view/index.php');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="generator" content="Hugo 0.87.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="description" content="Nifty is a responsive admin dashboard template based on Bootstrap 5 framework. There are a lot of useful components.">
    <title>Login | Portal Web</title>
    <link rel="shortcut icon" href="view/assets/img/default.png" id="icon_pestaña" />
    <!-- STYLESHEETS -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--- -->

    <!-- Fonts [ OPTIONAL ] -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS [ REQUIRED ] -->
    <link rel="stylesheet" href="./view/assets/css/bootstrap.min.css">

    <!-- Nifty CSS [ REQUIRED ] -->
    <link rel="stylesheet" href="./view/assets/css/nifty.min.css">

    <!-- Nifty Demo Icons [ OPTIONAL ] -->
    <link rel="stylesheet" href="./view/assets/css/demo-purpose/demo-icons.min.css">

    <!-- Demo purpose CSS [ DEMO ] -->
    <link rel="stylesheet" href="./view/assets/css/demo-purpose/demo-settings.min.css">

    <link rel="stylesheet" href="./public/css/estilos.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">

</head>

<body class="jumping">
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="content__boxed w-100 min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <div class="content__wrap col-12 col-sm-8 col-md-6 col-lg-4 col-xl-4">
            <h3 class="text-center login_letter text-white">PORTAL WEB</h3>
            <!-- Login card -->
            <div class="card shadow-lg content2 ">
                <div class="card-body">

                    <div class="text-center">
                        <h1 class="h3 login_letter text_login fw-bolder">Iniciar Sesión</h1>
                        <p>Unidad de Gestión</p>
                    </div>

                    <form class="mt-4" method="post">

                        <div class="mb-3">
                            <input type="text" class="form-control border_input" placeholder="Usuario" autofocus id="txt-user">
                        </div>

                        <div class="mb-3">
                            <input type="password" class="form-control border_input" placeholder="Contraseña" id="txt-pass">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember">
                            <label for="remember" class="form-check-label">
                                Recordar credenciales
                            </label>
                        </div>

                        <div class="d-grid mt-4">
                            <button class="btn btn_login btn-lg text-white" type="button" onclick="iniciar_sesion()">Ingresar</button>
                        </div>
                        <div class="mt-3">
                            <a href="../">Volver al Portal Web</a>
                        </div>

                    </form>
                </div>
            </div>
            <!-- END : Login card -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- JAVASCRIPTS -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <script src="https://kit.fontawesome.com/bd7b24f1e0.js" crossorigin="anonymous"></script>
    <!-- Popper JS [ OPTIONAL ] -->
    <script src="./view/assets/vendors/popperjs/popper.min.js" defer></script>

    <!-- Bootstrap JS [ OPTIONAL ] -->
    <script src="./view/assets/vendors/bootstrap/bootstrap.min.js" defer></script>
    <!-- Nifty JS [ OPTIONAL ] -->
    <script src="./view/assets/js/nifty.js" defer></script>



    <!-- Nifty Settings [ DEMO ] -->
    <script src="./view/assets/js/demo-purpose-only.js" defer></script>

    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="./public/js/usuario.js?rev=<?php echo time(); ?>"></script>
    <script>
        const rmcheck = document.getElementById('remember');
        const usuarioInput = document.getElementById('txt-user');
        const passInput = document.getElementById('txt-pass');

        if (localStorage.checkbox && localStorage.checkbox != "") {
            rmcheck.setAttribute("checked", "checked");
            usuarioInput.value = localStorage.usuario;
            passInput.value = localStorage.pass;
        } else {
            rmcheck.removeAttribute("checked");
            usuarioInput.value = "";
            passInput.value = "";
        }
    </script>

</body>

</html>