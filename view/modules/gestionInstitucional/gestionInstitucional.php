<script src="public/js/web_directorio_area.js?rev=<?php echo time(); ?>"></script>
<input type="text" value="AREA DE GESTION INSTITUCIONAL" id="text_area_dir" hidden>
<!-- Job Detail Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gy-5 gx-4">
            <div class="col-lg-8">
                <div class="d-flex align-items-center mb-5">
                    <img class="flex-shrink-0 img-fluid border rounded" src="./template/img/agi.jpg" alt=""
                        style="width: 80px; height: 80px;">
                    <div class="text-start ps-4">
                        <h3 class="mb-3">Area de Gestión Institucional</h3>
                    </div>
                </div>

                <div class="mb-5">
                    <h4 class="mb-3">Descripción</h4>
                    <p class="text-justify">El Área de Administración tiene la responsabilidad de planificar, organizar,
                        dirigir
                        acciones de gestión administrativa, ejecutar el presupuesto y brindar apoyo administrativo a las
                        Unidades Orgánicas de la Unidad de Gestión Educativa Local con el fin de asegurar una
                        eficiente y eficaz gestión.</p>
                    <h4 class="mb-3">Funciones</h4>
                    <ul class="list-unstyledb text-justify">
                        <li>Dirigir y coordinar los procesos
                            relacionados a los recursos materiales económicos y
                            financieros de conformidad con las normas técnicas y legales de los programas
                            presupuestales implementados en el ámbito de la Unidad de Gestión Educativa Local.</li>
                        <li></i>Formular y elaborar el Plan Anual de
                            Contrataciones (PAC), ejerciendo la supervisión
                            general de los procesos de contratación, conforme a las normas vigentes</li>
                        <li></i>Ejecutar la programación presupuestal por
                            toda fuente de financiamiento de la Unidad
                            Ejecutora.</li>
                        <li></i>Participar en la formulación y en las
                            modificaciones presupuestales en coordinación con
                            el Área de Gestión Institucional, a fin de lograr un mejor cumplimiento de los objetivos
                            estratégicos</li>
                        <li></i>Administrar los recursos materiales y
                            financieros así como los bienes patrimoniales de la
                            Unidad de Gestión Educativa Local.</li>
                        <li></i>Administrar, controlar y evaluar los
                            procesos técnicos de los sistemas de personal,
                            abastecimiento, contabilidad, tesorería, remuneración y control patrimonial a través de
                            los aplicativos informáticos de la Unidad de Gestión Educativa Local, de conformidad a
                            la normatividad emitida para cada sistema administrativo</li>
                        <li></i>Elaborar el calendario de pagos de la
                            Sede de la Unidad de Gestión Educativa Local,
                            para garantizar la disponibilidad de recursos financieros.</li>
                        <li></i>Formular la información contable,
                            administrativa y la información presupuestal en
                            coordinación con el Pliego.</li>
                        <li></i>Cautelar el cumplimiento y debido
                            procedimiento administrativo disciplinario de docentes
                            y administrativos a través del sistema de personal.</li>
                        <li></i>Desarrollar otras funciones que le sean
                            asignadas, relacionadas con el ámbito de su
                            competencia.</li>
                    </ul>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-light rounded rounded-3 px-3 py-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Directorio del Area</h4>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Job Detail End -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        mostrar_directorio_area();

    });
</script>