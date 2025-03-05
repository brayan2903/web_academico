document.addEventListener('DOMContentLoaded', function() {
    // Crear el HTML del chatbot con diseño mejorado
    const chatbotHTML = `
        <!-- Botón para abrir el chat con diseño mejorado -->
        <div class="chat-button" id="chatButton">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.8214 2.48697 15.5291 3.33782 17L2.5 21.5L7 20.6622C8.47087 21.513 10.1786 22 12 22Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8 12H8.01" stroke="white" stroke-width="2" stroke-linecap="round"/>
                <path d="M12 12H12.01" stroke="white" stroke-width="2" stroke-linecap="round"/>
                <path d="M16 12H16.01" stroke="white" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </div>

        <!-- Contenedor del chatbot con diseño mejorado -->
        <div class="chatbot-container hidden" id="chatContainer">
            <div class="chat-header">
                <h3>
                    <img src="https://cdn-icons-png.flaticon.com/512/4712/4712027.png" alt="Chatbot Icon" class="chatbot-icon">
                    Asistente Virtual UNA Puno
                </h3>
                <button id="closeChat">✕</button>
            </div>
            
            <div class="chat-body" id="chatBody">
                <!-- Los mensajes se añadirán dinámicamente aquí -->
            </div>
            
            <div class="chat-input">
                <input 
                    type="text" 
                    id="userInput" 
                    placeholder="Escribe tu pregunta aquí..." 
                    autocomplete="off"
                >
                <button id="sendButton">Enviar</button>
            </div>
        </div>

        <!-- Modal mejorado para imágenes -->
        <div class="image-modal" id="imageModal">
            <span class="image-modal-close">&times;</span>
            <img class="image-modal-content" id="expandedImg">
        </div>
    `;

    // Crear los estilos CSS mejorados del chatbot
    const chatbotCSS = `
        /* Variables de colores */
        :root {
            --primary-dark: #003366;      /* Azul oscuro institucional */
            --primary-medium: #0042aa;    /* Azul medio */
            --primary-light: #0060dd;     /* Azul claro */
            --accent-color: #007bff;      /* Azul acento */
            --bg-light: #f8f9fa;          /* Fondo claro */
            --text-light: #ffffff;        /* Texto claro */
            --text-dark: #333333;         /* Texto oscuro */
            --text-medium: #666666;       /* Texto medio */
            --border-radius-lg: 12px;     /* Borde redondeado grande */
            --border-radius-md: 8px;      /* Borde redondeado medio */
            --border-radius-sm: 5px;      /* Borde redondeado pequeño */
            --box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);  /* Sombra estándar */
            --box-shadow-hover: 0 8px 25px rgba(0, 0, 0, 0.25); /* Sombra al pasar el cursor */
        }

        /* Animaciones */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from {
                transform: translateY(100px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(0, 51, 102, 0.7);
                transform: scale(1);
            }
            70% {
                box-shadow: 0 0 0 15px rgba(0, 51, 102, 0);
                transform: scale(1.05);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(0, 51, 102, 0);
                transform: scale(1);
            }
        }

        /* Contenedor principal del chatbot */
        .chatbot-container {
            position: fixed;
            bottom: 90px;
            right: 30px;
            width: 360px;
            max-height: 520px;
            border-radius: var(--border-radius-lg);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            z-index: 1000;
            display: flex;
            flex-direction: column;
            background-color: var(--bg-light);
            transition: all 0.3s ease;
            animation: slideUp 0.4s ease forwards;
            border: 1px solid rgba(0, 51, 102, 0.1);
        }
        
        .chatbot-container.hidden {
            display: none;
        }
        
        /* Botón de chat mejorado */
        .chat-button {
            position: fixed;
            bottom: 100px;
            right: 36px;
            width: 65px;
            height: 65px;
            border-radius: 50%;
            background: linear-gradient(145deg, var(--primary-medium), var(--primary-dark));
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: var(--box-shadow);
            z-index: 1001;
            transition: transform 0.3s, box-shadow 0.3s;
            animation: pulse 2.5s infinite;
        }
        
        .chat-button:hover {
            transform: scale(1.1);
            box-shadow: var(--box-shadow-hover);
        }
        
        .chat-button svg {
            fill: none;
            stroke: var(--text-light);
            stroke-width: 2;
            filter: drop-shadow(0 2px 3px rgba(0, 0, 0, 0.2));
        }
        
        /* Cabecera del chat mejorada */
        .chat-header {
            background: linear-gradient(120deg, var(--primary-dark), var(--primary-medium));
            color: var(--text-light);
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(25, 218, 125, 0.1);
        }
        
        .chat-header h3 {
            font-size: 16px;
            font-weight: 600;
            display: flex;
            align-items: center;
            margin: 0;
            text-shadow: 0 1px 2px rgba(208, 238, 16, 0.9);
        }
        
        .chat-header h3 img {
            width: 28px;
            height: 28px;
            margin-right: 10px;
            filter: drop-shadow(0 2px 3px rgba(255, 255, 255, 0.92));
        }
        
        .chat-header button {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: var(--text-light);
            cursor: pointer;
            font-size: 18px;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
        }
        
        .chat-header button:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: rotate(90deg);
        }
        
        /* Cuerpo del chat mejorado */
        .chat-body {
            padding: 20px;
            height: 350px;
            overflow-y: auto;
            background-color: var(--bg-light);
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="rgb(248,249,250)"/><path d="M0 10L100 0L90 100L0 90" fill="rgba(0, 66, 170, 0.03)"/></svg>');
            background-size: 300px;
            scroll-behavior: smooth;
        }
        
        .chat-body::-webkit-scrollbar {
            width: 6px;
        }
        
        .chat-body::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.05);
            border-radius: 10px;
        }
        
        .chat-body::-webkit-scrollbar-thumb {
            background: rgba(0, 66, 170, 0.3);
            border-radius: 10px;
        }
        
        .chat-body::-webkit-scrollbar-thumb:hover {
            background: rgba(0, 66, 170, 0.5);
        }
        
        /* Estilo de mensajes mejorado */
        .message {
            margin-bottom: 15px;
            max-width: 85%;
            padding: 12px 16px;
            border-radius: var(--border-radius-md);
            line-height: 1.5;
            font-size: 14px;
            letter-spacing: 0.2px;
            word-wrap: break-word;
            animation: fadeIn 0.3s ease;
            position: relative;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }
        
        .bot-message {
            background-color: #e9ecef;
            color: var(--text-dark);
            border-top-left-radius: 0;
            align-self: flex-start;
            margin-right: auto;
            border-left: 3px solid var(--primary-medium);
        }
        
        .user-message {
            background: linear-gradient(135deg, var(--primary-medium), var(--primary-dark));
            color: var(--text-light);
            border-top-right-radius: 0;
            margin-left: auto;
            float: right;
            clear: both;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        }
        
        /* Mejoras para recursos */
        .bot-message img {
            max-width: 100%;
            border-radius: var(--border-radius-sm);
            margin: 8px 0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .bot-message img:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
        
        .resource-link {
            display: flex;
            align-items: center;
            background-color: var(--text-light);
            padding: 12px;
            border-radius: var(--border-radius-md);
            margin: 10px 0;
            text-decoration: none;
            color: var(--text-dark);
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.08);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
        }
        
        .resource-link:hover {
            background-color: rgba(0, 66, 170, 0.05);
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
            border-color: rgba(0, 66, 170, 0.2);
        }
        
        .resource-link img {
            width: 45px;
            height: 45px;
            margin-right: 12px;
            object-fit: cover;
            border-radius: var(--border-radius-sm);
            padding: 3px;
            background: rgba(0, 66, 170, 0.05);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .resource-link .resource-info {
            flex: 1;
        }
        
        .resource-link .resource-title {
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 4px;
            color: var(--primary-medium);
        }
        
        .resource-link .resource-desc {
            font-size: 12px;
            color: var(--text-medium);
            line-height: 1.4;
        }
        
        /* Formulario de entrada mejorado */
        .chat-input {
            display: flex;
            padding: 15px;
            background-color: var(--text-light);
            border-top: 1px solid rgba(0, 0, 0, 0.08);
        }
        
        .chat-input input {
            flex: 1;
            padding: 12px 15px;
            border: 1px solid rgba(0, 0, 0, 0.15);
            border-radius: 25px;
            outline: none;
            font-size: 14px;
            transition: all 0.3s;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05);
        }
        
        .chat-input input:focus {
            border-color: var(--primary-medium);
            box-shadow: 0 0 0 3px rgba(0, 66, 170, 0.1);
        }
        
        .chat-input button {
            margin-left: 10px;
            padding: 10px 18px;
            background: linear-gradient(to right, var(--primary-medium), var(--primary-dark));
            color: var(--text-light);
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 500;
            letter-spacing: 0.3px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .chat-input button:hover {
            background: linear-gradient(to right, var(--primary-dark), var(--primary-medium));
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        
        .chat-input button:active {
            transform: translateY(1px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        /* Enlaces rápidos mejorados */
        .quick-links {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin: 15px 0;
            animation: fadeIn 0.5s ease;
        }
        
        .quick-link {
            background: linear-gradient(135deg, var(--primary-light), var(--primary-medium));
            color: var(--text-light);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .quick-link:hover {
            background: linear-gradient(135deg, var(--primary-medium), var(--primary-dark));
            transform: translateY(-2px) scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        
        .quick-link:active {
            transform: translateY(1px) scale(0.98);
        }

        /* Modal para mostrar imágenes mejorado */
        .image-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 70%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.85);
            z-index: 2000;
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.3s ease;
            backdrop-filter: blur(5px);
        }

        .image-modal-content {
            max-width: 90%;
            max-height: 85%;
            border-radius: 8px;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.3);
            animation: slideUp 0.4s ease;
            border: 2px solid rgba(255, 255, 255, 0.1);
        }

        .image-modal-close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: var(--text-light);
            font-size: 35px;
            cursor: pointer;
            background: rgba(0, 0, 0, 0.3);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .image-modal-close:hover {
            background: rgba(0, 0, 0, 0.5);
            transform: rotate(90deg);
        }
        
        /* Ajustes responsive */
        @media (max-width: 576px) {
            .chatbot-container {
                width: calc(100% - 40px);
                bottom: 80px;
                right: 20px;
                max-height: 70vh;
            }
            
            .chat-button {
                bottom: 20px;
                right: 20px;
            }
            
            .quick-links {
                gap: 4px;
            }
            
            .quick-link {
                padding: 4px 12px;
                font-size: 11px;
            }
            
            .resource-link {
                padding: 10px;
            }
            
            .resource-link img {
                width: 40px;
                height: 40px;
            }
        }
            /* Para pantallas medianas */
@media (max-width: 768px) {
    .chat-button {
        bottom: 100px; /* Ajusta este valor para que esté por encima de la flecha */
        right: 20px;
        width: 55px;
        height: 55px;
    }
    /* Resto del código igual */
}

/* Para pantallas pequeñas */
@media (max-width: 576px) {
    .chat-button {
        bottom: 100px; /* Aumenta este valor para que esté más arriba que la flecha */
        right: 43px;
        width: 50px;
        height: 50px;
    }
    /* Resto del código igual */
}
            
    `;

    // Crear e insertar el elemento de estilo
    const styleElement = document.createElement('style');
    styleElement.textContent = chatbotCSS;
    document.head.appendChild(styleElement);

    // Crear e insertar el HTML del chatbot
    const chatbotContainer = document.createElement('div');
    chatbotContainer.innerHTML = chatbotHTML;
    document.body.appendChild(chatbotContainer);

    // Obtener referencias a los elementos del DOM
    const chatButton = document.getElementById('chatButton');
    const chatContainer = document.getElementById('chatContainer');
    const closeChat = document.getElementById('closeChat');
    const chatBody = document.getElementById('chatBody');
    const userInput = document.getElementById('userInput');
    const sendButton = document.getElementById('sendButton');
    const imageModal = document.getElementById('imageModal');
    const modalImg = document.getElementById('expandedImg');
    const modalClose = document.querySelector('.image-modal-close');
    
    // Cerrar modal al hacer clic en la X o fuera de la imagen
    modalClose.addEventListener('click', () => {
        imageModal.style.display = 'none';
    });
    
    imageModal.addEventListener('click', (e) => {
        if (e.target === imageModal) {
            imageModal.style.display = 'none';
        }
    });
    
    // Generar un ID de sesión único
    const sessionId = Date.now().toString();
    
    // Al cargar la página, borrar cualquier historial anterior
    localStorage.removeItem('chatHistory');
    localStorage.setItem('chatState', 'closed');
    
    // Mapeo de secciones de la página
    const pageSections = {
        'admision': 'https://admision.unap.edu.pe/index',
        'matricula': '/matricula',
        'cursos': 'convocatorias',
        'certificados': 'convocatorias',
        'nivelacion': '/nivelacion',
        'capacitaciones': '/capacitaciones',
        'talleres': '/talleres',
        'diplomados': '/diplomados',
        'asistencia': '/asistencia',
        'biblioteca': '/biblioteca',
        'contacto': '/contacto',
        'carreras': 'escuelasprofesionales',
        'facultades': '/facultades',
        'investigacion': '/investigacion',
        'tramites': '/tramites',
        'becas': '/becas',
        'calendario': '/calendario',
        'tesis': '/tesis'
    };

    // Verificar si una sección existe en la página actual
    function sectionExists(sectionPath) {
        // Esta función debe adaptarse a tu sitio web
        // Por ahora, simularemos que solo existen algunas secciones
        const existingSections = ['https://admision.unap.edu.pe/index', '/matricula', 'convocatorias', 'escuelasprofesionales'];
        return existingSections.includes(sectionPath);
    }

    // Base de conocimientos para respuestas con redirección mejorada
    const knowledgeBase = [
        {
            keywords: ["hola", "saludos", "buenos dias", "buenas tardes", "buenas noches"],
            response: "¡Hola! Soy el asistente virtual del Vicerrectorado Académico de la UNA Puno. ¿En qué puedo ayudarte hoy?",
            quickLinks: true
        },
        {
            keywords: ["admision", "postular", "postulante", "examen"],
            response: "Para información sobre admisión, puedes visitar nuestra sección de ADMISIÓN:",
            resources: [
                {
                    type: "link",
                    title: "Portal de Admisión UNA Puno",
                    description: "Toda la información sobre exámenes de admisión e inscripciones",
                    url: "https://admision.unap.edu.pe/index",
                    icon: "https://cdn-icons-png.flaticon.com/512/2232/2232688.png",
                    fallback: {
                        type: "externalLink",
                        url: "https://admision.unap.edu.pe"
                    }
                }
            ]
        },
        {
            keywords: ["universidad", "sitio web", "pagina oficial"],
            response: "Puedes visitar nuestro sitio web oficial o algunos sitios relacionados:",
            resources: [
                {
                    type: "link",
                    title: "Sitio Web Oficial UNA Puno",
                    description: "Portal principal de la Universidad Nacional del Altiplano",
                    url: "https://www.unap.edu.pe",
                    icon: "https://cdn-icons-png.flaticon.com/512/2232/2232688.png"
                },
                {
                    type: "link",
                    title: "Ministerio de Educación",
                    description: "Sitio oficial del Ministerio de Educación del Perú",
                    url: "https://www.gob.pe/minedu",
                    icon: "https://cdn-icons-png.flaticon.com/512/2997/2997243.png"
                }
            ]
        },
        {
            keywords: ["matricula", "siscad", "carga academica"],
            response: "El proceso de matrícula se realiza a través del sistema SISCAD. Puedes acceder a través del siguiente enlace:",
            resources: [
                {
                    type: "image",
                    url: "https://scontent.flim19-1.fna.fbcdn.net/v/t39.30808-6/480980860_1060364312795946_4753466050266864457_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeGfGMywWGJErcSpOu1xk-Ole-JajbPGhYd74lqNs8aFh5lI57shDjgGyQOG_c9d9MNCoDnbVCLZhKcsYZZKGmif&_nc_ohc=KZkPnPn0GtUQ7kNvgGKSmlh&_nc_oc=AdiVgeKa3XGlhb_Dz0XxjPWutE-oggx1ncROAk8z-d46jWWgvuN8LH-oh7Sok8Ef6mA&_nc_zt=23&_nc_ht=scontent.flim19-1.fna&_nc_gid=AoJVumvV08BT3gN_KSSsbsK&oh=00_AYBny0eBaMNuDyDzKC1352GKnfOKUYGyLIoAFP_OOdHEjw&oe=67CD0822",
                    alt: "Matricula Ingresantes"
                },
                {
                    type: "image",
                    url: "https://scontent.flim19-1.fna.fbcdn.net/v/t39.30808-6/480721529_1058202829678761_8137489672379650775_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeGN9ZLTcKozmbpREFuZ1nNgRjyP-SKI7CVGPI_5IojsJY0ulS10Th1lwZEL49HzKV-exIAQ_WK7fNXabu0Cqg1b&_nc_ohc=iqMlrLrgg5wQ7kNvgGmYMUg&_nc_oc=Adg5ycintse2WIHePLNOxLKNJMkDH6LzbB1jPhq1-BLEIrTh0kYuzAjxuP6towSYmm0&_nc_zt=23&_nc_ht=scontent.flim19-1.fna&_nc_gid=AGTT6WVqlSP1juY1aIPesy8&oh=00_AYAsYi-YAOJwkCqzFQa9uOWEzcRVfcGUHqvSc30nHmWAxw&oe=67CCFBE4",
                    alt: "Matricula Estudiantes"
                },
                {
                    type: "image",
                    url: "",
                    alt: "Pagos"
                },
                {
                    type: "image",
                    url: "",
                    alt: "Tasas"
                }
            ],
        },
        {
            keywords: ["cursos", "certificados", "capacitacion"],
            response: "Puedes encontrar información sobre cursos y certificados en nuestra sección especializada:",
            resources: [
                {
                    type: "link",
                    title: "CURSOS Y CERTIFICADOS",
                    description: "Información de cursos disponibles y obtención de certificados",
                    url: "convocatorias", // Cambiado de "/capacitaciones" a "/convocatorias"
                    icon: "https://cdn-icons-png.flaticon.com/512/2997/2997243.png",
                    fallback: {
                        type: "image",
                        url: "https://www.unap.edu.pe/img/cursos-banner.jpg",
                        description: "Banner de cursos disponibles"
                    }
                }
            ]
        },
        {
            keywords: ["nivelacion", "ingresantes", "nuevos alumnos"],
            response: "Para información sobre el programa de nivelación para ingresantes, puedes visitar:",
            resources: [
                {
                    type: "link",
                    title: "NIVELACIÓN INGRESANTES",
                    description: "Programa especial para estudiantes de nuevo ingreso",
                    url: "/nivelacion",
                    icon: "https://cdn-icons-png.flaticon.com/512/3976/3976625.png",
                    fallback: {
                        type: "externalLink",
                        url: "https://vra.unap.edu.pe/noticias"
                    }
                }
            ]
        },
        {
            keywords: ["capacitaciones", "talleres"],
            response: "Ofrecemos diversas capacitaciones para estudiantes y docentes. Puedes acceder a más información aquí:",
            resources: [
                {
                    type: "link",
                    title: "CAPACITACIONES",
                    description: "Programa de capacitaciones, talleres y cursos",
                    url: "/capacitaciones",
                    icon: "https://cdn-icons-png.flaticon.com/512/2247/2247728.png",
                    fallback: {
                        type: "externalLink",
                        url: "https://vra.unap.edu.pe/capacitaciones"
                    }
                }
            ]
        },
        {
            keywords: ["diplomados", "vra"],
            response: "Información sobre los diplomados del Vicerrectorado Académico la encontrarás aquí:",
            resources: [
                {
                    type: "link",
                    title: "DIPLOMADOS VRA",
                    description: "Información sobre diplomados del Vicerrectorado Académico",
                    url: "/diplomados",
                    icon: "https://cdn-icons-png.flaticon.com/512/4207/4207253.png",
                    fallback: {
                        type: "image",
                        url: "https://www.unap.edu.pe/img/diplomados-vra.jpg",
                        description: "Información de diplomados VRA"
                    }
                }
            ]
        },
        {
            keywords: ["asistencia", "docentes", "profesores"],
            response: "Para información sobre asistencia de docentes, puedes consultar aquí:",
            resources: [
                {
                    type: "link",
                    title: "ASISTENCIA DOCENTES",
                    description: "Sistema de registro y consulta de asistencia docente",
                    url: "/asistencia",
                    icon: "https://cdn-icons-png.flaticon.com/512/6195/6195702.png",
                    fallback: {
                        type: "externalLink",
                        url: "https://vra.unap.edu.pe/asistencia-docente"
                    }
                }
            ]
        },
        {
            keywords: ["biblioteca", "libros", "material", "lectura"],
            response: "Tenemos varias bibliotecas a tu disposición. Puedes acceder al catálogo digital desde aquí:",
            resources: [
                {
                    type: "link",
                    title: "BIBLIOTECAS UNA PUNO",
                    description: "Acceso al catálogo digital y servicios bibliotecarios",
                    url: "https://biblioteca.unap.edu.pe",
                    icon: "https://cdn-icons-png.flaticon.com/512/2232/2232688.png",
                    fallback: {
                        type: "externalLink",
                        url: "https://biblioteca.unap.edu.pe"
                    }
                }
            ]
        },
        {
            keywords: ["contacto", "direccion", "telefono", "ubicacion"],
            response: "Puedes contactarnos en Jr. Independencia N° 1034, Puno. También puedes seguirnos en nuestras redes sociales:",
            resources: [
                {
                    type: "link",
                    title: "Facebook",
                    description: "Vicerrectorado Académico VRA UNAP",
                    url: "https://www.facebook.com/VicerrectoradoAcademicoVRAUNAP",
                    icon: "https://cdn-icons-png.flaticon.com/512/174/174848.png"
                },
                {
                    type: "link",
                    title: "YouTube",
                    description: "Canal oficial VRAUNAP",
                    url: "https://www.youtube.com/@VRAUNAP",
                    icon: "https://cdn-icons-png.flaticon.com/512/174/174883.png"
                },
                {
                    type: "link",
                    title: "TikTok",
                    description: "@vicerrectorado_academico",
                    url: "https://www.tiktok.com/@vicerrectorado_academico",
                    icon: "https://cdn-icons-png.flaticon.com/512/3046/3046121.png"
                }
            ]
        },
        {
            keywords: ["carreras", "profesiones", "facultades"],
            response: "La UNA Puno ofrece 30 carreras profesionales distribuidas en 11 facultades. Contamos con:",
            resources: [
                {
                    type: "info",
                    content: "<strong>Facultades:</strong> 11<br><strong>Carreras Profesionales:</strong> 30<br><strong>Grupos de Investigación:</strong> 42<br><strong>Laboratorios:</strong> 28<br><strong>Investigadores RENACYT:</strong> 104"
                },
                {
                    type: "link",
                    title: "Ver Carreras Profesionales",
                    description: "Listado completo de carreras ofrecidas",
                    url: "escuelasprofesionales",
                    icon: "https://cdn-icons-png.flaticon.com/512/2232/2232688.png",
                    fallback: {
                        type: "image",
                        url: "https://www.unap.edu.pe/img/facultades-carreras.jpg",
                        description: "Mapa de facultades y carreras UNA Puno"
                    }
                }
            ]
        },
        {
            keywords: ["investigacion", "laboratorios", "grupos"],
            response: "Contamos con una sólida estructura para la investigación:",
            resources: [
                {
                    type: "info",
                    content: "<strong>• 42 Grupos de Investigación</strong><br><strong>• 28 Laboratorios</strong><br><strong>• 120+ Herramientas de Investigación</strong><br><strong>• 104 Investigadores RENACYT</strong>"
                },
                {
                    type: "image",
                    url: "https://www.unap.edu.pe/img/investigacion.jpg",
                    alt: "Infraestructura de investigación UNA Puno"
                }
            ]
        },
        {
            keywords: ["tramites", "procedimientos", "documentos"],
            response: "Los trámites académicos y administrativos pueden realizarse a través de nuestras plataformas digitales.",
            resources: [
                {
                    type: "link",
                    title: "Trámites Académicos",
                    description: "Sistema de trámites en línea",
                    url: "/tramites",
                    icon: "https://cdn-icons-png.flaticon.com/512/3976/3976625.png",
                    fallback: {
                        type: "externalLink",
                        url: "https://tramites.unap.edu.pe"
                    }
                }
            ]
        },
        {
            keywords: ["becas", "apoyo", "economico", "ayuda"],
            response: "Para información sobre becas y apoyo económico, te recomendamos consultar con la Dirección de Bienestar Universitario.",
            resources: [
                {
                    type: "link",
                    title: "Dirección de Bienestar Universitario",
                    description: "Información sobre becas y apoyo a estudiantes",
                    url: "/becas",
                    icon: "https://cdn-icons-png.flaticon.com/512/2997/2997243.png",
                    fallback: {
                        type: "externalLink",
                        url: "https://bienestar.unap.edu.pe"
                    }
                }
            ]
        },
        {
            keywords: ["calendario", "academico", "fechas"],
            response: "El calendario académico actualizado se encuentra disponible en la sección de documentos del Vicerrectorado Académico.",
            resources: [
                {
                    type: "link",
                    title: "Calendario Académico",
                    description: "Fechas importantes del año académico",
                    url: "/calendario",
                    icon: "https://cdn-icons-png.flaticon.com/512/4207/4207253.png",
                    fallback: {
                        type: "image",
                        url: "https://www.unap.edu.pe/img/calendario-academico.jpg",
                        description: "Calendario académico UNA Puno"
                    }
                }
            ]
        },
        {
            keywords: ["tesis", "trabajo", "investigacion", "grado"],
            response: "Para información sobre el proceso de tesis, puedes consultar con tu Facultad o la Dirección de Gestión Académica.",
            resources: [
                {
                    type: "link",
                    title: "Dirección de Gestión Académica",
                    description: "Información sobre tesis y trabajos de investigación",
                    url: "/tesis",
                    icon: "https://cdn-icons-png.flaticon.com/512/6195/6195702.png",
                    fallback: {
                        type: "externalLink",
                        url: "https://vra.unap.edu.pe/gestion-academica"
                    }
                }
            ]
        },
        {
            keywords: ["gracias", "agradecido", "agradezco"],
            response: "¡De nada! Estoy aquí para ayudarte. ¿Hay algo más en lo que pueda asistirte?",
            quickLinks: true
        },
        {
            keywords: ["adios", "hasta luego", "chau"],
            response: "¡Hasta luego! Gracias por usar nuestro asistente virtual. ¡Que tengas un buen día!"
        },
        {
            keywords: ["examenes", "resultados", "notas"],
            response: "Puedes consultar los resultados de los exámenes y evaluaciones en nuestro portal:",
            resources: [
                {
                    type: "link",
                    title: "Portal de Resultados",
                    description: "Consulta de exámenes y evaluaciones",
                    url: "/examenes",
                    icon: "https://cdn-icons-png.flaticon.com/512/2997/2997243.png",
                    fallback: {
                        type: "externalLink",
                        url: "https://resultados.unap.edu.pe"
                    }
                }
            ]
        }
    ];
    
    // Enlaces rápidos para sugerir
    const quickLinks = [
        "Contacto","Matrícula", "Cursos", "Nivelación", 
        "Diplomados", "Asistencia", "Bibliotecas", "Carreras", "Examenes"
    ];
    
    // Función para mostrar/ocultar el chat
    chatButton.addEventListener('click', function() {
        chatContainer.classList.remove('hidden');
        chatButton.style.display = 'none';
        
        // El chat siempre comienza con una nueva conversación
        chatBody.innerHTML = '';
        
        // Mensaje de bienvenida al abrir el chat
        addBotMessage("¡Hola! Soy el asistente virtual del Vicerrectorado Académico de la UNA Puno. ¿En qué puedo ayudarte hoy?");
        
        // Añadir enlaces rápidos
        addQuickLinks();
    });
    
    // Cerrar el chat
    closeChat.addEventListener('click', function() {
        chatContainer.classList.add('hidden');
        chatButton.style.display = 'flex';
        
        // Al cerrar, limpiamos el historial
        chatBody.innerHTML = '';
    });
    
    // Enviar mensaje (al hacer clic en el botón o presionar Enter)
    sendButton.addEventListener('click', sendMessage);
    userInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });
    
    function sendMessage() {
        const message = userInput.value.trim();
        if (message === '') return;
        
        // Añadir mensaje del usuario al chat
        addUserMessage(message);
        
        // Procesar la respuesta
        processUserMessage(message);
        
        // Limpiar el campo de entrada
        userInput.value = '';
    }
    
    function processUserMessage(message) {
        // Simulación de tiempo de respuesta
        setTimeout(() => {
            // Convertir a minúsculas y eliminar acentos para la búsqueda
            const normalizedMessage = message.toLowerCase()
                .normalize("NFD")
                .replace(/[\u0300-\u036f]/g, "");
            
            // Buscar coincidencias en la base de conocimientos
            let matchFound = false;
            
            for (const item of knowledgeBase) {
                for (const keyword of item.keywords) {
                    if (normalizedMessage.includes(keyword.normalize("NFD").replace(/[\u0300-\u036f]/g, ""))) {
                        addBotMessage(item.response);
                        
                        // Añadir recursos si existen
                        if (item.resources) {
                            addResourcesWithFallback(item.resources);
                        }
                        
                        // Añadir enlaces rápidos si se solicita
                        if (item.quickLinks) {
                            addQuickLinks();
                        }
                        
                        matchFound = true;
                        break;
                    }
                }
                if (matchFound) break;
            }
            
            // Respuesta por defecto si no se encuentra coincidencia
            if (!matchFound) {
                addBotMessage("Lo siento, no tengo información específica sobre esa consulta. Puedes preguntarme sobre admisión, matrícula, cursos, biblioteca, facultades, entre otros temas.");
                addQuickLinks();
            }
            
        }, 500); // Simular tiempo de procesamiento
    }
    
    function addUserMessage(text) {
        const messageDiv = document.createElement('div');
        messageDiv.className = 'message user-message';
        messageDiv.textContent = text;
        chatBody.appendChild(messageDiv);
        
        // Limpiar flotantes
        const clearDiv = document.createElement('div');
        clearDiv.style.clear = 'both';
        chatBody.appendChild(clearDiv);
        
        chatBody.scrollTop = chatBody.scrollHeight;
    }
    
    function addBotMessage(text) {
        const messageDiv = document.createElement('div');
        messageDiv.className = 'message bot-message';
        messageDiv.textContent = text;
        chatBody.appendChild(messageDiv);
        chatBody.scrollTop = chatBody.scrollHeight;
    }

    function addQuickLinks() {
        const quickLinksDiv = document.createElement('div');
        quickLinksDiv.className = 'quick-links';
        
        // Añadir un console.log para depuración
        console.log('Añadiendo quick links:', quickLinks);
        
        // Asegurarse de que quickLinks existe y es un array
        if (Array.isArray(quickLinks) && quickLinks.length > 0) {
            quickLinks.forEach(link => {
                const linkSpan = document.createElement('span');
                linkSpan.className = 'quick-link';
                linkSpan.textContent = link;
                linkSpan.addEventListener('click', function() {
                    userInput.value = link;
                    sendButton.click();
                });
                quickLinksDiv.appendChild(linkSpan);
            });
            
            chatBody.appendChild(quickLinksDiv);
            chatBody.scrollTop = chatBody.scrollHeight;
        } else {
            console.error('Error: quickLinks no es un array o está vacío', quickLinks);
        }
    }
    
 // Función mejorada para añadir recursos con redirección inteligente
function addResourcesWithFallback(resources) {
    for (const resource of resources) {
        const resourceDiv = document.createElement('div');
        resourceDiv.className = 'message bot-message';
        
        if (resource.type === 'link') {
            // Crear enlace con icono
            const linkElem = document.createElement('a');
            
            // Verificar si la URL es un enlace interno o externo
            if (resource.url.startsWith('http://') || resource.url.startsWith('https://')) {
                // URL externa
                linkElem.href = resource.url;
                linkElem.target = '_blank';
                linkElem.rel = 'noopener noreferrer';
            } else if (resource.url.startsWith('#') || resource.url.startsWith('/')) {
                // URL interna - verificar si la sección existe
                const sectionPath = resource.url;
                
                if (sectionExists(sectionPath)) {
                    // La sección existe, navegar a ella
                    linkElem.href = sectionPath;
                } else if (resource.fallback) {
                    // La sección no existe, usar el fallback
                    if (resource.fallback.type === 'externalLink') {
                        linkElem.href = resource.fallback.url;
                        linkElem.target = '_blank';
                        linkElem.rel = 'noopener noreferrer';
                    } else if (resource.fallback.type === 'image') {
                        // Para fallback de imagen, crearemos un manejador especial
                        linkElem.href = '#';
                        linkElem.addEventListener('click', function(e) {
                            e.preventDefault();
                            showImageModal(resource.fallback.url, resource.fallback.description);
                        });
                    }
                } else {
                    // No hay fallback, usar el enlace original
                    linkElem.href = sectionPath;
                }
            } else {
                // URL sin protocolo ni slash inicial (como 'convocatorias')
                // Verificar si es una ruta interna conocida
                if (sectionExists(resource.url)) {
                    // Es una ruta interna válida del sitio web
                    linkElem.href = resource.url;
                } else if (resource.fallback) {
                    // La sección no existe, usar el fallback
                    if (resource.fallback.type === 'externalLink') {
                        linkElem.href = resource.fallback.url;
                        linkElem.target = '_blank';
                        linkElem.rel = 'noopener noreferrer';
                    } else if (resource.fallback.type === 'image') {
                        // Para fallback de imagen, crearemos un manejador especial
                        linkElem.href = '#';
                        linkElem.addEventListener('click', function(e) {
                            e.preventDefault();
                            showImageModal(resource.fallback.url, resource.fallback.description);
                        });
                    }
                } else {
                    // Agregar https:// por defecto para otras URLs
                    linkElem.href = 'https://' + resource.url;
                    linkElem.target = '_blank';
                    linkElem.rel = 'noopener noreferrer';
                }
            }
            
            linkElem.className = 'resource-link';
            
            const iconImg = document.createElement('img');
            iconImg.src = resource.icon;
            iconImg.alt = resource.title + ' icon';
            
            const infoDiv = document.createElement('div');
            infoDiv.className = 'resource-info';
            
            const titleDiv = document.createElement('div');
            titleDiv.className = 'resource-title';
            titleDiv.textContent = resource.title;
            
            const descDiv = document.createElement('div');
            descDiv.className = 'resource-desc';
            descDiv.textContent = resource.description;
            
            infoDiv.appendChild(titleDiv);
            infoDiv.appendChild(descDiv);
            
            linkElem.appendChild(iconImg);
            linkElem.appendChild(infoDiv);
            
            resourceDiv.appendChild(linkElem);
        } else if (resource.type === 'image') {
            // Crear imagen con capacidad de ampliación
            const img = document.createElement('img');
            img.src = resource.url;
            img.alt = resource.alt || 'Imagen informativa';
            img.style.cursor = 'pointer';
            
            // Al hacer clic en la imagen, mostrarla en modal
            img.addEventListener('click', function() {
                showImageModal(resource.url, resource.alt);
            });
            
            resourceDiv.appendChild(img);
        } else if (resource.type === 'info') {
            // Crear contenido HTML
            resourceDiv.innerHTML = resource.content;
        }
        
        chatBody.appendChild(resourceDiv);
    }
    
    chatBody.scrollTop = chatBody.scrollHeight;
}
 // Función para mostrar imágenes en un modal
 function showImageModal(imageUrl, imageAlt) {
    const modalImg = document.getElementById('expandedImg');
    modalImg.src = imageUrl;
    modalImg.alt = imageAlt || 'Imagen ampliada';
    
    document.getElementById('imageModal').style.display = 'flex';
}


});