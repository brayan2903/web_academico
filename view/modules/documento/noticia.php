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
            background-color: rgb(62, 87, 114);
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
            border-bottom: 2px solid rgb(42, 59, 78);
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

    <!-- Job Detail Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row bg-light container-box" id="box__all_document" style="display:none">
                <!-- Título -->
                <div class="col-lg-12 bg-light mb-3 text-center">
                    <h4 id="principal_title" class="text-secondary p-3 animated slideInLeft"></h4>
                </div>

                <!-- Detalles (lado izquierdo) -->
                <div class="col-lg-6 wow fadeInUp p-3" data-wow-delay="0.4s">
                    <div class="row px-3">
                        <h5 class="section-title">DETALLES</h5>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <span class="text-info fw-bolder">
                                    <i class="fa-solid fa-bullhorn me-2"></i> Título:
                                </span>
                                <p id="titulo_com"></p>

                                <span class="text-info fw-bolder">
                                    <i class="fa-solid fa-align-left me-2"></i> Descripción:
                                </span>
                                <p id="descripcion_com"></p>

                                <span class="text-info fw-bolder">
                                    <i class="fa-solid fa-calendar-days me-2"></i> Fecha de Publicación:
                                </span>
                                <span id="fecha_com"></span>
                            </div>

                            <!-- Botón de descarga -->
                            <div class="btn-download">
                                <a href="" id="document_link" download="comunicado" target="_blank" class="btn btn-info btn-rounded">
                                    <i class="fa-solid fa-download me-2"></i> Descargar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Imagen (lado derecho) -->
                <div class="col-lg-6 wow fadeInUp p-3 text-center" data-wow-delay="0.2s">
                    <img id="vista_previa" src="" class="doc-image img-fluid border rounded">
                </div>
            </div>
        </div>
    </div>
    <!-- Job Detail End -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Script de carga -->
    <script src="public/js/web_documentos.js?rev=<?php echo time(); ?>"></script>

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
