<!-- Dirección de Admisiones Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5">Dirección de Admisiones</h1>
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <img src="./public/img/vra/1200x1200.png" alt="Dirección de Admisiones" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h2 class="mb-4">¿Qué hacemos?</h2>
                <p>
                    La Dirección de Admisiones de la Universidad Nacional del Altiplano es responsable de
                    gestionar todos los procesos relacionados con el ingreso de nuevos estudiantes a nuestra
                    institución, asegurando transparencia, inclusión y calidad en cada etapa.
                </p>
                <p>
                    Desde la planificación de exámenes de admisión hasta la publicación de resultados,
                    trabajamos para garantizar un proceso ágil, eficiente y justo que identifique a los mejores
                    talentos para formar parte de nuestra comunidad académica.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h2 class="mb-4">Funciones Principales</h2>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Organizar y coordinar procesos de admisión.
                        <button class="btn btn-primary btn-sm" onclick="mostrarDetalle('funcion1')">Detalles</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Diseñar estrategias de inclusión educativa.
                        <button class="btn btn-primary btn-sm" onclick="mostrarDetalle('funcion2')">Detalles</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Supervisar la transparencia en los exámenes.
                        <button class="btn btn-primary btn-sm" onclick="mostrarDetalle('funcion3')">Detalles</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Garantizar la seguridad y confidencialidad de los resultados.
                        <button class="btn btn-primary btn-sm" onclick="mostrarDetalle('funcion4')">Detalles</button>
                    </li>
                </ul>
                <div id="detalle-funciones" class="mt-4">
                    <!-- Los detalles se mostrarán aquí dinámicamente -->
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="mb-4">Nuestra Meta</h2>
                <p>
                    Ser reconocidos como una dirección líder a nivel nacional, promoviendo la inclusión,
                    la igualdad de oportunidades y la excelencia en los procesos de admisión.
                </p>
                <img src="./public/img/vra/1000x1300.png" alt="Procesos de Admisiones" class="img-fluid rounded shadow">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h2 class="mb-4">Próximos Exámenes</h2>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-primary">
                            <tr>
                                <th>Fecha</th>
                                <th>Examen</th>
                                <th>Modalidad</th>
                                <th>Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>15/03/2025</td>
                                <td>Examen Ordinario</td>
                                <td>Presencial</td>
                                <td><button class="btn btn-primary btn-sm">Ver más</button></td>
                            </tr>
                            <tr>
                                <td>22/03/2025</td>
                                <td>Examen Extraordinario</td>
                                <td>Virtual</td>
                                <td><button class="btn btn-primary btn-sm">Ver más</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function mostrarDetalle(funcion) {
        const detalles = {
            funcion1: "Organizamos los cronogramas, asignación de sedes y coordinación con el personal necesario para garantizar un proceso eficiente.",
            funcion2: "Desarrollamos programas que aseguren la participación de estudiantes de diversas comunidades y contextos.",
            funcion3: "Implementamos mecanismos de supervisión estrictos para garantizar la imparcialidad y transparencia en los exámenes.",
            funcion4: "Aseguramos la protección de los datos personales y la confidencialidad de los resultados de admisión."
        };

        const contenedor = document.getElementById('detalle-funciones');
        contenedor.innerHTML = `<div class='alert alert-info mt-3'>${detalles[funcion]}</div>`;
    }
</script>
<!-- Dirección de Admisiones End -->
