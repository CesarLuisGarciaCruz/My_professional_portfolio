<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome 5.15.1 CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
    <title>El Ajolote - Restaurante Mexicano</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            color: #333;
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: linear-gradient(135deg, #260401 10%, #8C613B 90%);
            padding: 1.2rem 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .navbar-menu {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .navbar-menu li a {
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            transition: color 0.3s;
        }

        .navbar-menu li a:hover {
            color: #fbbf24;
        }

        /* Carousel */
        .carousel-container {
            margin-top: 80px;
            position: relative;
            width: 100%;
            height: 600px;
            overflow: hidden;
        }

        .carousel-slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .carousel-slide.active {
            opacity: 1;
        }

        .carousel-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .carousel-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.5));
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .carousel-overlay h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.7);
        }

        .carousel-overlay p {
            font-size: 1.5rem;
            max-width: 600px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
        }

        .carousel-dots {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 10;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255,255,255,0.5);
            cursor: pointer;
            transition: background 0.3s;
        }

        .dot.active {
            background: white;
        }

        /* About Section */
        .about-section {
            padding: 5rem 2rem;
            background: linear-gradient(135deg, #dbeafe 0%, #fed7aa 100%);
            text-align: center;
        }

        .about-section h2 {
            font-size: 3rem;
            color: #714019ff;
            margin-bottom: 2rem;
        }

        .about-section p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.8;
            color: #374151;
        }

        /* Menu Section */
        .menu-section {
            padding: 5rem 2rem;
            background-image: url("/img/Restaurant/madera.jpg"); 
            background-size: cover;       
            background-position: center;  
            background-repeat: no-repeat; 
        }

        .menu-section h2 {
            font-size: 3rem;
            color: rgb(220, 215, 215);
            text-align: center;
            margin-bottom: 3rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .menu-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .menu-category {
            background: rgba(255,255,255,0.95);
            border-radius: 20px;
            padding: 3rem 2rem;
            margin-bottom: 3rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .menu-category h3 {
            font-size: 2.5rem;
            color: #1e3a8a;
            text-align: center;
            margin-bottom: 2.5rem;
            border-bottom: 3px solid #f97316;
            padding-bottom: 1rem;
        }

        .menu-columns {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .menu-item {
            display: flex;
            gap: 1.5rem;
            padding: 1.5rem;
            border-bottom: 1px solid #e5e7eb;
            transition: background 0.3s;
        }

        .menu-item:last-child {
            border-bottom: none;
        }

        .menu-item:hover {
            background: #f0f9ff;
            border-radius: 10px;
        }

        .menu-item-image {
            width: 120px;
            height: 120px;
            border-radius: 10px;
            object-fit: cover;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            flex-shrink: 0;
        }

        .menu-item-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .menu-item-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 0.5rem;
        }

        .menu-item h4 {
            font-size: 1.3rem;
            color: #1e3a8a;
            margin: 0;
        }

        .menu-item .price {
            font-size: 1.3rem;
            color: #f97316;
            font-weight: bold;
            white-space: nowrap;
        }

        .menu-item p {
            font-size: 0.95rem;
            color: #6b7280;
            line-height: 1.5;
            margin: 0;
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #0f172a 0%, #7c2d12 100%);
            color: white;
            padding: 3rem 2rem;
            text-align: center;
        }

        .footer h3 {
            font-size: 2rem;
            margin-bottom: 2rem;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .social-links a {
            color: white;
            font-size: 1.2rem;
            text-decoration: none;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: #fbbf24;
        }

        .location {
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .navbar-menu {
                display: none;
            }

            .carousel-overlay h1 {
                font-size: 2.5rem;
            }

            .carousel-overlay p {
                font-size: 1.2rem;
            }

            .about-section h2,
            .menu-section h2 {
                font-size: 2rem;
            }

            .menu-columns {
                grid-template-columns: 1fr;
            }

            .menu-category h3 {
                font-size: 2rem;
            }

            .menu-item {
                flex-direction: column;
            }

            .menu-item-image {
                width: 100%;
                height: 200px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-brand">El Ajolote</div>
        <ul class="navbar-menu">
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#nosotros">Nosotros</a></li>
            <li><a href="#menu">Menú</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
    </nav>

    <!-- Carousel -->
    <div class="carousel-container" id="inicio">
        <div class="carousel-slide active">
            <img src="https://images.unsplash.com/photo-1613514785940-daed07799d9b?w=1600&h=900&fit=crop" alt="Restaurante El Ajolote">
            <div class="carousel-overlay">
                <h1>El Ajolote</h1>
                <p>Auténtica cocina mexicana en el corazón de la ciudad</p>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="https://images.unsplash.com/photo-1599974982449-e4bae0ca7c6c?w=1600&h=900&fit=crop" alt="Tacos mexicanos">
            <div class="carousel-overlay">
                <h1>Sabores Tradicionales</h1>
                <p>Recetas transmitidas de generación en generación</p>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="https://images.unsplash.com/photo-1565299507177-b0ac66763828?w=1600&h=900&fit=crop" alt="Ambiente acogedor">
            <div class="carousel-overlay">
                <h1>Experiencia Única</h1>
                <p>Un viaje culinario a través de México</p>
            </div>
        </div>
        <div class="carousel-dots">
            <span class="dot active" onclick="currentSlide(0)"></span>
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
        </div>
    </div>

    <!-- About Section -->
    <section class="about-section" id="nosotros">
        <h2>Sobre Nosotros</h2>
        <p>
            En El Ajolote, celebramos la rica tradición culinaria mexicana con platillos preparados 
            con ingredientes frescos y auténticos. Nuestro restaurante nace del amor por la comida 
            casera y el deseo de compartir los sabores que nos recuerdan a casa. Cada platillo es 
            preparado con dedicación y cariño, siguiendo recetas tradicionales que han pasado de 
            generación en generación. Te invitamos a disfrutar de una experiencia gastronómica única 
            en un ambiente cálido y acogedor.
        </p>
    </section>

    <!-- Menu Section -->
    <section class="menu-section" id="menu">
        <h2>Nuestro menú</h2>
        <div class="menu-container">
            
            <!-- Entradas -->
            <div class="menu-category">
                <h3>🌮 Entradas</h3>
                <div class="menu-columns">
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1613514785940-daed07799d9b?w=300&h=300&fit=crop" alt="Guacamole" class="menu-item-image">
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h4>Guacamole con totopos</h4>
                                <span class="price">$75</span>
                            </div>
                            <p>Aguacate fresco, jitomate, cebolla, cilantro, limón y chile serrano, acompañado de totopos crujientes</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1625937329935-d971d6672915?w=300&h=300&fit=crop" alt="Quesadillas" class="menu-item-image">
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h4>Quesadillas de Flor de Calabaza</h4>
                                <span class="price">$95</span>
                            </div>
                            <p>Tortillas de maíz rellenas de flor de calabaza, queso Oaxaca y epazote</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1600803907087-f56d462fd26b?w=300&h=300&fit=crop" alt="Esquites" class="menu-item-image">
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h4>Esquites Preparados</h4>
                                <span class="price">$60</span>
                            </div>
                            <p>Granos de elote tierno con mayonesa, queso cotija, chile piquín y limón</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1568106690031-f4c45f8e5b49?w=300&h=300&fit=crop" alt="Tlacoyos" class="menu-item-image">
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h4>Tlacoyos con Frijol</h4>
                                <span class="price">$75</span>
                            </div>
                            <p>Masa de maíz rellena de frijoles, nopales, queso fresco y salsa verde</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Platos Fuertes -->
            <div class="menu-category">
                <h3>🍽️ Platos Fuertes</h3>
                <div class="menu-columns">
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1565299585323-38d6b0865b47?w=300&h=300&fit=crop" alt="Tacos al Pastor" class="menu-item-image">
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h4>Tacos al Pastor (5 pzas)</h4>
                                <span class="price">$85</span>
                            </div>
                            <p>Carne marinada con achiote, piña asada, cilantro y cebolla en tortilla de maíz</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1599974982449-e4bae0ca7c6c?w=300&h=300&fit=crop" alt="Enchiladas" class="menu-item-image">
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h4>Enchiladas Verdes</h4>
                                <span class="price">$120</span>
                            </div>
                            <p>Tortillas rellenas de pollo bañadas en salsa verde, crema y queso fresco</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1609501676725-7186f017a4b0?w=300&h=300&fit=crop" alt="Pozole" class="menu-item-image">
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h4>Pozole Rojo</h4>
                                <span class="price">$135</span>
                            </div>
                            <p>Caldo tradicional con maíz cacahuazintle, carne de cerdo y chile guajillo</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1617343267955-e83b3a8b94b1?w=300&h=300&fit=crop" alt="Mole" class="menu-item-image">
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h4>Mole Poblano</h4>
                                <span class="price">$150</span>
                            </div>
                            <p>Pechuga de pollo cubierta con salsa mole casera, acompañado de arroz</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1626645738196-c2a7c87a8f58?w=300&h=300&fit=crop" alt="Chiles en Nogada" class="menu-item-image">
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h4>Chiles en Nogada</h4>
                                <span class="price">$180</span>
                            </div>
                            <p>Chile poblano relleno de picadillo, bañado en salsa de nuez y granada</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1562059390-a761a084768e?w=300&h=300&fit=crop" alt="Carne Asada" class="menu-item-image">
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h4>Carne Asada con Nopales</h4>
                                <span class="price">$165</span>
                            </div>
                            <p>Arrachera a la parrilla con nopales asados, cebollitas, guacamole y tortillas</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Postres -->
            <div class="menu-category">
                <h3>🍰 Postres</h3>
                <div class="menu-columns">
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1586803503261-f700bc0b8c20?w=300&h=300&fit=crop" alt="Flan" class="menu-item-image">
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h4>Flan Napolitano</h4>
                                <span class="price">$65</span>
                            </div>
                            <p>Flan casero de vainilla con caramelo tradicional</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1563805042-7684c019e1cb?w=300&h=300&fit=crop" alt="Churros" class="menu-item-image">
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h4>Churros con Cajeta</h4>
                                <span class="price">$70</span>
                            </div>
                            <p>Churros crujientes espolvoreados con azúcar y canela, con cajeta para dipear</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1616690710400-a16d146927c5?w=300&h=300&fit=crop" alt="Tres Leches" class="menu-item-image">
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h4>Pastel de Tres Leches</h4>
                                <span class="price">$75</span>
                            </div>
                            <p>Bizcocho empapado en tres leches con crema batida y fresas</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1624353365286-3f8d62daad51?w=300&h=300&fit=crop" alt="Arroz con Leche" class="menu-item-image">
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h4>Arroz con Leche</h4>
                                <span class="price">$55</span>
                            </div>
                            <p>Arroz cremoso cocido con leche, canela y pasas</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bebidas -->
            <div class="menu-category">
                <h3>Bebidas</h3>
                <div class="menu-columns">
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1546173159-315724a31696?w=300&h=300&fit=crop" alt="Horchata" class="menu-item-image">
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h4>Agua de Horchata</h4>
                                <span class="price">$35</span>
                            </div>
                            <p>Refrescante bebida de arroz con canela y vainilla</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1622597467836-f3285f2131b8?w=300&h=300&fit=crop" alt="Jamaica" class="menu-item-image">
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h4>Agua de Jamaica</h4>
                                <span class="price">$35</span>
                            </div>
                            <p>Agua fresca de flor de jamaica con toque de limón</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1623065422902-30a2d299bbe4?w=300&h=300&fit=crop" alt="Tamarindo" class="menu-item-image">
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h4>Agua de Tamarindo</h4>
                                <span class="price">$35</span>
                            </div>
                            <p>Agua fresca de tamarindo con el balance perfecto entre dulce y ácido</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1587411768941-fc3cd9e821b9?w=300&h=300&fit=crop" alt="Chocolate" class="menu-item-image">
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h4>Chocolate Caliente</h4>
                                <span class="price">$45</span>
                            </div>
                            <p>Chocolate de Oaxaca preparado con leche y canela</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?w=300&h=300&fit=crop" alt="Café" class="menu-item-image">
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h4>Café de Olla</h4>
                                <span class="price">$40</span>
                            </div>
                            <p>Café tradicional preparado con piloncillo y canela</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1536511132770-e5058c7e8c46?w=300&h=300&fit=crop" alt="Margarita" class="menu-item-image">
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h4>Margarita Clásica</h4>
                                <span class="price">$85</span>
                            </div>
                            <p>Tequila, triple sec, jugo de limón y sal en el borde</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" id="contacto">
        <h3>¡Visítanos!</h3>
        <h3>Te esperamos</h3>
        <div class="location">
            📍 Av. Insurgentes Sur 1234, Col. Del Valle, CDMX
        </div>
        <div class="location">
            📞 (55) 1234-5678 | ⏰ Lun-Dom: 12:00 PM - 10:00 PM
        </div>
        <div class="social-links">
        <a href="#" class="icon facebook"><a href="#" class="icon facebook">
            <div class="tooltip">Facebook</div><div class="tooltip"></div>
            <span><i class="fab fa-facebook-f"></i></span></span>
        </a></a>
        <a href="#" class="icon maps"><a href="#" class="icon maps">
            <div class="tooltip"></div><div class="tooltip">Maps</div>
            <span><i class="fa-regular fa-map"></i></span>
        </a></a>
        <a href="#" class="icon instagram"><a href="#" class="icon instagram">
            <div class="tooltip">Instagram</div><div class="tooltip"></div>
            <span><i class="fab fa-instagram"></i></span>
        </a></a>
  
 
        </div>
    </footer>

    <script>
        // Carousel functionality
        let currentSlideIndex = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const dots = document.querySelectorAll('.dot');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                dots[i].classList.remove('active');
            });
            
            slides[index].classList.add('active');
            dots[index].classList.add('active');
        }

        function nextSlide() {
            currentSlideIndex = (currentSlideIndex + 1) % slides.length;
            showSlide(currentSlideIndex);
        }

        function currentSlide(index) {
            currentSlideIndex = index;
            showSlide(currentSlideIndex);
        }

        // Auto-advance carousel every 5 seconds
        setInterval(nextSlide, 5000);

        // Smooth scrolling for navbar links
        document.querySelectorAll('.navbar-menu a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>