<!-- Dirección de Bienestar Universitario Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5">Dirección de Bienestar Universitario</h1>
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <img src="./public/img/vra/1200x1200.png" alt="Dirección de Bienestar Universitario" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h2 class="mb-4">Nuestra Misión</h2>
                <p>
                    Promover el bienestar integral de los estudiantes a través de programas y servicios
                    que fomenten su desarrollo físico, emocional, académico y social, fortaleciendo
                    su participación en la comunidad universitaria.
                </p>
                <a href="#programas" class="btn btn-primary mt-3">Conoce nuestros programas</a>
            </div>
        </div>

        <!-- Programas y Servicios -->
        <div id="programas" class="py-5 bg-light rounded">
            <h2 class="text-center mb-5">Programas y Servicios</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Atención Psicológica</h5>
                            <p class="card-text">
                                Brindamos apoyo psicológico profesional para promover la salud mental
                                y el equilibrio emocional de nuestros estudiantes.
                            </p>
                            <button class="btn btn-primary" onclick="mostrarDetalle('psicologia')">Más detalles</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Actividades Deportivas</h5>
                            <p class="card-text">
                                Organizamos eventos deportivos y actividades físicas para fomentar un
                                estilo de vida saludable y el trabajo en equipo.
                            </p>
                            <button class="btn btn-primary" onclick="mostrarDetalle('deporte')">Más detalles</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Apoyo Socioeconómico</h5>
                            <p class="card-text">
                                Ofrecemos becas y asistencia económica para garantizar que ningún estudiante
                                vea afectada su educación por motivos financieros.
                            </p>
                            <button class="btn btn-primary" onclick="mostrarDetalle('apoyo')">Más detalles</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detalles Dinámicos -->
        <div id="detalle-programas" class="mt-5">
            <!-- Los detalles se generarán dinámicamente aquí -->
        </div>
    </div>
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
            <div class='alert alert-info mt-3'>
                <h5>Detalle del Programa</h5>
                <p>${detalles[programa]}</p>
            </div>`;
    }
</script>
<!-- Dirección de Bienestar Universitario End -->
