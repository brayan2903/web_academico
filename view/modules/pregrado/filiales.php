<!-- Filiales Start -->
<div class="container-xxl py-5 bg-light">
    <div class="container">
        <h1 class="text-center mb-5">Filiales de la Universidad Nacional del Altiplano</h1>
        <div class="row justify-content-center">
            <!-- Filial 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow border-0">
                    <img src="./public/img/vra/1200x628.png" class="card-img-top" alt="Filial Azángaro">
                    <div class="card-body text-center">
                        <h5 class="card-title">Filial Azángaro</h5>
                        <p class="card-text">Ofrece programas educativos diseñados para responder a las necesidades de la región.</p>
                        <button class="btn btn-primary" onclick="mostrarDetalleFilial('azangaro')">Más Información</button>
                    </div>
                </div>
            </div>
            <!-- Filial 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow border-0">
                    <img src="./public/img/vra/1200x628.png" class="card-img-top" alt="Filial Juli">
                    <div class="card-body text-center">
                        <h5 class="card-title">Filial Juli</h5>
                        <p class="card-text">Contribuye al desarrollo académico y profesional en la región del Collao.</p>
                        <button class="btn btn-primary" onclick="mostrarDetalleFilial('juli')">Más Información</button>
                    </div>
                </div>
            </div>
            <!-- Filial 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow border-0">
                    <img src="./public/img/vra/1200x628.png" class="card-img-top" alt="Filial">
                    <div class="card-body text-center">
                        <h5 class="card-title">Filial </h5>
                        <p class="card-text">Facilita el acceso a educación superior en comunidades fronterizas.</p>
                        <button class="btn btn-primary" onclick="mostrarDetalleFilial('VRA')">Más Información</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="detalle-filial" class="mt-5"></div>
    </div>
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
            <div class='alert alert-info text-center'>
                <h4>Información de la Filial</h4>
                <p>${detalles[filial]}</p>
            </div>
        `;
    }
</script>

<style>
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .btn-primary {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn-primary:hover {
        background-color: #003d80;
        border-color: #003d80;
    }
</style>
<!-- Filiales End -->
