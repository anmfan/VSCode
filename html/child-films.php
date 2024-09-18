<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="../scss/main.css">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <title>MovieSearch</title>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="header__container">
            <div class="header__logo">
                <a href="#">
                    <img src="../images/logo.png" alt="логотип" width="100" height="85">
                </a>
            </div>
            <div class="header__menu">
                <nav>
                    <ul class="header__list">
                        <li><a class="header__list-item header__list-categories header__list-link" href="films.php" aria-label="фильмы">Фильмы</a></li>
                        <li><a class="header__list-item header__list-categories header__list-link" href="series.php" aria-label="сериалы">Сериалы</a></li>
                        <li><a class="header__list-item header__list-categories header__list-link active" href="#" aria-label="мультфильмы">Мультфильмы</a></li>
                        <li><a class="header__list-item header__list-categories header__list-link" href="anime.php" aria-label="аниме">Аниме</a></li>
                        <li><a class="header__list-item header__list-categories header__list-search" href="#">
                                <svg class="search-icon" id="search-icon_header" width="23px" height="23px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#b0a8a8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a></li>
                        <li class="header__list-item header__list-search-field none">
                            <input class="search-field" id="search" type="text" autocomplete="off">
                            <label class="label-search-field" for="search">Поиск</label>
                            <svg class="close-icon_header none" width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.7457 3.32851C20.3552 2.93798 19.722 2.93798 19.3315 3.32851L12.0371 10.6229L4.74275 3.32851C4.35223 2.93798 3.71906 2.93798 3.32854 3.32851C2.93801 3.71903 2.93801 4.3522 3.32854 4.74272L10.6229 12.0371L3.32856 19.3314C2.93803 19.722 2.93803 20.3551 3.32856 20.7457C3.71908 21.1362 4.35225 21.1362 4.74277 20.7457L12.0371 13.4513L19.3315 20.7457C19.722 21.1362 20.3552 21.1362 20.7457 20.7457C21.1362 20.3551 21.1362 19.722 20.7457 19.3315L13.4513 12.0371L20.7457 4.74272C21.1362 4.3522 21.1362 3.71903 20.7457 3.32851Z" fill="#a4a0a0"/>
                            </svg>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header__account">
                <a href="#" aria-label="Поиск">
                    <svg class="header__account-profile" width="30px" height="30px" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <style>.cls-1{fill:none;stroke:#a4a0a0;stroke-miterlimit:10;stroke-width:2px;}</style>
                        </defs>
                        <circle class="cls-1" cx="12" cy="7.25" r="5.73"/>
                        <path class="cls-1" d="M1.5,23.48l.37-2.05A10.3,10.3,0,0,1,12,13h0a10.3,10.3    ,0,0,1,10.13,8.45l.37,2.05"/></svg>
                </a>
                <div class="header__account-window none">
                    <div class="header__account-window-content">
                        <button class="button-window button-register" id="btn-reg" type="button" aria-label="регистрация">Регистрация</button>
                        <button class="button-window button-auth" id="btn-auth" type="button" aria-label="вход">Вход</button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="content child-films">
            <div class="child-films-container">
                <div class="swiper3 child-films-poster">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="slider zootopia">
                                <img class="image image-child-films zootopia-film" src="../images/main/child-films/zootopia.jpg" alt="постер">
                                <button class="btn-slider zootopia-btn" type="button" aria-label="смотреть">Смотреть</button>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider inside-out">
                                <img class="image image-child-films inside-out-film" src="../images/main/child-films/inside-out.jpg" alt="постер">
                                <button class="btn-slider inside-out-btn" type="button" aria-label="смотреть">Смотреть</button>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider spsv">
                                <img class="image image-child-films spsv-film" src="../images/main/child-films/spsv.jpg" alt="постер">
                                <button class="btn-slider spsv-btn" type="button" aria-label="смотреть">Смотреть</button>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider dragon3">
                                <img class="image image-child-films dragon3-film" src="../images/main/child-films/dragon3.jpg" alt="постер">
                                <button class="btn-slider dragon3-btn" type="button" aria-label="смотреть">Смотреть</button>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider coco">
                                <img class="image image-child-films coco-film" src="../images/main/child-films/coco.jpg" alt="постер">
                                <button class="btn-slider coco-btn" type="button" aria-label="смотреть">Смотреть</button>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider soul">
                                <img class="image image-child-films soul-film" src="../images/main/child-films/soul.jpg" alt="постер">
                                <button class="btn-slider soul-btn" type="button" aria-label="смотреть">Смотреть</button>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider ralph">
                                <img class="image image-child-films ralph-film" src="../images/main/child-films/ralph.jpg" alt="постер">
                                <button class="btn-slider ralph-btn" type="button" aria-label="смотреть">Смотреть</button>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider toy-story">
                                <img class="image image-child-films toy-story-film" src="../images/main/child-films/toy-story.jpg" alt="постер">
                                <button class="btn-slider toy-story-btn" type="button" aria-label="смотреть">Смотреть</button>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider sing2">
                                <img class="image image-child-films sing2-film" src="../images/main/child-films/sing2.jpg" alt="постер">
                                <button class="btn-slider sing2-btn" type="button" aria-label="смотреть">Смотреть</button>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider onward">
                                <img class="image image-child-films onward-film" src="../images/main/child-films/onward.jpg" alt="постер">
                                <button class="btn-slider onward-btn" type="button" aria-label="смотреть">Смотреть</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer"></footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/swiper.js"></script>
</body>
</html>