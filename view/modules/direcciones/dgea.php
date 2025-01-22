<!-- Dirección Gestión Académica Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5">Dirección Gestión Académica</h1>
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <img src="./public/img/vra/1200x628.png" alt="Dirección Gestión Académica" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h2 class="mb-4">¿Qué hacemos?</h2>
                <p>
                    La Dirección de Gestión Académica es el eje central de la planificación y supervisión educativa
                    en la Universidad Nacional del Altiplano. Nuestra misión es garantizar la excelencia en los programas
                    académicos, promover la capacitación docente y fortalecer el uso de tecnologías innovadoras en la enseñanza.
                </p>
                <p>
                    Esta dirección también lidera la evaluación y actualización de los planes de estudio,
                    asegurando que respondan a las necesidades del entorno global y regional.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h2 class="mb-4">Funciones Principales</h2>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Diseñar, supervisar y evaluar planes académicos.
                        <button class="btn btn-primary btn-sm" onclick="mostrarDetalle('funcion1')">Detalles</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Promover la implementación de tecnologías educativas.
                        <button class="btn btn-primary btn-sm" onclick="mostrarDetalle('funcion2')">Detalles</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Fomentar la capacitación docente.
                        <button class="btn btn-primary btn-sm" onclick="mostrarDetalle('funcion3')">Detalles</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Supervisar la calidad educativa en las facultades.
                        <button class="btn btn-primary btn-sm" onclick="mostrarDetalle('funcion4')">Detalles</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Garantizar el cumplimiento de normativas académicas.
                        <button class="btn btn-primary btn-sm" onclick="mostrarDetalle('funcion5')">Detalles</button>
                    </li>
                </ul>
                <div id="detalle-funciones" class="mt-4">
                    <!-- Los detalles se mostrarán aquí dinámicamente -->
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="mb-4">Nuestra Visión</h2>
                <p>
                    Ser reconocidos como un referente en gestión académica a nivel nacional e internacional, por
                    nuestra capacidad de innovación, liderazgo y resultados en la formación de profesionales competentes
                    y comprometidos con el desarrollo social.
                </p>
                <img src="./public/img/vra/1000x1300.png" alt="Gestión Académica" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</div>

<script>
    function mostrarDetalle(funcion) {
        const detalles = {
            funcion1: "El diseño de planes académicos incluye la consulta con expertos, la integración de estándares internacionales y el uso de datos analíticos para garantizar la excelencia educativa.",
            funcion2: "La implementación de tecnologías educativas abarca la digitalización de procesos académicos y la incorporación de herramientas modernas que optimizan el aprendizaje.",
            funcion3: "Las capacitaciones docentes buscan mejorar las competencias pedagógicas y promover el uso de metodologías innovadoras en el aula.",
            funcion4: "La supervisión de la calidad educativa asegura que todas las facultades mantengan altos estándares en sus programas y servicios.",
            funcion5: "Se promueve el cumplimiento estricto de normativas y regulaciones académicas, fomentando un ambiente de aprendizaje estructurado y eficiente."
        };

        const contenedor = document.getElementById('detalle-funciones');
        contenedor.innerHTML = `<div class='alert alert-info mt-3'>${detalles[funcion]}</div>`;
    }
</script>
<!-- Dirección Gestión Académica End -->
