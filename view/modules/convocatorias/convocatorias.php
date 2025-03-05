<!-- Sección de Tipos de Convocatorias Mejorada -->
<div class="convocatorias-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="section-title">Tipos de Convocatorias</h2>
            <div class="section-divider"></div>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Convocatorias CAS -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <a href="convocatoriasCas" class="convocatoria-card">
                    <div class="card-icon">
                        <i class="fa fa-user-tie"></i>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Convocatorias CAS</h3>
                        <p class="card-text">Contratación Administrativa de Servicios</p>
                        <div class="card-arrow">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Convocatorias CAP -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <a href="convocatoriasCap" class="convocatoria-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Convocatorias CAP</h3>
                        <p class="card-text">Cuadro de Asignación de Personal</p>
                        <div class="card-arrow">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Convocatorias Docentes -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <a href="convocatoriasDocente" class="convocatoria-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Convocatorias Docentes</h3>
                        <p class="card-text">Personal académico y de cátedra</p>
                        <div class="card-arrow">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Convocatorias Auxiliares -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <a href="convocatorias Auxiliar" class="convocatoria-card">
                    <div class="card-icon">
                        <i class="fa fa-hands-helping"></i>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Convocatorias Auxiliares</h3>
                        <p class="card-text">Apoyo a la actividad académica</p>
                        <div class="card-arrow">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Convocatorias Directivos -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <a href="convocatorias Auxiliar" class="convocatoria-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-person-shelter"></i>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Convocatorias Directivos</h3>
                        <p class="card-text">Cargos de dirección administrativa</p>
                        <div class="card-arrow">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Estilos CSS para la sección de convocatorias -->
<style>
    /* Variables de colores y valores */
    :root {
        --primary-color: #17A99A;
        --primary-hover: #128e80;
        --text-light: #ffffff;
        --text-dark: #333333;
        --text-muted: #6c757d;
        --shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        --shadow-hover: 0 10px 25px rgba(0, 0, 0, 0.15);
        --transition: all 0.3s ease;
        --border-radius: 10px;
    }

    /* Estilo del encabezado de sección */
    .section-header {
        margin-bottom: 50px;
    }
    
    .section-title {
        font-size: 2.2rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }
    
    .section-divider {
        height: 4px;
        width: 70px;
        background: var(--primary-color);
        margin: 0 auto;
        border-radius: 2px;
    }

    /* Estilo de las tarjetas de convocatorias */
    .convocatoria-card {
        display: flex;
        flex-direction: column;
        background-color: #fff;
        border-radius: var(--border-radius);
        overflow: hidden;
        height: 100%;
        text-decoration: none;
        box-shadow: var(--shadow);
        transition: var(--transition);
        position: relative;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .convocatoria-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-hover);
        text-decoration: none;
    }
    
    .convocatoria-card:hover .card-arrow {
        right: 15px;
        opacity: 1;
    }
    
    .card-icon {
        background-color: var(--primary-color);
        color: var(--text-light);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 120px;
        transition: var(--transition);
    }
    
    .convocatoria-card:hover .card-icon {
        background-color: var(--primary-hover);
    }
    
    .card-icon i {
        font-size: 3rem;
        transition: var(--transition);
    }
    
    .convocatoria-card:hover .card-icon i {
        transform: scale(1.1);
    }
    
    .card-body {
        padding: 25px 20px;
        text-align: left;
        position: relative;
    }
    
    .card-title {
        color: var(--text-dark);
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 10px;
        transition: var(--transition);
    }
    
    .convocatoria-card:hover .card-title {
        color: var(--primary-color);
    }
    
    .card-text {
        color: var(--text-muted);
        font-size: 0.9rem;
        margin-bottom: 0;
    }
    
    .card-arrow {
        position: absolute;
        right: 25px;
        bottom: 25px;
        color: var(--primary-color);
        opacity: 0;
        transition: var(--transition);
    }

    /* Responsive ajustes */
    @media (max-width: 992px) {
        .section-title {
            font-size: 1.8rem;
        }
        
        .card-icon {
            height: 100px;
        }
        
        .card-icon i {
            font-size: 2.5rem;
        }
    }
    
    @media (max-width: 768px) {
        .convocatorias-section {
            padding: 40px 0;
        }
        
        .section-title {
            font-size: 1.6rem;
        }
    }
</style>