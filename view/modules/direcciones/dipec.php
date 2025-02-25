<!-- Dirección de Proyección Social y Extensión Cultural Start -->
<div class="container py-4">
    <div class="text-center mb-4">
        <h2 class="h4 text-primary fw-bold mb-2">Dirección de Proyección Social y Extensión Cultural</h2>
        <p class="text-muted small mx-auto" style="max-width: 600px;">
            Conectando la universidad con la sociedad a través de iniciativas culturales y sociales transformadoras.
        </p>
    </div>

    <div class="row g-4 align-items-center mb-4">
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm">
                <img src="./public/img/vra/proyecS.jpg" alt="Proyección Social" class="card-img-top rounded-4">
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h4 class="card-title text-primary mb-3">Nuestra Misión</h4>
                    <p class="text-muted">
                        La Dirección de Proyección Social y Extensión Cultural tiene como objetivo fomentar la interacción 
                        entre la universidad y la sociedad, promoviendo actividades culturales, educativas y sociales 
                        que contribuyan al desarrollo integral de la comunidad.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h4 class="card-title text-primary mb-3">Principales Programas</h4>
                    <div class="accordion" id="programasAccordion">
                        <div class="accordion-item border-0 mb-2">
                            <h5 class="accordion-header">
                                <button class="accordion-button bg-light rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    <span class="me-3 text-primary"><i class="fas fa-palette"></i></span>
                                    Actividades Culturales
                                </button>
                            </h5>
                            <div id="collapse1" class="accordion-collapse collapse show">
                                <div class="accordion-body text-muted small bg-light rounded">
                                    Promoción de eventos culturales como exposiciones, conciertos y talleres abiertos a la comunidad.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 mb-2">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed bg-light rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    <span class="me-3 text-primary"><i class="fas fa-hands-helping"></i></span>
                                    Servicio Social
                                </button>
                            </h5>
                            <div id="collapse2" class="accordion-collapse collapse">
                                <div class="accordion-body text-muted small bg-light rounded">
                                    Organización de campañas de salud, alfabetización y apoyo social en comunidades rurales y urbanas.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed bg-light rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    <span class="me-3 text-primary"><i class="fas fa-chalkboard-teacher"></i></span>
                                    Talleres Educativos
                                </button>
                            </h5>
                            <div id="collapse3" class="accordion-collapse collapse">
                                <div class="accordion-body text-muted small bg-light rounded">
                                    Impartición de talleres prácticos y educativos en áreas como tecnología, arte y desarrollo personal.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h4 class="card-title text-primary mb-3">Compromisos Clave</h4>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-start mb-3">
                            <span class="badge bg-primary-soft text-primary me-3 rounded-circle mt-1" style="width: 25px; height: 25px; display: inline-flex; align-items: center; justify-content: center;">
                                <i class="fas fa-check"></i>
                            </span>
                            <div>
                                <strong class="d-block mb-1 text-primary">Inclusión social</strong>
                                <p class="text-muted small mb-0">Crear oportunidades para todos los sectores de la población.</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-3">
                            <span class="badge bg-primary-soft text-primary me-3 rounded-circle mt-1" style="width: 25px; height: 25px; display: inline-flex; align-items: center; justify-content: center;">
                                <i class="fas fa-check"></i>
                            </span>
                            <div>
                                <strong class="d-block mb-1 text-primary">Fortalecimiento cultural</strong>
                                <p class="text-muted small mb-0">Rescatar y preservar las tradiciones culturales de la región.</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <span class="badge bg-primary-soft text-primary me-3 rounded-circle mt-1" style="width: 25px; height: 25px; display: inline-flex; align-items: center; justify-content: center;">
                                <i class="fas fa-check"></i>
                            </span>
                            <div>
                                <strong class="d-block mb-1 text-primary">Impacto sostenible</strong>
                                <p class="text-muted small mb-0">Promover proyectos que generen beneficios a largo plazo en la comunidad.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <a class="btn btn-primary rounded-pill px-4 py-2" href="proyectos">
            Conoce Más Proyectos
            <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>
</div>

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

    .accordion-button {
        font-weight: 600;
    }

    .accordion-button:not(.collapsed) {
        background-color: rgba(13, 110, 253, 0.1);
        color: var(--bs-primary);
    }

    .accordion-button:focus {
        box-shadow: none;
    }
</style>
<!-- Dirección de Proyección Social y Extensión Cultural End --