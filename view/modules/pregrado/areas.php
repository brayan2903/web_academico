<!-- Áreas de Estudio - Pregrado Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5">Áreas de Estudio</h1>
        <p class="text-center mb-4">
            Descubre las diferentes áreas de estudio que ofrece el Pregrado de la Universidad Nacional del Altiplano, 
donde la excelencia académica se combina con la innovación.
        </p>

        <div class="row g-4">
            <!-- Área de Ciencias Sociales -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card shadow h-100">
                    <div class="card-body text-center">
                        <i class="fa fa-users fa-3x text-primary mb-4"></i>
                        <h5 class="card-title">Ciencias Sociales</h5>
                        <p class="card-text">
                            Enfocada en el estudio de la sociedad, la cultura y las relaciones humanas.
                        </p>
                        <button class="btn btn-outline-primary" onclick="mostrarDetalles('sociales')">Ver Más</button>
                    </div>
                </div>
            </div>

            <!-- Área de Ingeniería -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="card shadow h-100">
                    <div class="card-body text-center">
                        <i class="fa fa-cogs fa-3x text-primary mb-4"></i>
                        <h5 class="card-title">Ingeniería</h5>
                        <p class="card-text">
                            Ofrecemos programas que fomentan la innovación y el desarrollo tecnológico.
                        </p>
                        <button class="btn btn-outline-primary" onclick="mostrarDetalles('ingenieria')">Ver Más</button>
                    </div>
                </div>
            </div>

            <!-- Área de Ciencias Naturales -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card shadow h-100">
                    <div class="card-body text-center">
                        <i class="fa fa-leaf fa-3x text-primary mb-4"></i>
                        <h5 class="card-title">Ciencias Naturales</h5>
                        <p class="card-text">
                            Programas orientados a la investigación y preservación del medio ambiente.
                        </p>
                        <button class="btn btn-outline-primary" onclick="mostrarDetalles('naturales')">Ver Más</button>
                    </div>
                </div>
            </div>

            <!-- Área de Ciencias de la Salud -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="card shadow h-100">
                    <div class="card-body text-center">
                        <i class="fa fa-heartbeat fa-3x text-primary mb-4"></i>
                        <h5 class="card-title">Ciencias de la Salud</h5>
                        <p class="card-text">
                            Formación integral en el cuidado de la salud y el bienestar de la comunidad.
                        </p>
                        <button class="btn btn-outline-primary" onclick="mostrarDetalles('salud')">Ver Más</button>
                    </div>
                </div>
            </div>

            <!-- Área de Humanidades -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="card shadow h-100">
                    <div class="card-body text-center">
                        <i class="fa fa-book fa-3x text-primary mb-4"></i>
                        <h5 class="card-title">Humanidades</h5>
                        <p class="card-text">
                            Explora la historia, filosofía y el arte a través de un enfoque interdisciplinario.
                        </p>
                        <button class="btn btn-outline-primary" onclick="mostrarDetalles('humanidades')">Ver Más</button>
                    </div>
                </div>
            </div>

            <!-- Área de Ciencias Económicas -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="card shadow h-100">
                    <div class="card-body text-center">
                        <i class="fa fa-chart-line fa-3x text-primary mb-4"></i>
                        <h5 class="card-title">Ciencias Económicas</h5>
                        <p class="card-text">
                            Ofrecemos programas especializados en economía, negocios y gestión empresarial.
                        </p>
                        <button class="btn btn-outline-primary" onclick="mostrarDetalles('economicas')">Ver Más</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detalles Dinámicos -->
        <div id="detalles" class="mt-5"></div>
    </div>
</div>

<script>
    function mostrarDetalles(area) {
        const detalles = {
            sociales: "Los programas en Ciencias Sociales incluyen disciplinas como Sociología, Psicología y Antropología, promoviendo un entendimiento profundo de las dinámicas sociales.",
            ingenieria: "En el área de Ingeniería, ofrecemos especializaciones en Ingeniería Civil, Eléctrica, Mecánica, y Sistemas, entre otras.",
            naturales: "Las Ciencias Naturales abarcan Biología, Ecología y Geología, con énfasis en investigación y sostenibilidad.",
            salud: "Nuestros programas en Ciencias de la Salud incluyen Medicina, Enfermería y Nutrición, preparando profesionales para el cuidado integral de la comunidad.",
            humanidades: "Las Humanidades exploran campos como Historia, Filosofía y Arte, fomentando un enfoque crítico y creativo.",
            economicas: "Los programas en Ciencias Económicas ofrecen formación en Economía, Administración de Empresas y Contabilidad."
        };

        const contenedor = document.getElementById('detalles');
        contenedor.innerHTML = `
            <div class="alert alert-primary mt-4">
                <h5>Detalles del Área</h5>
                <p>${detalles[area]}</p>
            </div>
        `;
    }
</script>
<!-- Áreas de Estudio - Pregrado End -->
