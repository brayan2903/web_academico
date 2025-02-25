<!-- Dirección Gestión Académica Start -->
<div class="container py-4">
    <div class="text-center mb-4">
        <h2 class="h4 text-primary fw-bold mb-2">Dirección Gestión Académica</h2>
        <p class="text-muted small mx-auto" style="max-width: 600px;">
            Impulsando la excelencia académica a través de la innovación, planificación estratégica y desarrollo continuo.
        </p>
    </div>

    <div class="row g-4 align-items-center mb-4">
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm">
                <img src="./public/img/vra/gestionA.jpg" alt="Dirección Gestión Académica" class="card-img-top rounded-4">
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h4 class="card-title text-primary mb-3">¿Qué hacemos?</h4>
                    <p class="text-muted">
                        La Dirección de Gestión Académica es el eje central de la planificación y supervisión educativa
                        en la Universidad Nacional del Altiplano. Nuestra misión es garantizar la excelencia en los programas
                        académicos, promover la capacitación docente y fortalecer el uso de tecnologías innovadoras en la enseñanza.
                    </p>
                    <p class="text-muted">
                        Esta dirección también lidera la evaluación y actualización de los planes de estudio,
                        asegurando que respondan a las necesidades del entorno global y regional.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h4 class="card-title text-primary mb-3">Funciones Principales</h4>
                    <div class="list-group">
                        <div class="list-group-item d-flex justify-content-between align-items-center border-0">
                            <div class="d-flex align-items-center">
                                <span class="badge bg-primary-soft text-primary me-3 rounded-circle" style="width: 30px; height: 30px; display: inline-flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text-muted">Diseñar, supervisar y evaluar planes académicos</span>
                            </div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill" onclick="mostrarDetalle('funcion1')">Detalles</button>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center border-0">
                            <div class="d-flex align-items-center">
                                <span class="badge bg-primary-soft text-primary me-3 rounded-circle" style="width: 30px; height: 30px; display: inline-flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text-muted">Promover la implementación de tecnologías educativas</span>
                            </div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill" onclick="mostrarDetalle('funcion2')">Detalles</button>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center border-0">
                            <div class="d-flex align-items-center">
                                <span class="badge bg-primary-soft text-primary me-3 rounded-circle" style="width: 30px; height: 30px; display: inline-flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text-muted">Fomentar la capacitación docente</span>
                            </div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill" onclick="mostrarDetalle('funcion3')">Detalles</button>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center border-0">
                            <div class="d-flex align-items-center">
                                <span class="badge bg-primary-soft text-primary me-3 rounded-circle" style="width: 30px; height: 30px; display: inline-flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text-muted">Supervisar la calidad educativa en las facultades</span>
                            </div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill" onclick="mostrarDetalle('funcion4')">Detalles</button>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center border-0">
                            <div class="d-flex align-items-center">
                                <span class="badge bg-primary-soft text-primary me-3 rounded-circle" style="width: 30px; height: 30px; display: inline-flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text-muted">Garantizar el cumplimiento de normativas académicas</span>
                            </div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill" onclick="mostrarDetalle('funcion5')">Detalles</button>
                        </div>
                    </div>
                    <div id="detalle-funciones" class="mt-3"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h4 class="card-title text-primary mb-3">Nuestra Visión</h4>
                    <p class="text-muted mb-4">
                        Ser reconocidos como un referente en gestión académica a nivel nacional e internacional, por
                        nuestra capacidad de innovación, liderazgo y resultados en la formación de profesionales competentes
                        y comprometidos con el desarrollo social.
                    </p>
                    <div class="card border-0 shadow-sm">
                        <img src="./public/img/vra/diga1.jpg" alt="Gestión Académica" class="card-img-top rounded-4">
                    </div>
                </div>
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
        contenedor.innerHTML = `
            <div class="alert bg-primary-soft text-primary border-0 rounded-3 small">
                ${detalles[funcion]}
            </div>
        `;
    }
</script>

<style>
    .bg-primary-soft {
        background-color: rgba(13, 110, 253, 0.1);
    }

    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,.125) !important;
    }

    .list-group-item {
        margin-bottom: 0.5rem;
    }
</style>
<!-- Dirección Gestión Académica End -->