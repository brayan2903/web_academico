<!-- Escuelas Profesionales Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5">Escuelas Profesionales Filiales</h1>
        <div class="accordion" id="escuelasAccordion">

            <!-- Facultad de Ingeniería -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="facultadIngenieria">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIngenieria" aria-expanded="false" aria-controls="collapseIngenieria">
                        Area Ingenierias - Azángaro
                    </button>
                </h2>
                <div id="collapseIngenieria" class="accordion-collapse collapse" aria-labelledby="facultadIngenieria" data-bs-parent="#escuelasAccordion">
                    <div class="accordion-body">
                        <ul class="list-group">
                            <li class="list-group-item">Escuela Profesional de Ingenieria de Minas</li>
                            <li class="list-group-item">Escuela Profesional de Ingenieria Económica</li>
                            <li class="list-group-item">Escuela Profesional de Ingenieria de Telecomunicaciones</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Area Ingenierias Juli -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="facultadIngenieriasJ">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSociales" aria-expanded="false" aria-controls="collapseSociales">
                        Area Ingenierias - Juli
                    </button>
                </h2>
                <div id="collapseSociales" class="accordion-collapse collapse" aria-labelledby="facultadIngenieriasJ" data-bs-parent="#escuelasAccordion">
                    <div class="accordion-body">
                        <ul class="list-group">
                            <li class="list-group-item">Escuela Profesional de Ingenieria trial</li>
                            <li class="list-group-item">Escuela Profesional de Arquitectura y Urbanismo</li>
                        
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Area Sociales - Juli -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="facultadSocialesJ">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSalud" aria-expanded="false" aria-controls="collapseSalud">
                         Area Sociales - Juli
                    </button>
                </h2>
                <div id="collapseSalud" class="accordion-collapse collapse" aria-labelledby="facultadSocialesJ" data-bs-parent="#escuelasAccordion">
                    <div class="accordion-body">
                        <ul class="list-group">
                            <li class="list-group-item">Escuela Profesional de Ciencias Contables</li>
                               
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
