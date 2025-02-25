<!-- Áreas de Estudio - Pregrado Start -->
<div class="container py-4">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-primary mb-3">Áreas de Estudio</h2>
        <p class="text-muted mx-auto" style="max-width: 600px;">
            Explora las áreas académicas que impulsan el conocimiento y la innovación en la Universidad Nacional del Altiplano.
        </p>
    </div>

    <div class="row g-3">
        <!-- Área Biomédicas -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 position-relative overflow-hidden">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <span class="badge bg-primary-soft text-primary p-2 rounded-circle">
                            <i class="fas fa-heartbeat fa-2x"></i>
                        </span>
                    </div>
                    <h5 class="card-title mb-3">Área Biomédicas</h5>
                    <p class="text-muted mb-4">
                        Investigación y preservación del medio ambiente para un futuro sostenible.
                    </p>
                    <a href="escuelasprofesionales" class="btn btn-sm btn-outline-primary stretched-link">Descubrir</a>
                </div>
                <div class="card-overlay"></div>
            </div>
        </div>

        <!-- Área de Ingenierías -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 position-relative overflow-hidden">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <span class="badge bg-primary-soft text-primary p-2 rounded-circle">
                            <i class="fas fa-microchip fa-2x"></i>
                        </span>
                    </div>
                    <h5 class="card-title mb-3">Área Ingenierías</h5>
                    <p class="text-muted mb-4">
                        Innovación tecnológica que transforma ideas en soluciones reales.
                    </p>
                    <a href="escuelasprofesionales" class="btn btn-sm btn-outline-primary stretched-link">Descubrir</a>
                </div>
                <div class="card-overlay"></div>
            </div>
        </div>

        <!-- Área Sociales -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 position-relative overflow-hidden">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <span class="badge bg-primary-soft text-primary p-2 rounded-circle">
                            <i class="fas fa-balance-scale fa-2x"></i>
                        </span>
                    </div>
                    <h5 class="card-title mb-3">Área Sociales</h5>
                    <p class="text-muted mb-4">
                        Comprendiendo la sociedad, cultura y dinámicas humanas.
                    </p>
                    <a href="escuelasprofesionales" class="btn btn-sm btn-outline-primary stretched-link">Descubrir</a>
                </div>
                <div class="card-overlay"></div>
            </div>
        </div>
    </div>

    <!-- Detalles Dinámicos -->
    <div id="detalles" class="mt-4"></div>
</div>

<style>
    .bg-primary-soft {
        background-color: rgba(13, 110, 253, 0.1);
    }

    .card {
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175) !important;
    }

    .card-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 4px;
        background-color: var(--bs-primary);
        transition: height 0.3s ease;
    }

    .card:hover .card-overlay {
        height: 8px;
    }

    .stretched-link::after {
        transition: opacity 0.3s ease;
    }

    .badge {
        width: 70px;
        height: 70px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
</style>

<script>
    function mostrarDetalles(area) {
        const detalles = {
            sociales: "Los programas en Ciencias Sociales incluyen disciplinas como Sociología, Psicología y Antropología, promoviendo un entendimiento profundo de las dinámicas sociales.",
            ingenieria: "En el área de Ingeniería, ofrecemos especializaciones en Ingeniería Civil, Eléctrica, Mecánica, y Sistemas, entre otras.",
            naturales: "Las Ciencias Naturales abarcan Biología, Ecología y Geología, con énfasis en investigación y sostenibilidad.",
        };

        const contenedor = document.getElementById('detalles');
        contenedor.innerHTML = `
            <div class="alert alert-soft-primary text-primary border-0 shadow-sm">
                <h5 class="alert-heading">Detalles del Área</h5>
                <p class="mb-0">${detalles[area]}</p>
            </div>
        `;
    }
</script>
<!-- Áreas de Estudio - Pregrado End -->