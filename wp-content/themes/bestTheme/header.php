<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__top">
                <div class="header__top-left">
                    <a href="#" class="header__logo"></a>
                    <div class="header__info">
                        <div class="header__info-place">г. Москва, Хлебозаводский проезд, 7, стр.9</div>
                        <div class="header__info-tels">
                            <span>Тел.:</span>
                            <a href="tel:84993945161" class="header__info-tel">+7 (499) 394-51-61</a><span
                                    class="header__info-comma">,</span>
                            <a href="tel:89165456600" class="header__info-tel">+7 (916) 545-66-00</a>
                        </div>
                        <div class="header__info-mail">
                            <span>E-mail: </span><a href="mailto:bсserviсеs@mail.ru" class="header__info-tel">bсserviсеs@mail.ru</a>
                        </div>
                    </div>
                </div>
                <div class="header__top-right">
                    <div class="header__timetable">
                        <div class="header__timetable-item">Пн-пт: 09:00-21:00</div>
                        <div class="header__timetable-item">Сб-вс: 11:00-20:00</div>
                    </div>
                    <div class="header__down">
                        <button class="btn btn--blue header__btn " data-modalTitle="Срочный вызов">Срочный вызов</button>
                    </div>
                </div>
            </div>


            <nav class="nav nav--blue">
                <?php
                global $walker;
                wp_nav_menu([
                    'menu' => 2,
                    'container' => false,
                    'items_wrap' => '<ul id="%1$s" class="%2$s header__nav">%3$s</ul>',
                ]) ?>
                <ul class="header__nav">
                    <li class="header__nav-item header__nav-item--active">
                        <a href="index.html" class="header__nav-link">Главная</a>
                    </li>
                    <li class="header__nav-item header__nav-item--subnav">
                        <a href="services.html" class="header__nav-link">Услуги</a>
                        <ul class="header__subnav">
                            <li class="header__subnav-item">
                                <a href="service-1.html" class="header__subnav-link">Прочистка труб</a>
                            </li>
                            <li class="header__subnav-item">
                                <a href="service-1.html" class="header__subnav-link">Обслуживание септика</a>
                            </li>
                            <li class="header__subnav-item">
                                <a href="service-1.html" class="header__subnav-link">Телеинспекция
                                    и видеодиагностика</a>
                            </li>
                            <li class="header__subnav-item">
                                <a href="service-1.html" class="header__subnav-link">Разморозка трубопроводов</a>
                            </li>
                            <li class="header__subnav-item">
                                <a href="service-1.html" class="header__subnav-link">Откачка и утилизация сточных
                                    вод</a>
                            </li>
                            <li class="header__subnav-item">
                                <a href="service-1.html" class="header__subnav-link">Аварийный ремонт систем
                                    водоснабжения, теплоснабжения и водоотведения</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header__nav-item">
                        <a href="price-list.html" class="header__nav-link">Прайс-лист</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="contacts.html" class="header__nav-link">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header__container">
            <div class="container">
                <div class="header__container-burger">
                    <a href="#" class="header__logo"></a>
                    <div class="header__burger">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__mask"></div>
    </div>
</header>
