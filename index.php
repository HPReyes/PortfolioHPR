<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    




    <title>Hugo Pedraza Reyes || FullStack Developer</title>
    
</head>
<body>

    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">{Hugo}</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#home" class="nav__link"><i class="uil uil-estate nav__icon"></i>Home</a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link"><i class="uil uil-user nav__icon"></i>About</a>
                    </li>

                    <li class="nav__item">
                        <a href="#skills" class="nav__link"><i class="uil uil-file-alt nav__icon"></i>Skills</a>
                    </li>

                    <li class="nav__item">
                        <a href="#qualifications" class="nav__link"><i class="uil uil-graduation-cap  nav__icon"></i>Career</a>
                    </li>

                    <li class="nav__item">
                        <a href="#portfolio" class="nav__link"><i class="uil uil-scenery nav__icon"></i>Portfolio</a>
                    </li>

                    <li class="nav__item">
                        <a href="#contact" class="nav__link"><i class="uil uil-message nav__icon"></i>Contact me</a>
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
                
                <a href="./es/" class="uil uil-globe change-theme"> ES
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
                        <h1 class="home__title">Hi, I'm Hugo Pedraza</h1>
                        <h3 class="home__subtitle">FullStack Developer</h3>
                        <p class="home__description">
                        </p>
                        <a download="" href="assets/pdf/Hugo-Pedraza-CV.pdf" class="button cv" id="CV">
                            Download CV<i class="uil uil-download-alt button__icon"></i>
                        </a>



                    </div>
                    
                </div>
                
            </div>
        </section>

        <section class="about section" id="about">
            <h2 class="section__title">About Me</h2>
            <span class="section__subtitle">My introduction</span>

            <div class="about__container container grid">
                <img src="assets/img/sobremi.JPG" alt="aboutme" class="about__img">
                <div class="about__data">
                    <p class="about__description">I'm a web developer passionate about coding and learning new technologies. I have 10 years of experience in Human Resources but also a strong focus on developing solutions.</p>
                    <p class="about__description">Since I was a child I have had a great interest in technology, reading, animals and video games, I learned English by playing The Legend of Zelda!</p>
                    <p class="about__description">Feel free to contact me!
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
                            Contact Me<i class="uil uil-message"></i>
                        </a>

                    </div>
                </div>
            </div>
        </section>
        <section class="portfolio section" id="portfolio">
    <h2 class="section__title">Portfolio</h2>
    <span class="section__subtitle">Most recent work</span>
    

    
 





    <div class="portfolio__container container swiper">
        
        <div class="swiper-wrapper">

            <!-- PORTFOLIO 1 -->
            <div class="porftolio__content grid swiper-slide">
                <img src="./assets/img/quiereme-bien.png" alt="quiereme-bien" class="portfolio__img">
                <div class="portfolio__data">
                    <h3 class="portfolio__title">Quiéreme Bien | Official Web Page</h3>
                    <p class="portfolio__description">Official website of the documentary miniseries Quiéreme Bien, initiative against normalized animal abuse.
                    </p>
                    <a href="https://quiereme-bien.es/" class="button button--flex button--small portfolio__button" target="_blank" >
                        View
                        <i class="uil uil-arrow-right button__icon"></i>
                    </a>
   <a class="button button--flex button--small portfolio__button" id="quieremeBien">Info<i class="uil uil-arrow-right button__icon"></i></a>
                </div>
             

            </div>
            
            <!-- PORTFOLIO 2 -->
            <div class="porftolio__content grid swiper-slide">
           

<!-- <script>
    document.querySelector('.swiper-slide').addEventListener('click', function(event) {
    if (event.target.closest('.btn-primary')) {
        $('#portfolioModal').modal('show'); // Abre el modal manualmente
    }
});
</script> -->


                <img src="./assets/img/todolist.png" alt="todo-list" class="portfolio__img">
                <div class="portfolio__data">
                    <h3 class="portfolio__title">ToDo List App | App </h3>
                    
                    <p class="portfolio__description">Personal project making a ToDo List App with my own features like save, load and delete local storage.</p>
                    <a href="https://hpr-projects-2023-todoapp.netlify.app/" target="_blank" class="button button--flex button--small portfolio__button">
                        View
                        <i class="uil uil-arrow-right button__icon"></i>
                    </a>
                    
                    <a class="button button--flex button--small portfolio__button" id="todoApp">Info<i class="uil uil-arrow-right button__icon"></i></a>


                </div>
                
            </div>
                <!-- PORTFOLIO 3 -->
            <div class="porftolio__content grid swiper-slide">
                <img src="./assets/img/weatherapp.png" alt="weatherapp" class="portfolio__img">
                <div class="portfolio__data">
                    <h3 class="portfolio__title">WeatherApp | App </h3>
                    <p class="portfolio__description">Practice with the OpenWeather API.</p>
                    <a href="https://hpr-projects-2023-weatherapp.netlify.app/" target="_blank" class="button button--flex button--small portfolio__button">
                        View
                        <i class="uil uil-arrow-right button__icon"></i>
                    </a>
                    <a class="button button--flex button--small portfolio__button" id="weatherApp">Info<i class="uil uil-arrow-right button__icon"></i></a>
                </div>
            </div>
            
            <!-- PORTFOLIO 4 -->
            <div class="porftolio__content grid swiper-slide">
                <img src="./assets/img/sogniperte.png" alt="sogniperte" class="portfolio__img">
                <div class="portfolio__data">
                    <h3 class="portfolio__title">Sogni Per Te | Online Shop</h3>
                    <p class="portfolio__description">Online store with React for a local business of handmade jewelry creations.</p>
                    <a href="https://sogniperte.es/" class="button button--flex button--small portfolio__button" target="_blank">
                        View
                        <i class="uil uil-arrow-right button__icon"></i>
                    </a>
                    <a class="button button--flex button--small portfolio__button" id="sogniWeb">Info<i class="uil uil-arrow-right button__icon"></i></a>
                </div>
            </div>




            <!-- PORTFOLIO 5 -->
            <div class="porftolio__content grid swiper-slide">
                <img src="./assets/img/devstagram.png" alt="Devstagram" class="portfolio__img">
                <div class="portfolio__data">
                    <h3 class="portfolio__title">Devstagram | Instagram Clone</h3>
                    <p class="portfolio__description">Laravel project - Clone of Instagram</p>
                    <a href="https://devstagram.hugopedraza.es/" class="button button--flex button--small portfolio__button" target="_blank">
                        View
                        <i class="uil uil-arrow-right button__icon"></i>
                    </a>
                    <a class="button button--flex button--small portfolio__button" id="devstagramWeb">Info<i class="uil uil-arrow-right button__icon"></i></a>
                </div>
            </div>



            <!-- PORTFOLIO 6 -->
            <div class="porftolio__content grid swiper-slide">
                <img src="./assets/img/devjobs.png" alt="devjobs" class="portfolio__img">
                <div class="portfolio__data">
                    <h3 class="portfolio__title">DevJobs | InfoJobs Clone</h3>
                    <p class="portfolio__description">Laravel Project - Clone of InfoJobs.</p>
                    <a href="https://devjobs.hugopedraza.es/" class="button button--flex button--small portfolio__button" target="_blank">
                        View
                        <i class="uil uil-arrow-right button__icon"></i>
                    </a>
                    <a class="button button--flex button--small portfolio__button" id="devjobsWeb">Info<i class="uil uil-arrow-right button__icon"></i></a>
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





        <section class="skills section" id="skills">
            <h2 class="section__title">Skills</h2>
            <span class="section__subtitle">Tech Stack</span>

            <div class="skills__container container grid">
                <div>
                    <div class="skills__content skills__open">
                        <div class="skills__header">
                            <i class="uil uil-brackets-curly skills__icon"></i>

                            <div>
                                <h1 class="skills__title">Fullstack Developer</h1>
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
                                    <h3 class="skills__name">Laravel</h3><img src="./assets/img/laravel.svg" alt="Laravel" class="skills__icon">
                                </div>
                                <div class="skills__titles">
                                    <h3 class="skills__name">React</h3><img src="./assets/img/react.svg" alt="React" class="skills__icon">
                                </div>
                                <div class="skills__titles">
                                    <h3 class="skills__name">Docker</h3><img src="./assets/img/docker.svg" alt="Docker" class="skills__icon">
                                </div>
                                <div class="skills__titles">
                                    <h3 class="skills__name">Bootstrap</h3><img src="./assets/img/bootstrap.svg" alt="Bootstrap" class="skills__icon">
                                </div>
                                <div class="skills__titles">
                                    <h3 class="skills__name">Tailwind</h3><img src="./assets/img/tailwind.svg" alt="Tailwind" class="skills__icon">
                                </div>
                                <div class="skills__titles">
                                    <h3 class="skills__name">jQuery</h3><img src="./assets/img/jquery.svg" alt="jQuery" class="skills__icon">
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
    <h2 class="section__title">Career</h2>
    <span class="section__subtitle">My personal journey</span>
    
    <div class="qualification__container container">
        <div class="qualification__tabs">
            <div class="qualification__button button--flex qualification__active" data-target='#education'>
                <i class="uil uil-graduation-cap qualification__icon"></i>
                Education
            </div>
            <div class="qualification__button button--flex" data-target='#work'>
                <i class="uil uil-briefcase-alt qualification__icon"></i>
                Work
            </div>
        </div>

        <div class="qualification__sections">

                <!-- QUALIFICATION CONTENT 1 -->
            <div class="qualification__content qualification__active" data-content id="education">

                <!-- QUALIFICATION 1 -->
                <div class="qualification__data">
                    <div>
                        <h3 class="qualification__title">Web Application Development</h3>
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
                        <h3 class="qualification__title">Master's Degree in Human Resources</h3>
                        <span class="qualification__subtitle">University of Seville</span>
                        <div class="qualification__calendar">
                            <i class="uil uil-calendar-alt"></i>
                            2012 - 2013
                        </div>
                    </div>
                  
                </div>
                
                <!-- QUALIFICATION 3 -->

                <div class="qualification__data">
                    <div>
                        <h3 class="qualification__title">Diploma in Labour Relations</h3>
                        <span class="qualification__subtitle">University of Seville</span>
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
                        <h3 class="qualification__title">Generalist HR Technician</h3>
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
                        <h3 class="qualification__title">Generalist HR Technician</h3>
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
                        <h3 class="qualification__title">Laboral Advisor</h3>
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




<section class="contact section" id="contact">
    <h2 class="section__title">Contact me</h2>
    <span class="section__subtitle">Get in touch</span>

    <?php 

include './form.php';

?>
    

    <div class="contact__container container grid">
        <form action="" method="post" class="contact__form grid" id="formulario">
            <div class="contact__inputs grid">
                <div class="contact__content">
                    <label for="contact-name" class="contact__label">Name</label>
                    <input type="text" class="contact__input" id="contact-name" name="contact-name" required>
                </div>
                <div class="contact__content">
                    <label for="contact-email" class="contact__label">Email</label>
                    <input type="email" class="contact__input" id="contact-email" name="contact-email" required>
                </div>
                <div class="contact__content">
                    <label for="contact-project" class="contact__label">Subject</label>
                    <input type="text" class="contact__input" id="contact-project" name="contact-project" required>
                </div>
                <div class="contact__content">
                    <label for="contact-message" class="contact__label">Message</label>
                    <textarea id="contact-message" cols="30" rows="7" class="contact__input" name="message" required></textarea>                
                </div>
            </div>
            <div>
                <button type="submit" class="button button--flex" name="enviar" id="enviar" value="Send message">Send message
                </button>
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


<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <script src="./assets/js/swiper-bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/modal.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



</body>
</html>

