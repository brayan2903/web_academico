<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalle del Documento</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Estilos personalizados -->
    <style>
        body {
            background-color:rgb(62, 87, 114);
            color: white;
            font-family: Arial, sans-serif;
        }
        .container-box {
            background: white;
            border-radius: 10px;
            padding: 30px;
            margin-top: 40px;
            color: #333;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .doc-image {
            width: 100%;
            max-height: 800px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .section-title {
            font-size: 1.5rem;
            font-weight: bold;
            border-bottom: 2px solidrgb(42, 59, 78);
            padding-bottom: 5px;
            margin-bottom: 15px;
        }
        .doc-details p {
            font-size: 1.1rem;
        }
        .btn-download {
            margin-top: 20px;
        }
        .btn-rounded {
            border-radius: 50px;
            padding: 12px 25px;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>

    <div class="container py-5">
        <!-- Contenedor principal -->
        <div class="container-box">
            <div class="row align-items-center">
                <!-- Información -->
                <div class="col-md-6">
                    <h2 id="principal_title" class="text-secondary"></h2>

                    <div class="doc-details">
                        <h5 class="section-title">Detalles del Documento</h5>

                        <p><i class="fa-solid fa-bullhorn me-2 text-info"></i> <strong>Título:</strong></p>
                        <p id="titulo_com"></p>

                        <p><i class="fa-solid fa-align-left me-2 text-info"></i> <strong>Descripción:</strong></p>
                        <p id="descripcion_com"></p>

                        <p><i class="fa-solid fa-calendar-days me-2 text-info"></i> <strong>Fecha de Publicacion:</strong> <span id="fecha_com"></span></p>
                    </div>

                    <!-- Botón de descarga -->
                    <div class="btn-download">
                        <a href="" id="document_link" download="comunicado" target="_blank" class="btn btn-primary btn-rounded">
                            <i class="fa-solid fa-download me-2"></i> Descargar
                        </a>
                    </div>
                </div>

                <!-- Imagen -->
                <div class="col-md-6 text-center">
                    <img id="vista_previa" src="" alt="Vista previa del documento" class="doc-image">
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Script de carga -->
    <script src="public/js/web_documento.js?rev=<?php echo time(); ?>"></script>

    <script>
        $(document).ready(function () {
            const urlParams = new URLSearchParams(window.location.search);
            const id = urlParams.get('id');

            if (id) {
                ver_documento(id);
            }
        });
    </script>

</body>
</html>
