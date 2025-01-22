<!-- Departamentos Académicos Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5">Departamentos Académicos</h1>
        <div class="row g-4">
            <!-- Card Template -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow border-0">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-chalkboard-teacher fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Ciencias Básicas</h5>
                        <p class="card-text">
                            Promueve la investigación y el desarrollo en áreas fundamentales como Matemática, Física y Química.
                        </p>
                        <button class="btn btn-outline-primary btn-sm" onclick="mostrarDetalle('cienciasBasicas')">Más información</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow border-0">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-seedling fa-3x text-success mb-3"></i>
                        <h5 class="card-title">Ciencias Agrarias</h5>
                        <p class="card-text">
                            Se enfoca en el desarrollo sostenible y la tecnología agrícola para mejorar la productividad.
                        </p>
                        <button class="btn btn-outline-primary btn-sm" onclick="mostrarDetalle('cienciasAgrarias')">Más información</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow border-0">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-briefcase fa-3x text-warning mb-3"></i>
                        <h5 class="card-title">Ciencias Económicas</h5>
                        <p class="card-text">
                            Forma profesionales en economía, administración y finanzas, con un enfoque ético y sostenible.
                        </p>
                        <button class="btn btn-outline-primary btn-sm" onclick="mostrarDetalle('cienciasEconomicas')">Más información</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dynamic Details Section -->
        <div id="detalle-departamentos" class="mt-5"></div>
    </div>
</div>

<script>
    function mostrarDetalle(departamento) {
        const detalles = {
            cienciasBasicas: "El Departamento de Ciencias Básicas se dedica a la enseñanza e investigación en Matemática, Física, Química y Biología, contribuyendo al desarrollo científico y tecnológico de la región.",
            cienciasAgrarias: "El Departamento de Ciencias Agrarias fomenta el conocimiento en agricultura sostenible, biotecnología y manejo de recursos naturales, con impacto en comunidades rurales.",
            cienciasEconomicas: "El Departamento de Ciencias Económicas está comprometido con la formación de profesionales que impulsen el desarrollo económico mediante estrategias innovadoras y sostenibles."
        };

        const contenedor = document.getElementById('detalle-departamentos');
        contenedor.innerHTML = `
            <div class='alert alert-info'>
                <h5>Detalles:</h5>
                <p>${detalles[departamento]}</p>
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
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.card i {
    transition: color 0.3s ease;
}

.card:hover i {
    color: #007bff;
}

.alert {
    animation: fadeIn 0.5s;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}
</style>
<!-- Departamentos Académicos End -->
