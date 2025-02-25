<!-- Dirección de Bienestar Universitario Start -->
<div class="container py-4">
    <div class="text-center mb-4">
        <h2 class="h4 text-primary fw-bold mb-2">Dirección de Bienestar Universitario</h2>
        <p class="text-muted small mx-auto" style="max-width: 600px;">
            Comprometidos con el desarrollo integral y el bienestar de nuestra comunidad estudiantil.
        </p>
    </div>

    <div class="row g-4 align-items-center mb-4">
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm">
                <img src="./public/img/vra/dibu1.jpg" alt="Dirección de Bienestar Universitario" class="card-img-top rounded-4">
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h4 class="card-title text-primary mb-3">Nuestra Misión</h4>
                    <p class="text-muted">
                        Promover el bienestar integral de los estudiantes a través de programas y servicios
                        que fomenten su desarrollo físico, emocional, académico y social, fortaleciendo
                        su participación en la comunidad universitaria.
                    </p>
                    <a href="#programas" class="btn btn-primary rounded-pill px-4 py-2">
                        Conoce nuestros programas
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Programas y Servicios -->
    <div id="programas" class="py-4 bg-light rounded-4">
        <div class="container">
            <h3 class="h4 text-primary text-center mb-4">Programas y Servicios</h3>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <div class="bg-primary-soft text-primary rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="fas fa-brain fa-2x"></i>
                                </div>
                            </div>
                            <h5 class="card-title text-primary mb-3">Atención Psicológica</h5>
                            <p class="text-muted small mb-3">
                                Brindamos apoyo psicológico profesional para promover la salud mental
                                y el equilibrio emocional de nuestros estudiantes.
                            </p>
                            <button class="btn btn-sm btn-outline-primary rounded-pill" onclick="mostrarDetalle('psicologia')">
                                Más detalles
                                <i class="fas fa-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <div class="bg-primary-soft text-primary rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="fas fa-futbol fa-2x"></i>
                                </div>
                            </div>
                            <h5 class="card-title text-primary mb-3">Actividades Deportivas</h5>
                            <p class="text-muted small mb-3">
                                Organizamos eventos deportivos y actividades físicas para fomentar un
                                estilo de vida saludable y el trabajo en equipo.
                            </p>
                            <button class="btn btn-sm btn-outline-primary rounded-pill" onclick="mostrarDetalle('deporte')">
                                Más detalles
                                <i class="fas fa-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3">
                                <div class="bg-primary-soft text-primary rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="fas fa-hand-holding-heart fa-2x"></i>
                                </div>
                            </div>
                            <h5 class="card-title text-primary mb-3">Apoyo Socioeconómico</h5>
                            <p class="text-muted small mb-3">
                                Ofrecemos becas y asistencia económica para garantizar que ningún estudiante
                                vea afectada su educación por motivos financieros.
                            </p>
                            <button class="btn btn-sm btn-outline-primary rounded-pill" onclick="mostrarDetalle('apoyo')">
                                Más detalles
                                <i class="fas fa-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Detalles Dinámicos -->
    <div id="detalle-programas" class="mt-4"></div>
</div>

<script>
    function mostrarDetalle(programa) {
        const detalles = {
            psicologia: "Nuestro equipo de psicólogos está disponible para sesiones individuales y talleres grupales que abordan temas como manejo del estrés, autoestima y resolución de conflictos.",
            deporte: "Contamos con instalaciones deportivas modernas y programas para deportes como fútbol, voleibol y atletismo, promoviendo la competencia sana.",
            apoyo: "Gestionamos becas, residencias y programas de alimentación para garantizar que todos los estudiantes tengan igualdad de oportunidades en su educación."
        };

        const contenedor = document.getElementById('detalle-programas');
        contenedor.innerHTML = `
            <div class="alert bg-primary-soft text-primary border-0 rounded-3 small">
                <h5 class="alert-heading">Detalle del Programa</h5>
                <p class="mb-0">${detalles[programa]}</p>
            </div>`;
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
</style>
<!-- Dirección de Bienestar Universitario End -->