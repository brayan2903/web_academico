<!-- Dirección de Admisiones Start -->
<div class="container py-4">
    <div class="text-center mb-4">
        <h2 class="h4 text-primary fw-bold mb-2">Dirección de Admisiones</h2>
        <p class="text-muted small mx-auto" style="max-width: 600px;">
            Transformando oportunidades educativas a través de procesos transparentes, inclusivos y justos.
        </p>
    </div>

    <div class="row g-4 align-items-center mb-4">
        <div class="col-lg-3">
            <div class="card border-0 shadow-sm">
                <img src="./public/img/vra/log_dad.jpg" alt="Dirección de Admisiones" class="card-img-top rounded-4">
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h4 class="card-title text-primary mb-3">¿Qué hacemos?</h4>
                    <p class="text-muted">
                        La Dirección de Admisiones de la Universidad Nacional del Altiplano es responsable de
                        gestionar todos los procesos relacionados con el ingreso de nuevos estudiantes a nuestra
                        institución, asegurando transparencia, inclusión y calidad en cada etapa.
                    </p>
                    <p class="text-muted">
                        Desde la planificación de exámenes de admisión hasta la publicación de resultados,
                        trabajamos para garantizar un proceso ágil, eficiente y justo que identifique a los mejores
                        talentos para formar parte de nuestra comunidad académica.
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
                                <span class="text-muted">Organizar y coordinar procesos de admisión</span>
                            </div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill" onclick="mostrarDetalle('funcion1')">Detalles</button>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center border-0">
                            <div class="d-flex align-items-center">
                                <span class="badge bg-primary-soft text-primary me-3 rounded-circle" style="width: 30px; height: 30px; display: inline-flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text-muted">Diseñar estrategias de inclusión educativa</span>
                            </div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill" onclick="mostrarDetalle('funcion2')">Detalles</button>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center border-0">
                            <div class="d-flex align-items-center">
                                <span class="badge bg-primary-soft text-primary me-3 rounded-circle" style="width: 30px; height: 30px; display: inline-flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text-muted">Supervisar la transparencia en los exámenes</span>
                            </div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill" onclick="mostrarDetalle('funcion3')">Detalles</button>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center border-0">
                            <div class="d-flex align-items-center">
                                <span class="badge bg-primary-soft text-primary me-3 rounded-circle" style="width: 30px; height: 30px; display: inline-flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text-muted">Garantizar la seguridad de los resultados</span>
                            </div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill" onclick="mostrarDetalle('funcion4')">Detalles</button>
                        </div>
                    </div>
                    <div id="detalle-funciones" class="mt-3"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h4 class="card-title text-primary mb-3">Nuestra Meta</h4>
                    <p class="text-muted mb-4">
                        Ser reconocidos como una dirección líder a nivel nacional, promoviendo la inclusión,
                        la igualdad de oportunidades y la excelencia en los procesos de admisión.
                    </p>
                    <div class="card border-0 shadow-sm">
                        <img src="./public/img/vra/adminsion.jpg" alt="Procesos de Admisiones" class="card-img-top rounded-4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h4 class="card-title text-primary mb-3 text-center">Próximos Exámenes</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Fecha</th>
                                    <th>Examen</th>
                                    <th>Modalidad</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>15/03/2025</td>
                                    <td>Examen Ordinario</td>
                                    <td>Presencial</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary rounded-pill">
                                            Ver más
                                            <i class="fas fa-arrow-right ms-1"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22/03/2025</td>
                                    <td>Examen Extraordinario</td>
                                    <td>Virtual</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary rounded-pill">
                                            Ver más
                                            <i class="fas fa-arrow-right ms-1"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function mostrarDetalle(funcion) {
        const detalles = {
            funcion1: "Organizamos los cronogramas, asignación de sedes y coordinación con el personal necesario para garantizar un proceso eficiente.",
            funcion2: "Desarrollamos programas que aseguren la participación de estudiantes de diversas comunidades y contextos.",
            funcion3: "Implementamos mecanismos de supervisión estrictos para garantizar la imparcialidad y transparencia en los exámenes.",
            funcion4: "Aseguramos la protección de los datos personales y la confidencialidad de los resultados de admisión."
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
<!-- Dirección de Admisiones End --