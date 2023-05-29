<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <script src="https://kit.fontawesome.com/cc967d412a.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/Styles/estilo.css">
    <link rel="stylesheet" href="/Styles/styles.css" />
    <link rel="stylesheet" href="/Styles/estilosmodal.css">
    <script src="/app.js" async></script>
    <title>Bienvenido</title>
</head>
<body>
   

    
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="customer-support">
                    <i class="fa-solid fa-headset"></i>
                    <div class="content-customer-support">
                        <span class="text">Atencion al cliente</span>
                        <span class="number">977 621 339</span>
                    </div>
                </div>

                <div class="container-logo">	
                    <i class='fas fa-glass-cheers'></i>
                    <h1 class="logo"><a href="/">Don Manuelito</a></h1>
                </div>

                <div class="container-user">
                        <!--Boton-->
    <div class="boton-modal">
        <label for="btn-modal">
        ≡
        </label>
    </div>
<!--Fin de Boton-->
<!--Ventana Modal-->
    <input type="checkbox" id="btn-modal">
    <div class="container-modal">
        <div class="content-modal">
        <div class="btn-cerrar">
			<label for="btn-modal"><a href="reset-password.php" class="button primary fit">Cambia Tu Contraseña</a></label>
        </div>
        <div class="btn-cerrar">
				<label for="btn-modal"><a href="logout.php" class="button fit"> Cerrar Sesion </a></label>
            </div>
        <label for="btn-modal" class="cerrar-modal"></label>
    </div>
<!--Fin de Ventana Modal-->
                    </div>
                </div>
            </div>
        </div>

        <div class="container-navbar">
            <nav class="navbar container">
                <i class="fa-solid fa-bars"></i>
                <ul class="menu">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Promociones</a></li>
                    <li><a href="#">Personales</a></li>
                    <li><a href="#">Para Compartir</a></li>
                    <li><a href="#">Familiares</a></li>
                    <li><a href="#">Complementos</a></li>
                </ul>

                <form class="search-form">
                    <input type="search" placeholder="Buscar..." />
                    <button class="btn-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </nav>
        </div>
    </header>
    <section class="banner">
        <div class="content-banner">
            <p>El Mejor Pisco</p>
            <h2>100% Natural <br />Rigurosa Seleccion</h2>
            <a href="#">Comprar ahora</a>
        </div>
    </section>

    <main class="main-content">
        <section class="container container-features">
            <div class="card-feature">
                <i class="fa-solid fa-plane-up"></i>
                <div class="feature-content">
                    <span>Envío gratuito a nivel nacional</span>
                    <p>En pedido superior a S/ 500.00</p>
                </div>
            </div>
            <div class="card-feature">
                <i class="fa-solid fa-wallet"></i>
                <div class="feature-content">
                    <span>Contrareembolso</span>
                    <p>100% garantía de devolución de dinero</p>
                </div>
            </div>
            <div class="card-feature">
                <i class="fa-solid fa-gift"></i>
                <div class="feature-content">
                    <span>Tarjeta regalo especial</span>
                    <p>Ofrece bonos especiales con regalo</p>
                </div>
            </div>
            <div class="card-feature">
                <i class="fa-solid fa-headset"></i>
                <div class="feature-content">
                    <span>Servicio al cliente 24/7</span>
                    <p>LLámenos 24/7 al 977-621-339</p>
                </div>
            </div>
        </section>

        <section class="container top-categories">
            <h1 class="heading-1">Aprende con Nosotros</h1>
            <div class="container-categories">
                <div class="card-category category-piscosour">
                    <p>Pisco Sour</p>
                    <span>Ver más</span>
                </div>
                <div class="card-category category-machupicchu">
                    <p>Machu Picchu</p>
                    <span>Ver más</span>
                </div>
                <div class="card-category category-chilcano">
                    <p>Chilcano de Pisco</p>
                    <span>Ver más</span>
                </div>
            </div>
        </section>
        <section class="container top-products">
            <h1 class="heading-1">Mejores Productos</h1>

            <div class="container-options">
                <span class="active">Destacados</span>
                <span>Más recientes</span>
                <span>Mejores Vendidos</span>
            </div>
        </section>

    <section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">Box Engasse</span>
                <img src="/img/boxengasse.png" alt="" class="img-item">
                <span class="precio-item">S/ 60</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">English Horse</span>
                <img src="/img/englishrose.png" alt="" class="img-item">
                <span class="precio-item">S/ 25</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Knock Nap</span>
                <img src="/img/knocknap.png" alt="" class="img-item">
                <span class="precio-item">S/ 35</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">La Night</span>
                <img src="/img/lanight.png" alt="" class="img-item">
                <span class="precio-item">S/ 18</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <p>

            </p>
        </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
                <!-- 
                <div class="carrito-item">
                    <img src="img/boxengasse.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Box Engasse</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$15.000,00</span>
                    </div>
                   <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </span>
                </div>
                <div class="carrito-item">
                    <img src="img/skinglam.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Skin Glam</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="3" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$18.000,00</span>
                    </div>
                   <button class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </button>
                </div>
                 -->
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>
    <section class="gallery">
        <img
            src="/img/gallery1.jpg"
            alt="Gallery Img1"
            class="gallery-img-1"
        /><img
            src="/img/gallery2.jpg"
            alt="Gallery Img2"
            class="gallery-img-2"
        /><img
            src="/img/gallery3.jpg"
            alt="Gallery Img3"
            class="gallery-img-3"
        /><img
            src="/img/gallery4.jpg"
            alt="Gallery Img4"
            class="gallery-img-4"
        /><img
            src="/img/gallery5.jpg"
            alt="Gallery Img5"
            class="gallery-img-5"
        />
    </section>
    <section class="container specials">
        <h1 class="heading-1">Especiales</h1>
    </section>
    <section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">Box Engasse</span>
                <img src="/img/boxengasse.png" alt="" class="img-item">
                <span class="precio-item">S/ 60</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">English Horse</span>
                <img src="/img/englishrose.png" alt="" class="img-item">
                <span class="precio-item">S/ 25</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Knock Nap</span>
                <img src="/img/knocknap.png" alt="" class="img-item">
                <span class="precio-item">S/ 35</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">La Night</span>
                <img src="/img/lanight.png" alt="" class="img-item">
                <span class="precio-item">S/ 18</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <p>

            </p>
        </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
                <!-- 
                <div class="carrito-item">
                    <img src="img/boxengasse.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Box Engasse</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$15.000,00</span>
                    </div>
                   <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </span>
                </div>
                <div class="carrito-item">
                    <img src="img/skinglam.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Skin Glam</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="3" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$18.000,00</span>
                    </div>
                   <button class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </button>
                </div>
                 -->
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>
    <section class="container blogs">
        <h1 class="heading-1">Últimos Blogs</h1>

        <div class="container-blogs">
            <div class="card-blog">
                <div class="container-img">
                    <img src="/img/blog-1.jpg" alt="Imagen Blog 1" />
                    <div class="button-group-blog">
                        <span>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <span>
                            <i class="fa-solid fa-link"></i>
                        </span>
                    </div>
                </div>
                <div class="content-blog">
                    <h3>Lorem, ipsum dolor sit</h3>
                    <span>29 Noviembre 2022</span>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Iste, molestiae! Ratione et, dolore ipsum
                        quaerat iure illum reprehenderit non maxime amet dolor
                        voluptas facilis corporis, consequatur eius est sunt
                        suscipit?
                    </p>
                    <div class="btn-read-more">Leer más</div>
                </div>
            </div>
            <div class="card-blog">
                <div class="container-img">
                    <img src="/img/blog-2.jpg" alt="Imagen Blog 2" />
                    <div class="button-group-blog">
                        <span>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <span>
                            <i class="fa-solid fa-link"></i>
                        </span>
                    </div>
                </div>
                <div class="content-blog">
                    <h3>Lorem, ipsum dolor sit</h3>
                    <span>29 Noviembre 2022</span>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Iste, molestiae! Ratione et, dolore ipsum
                        quaerat iure illum reprehenderit non maxime amet dolor
                        voluptas facilis corporis, consequatur eius est sunt
                        suscipit?
                    </p>
                    <div class="btn-read-more">Leer más</div>
                </div>
            </div>
            <div class="card-blog">
                <div class="container-img">
                    <img src="/img/blog-3.jpg" alt="Imagen Blog 3" />
                    <div class="button-group-blog">
                        <span>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <span>
                            <i class="fa-solid fa-link"></i>
                        </span>
                    </div>
                </div>
                <div class="content-blog">
                    <h3>Lorem, ipsum dolor sit</h3>
                    <span>29 Noviembre 2022</span>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Iste, molestiae! Ratione et, dolore ipsum
                        quaerat iure illum reprehenderit non maxime amet dolor
                        voluptas facilis corporis, consequatur eius est sunt
                        suscipit?
                    </p>
                    <div class="btn-read-more">Leer más</div>
                </div>
            </div>
        </div>
    </section>
    </main>

    <footer class="footer">
    <div class="container container-footer">
        <div class="menu-footer">
            <div class="contact-info">
                <p class="title-footer">Información de Contacto</p>
                <ul>
                    <li>
                        Dirección: 71 Pennington Lane Vernon Rockville, CT
                        06066
                    </li>
                    <li>Teléfono: 123-456-7890</li>
                    <li>Fax: 55555300</li>
                    <li>EmaiL: baristas@support.com</li>
                </ul>
                <div class="social-icons">
                    <span class="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </span>
                    <span class="twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </span>
                    <span class="youtube">
                        <i class="fa-brands fa-youtube"></i>
                    </span>
                    <span class="pinterest">
                        <i class="fa-brands fa-pinterest-p"></i>
                    </span>
                    <span class="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </span>
                </div>
            </div>

            <div class="information">
                <p class="title-footer">Información</p>
                <ul>
                    <li><a href="#">Acerca de Nosotros</a></li>
                    <li><a href="#">Información Delivery</a></li>
                    <li><a href="#">Politicas de Privacidad</a></li>
                    <li><a href="#">Términos y condiciones</a></li>
                    <li><a href="#">Contactános</a></li>
                </ul>
            </div>

            <div class="my-account">
                <p class="title-footer">Mi cuenta</p>

                <ul>
                    <li><a href="#">Mi cuenta</a></li>
                    <li><a href="#">Historial de ordenes</a></li>
                    <li><a href="#">Lista de deseos</a></li>
                    <li><a href="#">Boletín</a></li>
                    <li><a href="#">Reembolsos</a></li>
                </ul>
            </div>

            <div class="newsletter">
                <p class="title-footer">Boletín informativo</p>

                <div class="content">
                    <p>
                        Suscríbete a nuestros boletines ahora y mantente al
                        día con nuevas colecciones y ofertas exclusivas.
                    </p>
                    <input type="email" placeholder="Ingresa el correo aquí...">
                    <button>Suscríbete</button>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>
                Desarrollado por Alumnos de la UTP &copy; 2023
            </p>

            <img src="/img/payment.png" alt="Pagos">
        </div>
    </div>
    </footer>

    <script
    src="https://kit.fontawesome.com/81581fb069.js"
    crossorigin="anonymous"
    ></script>
    <audio src="/img/BACILOS.mp3" autoplay="autoplay" loop="loop"></audio>

</body>
</html>