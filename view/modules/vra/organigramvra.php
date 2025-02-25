<!-- Organizational Chart Section Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="mb-4">Organigrama del Vicerrectorado Acad&eacute;mico</h1>
            <p class="text-muted">Conoce la estructura organizativa que soporta la gesti&oacute;n acad&eacute;mica de la Universidad Nacional del Altiplano.</p>
        </div>

        <div class="row justify-content-center">
            <!-- Chart Container -->
            <div class="col-lg-10">
                <div class="tree">
                    <!-- Root Node -->
                    <ul>
                        <li>
                            <div class="node">
                                <h4>Vicerrector Acad&eacute;mico</h4>
                                <p>Dr. Mario Seraf&iacute;n Cuentas Alvarado</p>
                            </div>
                            <!-- Level 2 Nodes -->
                            <ul>
                                <li>
                                    <div class="node">
                                        <h5>Direcci&oacute;n de Gesti&oacute;n Acad&eacute;mica</h5>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="node">
                                                <h6>Unidad de Planificaci&oacute;n Acad&eacute;mica</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="node">
                                                <h6>Unidad de Evaluaci&oacute;n Curricular</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="node">
                                        <h5>Direcci&oacute;n de Investigaci&oacute;n</h5>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="node">
                                                <h6>Unidad de Proyectos de Investigaci&oacute;n</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="node">
                                                <h6>Unidad de Difusi&oacute;n Cient&iacute;fica</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="node">
                                        <h5>Direcci&oacute;n de Bienestar Universitario</h5>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="node">
                                                <h6>Unidad de Servicios Estudiantiles</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="node">
                                                <h6>Unidad de Desarrollo Psicosocial</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Organizational Chart Section End -->

<style>
.tree ul {
    padding-top: 20px;
    position: relative;
    transition: all 0.5s;
}

.tree li {
    float: left;
    text-align: center;
    list-style-type: none;
    position: relative;
    padding: 20px 5px 0 5px;
    transition: all 0.5s;
}

.tree li::before, .tree li::after {
    content: '';
    position: absolute;
    top: 0;
    right: 50%;
    border-top: 2px solid #ccc;
    width: 50%;
    height: 20px;
}

.tree li::after {
    right: auto;
    left: 50%;
    border-left: 2px solid #ccc;
}

.tree li:only-child::after, .tree li:only-child::before {
    display: none;
}

.tree li:only-child {
    padding-top: 0;
}

.tree li:first-child::before, .tree li:last-child::after {
    border: 0 none;
}

.tree li:last-child::before {
    border-right: 2px solid #ccc;
    border-radius: 0 5px 0 0;
}

.tree li:first-child::after {
    border-radius: 5px 0 0 0;
}

.tree .node {
    display: inline-block;
    padding: 10px 20px;
    border-radius: 5px;
    background: #007bff;
    color: #fff;
    font-weight: bold;
    transition: all 0.5s;
}

.tree .node:hover {
    background: #0056b3;
    color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
</style>
