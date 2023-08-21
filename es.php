<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">


    <title>Hugo Pedraza Reyes || Desarrollador FullStack</title>
    
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">{Hugo}</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#home" class="nav__link"><i class="uil uil-estate nav__icon"></i>Inicio</a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link"><i class="uil uil-user nav__icon"></i>Sobre mí</a>
                    </li>

                    <li class="nav__item">
                        <a href="#skills" class="nav__link"><i class="uil uil-file-alt nav__icon"></i>Skills</a>
                    </li>

                    <li class="nav__item">
                        <a href="#qualifications" class="nav__link"><i class="uil uil-graduation-cap  nav__icon"></i>Trayectoria</a>
                    </li>

                    <li class="nav__item">
                        <a href="#portfolio" class="nav__link"><i class="uil uil-scenery nav__icon"></i>Portfolio</a>
                    </li>

                    <li class="nav__item">
                        <a href="#contact" class="nav__link"><i class="uil uil-message nav__icon"></i>Contacto</a>
                    </li>
                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>    
            </div>

            <div class="nav__btns">

                <div class="nav__toggle change-theme" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
                <!-- Theme change button -->
                <i class="uil uil-moon change-theme" id="theme-button">
                </i>
                
                <a href="./" class="uil uil-globe change-theme"> EN
                </i></a>

            </div>
        </nav>
    </header>
    
    <main class="main">
        <section class="home section" id="home">
            <div class="home__container container grid">
                <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <mask id="mask0" mask-type="alpha">
                        <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                        130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                        97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                        0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                    </mask>
                    <g mask="url(#mask0)">
                        <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                        165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                        129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                        -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                        <image class="home__blob-img" x='10' y='16' href="assets/img/hpr.png"/>
                    </g>
                </svg>
        <section class="home section grid" id="home">
            <div class="home__container container">
                
                <!-- <div class="home__content">
                    <div class="home__social">
                        <a href="https://www.linkedin.com/in/hugopreyes/" class="home__social-icon" target="_blank">
                            <i class="uil uil-linkedin-alt"></i>
                        </a>
                        <a href="https://github.com/HPReyes" class="home__social-icon" target="_blank">
                            <i class="uil uil-github-alt"></i>
                        </a>
                        <a href="" class="home__social-icon">

                        </a>
                    </div>
                    

                        <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                <image class="home__blob-img" x='10' y='16' href="assets/img/hpr.png"/>
                            </g>
                        </svg>

                    </div> -->
                    <div>
                        <h1 class="home__title">Hola! Soy Hugo Pedraza</h1>
                        <h3 class="home__subtitle">Desarrollador FullStack</h3>
                        <p class="home__description">
                        </p>
                        <a download="" href="assets/pdf/Hugo-Pedraza-CV.pdf" class="button cv">
                            Descarga CV<i class="uil uil-download-alt button__icon"></i>
                        </a>



                    </div>
                    
                </div>
                
            </div>
        </section>

        <section class="about section" id="about">
            <h2 class="section__title">Sobre mí</h2>
            <span class="section__subtitle">Presentación</span>

            <div class="about__container container grid">
                <img src="assets/img/sobremi.JPG" alt="aboutme" class="about__img">
                <div class="about__data">
                    <p class="about__description">Soy un desarrollador web apasionado de la programación y de las nuevas tecnologías. Tengo 10 años de experiencia en Recursos Humanos pero también una fuerte vocación en el desarrollo de soluciones.</p>
                    <p class="about__description">Desde que era niño me han interesado la tecnología, leer, los animales y los videojuegos. Dato curioso: ¡Aprendí inglés jugando a The Legend of Zelda!/p>
                    <p class="about__description">¡Contacta conmigo!
                    </p>
                    <!-- <div class="about__info">
                        <div>
                            <span class="about__info-title">08+</span>
                            <span class="about__info-name">Years <br> experience</span>
                        </div>
                        <div>
                            <span class="about__info-title">20+</span>
                            <span class="about__info-name">completed <br> projects</span>
                        </div>
                        <div>
                            <span class="about__info-title">05+</span>
                            <span class="about__info-name">Companies <br> worked</span>
                        </div>
                    </div> -->
                    <div class="about__buttons">

                    <a href="#contact" class="button button--flex">
                            Contacto<i class="uil uil-message"></i>
                        </a>

                    </div>
                </div>
            </div>
        </section>

        <section class="skills section" id="skills">
            <h2 class="section__title">Skills</h2>
            <span class="section__subtitle">Stack tecnológico</span>

            <div class="skills__container container grid">
                <div>
                    <div class="skills__content skills__open">
                        <div class="skills__header">
                            <i class="uil uil-brackets-curly skills__icon"></i>

                            <div>
                                <h1 class="skills__title">Desarrollador Fullstack</h1>
                                <span class="skills__subtitle"></span>
                            </div>

                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">HTML</h3><img src="./assets/img/html-5-logo-svgrepo-com.svg" alt="html5" class="skills__icon">
                                </div>
                                <div class="skills__titles">
                                    <h3 class="skills__name">CSS</h3><img src="./assets/img/css-3-svgrepo-com.svg" alt="css" class="skills__icon">
                                </div>
                                <div class="skills__titles">
                                    <h3 class="skills__name">JavaScript</h3><img src="./assets/img/js-svgrepo-com.svg" alt="JavaScript" class="skills__icon">
                                </div>
                                <div class="skills__titles">
                                    <h3 class="skills__name">PHP</h3><img src="./assets/img/php-svgrepo-com.svg" alt="php" class="skills__icon">
                                </div>
                                <div class="skills__titles">
                                    <h3 class="skills__name">SQL</h3><img src="./assets/img/sql-database-generic-svgrepo-com.svg" alt="SQL" class="skills__icon">
                                </div>
                                <div class="skills__titles">
                                    <h3 class="skills__name">Linux</h3><img src="./assets/img/linux-svgrepo-com.svg" alt="Linux" class="skills__icon">
                                </div>

                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                
            </div>
            
        </section>

<section class="qualification section" id="qualifications">
    <h2 class="section__title">Trayectoria</h2>
    <span class="section__subtitle">Estudios y experiencia</span>
    
    <div class="qualification__container container">
        <div class="qualification__tabs">
            <div class="qualification__button button--flex qualification__active" data-target='#education'>
                <i class="uil uil-graduation-cap qualification__icon"></i>
                Estudios
            </div>
            <div class="qualification__button button--flex" data-target='#work'>
                <i class="uil uil-briefcase-alt qualification__icon"></i>
                Experiencia
            </div>
        </div>

        <div class="qualification__sections">

                <!-- QUALIFICATION CONTENT 1 -->
            <div class="qualification__content qualification__active" data-content id="education">

                <!-- QUALIFICATION 1 -->
                <div class="qualification__data">
                    <div>
                        <h3 class="qualification__title">Desarrollo de Aplicaciones Web</h3>
                        <span class="qualification__subtitle">Ilerna Online</span>
                        <div class="qualification__calendar">
                            <i class="uil uil-calendar-alt"></i>
                            2021 - 2023
                        </div>
                    </div>
                    <div>
                    <span class="span qualification__rounder"></span>
                    <span class="span qualification__line"></span>
                    </div>
                </div>
                <!-- QUALIFICATION 2 -->
                <div class="qualification__data">
                    <div></div>
                    <div>
                        <span class="span qualification__rounder"></span>
                        <span class="span qualification__line"></span>
                        </div>
                    <div>
                        <h3 class="qualification__title">Máster en Recursos Humanos</h3>
                        <span class="qualification__subtitle">Universidad de Sevilla</span>
                        <div class="qualification__calendar">
                            <i class="uil uil-calendar-alt"></i>
                            2012 - 2013
                        </div>
                    </div>
                  
                </div>
                
                <!-- QUALIFICATION 3 -->

                <div class="qualification__data">
                    <div>
                        <h3 class="qualification__title">Diplomatura en Relaciones Laborales</h3>
                        <span class="qualification__subtitle">Universidad de Sevilla</span>
                        <div class="qualification__calendar">
                            <i class="uil uil-calendar-alt"></i>
                            2006 - 2010
                        </div>
                    </div>
                    <div>
                    <span class="span qualification__rounder"></span>
                    <!-- <span class="span qualification__line"></span> -->
                    </div>
                </div>


        </div>

                <!-- QUALIFICATION CONTENT 2 -->
            <div class="qualification__content" data-content id="work">

                <!-- QUALIFICATION 1 -->
 
                <div class="qualification__data">
                    <div></div>
                    <div>
                        <span class="span qualification__rounder"></span>
                        <span class="span qualification__line"></span>
                        </div>
                    <div>
                        <h3 class="qualification__title">Técnico de RR.HH. Generalista</h3>
                        <span class="qualification__subtitle">Sofitec Aero</span>
                        <div class="qualification__calendar">
                            <i class="uil uil-calendar-alt"></i>
                            2016 - 2023
                        </div>
                    </div>
                  
                </div>
                
                <!-- QUALIFICATION 2 -->

                <div class="qualification__data">
                    <div>
                        <h3 class="qualification__title">Técnico de RR.HH. Generalista</h3>
                        <span class="qualification__subtitle">Unuk Sevilla 5*GL</span>
                        <div class="qualification__calendar">
                            <i class="uil uil-calendar-alt"></i>
                            2021 - 2023
                        </div>
                    </div>
                    <div>
                    <span class="span qualification__rounder"></span>
                    <span class="span qualification__line"></span>
                    </div>
                </div>
                <!-- QUALIFICATION 1 -->
 
                <div class="qualification__data">
                    <div></div>
                    <div>
                        <span class="span qualification__rounder"></span>
                        <!-- <span class="span qualification__line"></span> -->
                        </div>
                    <div>
                        <h3 class="qualification__title">Asesor Laboral</h3>
                        <span class="qualification__subtitle">Antea</span>
                        <div class="qualification__calendar">
                            <i class="uil uil-calendar-alt"></i>
                            2013 - 2016
                        </div>
                    </div>
                  
                </div>

        </div>
    </div>
</section>


<section class="portfolio section" id="portfolio">
    <h2 class="section__title">Portfolio</h2>
    <span class="section__subtitle">Trabajos recientes</span>

    <div class="portfolio__container container swiper">
        <div class="swiper-wrapper">

            <!-- PORTFOLIO 1 -->
            <div class="porftolio__content grid swiper-slide">
                <img src="./assets/img/quiereme-bien.png" alt="quiereme-bien" class="portfolio__img">
                <div class="portfolio__data">
                    <h3 class="portfolio__title">Quiéreme Bien | Web Oficial</h3>
                    <p class="portfolio__description">Web oficial de la miniserie documental contra el maltrato animal normalizado.
                    </p>
                    <a href="#" class="button button--flex button--small portfolio__button">
                        Ver
                        <i class="uil uil-arrow-right button__icon"></i>
                    </a>
                </div>
            </div>
            <!-- PORTFOLIO 2 -->
            <div class="porftolio__content grid swiper-slide">
                <img src="./assets/img/wip.png" alt="workinprogress" class="portfolio__img">
                <div class="portfolio__data">
                    <h3 class="portfolio__title">Whack-a-Mole | Juego</h3>
                    <p class="portfolio__description">Proyecto personal del juego Whack-a-Mole.</p>
                    <a href="#" class="button button--flex button--small portfolio__button">
                        Ver
                        <i class="uil uil-arrow-right button__icon"></i>
                    </a>
                </div>
            </div>
            <!-- PORTFOLIO 3 -->
            <div class="porftolio__content grid swiper-slide">
                <img src="./assets/img/wip.png" alt="workinprogress" class="portfolio__img">
                <div class="portfolio__data">
                    <h3 class="portfolio__title">Sogni Per Te | Tienda Online</h3>
                    <p class="portfolio__description">Tienda online para un pequeño negocio local sobre bisutería artesanal.</p>
                    <a href="#" class="button button--flex button--small portfolio__button">
                        Ver
                        <i class="uil uil-arrow-right button__icon"></i>
                    </a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next">
            <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
        </div>
        
        <div class="swiper-button-prev">
            <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
        </div>
        <div class="swiper-pagination"></div>

    </div>
</section>






<!-- <section class="services section" id="services">
    <h2 class="section__title">Skills Tech</h2>
    <span class="section__subtitle">What I offer</span>
    <div class="services__container container grid">


        <div class="services__content">
            <div>
                <img src="/assets/img/html-5-logo-svgrepo-com.svg" alt="html5" class="tech__icon">
                <h3 class="services__title">HTML5</h3>
            </div>            
            <p>Desarrollo de páginas web en HTML5</p>
      </div>

        
    </div>
    </section> -->




<section class="contact section" id="contact">
    <h2 class="section__title">Contacto</h2>
    <span class="section__subtitle">¡Escríbeme!</span>

    <?php 

include 'form-es.php';

?>
    

    <div class="contact__container container grid">
        <form action="" method="post" class="contact__form grid" id="formulario">
            <div class="contact__inputs grid">
                <div class="contact__content">
                    <label for="contact-name" class="contact__label">Nombre</label>
                    <input type="text" class="contact__input" id="contact-name" name="contact-name" required>
                </div>
                <div class="contact__content">
                    <label for="contact-email" class="contact__label">Email</label>
                    <input type="email" class="contact__input" id="contact-email" name="contact-email" required>
                </div>
                <div class="contact__content">
                    <label for="contact-project" class="contact__label">Asunto</label>
                    <input type="text" class="contact__input" id="contact-project" name="contact-project" required>
                </div>
                <div class="contact__content">
                    <label for="contact-message" class="contact__label">Mensaje</label>
                    <textarea id="contact-message" cols="30" rows="7" class="contact__input" name="message" required></textarea>                
                </div>
            </div>
            <div>
                <input type="submit" class="button button--flex" name="enviar" id="enviar" value="Enviar">
                </input>
            </div>

        </form>
    </div>




</section>




    </main>

<footer class="footer">

    <div>

    <div class="footer__bg">
        <div class="footer__container container grid">

            <div class="footer__copy">Hugo Pedraza Reyes 2023</div>

            <div class="footer__socials">
                <a href="https://www.linkedin.com/in/hugopreyes/" class="footer__social" target="_blank">
                    <i class="uil uil-linkedin"></i>
                </a>
                <a href="https://github.com/HPReyes" class="footer__social" target="_blank">
                    <i class="uil uil-github"></i>
                </a>

            </div>

        </div>
    </div>
</footer>


<!-- <a href="#" class="scrollup" id="scroll-hp">
    <i class="uil uil-arrow-up scrollup__icon"></i>
</a> -->

    <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    
</body>
</html>
