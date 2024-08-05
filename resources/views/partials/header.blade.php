<header>
    @vite('resources/scss/header.scss')
    <div class="container">
        <div class="header">
            <div class="header__top">
                <div class="header__logo"> <a href="/"> ООО «ПолифортМаш» </a> </div>
                <div class="header__info">
                    <div class="header__info__wrap">
                        <div class="header__info__item mb-2">
                            <i class="bi bi-geo-alt"></i>
                            г. Самара, ул. Революционная, д. 70, литера п, офис 409
                        </div>
                        <div class="header__info__item">
                            <i class="bi bi-clock"></i>
                            Пн-Пт: 8:00-18:00
                        </div>
                    </div>

                    <div class="header__info__wrap">
                        <div class="header__info__item mb-2">
                            <i class="bi bi-telephone"></i>
                            <a href="tel:+78463425226">8 (846) 342-52-26</a>
                        </div>
                        <div class="header__info__item">
                            <i class="bi bi-envelope"></i>
                            <a href="mailto:polifort-pro@mail.ru ">polifort-pro@mail.ru</a>
                        </div>
                    </div>
                </div>

            </div>

            <nav class="header__nav">
                <ul>
                    <li><a href="{{ route('home') }}">Главная</a></li>
                    <li><a href="{{ route('about') }}">О нас</a></li>
                    <li><a href="{{ route('products') }}">Продукция</a></li>
                    <li><a href="{{ route('contacts') }}">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
