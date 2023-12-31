<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSPITAL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../img/header/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/media.css">
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
                    <img width="100px" src="../img/header/logo.svg" alt="">
                </picture></a>

                <nav id="nav" class="nav">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="../index.php" class="nav-link active">Главная</a></li>
                        <li class="nav-item"><a href="prom.php" class="nav-link">Профиль</a></li>
                        <li class="nav-item"><a href="admin.php" class="nav-link">Администрация</a></li>
                        <li class="nav-item"><a href="history.php" class="nav-link">История</a></li>
                        <li class="nav-item"><a href="#foot" class="nav-link">Контакты</a></li>
                    </ul>

                    <button id="nav-btn" class="nav-button">
                        <img id="nav-btn-img" src="../img/icons/nav-open.svg" alt="Nav button">
                    </button>
                </nav>
            </div>

            <!-- header content -->
            <div class="header-row">

            <div class="header-content" data-aos="fade-up">
                    <h1 class="header-heading">Официальный сайт <br> <span>ГБУЗ</span></h1>
                    <p>"Районная больница г. Чебаркуль".</p>
                </div>

                <div class="header-img">

                    <picture>
                        <img class="main-img" width="493px" height="613px" src="../img/header/main.png" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </header>

	<body>

    <!-- форма регистрации -->
	<div class="wrapper" data-aos="fade-up">
            <div class="container">
                <form class="form" action="reg.php" id="registerform" method="post"name="registerform">
                    <span class="form-title">Регистрация</span>
                    <div class="form-group">
					<label for="user_login">Фамилия</label>
                        <input id="Surname" name="Surname" size="32"  type="text" value="" class="form-control" placeholder="фамилия" required />
                    </div>

                    <div class="form-group">
					<label for="user_login">Имя</label>
                        <input id="Name" name="Name" size="32"  type="text" value="" class="form-control" placeholder="имя" required />
                    </div>   

                    <div class="form-group">
					<label for="user_login">Отчество</label>
                        <input id="Patronymic" name="Patronymic" size="32"  type="text" value="" class="form-control" placeholder="отчество" required />
                    </div>    

                    <div class="form-group">
					<label for="user_pass">E-mail</label>
                        <input id="Mail" name="Mail" size="32" type="email" value="" class="form-control" placeholder="почта" required>
                    </div>

					<div class="form-group">
					<label for="user_pass">Логин</label>
                        <input id="Username" name="Username"size="20" type="text" value="" class="form-control" placeholder="логин" required>
                    </div>

					<div class="form-group">
					<label for="user_pass">Пароль</label>
                        <input id="Password" name="Password"size="32"   type="password" value="" class="form-control" placeholder="пароль" required>
                    </div>

                    <div class="form-group">
                        <input id="register" name= "register" type="submit" value="Зарегистрироваться" class="btn btn-primary btn-lg btn-block">
                    </div>

                    <p class="regtext">Уже зарегистрированы? <a href= "login.php">Войти</a>!</p>
                </form>
            </div>
    </div>
		
        <!-- footer -->
		<footer id="foot" class="contacts">
        <div class="container">
            <div class="contacts-title">
                <h2 class="title-1">Контакты</h2>
            </div>

            <div class="contacts-content">
                <p>Колл-центр  +7(35168) 5-52-15<br>
                   Регистратура +7 (35168) 6-03-28<br>
                   Вызов на дом +7 (35168) 6-03-21
                </p>
            </div>

            <div class="contacts-button">
                <a href="#!" class="butn">Написать сообщение</a>
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
    <script src="../js/dop.js"></script>
</body>
</html>