<!-- Filiales Start -->
<div class="container py-4">
    <div class="text-center mb-4">
        <h2 class="h4 text-primary fw-bold mb-2">Filiales de la Universidad Nacional del Altiplano</h2>
        <p class="text-muted small mx-auto" style="max-width: 600px;">
            Extendiendo oportunidades educativas y contribuyendo al desarrollo regional.
        </p>
    </div>

    <div class="row g-4 justify-content-center">
        <!-- Filial Azángaro -->
        <div class="col-lg-5 col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center p-4">
                    <div class="mb-3 d-flex align-items-center justify-content-center" style="height: 200px;">
                        <img src="./public/img/vra/filialAz.png" class="img-fluid" style="max-height: 100%; object-fit: contain;" alt="Filial Azángaro">
                    </div>
                    <h4 class="card-title text-primary mb-3">Filial Azángaro</h4>
                    <p class="text-muted small mb-4">
                    La Filial Azángaro de la UNA Puno ofrece carreras profesionales con moderna infraestructura, formando profesionales comprometidos con el desarrollo de la región norte del departamento.
                    </p>
                    <button class="btn btn-sm btn-outline-primary rounded-pill" onclick="window.location.href='escuelasfiliales'">
                        Más Información
                        <i class="fas fa-arrow-right ms-2"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Filial Juli -->
        <div class="col-lg-5 col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center p-4">
                    <div class="mb-3 d-flex align-items-center justify-content-center" style="height: 200px;">
                        <img src="./public/img/vra/filialJu.png" class="img-fluid" style="max-height: 100%; object-fit: contain;" alt="Filial Juli">
                    </div>
                    <h4 class="card-title text-primary mb-3">Filial Juli</h4>
                    <p class="text-muted small mb-4">
                    La Filial Juli de la UNA Puno ofrece formación superior en las carreras que ofrece, contribuyendo al desarrollo académico y profesional de los estudiantes de la región sur del departamento.
                    </p>
                    <button class="btn btn-sm btn-outline-primary rounded-pill" onclick="window.location.href='escuelasfiliales'">
                        Más Información
                        <i class="fas fa-arrow-right ms-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="detalle-filial" class="mt-4"></div>
</div>

<script>
    function mostrarDetalleFilial(filial) {
        const detalles = {
            azangaro: "La Filial Azángaro ofrece carreras enfocadas en agricultura, salud y educación para potenciar el desarrollo local.",
            juli: "La Filial Juli prioriza programas en ingeniería y ciencias sociales, fomentando la integración regional.",
            yunguyo: "La Filial Yunguyo se centra en áreas de comercio internacional y tecnología, conectando comunidades fronterizas con el resto del país."
        };

        const contenedor = document.getElementById('detalle-filial');
        contenedor.innerHTML = `
            <div class="alert bg-primary-soft text-primary border-0 rounded-3 small text-center">
                <h5 class="alert-heading">Información de la Filial</h5>
                <p class="mb-0">${detalles[filial]}</p>
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
<!-- Filiales End -->