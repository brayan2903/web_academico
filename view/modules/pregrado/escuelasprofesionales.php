<!-- Escuelas Profesionales Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5">Escuelas Profesionales</h1>
        <div class="accordion" id="escuelasAccordion">
            <!-- Facultad de Ciencias de la Salud -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="facultadSalud">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSalud" aria-expanded="true" aria-controls="collapseSalud">
                        Facultad de Ciencias de la Salud
                    </button>
                </h2>
                <div id="collapseSalud" class="accordion-collapse collapse show" aria-labelledby="facultadSalud" data-bs-parent="#escuelasAccordion">
                    <div class="accordion-body">
                        <ul class="list-group">
                            <li class="list-group-item">Enfermería</li>
                            <li class="list-group-item">Medicina Humana</li>
                            <li class="list-group-item">Odontología</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Facultad de Ingeniería -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="facultadIngenieria">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIngenieria" aria-expanded="false" aria-controls="collapseIngenieria">
                        Facultad de Ingeniería
                    </button>
                </h2>
                <div id="collapseIngenieria" class="accordion-collapse collapse" aria-labelledby="facultadIngenieria" data-bs-parent="#escuelasAccordion">
                    <div class="accordion-body">
                        <ul class="list-group">
                            <li class="list-group-item">Ingeniería Civil</li>
                            <li class="list-group-item">Ingeniería de Sistemas</li>
                            <li class="list-group-item">Ingeniería Ambiental</li>
                            <li class="list-group-item">Ingeniería Electrónica</li>
                            <li class="list-group-item">Ingeniería Agronómica</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Facultad de Ciencias Sociales -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="facultadSociales">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSociales" aria-expanded="false" aria-controls="collapseSociales">
                        Facultad de Ciencias Sociales
                    </button>
                </h2>
                <div id="collapseSociales" class="accordion-collapse collapse" aria-labelledby="facultadSociales" data-bs-parent="#escuelasAccordion">
                    <div class="accordion-body">
                        <ul class="list-group">
                            <li class="list-group-item">Antropología</li>
                            <li class="list-group-item">Trabajo Social</li>
                            <li class="list-group-item">Sociología</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Facultad de Ciencias Económicas y Empresariales -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="facultadEconomicas">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEconomicas" aria-expanded="false" aria-controls="collapseEconomicas">
                        Facultad de Ciencias Económicas y Empresariales
                    </button>
                </h2>
                <div id="collapseEconomicas" class="accordion-collapse collapse" aria-labelledby="facultadEconomicas" data-bs-parent="#escuelasAccordion">
                    <div class="accordion-body">
                        <ul class="list-group">
                            <li class="list-group-item">Economía</li>
                            <li class="list-group-item">Administración</li>
                            <li class="list-group-item">Contabilidad</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .accordion-button {
        background-color: #004085;
        color: #fff;
    }

    .accordion-button:not(.collapsed) {
        background-color: #0056b3;
        color: #fff;
    }

    .accordion-item {
        border: 1px solid #0056b3;
    }

    .list-group-item {
        background-color: #f8f9fa;
    }

    .list-group-item:hover {
        background-color: #e2e6ea;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const accordionItems = document.querySelectorAll('.accordion-item');

        accordionItems.forEach(item => {
            item.addEventListener('click', () => {
                item.scrollIntoView({ behavior: 'smooth', block: 'center' });
            });
        });
    });
</script>
<!-- Escuelas Profesionales End -->
