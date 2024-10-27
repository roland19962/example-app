<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css'])

        <link rel="stylesheet" href="/owlcarousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="/owlcarousel/assets/owl.theme.default.min.css">

    </head>
    <body>

    <div id="pop-up" class="pop-up pop-up-hide " > <!-- pop-up-hide -->

        <div id="pop-up-inner-bg" class="pop-up-inner-bg">
        </div>

        <div class="pop-up-inner">

            <div class="pop-up-form">

                            <div class="pop-up-section-title">
                                <div class="pop-up-section-title-img">
                                    <img id="pop-up-close" src="/images/close.svg" alt="close">
                                </div>
                                <div class="title">
                                    <span>Стать партнером</span>
                                </div>
                                <div class="sub-title">
                                    <span>Укажите контактный данные</span>
                                </div>
                            </div>

                            <form action="" method="post" class="ajax_form">

                                <div class="input-box w-100">
                                    <input id="pop_up__name" name="pop_up__name" required="required" type="text">
                                    <label for="pop_up__name"><span class="hide">Имя</span> <span class="red">*</span></label>
                                </div>

                                <div class="input-box w-50">
                                    <input id="pop_up__phone" name="pop_up__phone" type="tel" required="required" minlength="9">
                                    <label for="pop_up__phone"><span class="hide">Телефон</span> <span class="red">*</span></label>
                                </div>

                                <div class="input-box w-50">
                                    <input id="pop_up__email" name="pop_up__email" type="email" required="required">
                                    <label for="pop_up__email"><span class="hide">Email</span> <span class="red">*</span></label>
                                </div>

                                <div class="input-box w-50">
                                    <input id="pop_up__company" name="pop_up__company" type="text">
                                    <label for="pop_up__company"><span class="hide">Наименование компании</span></label>
                                </div>

                                <div class="input-box w-50">
                                    <input id="pop_up__city" name="pop_up__city" type="text">
                                    <label for="pop_up__city"><span class="hide">Город</span></label>
                                </div>

                                <div class="input-box w-100">
                                    <input id="pop_up__number" name="pop_up__number" type="text">
                                    <label for="pop_up__number"><span class="hide">ИНН</span></label>
                                </div>

                                <div class="control-group">
                                    <div class="send">
                                        <button type="submit"><span>Отправить</span></button>
                                    </div>
                                    <div class="text">
                                        <span>Нажимая кнопку «Отправить», вы соглашаетесь c <a href="/">политикой конфидециальности и пользовательским соглашением</a></span>
                                    </div>
                                </div>
                            </form>

            </div>
        </div>
    </div>


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

        <section class="daikin-slider container-full">
            <div class="daikin-slider-content">
                <div class="daikin-slider-owl-carousel owl-carousel">
                    <div>
                        <img src="/images/daikin_slider.svg" alt="slider">
                    </div>
                    <div>
                        <img src="/images/daikin_slider.svg" alt="slider">
                    </div>
                    <div>
                        <img src="/images/daikin_slider.svg" alt="slider">
                    </div>
                    <div>
                        <img src="/images/daikin_slider.svg" alt="slider">
                    </div>
                </div>
            </div>
        </section>

        <div class="breadcrumbs container">
            <div class="breadcrumb-link">
                <a href="/">Главная</a>
            </div>
            <div class="breadcrumb-arrow">
                <img src="/images/arrow_breadcrumb.svg">
            </div>
            <div class="breadcrumb-current">
                <span>Daikin</span>
            </div>
        </div>

        <section class="daikin-content container">

            <div class="navigation">
                <div class="title">
                    <span>Продукция</span>
                </div>
                <div class="link">
                    <a href="/">Бытовое кондиционирование</a>
                </div>
                <div class="link">
                    <a href="/">Мульти-сплит-системы</a>
                </div>
            </div>
            <div class="products">
                <div class="product">
                        <div class="info">
                            <div class="info-image">
                                <img src="/images/product_logo_1.svg" alt="product">
                            </div>
                            <div class="info-content">
                                <div class="title">
                                    <span>Бытовое кондиционирование</span>
                                </div>
                                <div class="text">
                                    <span>Это компактное оборудование, предназначенное для охлаждения воздуха в одной комнате. К этой категории относят передвижные, оконные модели. В классе RAC также представлены сплит-системы малой мощности.</span>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="item">
                                <div class="first-part">
                                    <div class="image">
                                        <img src="/images/item.jpeg" alt="item">
                                    </div>
                                    <div class="options">
                                        <div class="option">
                                            <div class="option-image">
                                                <img src="/images/option.svg" alt="option">
                                            </div>
                                            <div class="option-text">
                                                <span>DC-инвертор</span>
                                            </div>
                                        </div>
                                        <div class="option">
                                            <div class="option-image">
                                                <img src="/images/option.svg" alt="option">
                                            </div>
                                            <div class="option-text">
                                                <span>DC-инвертор</span>
                                            </div>
                                        </div>
                                        <div class="option">
                                            <div class="option-image">
                                                <img src="/images/option.svg" alt="option">
                                            </div>
                                            <div class="option-text">
                                                <span>DC-инвертор</span>
                                            </div>
                                        </div>
                                        <div class="option">
                                            <div class="option-image">
                                                <img src="/images/option.svg" alt="option">
                                            </div>
                                            <div class="option-text">
                                                <span>DC-инвертор</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="second-part">
                                    <div class="title">
                                        <span>Бытовой кондиционер AIRWAVE Серия M</span>
                                    </div>
                                    <div class="text">
                                        <span>Комфортный микроклимат и экономия энергии</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="first-part">
                                    <div class="image">
                                        <img src="/images/item_1.svg" alt="item">
                                    </div>
                                    <div class="options">
                                        <div class="option">
                                            <div class="option-image">
                                                <img src="/images/option.svg" alt="option">
                                            </div>
                                            <div class="option-text">
                                                <span>DC-инвертор</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="second-part">
                                    <div class="title">
                                        <span>Внутренний блок кондиционера Daichi ICE Inverter</span>
                                    </div>
                                    <div class="text">
                                        <span>Комфортный микроклимат и экономия энергии</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="first-part">
                                    <div class="image">
                                        <img src="/images/item_1.svg" alt="item">
                                    </div>
                                    <div class="options">
                                        <div class="option">
                                            <div class="option-image">
                                                <img src="/images/option.svg" alt="option">
                                            </div>
                                            <div class="option-text">
                                                <span>DC-инвертор</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="second-part">
                                    <div class="title">
                                        <span>Внутренний блок кондиционера Daichi ICE Inverter</span>
                                    </div>
                                    <div class="text">
                                        <span>Комфортный микроклимат и экономия энергии</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="first-part">
                                    <div class="image">
                                        <img src="/images/item_1.svg" alt="item">
                                    </div>
                                    <div class="options">
                                        <div class="option">
                                            <div class="option-image">
                                                <img src="/images/option.svg" alt="option">
                                            </div>
                                            <div class="option-text">
                                                <span>DC-инвертор</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="second-part">
                                    <div class="title">
                                        <span>Внутренний блок кондиционера Daichi ICE Inverter</span>
                                    </div>
                                    <div class="text">
                                        <span>Комфортный микроклимат и экономия энергии</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="first-part">
                                    <div class="image">
                                        <img src="/images/item_1.svg" alt="item">
                                    </div>
                                    <div class="options">
                                        <div class="option">
                                            <div class="option-image">
                                                <img src="/images/option.svg" alt="option">
                                            </div>
                                            <div class="option-text">
                                                <span>DC-инвертор</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="second-part">
                                    <div class="title">
                                        <span>Внутренний блок кондиционера Daichi ICE Inverter</span>
                                    </div>
                                    <div class="text">
                                        <span>Комфортный микроклимат и экономия энергии</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="product">
                        <div class="info">
                            <div class="info-image">
                                <img src="/images/product_logo_2.svg" alt="product">
                            </div>
                            <div class="info-content">
                                <div class="title">
                                    <span>Мульти-сплит-системы</span>
                                </div>
                                <div class="text">
                                    <span>Это компактное оборудование, предназначенное для охлаждения воздуха в одной комнате. К этой категории относят передвижные, оконные модели. В классе RAC также представлены сплит-системы малой мощности.</span>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="item">
                                <div class="first-part">
                                    <div class="image">
                                        <img src="/images/item_1.svg" alt="item">
                                    </div>
                                    <div class="options">
                                        <div class="option">
                                            <div class="option-image">
                                                <img src="/images/option.svg" alt="option">
                                            </div>
                                            <div class="option-text">
                                                <span>DC-инвертор</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="second-part">
                                    <div class="title">
                                        <span>Внутренний блок кондиционера Daichi ICE Inverter</span>
                                    </div>
                                    <div class="text">
                                        <span>Комфортный микроклимат и экономия энергии</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>

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

            <section class="our-objects container">
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
                        <div class="our-objects-slider-owl-carousel owl-carousel">
                            <div>
                                <div class="our-objects-slider-gradient"></div>
                                <img src="/images/slide1.png" alt="our-objects">
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
                            <div>
                                <div class="our-objects-slider-gradient"></div>
                                <img src="/images/slide1.png" alt="our-objects">
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
                            <div>
                                <div class="our-objects-slider-gradient"></div>
                                <img src="/images/slide1.png" alt="our-objects">
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
                        </div>
                        <div class="our-objects-slider-slider-nav">
                            <img class="our-objects-slider-am-prev" src="/images/arrow_left.svg" alt="left">
                            <img class="our-objects-slider-am-next" src="/images/arrow_right.svg" alt="right">
                        </div>


                    </div>

                </div>
            </section>

            <section class="dealers container">
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
                    <img src="/images/rb.svg" alt="map">
                </div>
            </section>

            <section class="assortment container">
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
                            <div class="assortment-slider-owl-carousel owl-carousel">
                                <div>
                                    <div class="assortment-slider-gradient"></div>
                                    <img src="/images/slide2.jpeg" alt="assortment">
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
                                <div>
                                    <div class="assortment-slider-gradient"></div>
                                    <img src="/images/slide2.jpeg" alt="assortment">
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
                                <div>
                                    <div class="assortment-slider-gradient"></div>
                                    <img src="/images/slide2.jpeg" alt="assortment">
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
                            </div>
                            <div class="assortment-slider-slider-nav">
                                <img class="assortment-slider-am-prev" src="/images/arrow_left.svg" alt="left">
                                <img class="assortment-slider-am-next" src="/images/arrow_right.svg" alt="right">
                            </div>


                        </div>


                </div>
            </section>

            <section class="support container">
                <div class="preview-title">
                    <span>Техническая поддержка</span>
                </div>
                <div class="support-content">
                    <div class="support-content-title-block">
                        <div class="support-content-title">
                            <span>Техническая поддержка партнеров</span>
                        </div>
                    </div>

                    <div class="support-content-info-block">
                        <span>У компании «Кантардо» более 250 региональных сервисных центров. Гарантийный и пост‑гарантийный ремонт, сервисное обслуживание, обучение сотрудников сервиса от специалистов, прошедших обучение на заводах производителей.</span>
                    </div>
                </div>
                <div class="support-image">
                    <img src="/images/support.svg" alt="support">
                </div>
            </section>

            <section class="partners container">
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
                            <span>«Кантардо» — долгосрочный партнёр для профессионалов климатической отрасли, которые ценят квалифицированный подход к выбору оборудования, грамотные консультации, монтаж и сервисное обслуживание.<br><br>Наша цель — помогать масштабировать бизнес наших партнёров.</span>
                        </div>
                        <div class="partners-image-info-button">
                            <button id="partners-action">Стать партнером</button>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <footer class="container-full">
            <div class="container footer">
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
                            <img src="/images/line.svg" alt="line">
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

        <script src="js/jquery.min.js"></script>
        <script src="owlcarousel/owl.carousel.min.js"></script>

        @vite(['resources/js/app.js'])

        <script type="text/javascript">




            $(document).ready(function() {

                $("#partners-action").on( "click", function() {
                    console.log('ffffffffff')
                    $( "#pop-up").removeClass("pop-up-hide");
                });
                $("#pop-up-close").on( "click", function() {
                    $( "#pop-up" ).addClass("pop-up-hide");
                });
                $("#pop-up-inner-bg" ).on( "click", function() {
                    $( "#pop-up" ).addClass("pop-up-hide");
                });

                $(".daikin-slider-owl-carousel").owlCarousel({
                    loop: false,
                    nav: false,
                    responsive: {
                        0: {
                            items: 1
                        }
                    }
                });


                $(".our-objects-slider-owl-carousel").owlCarousel({
                    loop: false,
                    nav: true,
                    dots: false,
                    navText: [$('.our-objects-slider-am-prev'), $('.our-objects-slider-am-next')],
                    responsive: {
                        0: {
                            items: 1
                        }
                    }
                });
                $(".assortment-slider-owl-carousel").owlCarousel({
                    loop: false,
                    nav: true,
                    dots: false,
                    navText: [$('.assortment-slider-am-prev'), $('.assortment-slider-am-next')],
                    responsive: {
                        0: {
                            items: 1
                        }
                    }
                });



            });

        </script>

    </body>
</html>
