<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSPITAL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="./img/header/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<body>

    <header class="header">
        <div class="container">
            <!-- header nav -->
            <div class="header-nav">
                <a href="#!" class="logo">
                    <picture>
                    <source media="(max-width: 100)">
                    <img width="130px" src="./img/header/logo.svg" alt="">
                </picture></a>
                <nav id="nav" class="nav">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="#!" class="nav-link active">Главная</a></li>
                        <li class="nav-item"><a href="pages/prom.php" class="nav-link">Профиль</a></li>
                        <li class="nav-item"><a href="pages/admin.php" class="nav-link">Администрация</a></li>
                        <li class="nav-item"><a href="pages/history.php" class="nav-link">История</a></li>
                        <li class="nav-item"><a href="#foot" class="nav-link">Контакты</a></li>
                    </ul>
                    
                    <button id="nav-btn" class="nav-button">
                        <img id="nav-btn-img" src="./img/icons/nav-open.svg" alt="Nav button">
                    </button>
                </nav>
            </div>

            <!-- header content -->
            <div class="header-row">

                <div class="header-content" data-aos="fade-up">
                    <h1 class="header-heading">Официальный сайт <br> <span>ГБУЗ</span></h1>
                    <p>"Районная больница г. Чебаркуль".</p>
                </div>

                <div class="header-img" data-aos="fade-left">

                    <picture>
                        <img class="main-img" src="./img/header/main.png" alt="">
                    </picture>

                </div>
            </div>
        </div>
    </header>

    <section class="services">
        <div class="container">
            <div class="services-row">

                <div class="service-card" data-aos="fade-down">
                    <img class="service-card-img" src="./img/icons/1icon.png" alt="UI/UX Design">
                    <h3 class="service-card-title">Консультации</h3>
                    <p>Бесплатные консультации!</p>
                </div>

                <div class="service-card" data-aos="fade-down">
                    <img class="service-card-img" src="./img/icons/2icon.png" alt="UI/UX Design">
                    <h3 class="service-card-title">Инструментарий</h3>
                    <p>Разнообразие инструментов!</p>
                </div>

                <div class="service-card" data-aos="fade-down">
                    <img class="service-card-img" src="./img/icons/3icon.png" alt="UI/UX Design">
                    <h3 class="service-card-title">Поддержка</h3>
                    <p>Любая медецинская помощь!</p>
                </div>

            </div>
        </div>
    </section>
<!-- карусель -->
    <div class="portfolio-title">
        <h2 class="title-1">Больница</h2>
    </div>

    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1/3</div>
            <img class="slider-img" src="./img/portfolio/011.jpg" alt="">
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2/3</div>
            <img class="slider-img" src="./img/portfolio/022.jpg" alt="">
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3/3</div>
            <img class="slider-img" src="./img/portfolio/033.jpg" alt="">
            <div class="text"></div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094</a>
        <a class="next" onclick="plusSlides(1)">&#10095</a>

        <br>

        <div style="text-align: center;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>

<!-- Портфолио -->
    <section class="portfolio">
        <div class="container1">
            <div class="portfolio-title">
                <h2 class="title-1">Отделения</h2>
            </div>

            <div class="project-flex">
            <div style="margin-top: 130px;" class="project" data-aos="flip-up">
                <img src="./img/portfolio/port1.png" alt="Online fashion store" class="project-img">
                <h3 class="project-title"><a href="#!">Физиотерапевтическое</a></h3>
            </div>

            <div class="project" data-aos="flip-up">
                <img src="./img/portfolio/port2.png" alt="Reebok Store" class="project-img">
                <h3 class="project-title"><a href="#!">Диагностическое</a></h3>
            </div>

            <div class="project" data-aos="flip-up">
                <img src="./img/portfolio/port3.png" alt="Braun Landing Page" class="project-img">
                <h3 class="project-title"><a href="#!">Ортопедическое</a></h3>
            </div>

            <div class="project" data-aos="flip-up">
                <img src="./img/portfolio/port4.png" alt="Online fashion store" class="project-img">
                <h3 class="project-title"><a href="#!">Инфекционное</a></h3>
            </div>

            <div class="project" data-aos="flip-up">
                <img src="./img/portfolio/port5.png" alt="Reebok Store" class="project-img">
                <h3 class="project-title"><a href="#!">Хирургическое</a></h3>
            </div>

            <div class="project" data-aos="flip-up">
                <img src="./img/portfolio/port6.png" alt="Braun Landing Page" class="project-img">
                <h3 class="project-title"><a href="#!">Реанимационное</a></h3>
            </div>
        </div>
        </div>
    </section>

    <section class="portfolio1">
        <div class="container1">
            <div class="portfolio-title">
                <h2 class="title-1">Врачи</h2>
            </div>

            <div class="project-flex">
            <div style="margin-top: 130px;" class="project" data-aos="flip-up">
                <img src="img/katalog/ak1.png" alt="Online fashion store" class="project-img">
                <h3 class="project-title"><a href="#!">Матвеева Наталья Михайловна<br>Врач невролог</a></h3>
            </div>

            <div class="project" data-aos="flip-up">
                <img src="img/katalog/ak2.png" alt="Reebok Store" class="project-img">
                <h3 class="project-title"><a href="#!">Юдин Алексей Викторович<br>Врач эндокринолог</a></h3>
            </div>

            <div class="project" data-aos="flip-up">
                <img src="img/katalog/ak3.png" alt="Braun Landing Page" class="project-img">
                <h3 class="project-title"><a href="#!">Кушнаренко Дарья Александровна<br>Врач травматолог</a></h3>
            </div>

            <div class="project" data-aos="flip-up">
                <img src="img/katalog/ak4.png" alt="Online fashion store" class="project-img">
                <h3 class="project-title"><a href="#!">Федулов Антон Викторович<br>Врач психиатр</a></h3>
            </div>

            <div class="project" data-aos="flip-up">
                <img src="img/katalog/ak5.png" alt="Reebok Store" class="project-img">
                <h3 class="project-title"><a href="#!">Мартынова Ирина Георгиевна<br>Врач кардиолог</a></h3>
            </div>

            <div class="project" data-aos="flip-up">
                <img src="img/katalog/ak6.png" alt="Braun Landing Page" class="project-img">
                <h3 class="project-title"><a href="#!">Леонович Александр Михайлович<br>Врач хирург</a></h3>
            </div>
        </div>
        </div>
    </section>


    <!-- footer -->
    <footer id="foot" class="contacts">
        <div class="container">
            <div class="contacts-title">
                <h2 class="title-1">Контакты</h2>
            </div>

            <div class="contacts-content" data-aos="fade-down">
                <p>Колл-центр  +7(35168) 5-52-15<br>
                   Регистратура +7 (35168) 6-03-28<br>
                   Вызов на дом +7 (35168) 6-03-21
                </p>
            </div>

            <div class="contacts-button" data-aos="fade-down">
                <a href="#!" class="btn">Написать сообщение</a>
            </div>

            <ul class="foot">
                <li style="--i:#a955ff;--j:#ea51ff;">
                  <span class="icon"><i class="fa fa-facebook"></i></span>
                  <span class="titulo">facebook</span>
                </li>

                <li style="--i:#56CCF2;--j:#2F80ED;">
                  <span class="icon"><i class="fa fa-twitter"></i></span>
                  <span class="titulo">twitter</span>
                </li>

                <li style="--i:#86be6b;--j:#1baf16;">
                  <span class="icon"><i class="fa fa-whatsapp"></i></span>
                  <span class="titulo">whatsapp</span>
                </li>

                <li style="--i:#80FF72;--j:#5ec3d4;">
                  <span class="icon"><i class="fa fa-linkedin"></i></span>
                  <span class="titulo">linkedin</span>
                </li>
                
                <li style="--i:#FFA9C6;--j:#F434E2;">
                  <span class="icon"><i class="fa fa-instagram"></i></span>
                  <span class="titulo">instagram</span>
                </li>
              </ul>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/main.js"></script>
</body>
</html>