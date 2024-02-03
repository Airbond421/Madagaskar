<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madagascar</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/styles.css">

    <script defer src="js/index.js" type="module"></script>
</head>
<body>
    <header class="header">
        <div class="header__top-menu">
            <img class="header__logo" src="images/logoMadagascar.png" alt="logo">
            <div class="header__form">
                <label class="header__label">
                    <input class="header__input" placeholder="Поиск товаров">
                </label>
                <button class="header__button">
                    <i class="header__search material-icons">search</i>
                </button>
            </div>
            <div class="header__phone">
                <i class="header__call material-icons">call</i>
                <a class="header__link-phone" href="tel:+79521132415">+7 (952) 113-24-15</a>
            </div>
        </div>
        <div class="header__lower-menu">
            <nav class="header__nav">
                <ul class="header__list">
                    <li class="header__item">
                        <a class="header__link" href="#">Главная</a>
                    </li>
                    <li class="header__item">
                        <a class="header__link" href="#">Личный кабинет</a>
                    </li>
                    <li class="header__item">
                        <a class="header__link" href="#">Корзина</a>
                    </li>
                </ul>
                <button class="header__come-in">Войти</button>
            </nav>
        </div>
    </header>
    <main class="main">
        <div class="main__container container">
            <section class="tags">
                <div class="tags__container">
                    <h2 class="tags__heading">Теги:</h2>
                    <ul class="tags__list">
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>

                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>

                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>

                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>

                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>

                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>

                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                        <li class="tags__item">
                            <a class="tags__link" href="#">Test</a>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="product">
                <ul class="product__list">
                    <li class="product__wrapper">
                        <div class="product__content">
                            <img class="product__images" src="images/productImages.png" alt="product">
                            <div class="product__bottom-content">
                                <div class="product__left-content">
                                    <div class="product__details">
                                        <h2 class="product__heading">Корм Premier</h2>
                                        <p class="product__price">570 ₽</p>
                                    </div>
                                    <button class="product__buy">
                                        <i class="material-icons product__icon-buy">add_shopping_cart</i>
                                    </button>
                                </div>
                                <div class="product__right-content">
                                    <div class="product__right-done">
                                        <i class="material-icons product__done-icon">done</i>
                                    </div>
                                    <div class="product__details">
                                        <h2 class="product__heading product__heading-details">Корм Premier</h2>
                                        <p class="product__price product__price-details">Товар в корзине</p>
                                    </div>
                                    <div class="product__right-remove">
                                        <i class="material-icons product__remove-icon">clear</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__information">
                            <div class="product__container-icon">
                                <i class="product__icon material-icons">info_outline</i>
                            </div>
                            <div class="product__more-content">
                                <p class="product__info">Для взрослых кошек с нормальной активностью,
                                    чувствительным пищеварением или склонных к аллергии.<br>
                                    Свежее гипоаллергенное и питательное мясо ягненка и постной индейки благотворно влияют на пищеварительную систему кошки.
                                    Благодаря гипоаллергенным ингредиентам, одному виду зерновых, отсутствию глютена, корм имеет отличную усвояемость,
                                    высокую пищевую ценность и помогает оставаться вашему питомцу здоровым и жизнерадостным на протяжении долгих лет жизни.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="product__wrapper">
                        <div class="product__content">
                            <img class="product__images" src="images/productImages.png" alt="product">
                            <div class="product__bottom-content">
                                <div class="product__left-content">
                                    <div class="product__details">
                                        <h2 class="product__heading">Корм Premier</h2>
                                        <p class="product__price">570 ₽</p>
                                    </div>
                                    <button class="product__buy">
                                        <i class="material-icons product__icon-buy">add_shopping_cart</i>
                                    </button>
                                </div>
                                <div class="product__right-content">
                                    <div class="product__right-done">
                                        <i class="material-icons product__done-icon">done</i>
                                    </div>
                                    <div class="product__details">
                                        <h2 class="product__heading product__heading-details">Корм Premier</h2>
                                        <p class="product__price product__price-details">Товар в корзине</p>
                                    </div>
                                    <div class="product__right-remove">
                                        <i class="material-icons product__remove-icon">clear</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__information">
                            <div class="product__container-icon">
                                <i class="product__icon material-icons">info_outline</i>
                            </div>
                            <div class="product__more-content">
                                <p class="product__info">Для взрослых кошек с нормальной активностью,
                                    чувствительным пищеварением или склонных к аллергии.<br>
                                    Свежее гипоаллергенное и питательное мясо ягненка и постной индейки благотворно влияют на пищеварительную систему кошки.
                                    Благодаря гипоаллергенным ингредиентам, одному виду зерновых, отсутствию глютена, корм имеет отличную усвояемость,
                                    высокую пищевую ценность и помогает оставаться вашему питомцу здоровым и жизнерадостным на протяжении долгих лет жизни.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="product__wrapper">
                        <div class="product__content">
                            <img class="product__images" src="images/productImages.png" alt="product">
                            <div class="product__bottom-content">
                                <div class="product__left-content">
                                    <div class="product__details">
                                        <h2 class="product__heading">Корм Premier</h2>
                                        <p class="product__price">570 ₽</p>
                                    </div>
                                    <button class="product__buy">
                                        <i class="material-icons product__icon-buy">add_shopping_cart</i>
                                    </button>
                                </div>
                                <div class="product__right-content">
                                    <div class="product__right-done">
                                        <i class="material-icons product__done-icon">done</i>
                                    </div>
                                    <div class="product__details">
                                        <h2 class="product__heading product__heading-details">Корм Premier</h2>
                                        <p class="product__price product__price-details">Товар в корзине</p>
                                    </div>
                                    <div class="product__right-remove">
                                        <i class="material-icons product__remove-icon">clear</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__information">
                            <div class="product__container-icon">
                                <i class="product__icon material-icons">info_outline</i>
                            </div>
                            <div class="product__more-content">
                                <p class="product__info">Для взрослых кошек с нормальной активностью,
                                    чувствительным пищеварением или склонных к аллергии.<br>
                                    Свежее гипоаллергенное и питательное мясо ягненка и постной индейки благотворно влияют на пищеварительную систему кошки.
                                    Благодаря гипоаллергенным ингредиентам, одному виду зерновых, отсутствию глютена, корм имеет отличную усвояемость,
                                    высокую пищевую ценность и помогает оставаться вашему питомцу здоровым и жизнерадостным на протяжении долгих лет жизни.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__categories">
            <ul class="footer__list-categories">
                <li class="footer__item-categories"></li>
            </ul>
        </div>
        <div class="footer__social-media">
            <ul class="footer__list-social-media">
                <li class="footer__item-social-media">
                    <a class="footer__link" href="#">
                        <svg fill="#ffff" width="30px" height="30px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.094 7.75c0-1.188 0.813-1.656 1.813-1.719l4.656 0.031c0.281 0 0.531 0.188 0.625 0.469 1.063 3.438 2.375 5.563 3.938 7.969 0.094 0.188 0.25 0.281 0.406 0.281 0.125 0 0.25-0.063 0.344-0.219l0.094-0.344 0.031-5.406c0-0.781-0.375-0.906-1.25-1.031-0.344-0.063-0.563-0.375-0.563-0.688 0-0.063 0-0.125 0.031-0.188 0.438-1.344 1.813-2.031 3.75-2.031l1.75-0.031c1.438 0 2.75 0.625 2.75 2.469v7.094c0.125 0.094 0.25 0.156 0.406 0.156 0.25 0 0.563-0.156 0.813-0.563 1.625-2.281 3.469-5 3.719-6.438 0-0.063 0.031-0.094 0.063-0.156 0.344-0.688 1.219-1.156 1.594-1.281 0.063-0.031 0.156-0.063 0.281-0.063h4.844l0.313 0.031c0.469 0 0.813 0.313 0.969 0.594 0.281 0.438 0.219 0.906 0.25 1.094v0.219c-0.469 2.844-3.719 6.031-5.094 8.094-0.188 0.25-0.281 0.469-0.281 0.688 0 0.188 0.094 0.375 0.25 0.563l4.563 5.75c0.25 0.344 0.375 0.75 0.375 1.094 0 1.031-0.969 1.625-1.906 1.719l-0.531 0.031h-4.75c-0.094 0-0.156 0.031-0.25 0.031-0.531 0-0.969-0.281-1.281-0.594-1-1.219-1.969-2.469-2.938-3.688-0.188-0.25-0.25-0.281-0.438-0.406-0.219 0.906-0.406 1.844-0.625 2.781l-0.094 0.531c-0.156 0.563-0.563 1.156-1.313 1.313l-0.438 0.031h-3.063c-5.406 0-10.25-7.688-13.656-17.281-0.094-0.25-0.156-0.594-0.156-0.906zM18.875 15.844c-0.813 0-1.719-0.469-1.719-1.344v-7.188c0-0.844-0.375-1.156-1.406-1.156l-1.781 0.063c-1 0-1.563 0.156-2.031 0.469 0.719 0.344 1.375 0.813 1.375 2.125v5.5c-0.094 1.094-1 1.813-1.875 1.813-0.594 0-1.125-0.344-1.438-0.906-1.406-2.125-2.594-4.125-3.625-7l-0.281-0.813-4.156-0.031c-0.563 0-0.5 0.031-0.5 0.313 0 0.188 0.031 0.438 0.063 0.594l0.656 1.75c3.406 8.813 7.688 14.594 11.75 14.594h3.125c0.438 0 0.406-0.531 0.5-0.844l0.594-2.75c0.125-0.281 0.219-0.531 0.438-0.75 0.25-0.25 0.531-0.344 0.813-0.344 0.594 0 1.156 0.469 1.531 0.906l2.656 3.375c0.219 0.344 0.406 0.406 0.531 0.406h5.156c0.5 0 0.938-0.156 0.938-0.469 0-0.094-0.031-0.219-0.094-0.313l-4.531-5.656c-0.375-0.469-0.531-0.938-0.531-1.406 0-0.5 0.188-1 0.5-1.438 1.313-1.969 4.125-4.781 4.781-7.094l0.094-0.406c-0.031-0.156-0.031-0.281-0.063-0.438h-4.906c-0.313 0.125-0.563 0.313-0.75 0.563l-0.188 0.594c-0.719 2-2.688 4.75-4.094 6.656-0.469 0.438-1 0.625-1.531 0.625z"></path>
                        </svg>
                    </a>
                </li>
                <li class="footer__item-social-media">
                    <a class="footer__link" href="#">
                        <svg fill="#ffff" width="30px" height="30px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                            <path d="M664.6 729.8c-9.6-2.6-21.198.8-35.398 10.201l-1.4 1.2c-23 23-64.8 34.6-124.2 34.6s-101.2-11.6-124.2-34.6c-9.6-9.6-29-9.6-38.6 0-10 10-10 28.6.6 39.2C384 816 437.6 832.6 509.8 832.6c75 0 135-18.8 169-52.8 4.8-4.8 7.6-11.8 7.6-19.2 0-6.8-2.4-13.4-6.4-18-4.6-8.4-10.8-11.6-15.4-12.8zM438.2 579.399c0-44.2-37.2-84.4-78.2-84.4s-78.2 40.2-78.2 84.4c0 42.4 35.8 78.2 78.2 78.2s78.2-35.8 78.2-78.2zm221.401-78.2c-42.4 0-78.2 35.8-78.2 78.2s35.8 78.2 78.2 78.2 78.2-35.8 78.2-78.2-35.8-78.2-78.2-78.2zm237-124.8c-25.6 0-55.6 11.6-75.8 28.6-68-43.2-159.8-70-267.2-77.8l50-167 140.2 33.6c4.2 51.8 50.4 95.599 102.801 95.599 55 0 103.2-48.2 103.2-103.2s-48.2-103.2-103.2-103.2c-37.8 0-76 23-92.8 54.6l-166.8-41.8-2.4-.2c-11.4 0-27.2 10-28.2 26.6l-66 204.2c-105.2 1.2-208.601 29.2-292.4 79.4-25-15.6-49.6-23.2-75-23.2-67.2 0-122 54.6-122 122 0 42 20.2 79.4 56.2 99.4V629.4c0 87.2 47 163.2 135.2 220 83 57.4 195.8 89 317.6 89s237.8-31.6 320.8-89c87.2-60.4 138.4-138.6 138.4-220v-26c26-22.8 52.8-63.6 52.8-105.2-.2-67.2-58-121.8-125.401-121.8zm65.4 128.201c0 11.4-6.401 27.6-17.001 39.6-12.6-33.4-36.4-65-74.6-99.4 7.6-3.2 16-5.4 26.4-5.4 38.401-.2 65.201 26.8 65.201 65.2zM905.8 629.399c0 78-59 137.201-107.8 172.801-84.8 52.2-184.399 79.8-288.199 79.8-107.2 0-212.2-29-288-79.6-74.8-49.8-114.2-109.6-114.2-173s39.4-123.2 114.2-173c77-51.2 177-79.6 281.8-79.6 107.2 0 212.2 29 288 79.6 74.6 49.799 114.199 109.6 114.199 173zM150.399 442.4c-32.2 25.6-59.6 59.8-78.8 98.6-7.8-12.599-14-25-14-36.4 0-38.4 26.8-65.2 65.2-65.2 13-.2 21 0 27.6 3zM800.2 186.401c0-26.2 20.4-46.6 46.6-46.6s46.601 20.4 46.601 46.6-20.4 46.6-46.6 46.6c-26.2-.2-46.601-20.6-46.601-46.6z"/>
                        </svg>
                    </a>
                </li>
                <li class="footer__item-social-media">
                    <a class="footer__link" href="#">
                        <svg width="30px" height="30px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke-width="3" stroke="#ffff" fill="none">
                            <path d="M41.6,20.92A14.13,14.13,0,1,0,32.7,46c6.17,0,10.87-3.91,12.79-9.43H32V27.41H55.6"/><path d="M55.6,27.41c0,2.22,0,3,0,4.59a23.61,23.61,0,1,1-7.86-17.58l-6.2,6.45" stroke-linecap="square"/>
                        </svg>
                    </a>
                </li>
                <li class="footer__item-social-media">
                    <a class="footer__link" href="#">
                        <svg width="30px" height="30px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke-width="3" stroke="#ffff" fill="none">
                            <path d="M26.67,38.57l-.82,11.54A2.88,2.88,0,0,0,28.14,49l5.5-5.26,11.42,8.35c2.08,1.17,3.55.56,4.12-1.92l7.49-35.12h0c.66-3.09-1.08-4.33-3.16-3.55l-44,16.85C6.47,29.55,6.54,31.23,9,32l11.26,3.5L45.59,20.71c1.23-.83,2.36-.37,1.44.44Z" stroke-linecap="round"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
</body>