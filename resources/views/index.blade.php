<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Pacifico&family=Great+Vibes&display=swap" rel="stylesheet">
    <style>
        :root {
            --verde-principal: #10b981;
            --verde-claro: #6ee7b7;
            --verde-oscuro: #059669;
            --gris-oscuro: #1f2937;
            --gris-claro: #f3f4f6;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f0fdf4 0%, #ecfdf5 100%);
            min-height: 100vh;
        }

        /* Tipografía cursiva para títulos */
        h1, h2, h3, .navbar-brand {
            font-family: 'Century', cursive;
        }

        .navbar {
            background: linear-gradient(135deg, var(--verde-principal) 0%, var(--verde-oscuro) 100%);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: white !important;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
            transition: all 0.3s;
        }

        .nav-link:hover {
            color: white !important;
            transform: translateY(-2px);
        }

        .hero-section {
            background: linear-gradient(135deg, rgba(110, 231, 183, 0.85) 0%, rgba(16, 185, 129, 0.85) 90%), 
                        url('{{ asset("img/fondix.jpg") }}') center center;
            background-size: cover;
            background-attachment: fixed;
            padding: 120px 0;
            color: white;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.2);
        }

        .hero-section .container {
            position: relative;
            z-index: 1;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
            margin-bottom: 1rem;
        }

        .hero-section p {
            font-size: 1.4rem;
            opacity: 0.95;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .about-section {
            padding: 60px 0;
            background: white;
            margin: 40px 0;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .about-image {
            width: 100%;
            max-width: 200px;
            height: 200px;
            border-radius:150px;
            object-fit: contain;
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.3);
            border: 5px solid var(--verde-claro);
        }

        .about-content h2 {
            color: var(--verde-oscuro);
            font-weight: bold;
            margin-bottom: 20px;
        }

        .about-content p {
            color: #6b7280;
            font-size: 1.1rem;
            line-height: 1.8;
            text-align: left;
        }

        @media (max-width: 768px) {
            .about-content p {
                text-align: left;
            }
        }

        .skill-badge {
            display: inline-block;
            background: var(--verde-claro);
            color: var(--gris-oscuro);
            padding: 8px 16px;
            border-radius: 50px;
            margin: 5px;
            font-weight: 500;
        }

        .portfolio-section {
            padding: 60px 0;
        }

        .section-title {
            text-align: center;
            color: var(--verde-oscuro);
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 50px;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 100px;
            height: 4px;
            background: var(--verde-principal);
            margin: 15px auto 0;
            border-radius: 2px;
        }

        .project-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            margin-bottom: 30px;
            border: 2px solid transparent;
            height: 100%; 
            display: flex; 
            flex-direction: column; 
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(16, 185, 129, 0.3);
            border-color: var(--verde-principal);
        }

        .project-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: all 0.3s;
        }

        .project-card:hover .project-image {
            transform: scale(1.05);
        }

        .project-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .project-title {
            color: var(--verde-oscuro);
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .project-description {
            color: #6b7280;
            margin-bottom: 20px;
            line-height: 1.6;
            flex-grow: 1;
        }

        .project-tech {
            display: inline-block;
            background: var(--gris-claro);
            color: var(--gris-oscuro);
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.85rem;
            margin-right: 8px;
            margin-bottom: 8px;
        }

        .btn-view-project {
            background: var(--verde-principal);
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s;
            text-decoration: none;
            text-align: center
            display: inline-block;
            width: 165px;
            height: 45px; 
        }

        .btn-view-project:hover {
            background: var(--verde-oscuro);
            color: white;
            transform: scale(1.05);
        }

        .footer {
            background: var(--gris-oscuro);
            color: white;
            padding: 40px 0;
            margin-top: 60px;
        }

        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin: 0 15px;
            transition: all 0.3s;
        }

        .social-icons a:hover {
            color: var(--verde-claro);
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                César G. Developer
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre-mi">Sobre Mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#proyectos">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="inicio" class="hero-section">
        <div class="container">
            <h1>Desarrollo Web Profesional</h1>
            <p>Soluciones multiplataforma</p>
        </div>
    </section>

    <!-- About Section -->
    <section id="sobre-mi" class="container">
        <div class="about-section">
            <div class="row align-items-center">
                <div class="col-lg-4 text-center mb-4 mb-lg-0">
                    <img src="img\yo.jpg" alt="Mi foto" class="about-image">
                </div>
                <div class="col-lg-8">
                    <div class="about-content">
                        <h2><i class="fas fa-user-circle"></i> Sobre Mí</h2>
                        <p>
                            ¡Hola! Soy César García, desarrollador web egresado del Instituto Politecnico Nacional de México.
                        </p>
                        <p>
                            Apasionado por crear soluciones digitales innovadoras y funcionales. Me especializo en construir aplicaciones modernas, 
                            responsivas y intuitivas que ofrencen una solución personalizada.
                        </p>
                        <p>
                            Mi enfoque se centra en crear experiencias de usuario excepcionales mientras mantengo 
                            código limpio y escalable. Me encanta aprender nuevas tecnologías y enfrentar desafíos 
                            que me permitan crecer como profesional
                        </p>
                        <p>
                            Estas son mis tecnologías favoritas:
                        </p>
                        <div class="mt-4">
                            <span class="skill-badge"><i class="fab fa-laravel"></i> Laravel</span>
                            <span class="skill-badge"><i class="fab fa-php"></i> PHP</span>
                            <span class="skill-badge"><i class="fab fa-python"></i> Python</span>
                            <span class="skill-badge"><i class="fab fa-js"></i> JavaScript</span>
                            <span class="skill-badge"><i class="fab fa-bootstrap"></i> Bootstrap</span>
                            <span class="skill-badge"><i class="fas fa-database"></i> MySQL</span>
                            <span class="skill-badge"><i class="fab fa-html5"></i> HTML/CSS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="proyectos" class="portfolio-section">
        <div class="container">
            <h2 class="section-title">Mis Proyectos</h2>
            <div class="row">
                @if(isset($proyectos) && count($proyectos) > 0)
                    @foreach($proyectos as $proyecto)
                    <div class="col-lg-4 col-md-6">
                        <div class="project-card">
                            <img src="{{ asset($proyecto['imagen']) }}" alt="{{ $proyecto['titulo'] }}" class="project-image">
                            <div class="project-content">
                                <h3 class="project-title">{{ $proyecto['titulo'] }}</h3>
                                <p class="project-description">
                                    {{ $proyecto['descripcion'] }}
                                </p>
                                <div class="mb-3">
                                    @foreach($proyecto['tecnologias'] as $tech)
                                    <span class="project-tech">{{ $tech }}</span>
                                    @endforeach
                                </div>
                                <a href="{{ $proyecto['url'] }}" class="btn-view-project" target="_blank">
                                    <i class="fas fa-eye"></i> Ver Proyecto
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                <!-- Proyectos de ejemplo cuando no hay datos -->
                <div class="col-lg-4 col-md-6">
                    <div class="project-card">
                        <img src="https://via.placeholder.com/400x250/6ee7b7/ffffff?text=Proyecto+1" alt="Proyecto 1" class="project-image">
                        <div class="project-content">
                            <h3 class="project-title">E-Commerce</h3>
                            <p class="project-description">
                                Plataforma de comercio electrónico completa con carrito de compras, 
                                gestión de productos y sistema de pagos integrado.
                            </p>
                            <div class="mb-3">
                                <span class="project-tech">Laravel</span>
                                <span class="project-tech">PHP</span>
                                <span class="project-tech">MySQL</span>
                            </div>
                            <a href="#" class="btn-view-project">
                                <i class="fas fa-eye"></i> Ver Proyecto
                            </a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contacto" class="footer">
        <div class="container text-center">
            <h3 class="mb-4">¡Trabajemos Juntos!</h3>
            <p class="mb-4">¿Tienes un proyecto en mente? Me encantaría escucharlo, contáctame</p>
            <p class="mb-4">Correo: <b>cesarg6iv11@gmail.com</b></p>
            <p class="mb-0">&copy; 2026 Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>