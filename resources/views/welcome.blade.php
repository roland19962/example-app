<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css'])

    </head>
    <body>
        <header class="container-full">
            <div class="container header">
                <div class="logo">
                    <img src="/images/logo.svg" alt="logo">
                </div>
                <div class="menu">
                    <div class="menu-item">
                        <div class="menu-main-item menu-main-item-with-sub-items">
                            <div class="text">
                                <span>О компании</span>
                            </div>
                            <div class="image"></div>
                        </div>
                        <div class="menu-sub-items">
                                <div class="menu-sub-item">
                                    <a href="/">О компании</a>
                                </div>
                                <div class="menu-sub-item">
                                    <a href="/">Наши объекты</a>
                                </div>
                                <div class="menu-sub-item">
                                    <a href="/">Наш шоурум</a>
                                </div>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-main-item menu-main-item-with-sub-items">
                            <div class="text">
                                <span>Бренды</span>
                            </div>
                            <div class="image"></div>
                        </div>
                        <div class="menu-main-item">
                            <span></span>
                        </div>
                        <div class="menu-sub-items">
                            <div class="menu-sub-item">
                                <a href="/">Daichi</a>
                            </div>
                            <div class="menu-sub-item">
                                <a href="/">Daikin</a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-main-item">
                            <a href="/">Тех поддержка</a>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-main-item">
                            <a href="/">Стать партнером</a>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-main-item">
                            <a href="/">Контакты</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="after-header"></section>

        <div class="container-full">

            <section class="about container">
                <div class="preview-title">
                    <span>О компании</span>
                </div>
                <div class="about-content">
                    <div class="about-content-title">
                        <span>Более 25 лет поставляем климатичесоке оборудование</span>
                    </div>
                    <div class="about-content-info">
                        <span>Компания «Кантардо» является профессиональным дистрибьютором климатического оборудования ведущих мировых производителей.<br><br> С 1997 «Кантардо» поставляет в Беларусь кондиционеры, чиллеры и фанкойлы, увлажнители, вентиляционные системы и отопительные приборы. Техника от «Кантардо» создаёт комфортные условия в любом помещении. Это подтверждают сотни объектов самого разного назначения по всей стране.</span>
                    </div>
                </div>
                <div class="about-links">
                    <div class="about-link">
                        <a href="/">
                            <img src="/images/about-daikin.svg" alt="">
                        </a>
                    </div>
                    <div class="about-link">
                        <a href="/">
                            <img src="/images/about-daichi.svg" alt="">
                        </a>
                    </div>
                </div>
            </section>

            <section class="our-objects">
                <div class="preview-title">
                    <span>Реализованые проекты</span>
                </div>
                <div class="our-objects-content">
                    <div class="our-objects-content-title-block">
                        <div class="our-objects-content-title">
                            <span>Наши объекты</span>
                        </div>
                        <div class="our-objects-content-subtitle">
                            <span>Каждый объект уникален. Как и наши решения.</span>
                        </div>
                    </div>
                    <div class="our-objects-content-info-block">
                        <span>Более 1000 уже реализованных проектов убеждают в том, что «Кантардо» можно доверять проекты любой сложности. Созданные при нашем участии объекты возведены в самых разных местах — с неизменным качеством предоставленных климатических решений.</span>
                    </div>
                </div>
                <div class="our-objects-slider">
                    <div class="our-objects-slider-content">
                    </div>
                    <div class="our-objects-slider-info">
                        <div class="our-objects-slider-info-subtitle">
                            <span>объект</span>
                        </div>
                        <div class="our-objects-slider-info-title">
                            <span>Наш объект</span>
                        </div>
                        <div class="our-objects-slider-info-content">
                            <span>Более 1000 уже реализованных проектов убеждают в том, что «Контардо» можно доверять проекты любой сложности. Созданные при нашем участии объекты возведены в самых разных местах — с неизменным качеством предоставленных климатических решений.</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="dealers">
                <div class="preview-title">
                    <span>Сеть дилеров</span>
                </div>
                <div class="dealers-content">
                    <div class="dealers-content-title-block">
                        <div class="dealers-content-title">
                            <span>Дилеры</span>
                        </div>
                        <div class="dealers-content-subtitle">
                            <span>Работаем по всей Беларуси</span>
                        </div>
                    </div>
                    <div class="dealers-content-info-block">
                        <span>Кантардо — это динамично развивающаяся компания с сетью из 100 дилеров по всей стране. Мы гордимся тем, что наши партнёры выбирают нас за надёжность, качественный продукт и профессиональную поддержку на всех этапах сотрудничества.</span>
                    </div>
                </div>
                <div class="dealers-map">

                </div>
            </section>

            <section class="assortment">
                <div class="preview-title">
                    <span>ассортимент</span>
                </div>
                <div class="assortment-content">
                    <div class="assortment-content-title-block">
                        <div class="assortment-content-title">
                            <span>Наш шоурум</span>
                        </div>
                        <div class="assortment-content-subtitle">
                            <span>Большой ассортимент нашей продукции, консультация специалистов </span>
                        </div>
                    </div>
                    <div class="assortment-content-info-block">
                        <span>Шоурум Кантардо — это пространство, где вы можете познакомиться с полным ассортиментом нашей продукции в комфортной атмосфере. Здесь опытные консультанты помогут вам подобрать идеальные решения, а современный интерьер шоурума позволит оценить, как наши товары будут смотреться в реальной обстановке.</span>
                    </div>
                </div>
                <div class="assortment-slider">
                    <div class="assortment-slider-content">
                    </div>

                    <div class="assortment-slider-info">
                        <div class="assortment-slider-info-subtitle">
                            <span>ассортимент</span>
                        </div>
                        <div class="assortment-slider-info-title">
                            <span>Шоурум в Минске</span>
                        </div>
                        <div class="assortment-slider-info-content">
                            <span>Находится по адресу: г. Минск, Старовиленский тракт, 87-214</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="support">
                <div class="preview-title">
                    <span>Техническая поддержка</span>
                </div>
                <div class="support-content">
                    <div class="support-content-title">
                        <span>Техническая поддержка партнеров</span>
                    </div>
                    <div class="support-content-info-block">
                        <span>У компании «Кантардо» более 250 региональных сервисных центров. Гарантийный и пост‑гарантийный ремонт, сервисное обслуживание, обучение сотрудников сервиса от специалистов, прошедших обучение на заводах производителей.</span>
                    </div>
                </div>
                <div class="support-image">
                    <img src="/images/support.svg" alt="support">
                </div>
            </section>

            <section class="partners">
                <div class="preview-title">
                    <span>Сотрудничество</span>
                </div>
                <div class="partners-content">
                    <div class="partners-content-title-block">
                        <div class="partners-content-title">
                            <span>Стать партнером</span>
                        </div>
                        <div class="partners-content-subtitle">
                            <span>Более 6000 партнёров, лидирующие позиции на рынке</span>
                        </div>
                    </div>
                    <div class="partners-content-info-block">
                        <span>Компания «Кантардо» поставляет климатическое оборудование в Беларусь более 25 лет и занимает лидирующие позиции на рынке. У нас более 6000 партнёров и мы ценим каждого из них. Поэтому мы всегда готовы оказать всестороннюю поддержку и помощь в реализации разного вида проектов.</span>
                    </div>
                </div>
                <div class="partners-image">
                    <div class="partners-image-content">
                        <img src="/images/partners.svg" alt="partners">
                    </div>
                    <div class="partners-image-info">
                        <div class="partners-image-info-title">
                            <span>Климатическим компаниям</span>
                        </div>
                        <div class="partners-image-info-content">
                            <span>«Кантардо» — долгосрочный партнёр для профессионалов климатической отрасли, которые ценят квалифицированный подход к выбору оборудования, грамотные консультации, монтаж и сервисное обслуживание. Наша цель — помогать масштабировать бизнес наших партнёров.</span>
                        </div>
                        <div class="partners-image-info-button">
                            <button>Стать партнером</button>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <footer>
            <div class="footer">
                <div class="first-part">
                    <div class="info">
                        <div class="info-logo">
                            <img src="/images/logo.svg" alt="logo">
                        </div>
                        <div class="phone">
                            <div class="phone-image">
                                <img src="/images/phone.svg" alt="phone">
                            </div>
                            <div class="phone-link">
                                <a href="tel:+375173535009">+375(17) 353-50-09</a>
                            </div>
                        </div>
                        <div class="mail">
                            <div class="mail-image">
                                <img src="/images/mail.svg" alt="mail">
                            </div>
                            <div class="mail-link">
                                <a href="mailto:office@kantardo.by">office@kantardo.by</a>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="menu-item">
                            <div class="menu-main-item menu-main-item-with-sub-items">
                                <span>О компании</span>
                            </div>
                            <div class="menu-sub-items">
                                <div class="menu-sub-items">
                                    <div class="menu-sub-item">
                                        <a href="/">О компании</a>
                                    </div>
                                    <div class="menu-sub-item">
                                        <a href="/">Наши объекты</a>
                                    </div>
                                    <div class="menu-sub-item">
                                        <a href="/">Наш шоурум</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-main-item">
                                <span>Бренды</span>
                            </div>
                            <div class="menu-sub-items">
                                <div class="menu-sub-item">
                                    <a href="/">Daichi</a>
                                </div>
                                <div class="menu-sub-item">
                                    <a href="/">Daikin</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-main-item">
                                <a href="/">Тех поддержка</a>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-main-item">
                                <a href="/">Стать партнером</a>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-main-item">
                                <a href="/">Контакты</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="second-part">
                    <div class="left">
                        <div class="block">
                            <a href="/">Политика конфидециальности</a>
                        </div>
                        <div class="block">
                            <a href="/">©Kantardo2024. Все права защищены</a>
                        </div>
                    </div>
                    <div class="right">
                        <div class="block">
                            <span>Разработчик сайта: </span><a href="/"><span>Dewpoint </span> <img src="/images/logo_d.svg" alt="logo"></a>
                        </div>
                    </div>
                </div>
            </div>

        </footer>

        @vite(['resources/js/app.js'])

    </body>
</html>
