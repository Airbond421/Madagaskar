<div class="form__container">
    <div class="form__box">
        <div class="form__login-tab"></div>
        <div class="form__login-title">
            <button class="form__button-close">
                <i class="form__icon-login material-icons">close</i>
            </button>
        </div>
        <div class="form__login-container">
            <button class="form__open-menu">
                <svg width="20px" height="20px" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" d="M5.7 12.1143C4.82423 12.1143 4.11429 12.8242 4.11429 13.7C4.11429 14.5758 4.82423 15.2857 5.7 15.2857C6.57577 15.2857 7.28571 14.5758 7.28571 13.7C7.28571 12.8242 6.57577 12.1143 5.7 12.1143ZM2 13.7C2 11.6565 3.65655 10 5.7 10C7.74345 10 9.4 11.6565 9.4 13.7C9.4 15.7435 7.74345 17.4 5.7 17.4C3.65655 17.4 2 15.7435 2 13.7Z" fill="#1c7430" fill-rule="evenodd"/>
                    <path clip-rule="evenodd" d="M22.7 12.1143C21.8242 12.1143 21.1143 12.8242 21.1143 13.7C21.1143 14.5758 21.8242 15.2857 22.7 15.2857C23.5758 15.2857 24.2857 14.5758 24.2857 13.7C24.2857 12.8242 23.5758 12.1143 22.7 12.1143ZM19 13.7C19 11.6565 20.6565 10 22.7 10C24.7435 10 26.4 11.6565 26.4 13.7C26.4 15.7435 24.7435 17.4 22.7 17.4C20.6565 17.4 19 15.7435 19 13.7Z" fill="#1c7430" fill-rule="evenodd"/>
                    <path clip-rule="evenodd" d="M14.2 12.1143C13.3242 12.1143 12.6143 12.8242 12.6143 13.7C12.6143 14.5758 13.3242 15.2857 14.2 15.2857C15.0758 15.2857 15.7857 14.5758 15.7857 13.7C15.7857 12.8242 15.0758 12.1143 14.2 12.1143ZM10.5 13.7C10.5 11.6565 12.1565 10 14.2 10C16.2435 10 17.9 11.6565 17.9 13.7C17.9 15.7435 16.2435 17.4 14.2 17.4C12.1565 17.4 10.5 15.7435 10.5 13.7Z" fill="#1c7430" fill-rule="evenodd"/>
                </svg>
            </button>
            <form class="form__main-container" method="post" action="/">
                <div class="form__input-container">
                    <div class="form__input-container form__container-name form__input-register">
                        <label class="form__label" for="name">ИМЯ</label>
                        <input class="form__input" type="text" id="name" name="name" >
                    </div>
                    <div class="form__input-container form__container-surname form__input-register">
                        <label class="form__label" for="surname">ФАМИЛИЯ</label>
                        <input class="form__input" type="text" id="surname" name="surname">
                    </div>
                    <div class="form__input-container form__container-phone form__input-register">
                        <label class="form__label" for="phone">Телефон</label>
                        <input class="form__input" type="text" id="phone" name="phone">
                    </div>
                    <div class="form__input-container form__container-email">
                        <label class="form__label" for="email">E-MAIL</label>
                        <input class="form__input" type="text" id="email" name="email" >
                    </div>
                    <div class=" form__input-container form__container-password">
                        <label class="form__label" for="password">ПАРОЛЬ</label>
                        <input class="form__input" type="password" id="password" name="password">
                    </div>
                </div>
                <button class="form__button" type="submit" name="log_in">ВОЙТИ</button>
                <button class="form__button form__button-register" type="submit" name="register">ЗАРЕГИСТРИРОВАТЬСЯ</button>
            </form>
        </div>
    </div>
    <div class="form__container-info">
        <div class="form__container-help">
            <button class="form__info-close">
                <i class="form__icon-close material-icons">close</i>
            </button>
            <h3 class="form__info-heading">Нужна помощь?</h3>
        </div>
        <a href="#footer" class="form__button-menu form__button-support">Связаться с нами</a>
        <a class="form__button-menu form__create-account">Создать аккаунт</a>
    </div>
</div>
