@extends('layouts.app')
@section('content')
    <!--Main Slider Start-->
    <section class="main-slider clearfix" id="home">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
            "effect": "fade",
            "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 5000
            }}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url({{ asset('assets/images/backgrounds/main-slider-1-1.png') }});"></div>
                    <!-- /.image-layer -->

                    <div class="main-slider-shape-1"
                        style="background-image: url({{ asset('assets/images/shapes/main-slider-shape-1.jpg') }});"></div>
                    <div class="main-slider-shape-2 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-2.png') }}" alt="">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8">
                                <div class="main-slider__content">
                                    <p class="main-slider__sub-title">Siempre dona para niños</p>
                                    <h2 class="main-slider__title">Brinde una mano amiga a los necesitados</h2>
                                    <div class="main-slider__btn-box">
                                        <a href="#!" class="thm-btn main-slider__btn"> Descubrir más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url({{ asset('assets/images/backgrounds/main-slider-1-2.png') }});"></div>
                    <!-- /.image-layer -->

                    <div class="main-slider-shape-1"
                        style="background-image: url({{ asset('assets/images/shapes/main-slider-shape-1.jpg') }});"></div>
                    <div class="main-slider-shape-2 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-2.png') }}" alt="">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8">
                                <div class="main-slider__content">
                                    <p class="main-slider__sub-title">Siempre dona para niños</p>
                                    <h2 class="main-slider__title">Brinde una mano amiga a los necesitados</h2>
                                    <div class="main-slider__btn-box">
                                        <a href="#!" class="thm-btn main-slider__btn"> Descubrir más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url({{ asset('assets/images/backgrounds/main-slider-1-3.png') }});"></div>
                    <!-- /.image-layer -->

                    <div class="main-slider-shape-1"
                        style="background-image: url({{ asset('assets/images/shapes/main-slider-shape-1.jpg') }});"></div>
                    <div class="main-slider-shape-2 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-2.png') }}" alt="">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8">
                                <div class="main-slider__content">
                                    <p class="main-slider__sub-title">Siempre dona para niños</p>
                                    <h2 class="main-slider__title">Brinde una mano amiga a los necesitados</h2>
                                    <div class="main-slider__btn-box">
                                        <a href="#!" class="thm-btn main-slider__btn"> Descubrir más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow"></i>
                </div>
            </div>

        </div>
    </section>
    <!--Main Slider End-->

    <!--About One Start-->
    <section class="about-one" id="about">
        <div class="about-one__shape-box-1">
            <div class="about-one__shape-1"
                style="background-image: url({{ asset('assets/images/shapes/about-one-shape-1.png') }});"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img src="{{ asset('assets/images/resources/about-one-img-1.jpg') }}" alt="">
                            </div>
                            <div class="about-one__img-border"></div>
                            <div class="about-one__curved-circle-box">
                                <div class="curved-circle">
                                    <span class="curved-circle--item">
                                        5 años de experiencia - Fundación "Mama Lulú" Fidasydh .
                                    </span>
                                </div><!-- /.curved-circle -->
                                <div class="about-one__curved-circle-icon">
                                    <img src="{{ asset('assets/images/icon/curved-circle-icon.png') }}" alt="">
                                </div>
                            </div>
                            <div class="about-one__shape-2 zoom-fade">
                                <img src="{{ asset('assets/images/shapes/about-one-shape-2.png') }}" alt="">
                            </div>
                            <div class="about-one__shape-3 float-bob-y">
                                <img src="{{ asset('assets/images/shapes/about-one-shape-3.png') }}" alt="">
                            </div>
                            <div class="about-one__shape-4 zoominout">
                                <img src="{{ asset('assets/images/shapes/about-one-shape-4.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Bienvenido a la {{ config('app.name') }}</span>
                            <h2 class="section-title__title">Ayudarse unos a otros puede hacer que el mundo sea mejor</h2>
                        </div>
                        <p class="about-one__text">Ayudarse mutuamente hace que el mundo sea mejor. La compasión y la solidaridad son fundamentales en nuestras acciones diarias. Al ayudar, creamos conexiones humanas que trascienden fronteras. Beneficiamos tanto a los que reciben como a los que ofrecen ayuda, recordando que somos parte de algo más grande. Cada acto de bondad inspira a otros y genera una cadena de generosidad. Construir una cultura de ayuda mutua abre las puertas a un futuro humano y compasivo</p>
                        <div class="about-one__fund">
                            <p class="about-one__fund-text">ayudamos a financiar <span class="text-success">24,537</span> proyectos en
                                <span class="text-success">24</span> provincias, beneficiando a más de <br> <span class="text-success">8.2</span> mil personas.</p>
                        </div>
                        <ul class="list-unstyled about-one__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-volunteer"></span>
                                </div>
                                <div class="text">
                                    <h5><a href="#!">Unete a nuestro equipo</a></h5>
                                    <p>Unete a nuestro equipo y se parte de este cambio en el país.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-solidarity"></span>
                                </div>
                                <div class="text">
                                    <h5><a href="#!">Empieza a donar</a></h5>
                                    <p>Empieza a donar y ayude a miles de ecuatorianos.</p>
                                </div>
                            </li>
                        </ul>
                        <a href="#!" class="thm-btn about-one__btn">Descubrir más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->

    <!--Causes One Start-->
    <section class="causes-one" id="donations">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Ayúdanos y dona ahora</span>
                <h2 class="section-title__title">Encuentre la causa popular <br> y dónelos</h2>
            </div>
            <div class="row">
                <!--Causes One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="{{ asset('assets/images/resources/causes-1-1.jpg') }}" alt="">
                            <div class="causes-one__cat">
                                <p>Educación</p>
                            </div>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title"><a href="#!">Dejemos que la educación para los niños tenga una buena vida.</a>
                            </h3>
                            <p class="causes-one__text">"La educación es la base para construir un futuro próspero y equitativo." <br><br></p>
                            <div class="causes-one__progress">
                                <div class="causes-one__progress-shape"
                                    style="background-image: url({{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }});">
                                </div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Recaudados</p>
                                    <p><span>$30,000</span> Meta de</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Causes One Single End-->
                <!--Causes One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="{{ asset('assets/images/resources/causes-1-2.jpg') }}" alt="">
                            <div class="causes-one__cat">
                                <p>Medicina</p>
                            </div>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title"><a href="#!">Una salud sana para todos los niños</a>
                            </h3>
                            <p class="causes-one__text">"La salud es el bien más preciado que debemos proteger y promover para alcanzar nuestro máximo potencial."</p>
                            <div class="causes-one__progress">
                                <div class="causes-one__progress-shape"
                                    style="background-image: url({{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }});">
                                </div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Recaudados</p>
                                    <p><span>$30,000</span> Meta de</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Causes One Single End-->
                <!--Causes One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="assets/images/resources/causes-1-3.jpg" alt="">
                            <div class="causes-one__cat">
                                <p>Alimento</p>
                            </div>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title"><a href="#!">Todos los niños bien alimentados</a>
                            </h3>
                            <p class="causes-one__text">"El acceso a alimentos nutritivos es un derecho humano fundamental que garantiza el bienestar y el desarrollo de todas las personas."</p>
                            <div class="causes-one__progress">
                                <div class="causes-one__progress-shape"
                                    style="background-image: url({{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }});">
                                </div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Recaudados</p>
                                    <p><span>$30,000</span> Meta de</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Causes One Single End-->
            </div>
        </div>
    </section>
    <!--Causes One End-->

    <!--Become Volunteer One Start-->
    <section class="become-volunteer-one">
        <div class="become-volunteer-one__bg-box">
            <div class="become-volunteer-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url({{ asset('assets/images/backgrounds/become-volunteer-one-bg.jpg') }});"></div>
        </div>
        <div class="become-volunteer-one__shape-1"
            style="background-image: url({{ asset('assets/images/shapes/become-volunteer-shape-1.png') }});"></div>
        <div class="container">
            <div class="become-volunteer-one__inner">
                <p class="become-volunteer-one__sub-title">Conviértete en Voluntario</p>
                <h3 class="become-volunteer-one__title">Une tu mano con nosotros para una<br> vida y un futuro mejores
                </h3>
                <div class="become-volunteer-one__btn-box">
                    <a href="#!" class="thm-btn become-volunteer-one__btn">DESCUBRI MÁS</a>
                </div>
            </div>
        </div>
    </section>
    <!--Become Volunteer One End-->

    <!--Events One Start-->
    <section class="events-one" id="events">
        <div class="events-one-shape-1" style="background-image: url({{ asset('assets/images/shapes/events-one-shape-1.png') }})">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="events-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Próximos Eventos</span>
                            <h2 class="section-title__title">Únase a nuestros últimos próximos eventos</h2>
                        </div>
                        <p class="events-one__text-1">Únase a nuestros últimos próximos eventos para estar actualizado de todas nuestras actividades.</p>
                        <a href="event-details.html" class="thm-btn events-one__btn">DESCUBRIR MÁS</a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="events-one__right">
                        <div class="events-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                            "loop": true,
                            "autoplay": true,
                            "margin": 20,
                            "nav": true,
                            "dots": false,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                            "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 2
                                },
                                "992": {
                                    "items": 2
                                },
                                "1200": {
                                    "items": 3
                                }
                            }
                        }'>
                            <div class="item">
                                <!--Events One Single Start-->
                                <div class="events-one__single">
                                    <div class="events-one__img">
                                        <img src="{{ asset('assets/images/events/events-1-1.jpg') }}" alt="">
                                        <div class="events-one__date">
                                            <p>23 May, 2022</p>
                                        </div>
                                        <div class="events-one__content">
                                            <ul class="list-unstyled events-one__meta">
                                                <li><i class="fas fa-clock"></i>8:00pm</li>
                                                <li><i class="fas fa-map-marker-alt"></i>SALCEDO</li>
                                            </ul>
                                            <h3 class="events-one__title"><a href="event-details.html">Juega por el mundo con nosotros</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <!--Events One Single End-->
                            </div>
                            <div class="item">
                                <!--Events One Single Start-->
                                <div class="events-one__single">
                                    <div class="events-one__img">
                                        <img src="{{ asset('assets/images/events/events-1-2.jpg') }}" alt="">
                                        <div class="events-one__date">
                                            <p>23 May, 2022</p>
                                        </div>
                                        <div class="events-one__content">
                                            <ul class="list-unstyled events-one__meta">
                                                <li><i class="fas fa-clock"></i>8:00pm</li>
                                                <li><i class="fas fa-map-marker-alt"></i>SALCEDO</li>
                                            </ul>
                                            <h3 class="events-one__title"><a href="event-details.html">Hay muchas variaciones de</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <!--Events One Single End-->
                            </div>
                            <div class="item">
                                <!--Events One Single Start-->
                                <div class="events-one__single">
                                    <div class="events-one__img">
                                        <img src="{{ asset('assets/images/events/events-1-3.jpg') }}" alt="">
                                        <div class="events-one__date">
                                            <p>23 May, 2022</p>
                                        </div>
                                        <div class="events-one__content">
                                            <ul class="list-unstyled events-one__meta">
                                                <li><i class="fas fa-clock"></i>8:00pm</li>
                                                <li><i class="fas fa-map-marker-alt"></i>SALCEDO</li>
                                            </ul>
                                            <h3 class="events-one__title"><a href="event-details.html">Ayudamos a contruir una casa en cusubamba</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <!--Events One Single End-->
                            </div>
                            <div class="item">
                                <!--Events One Single Start-->
                                <div class="events-one__single">
                                    <div class="events-one__img">
                                        <img src="{{ asset('assets/images/events/events-1-1.jpg') }}" alt="">
                                        <div class="events-one__date">
                                            <p>23 May, 2022</p>
                                        </div>
                                        <div class="events-one__content">
                                            <ul class="list-unstyled events-one__meta">
                                                <li><i class="fas fa-clock"></i>8:00pm</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Salcedo</li>
                                            </ul>
                                            <h3 class="events-one__title"><a href="event-details.html">Aydamos a los niños que quedaron huerfanos</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <!--Events One Single End-->
                            </div>
                            <div class="item">
                                <!--Events One Single Start-->
                                <div class="events-one__single">
                                    <div class="events-one__img">
                                        <img src="{{ asset('assets/images/events/events-1-2.jpg') }}" alt="">
                                        <div class="events-one__date">
                                            <p>23 May, 2022</p>
                                        </div>
                                        <div class="events-one__content">
                                            <ul class="list-unstyled events-one__meta">
                                                <li><i class="fas fa-clock"></i>8:00pm</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Salcedo</li>
                                            </ul>
                                            <h3 class="events-one__title"><a href="event-details.html">Mujer sola estudua a sus hijos</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <!--Events One Single End-->
                            </div>
                            <div class="item">
                                <!--Events One Single Start-->
                                <div class="events-one__single">
                                    <div class="events-one__img">
                                        <img src="{{ asset('assets/images/events/events-1-3.jpg') }}" alt="">
                                        <div class="events-one__date">
                                            <p>23 May, 2022</p>
                                        </div>
                                        <div class="events-one__content">
                                            <ul class="list-unstyled events-one__meta">
                                                <li><i class="fas fa-clock"></i>8:00pm</li>
                                                <li><i class="fas fa-map-marker-alt"></i>San jose</li>
                                            </ul>
                                            <h3 class="events-one__title"><a href="event-details.html">Alimentando a los ancianos de tercera edad</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <!--Events One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Events One End-->

    <!--Feature One Start-->
    <section class="feature-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6  wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="feature-one__single">
                        <div class="feature-one__single-bg"
                            style="background-image: url(assets/images/shapes/feature-one-shape-1.png);"></div>
                        <div class="feature-one__top">
                            <div class="feature-one__top-inner">
                                <div class="feature-one__top-icon">
                                    <span class="icon-help"></span>
                                </div>
                                <div class="feature-one__top-title-box">
                                    <h3 class="feature-one__top-title"><a href="#!">Únete a nosotros <br> y hazte voluntario</a></h3>
                                </div>
                            </div>
                        </div>
                        <p class="feature-one__text">Únete a nosotros <br> y hazte voluntario</p>
                        <ul class="list-unstyled feature-one__point">
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Ayudar a los niños pobres.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Ayudar a los ancianos de tercera edad.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Ayudar a las madres luchadoras.</p>
                                </div>
                            </li>
                        </ul>
                        <a href="#!" class="thm-btn feature-one__btn">Ver detalles</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6  wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="feature-one__single feature-one__single--two">
                        <div class="feature-one__single-bg"
                            style="background-image: url(assets/images/shapes/feature-one-shape-1.png);"></div>
                        <div class="feature-one__top">
                            <div class="feature-one__top-inner">
                                <div class="feature-one__top-icon feature-one__top-icon--two">
                                    <span class="icon-gift-box"></span>
                                </div>
                                <div class="feature-one__top-title-box">
                                    <h3 class="feature-one__top-title"><a href="#!">Enviar un regalo  <br>para niños.</a></h3>
                                </div>
                            </div>
                        </div>
                        <p class="feature-one__text">Enviar un regalo  <br>para niños pobres que necesitan tu ayuda</p>
                        <ul class="list-unstyled feature-one__point">
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Enviar ropa que ya no uses.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Enviar alimentos que te sobren.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Enviar juguetes que te ya no uses.</p>
                                </div>
                            </li>
                        </ul>
                        <a href="#!" class="thm-btn feature-one__btn">Ver detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Feature One End-->

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="container">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                        "0": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "375": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "575": {
                            "spaceBetween": 30,
                            "slidesPerView": 3
                        },
                        "767": {
                            "spaceBetween": 50,
                            "slidesPerView": 4
                        },
                        "991": {
                            "spaceBetween": 50,
                            "slidesPerView": 5
                        },
                        "1199": {
                            "spaceBetween": 100,
                            "slidesPerView": 6
                        }
                    }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/brand/brand-1-3.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/brand/brand-1-4.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/brand/brand-1-5.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/brand/brand-1-6.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/brand/brand-1-3.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/brand/brand-1-4.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/brand/brand-1-5.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/brand/brand-1-6.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->

    <!--Testimonial One Start-->
    <section class="testimonial-one" id="testimonial">
        <div class="testimonial-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url({{ asset('assets/images/backgrounds/testimonial-one-bg.jpg') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="testimonial-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Nuestros Testimonios</span>
                            <h2 class="section-title__title">lo que hablan de nosotros.</h2>
                        </div>
                        <p class="testimonial-one__text-1">La fundación {{ config('app.name') }}, ayuda a todos los necesitados sin importar razo, color, genero, edad.</p>
                        <a href="#" class="thm-btn testimonial-one__btn">Todos los testimonios</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="testimonial-one__right">
                        <div class="testimonial-one__img-1 zoom-fade">
                            <img src="{{ asset('assets/images/testimonial/testimonial-img-1.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-one__img-1 testimonial-one__img-2 zoom-fade">
                            <img src="{{ asset('assets/images/testimonial/testimonial-img-2.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-one__img-1 testimonial-one__img-3 zoom-fade">
                            <img src="{{ asset('assets/images/testimonial/testimonial-img-3.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-one__img-1 testimonial-one__img-4 zoom-fade">
                            <img src="{{ asset('assets/images/testimonial/testimonial-img-4.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel"
                            data-owl-options='{
                            "loop": true,
                            "autoplay": true,
                            "margin": 50,
                            "nav": true,
                            "dots": false,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                            "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 1
                                },
                                "992": {
                                    "items": 1
                                },
                                "1200": {
                                    "items": 1
                                }
                            }
                        }'>
                            <div class="item">
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__shape-1"
                                        style="background-image: url({{ asset('assets/images/shapes/testimonial-one-shape-1.png') }});">
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-1.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Luis Lopez</h3>
                                        <p class="testimonial-one__client-sub-title">Voluntario</p>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-double-quotes"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">
                                        "La Fundación Mamá Lulu: Un faro de esperanza que brinda apoyo vital a los más necesitados, iluminando vidas y construyendo un futuro mejor."</p>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                            <div class="item">
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__shape-1"
                                        style="background-image: url({{ asset('assets/images/shapes/testimonial-one-shape-1.png') }});">
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-2.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Javier Jati</h3>
                                        <p class="testimonial-one__client-sub-title">Voluntario</p>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-double-quotes"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">
                                        "La Fundación Mamá Lulu: Un faro de esperanza que brinda apoyo vital a los más necesitados, iluminando vidas y construyendo un futuro mejor."</p>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                            <div class="item">
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__shape-1"
                                        style="background-image: url({{ asset('assets/images/shapes/testimonial-one-shape-1.png') }});">
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-3.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Judith Arias</h3>
                                        <p class="testimonial-one__client-sub-title">Voluntario</p>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-double-quotes"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">
                                        "La Fundación Mamá Lulu: Un faro de esperanza que brinda apoyo vital a los más necesitados, iluminando vidas y construyendo un futuro mejor."</p>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                            <div class="item">
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__shape-1"
                                        style="background-image: url({{ asset('assets/images/shapes/testimonial-one-shape-1.png') }});">
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-1.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Paul Pacheco</h3>
                                        <p class="testimonial-one__client-sub-title">Voluntario</p>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-double-quotes"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">
                                        "La Fundación Mamá Lulu: Un faro de esperanza que brinda apoyo vital a los más necesitados, iluminando vidas y construyendo un futuro mejor."</p>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                            <div class="item">
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__shape-1"
                                        style="background-image: url({{ asset('assets/images/shapes/testimonial-one-shape-1.png') }});">
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-2.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Maria Altamirano</h3>
                                        <p class="testimonial-one__client-sub-title">Voluntario</p>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-double-quotes"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">
                                        "La Fundación Mamá Lulu: Un faro de esperanza que brinda apoyo vital a los más necesitados, iluminando vidas y construyendo un futuro mejor."</p>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                            <div class="item">
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__shape-1"
                                        style="background-image: url({{ asset('assets/images/shapes/testimonial-one-shape-1.png') }});">
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-3.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Jairo Mendez</h3>
                                        <p class="testimonial-one__client-sub-title">Voluntario</p>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-double-quotes"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">
                                        "La Fundación Mamá Lulu: Un faro de esperanza que brinda apoyo vital a los más necesitados, iluminando vidas y construyendo un futuro mejor."</p>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->

    <!--Gallery One Start-->
    <section class="gallery-one">
        <div class="gallery-one__top">
            <h3 class="gallery-one__top-title">Nuestra galería de fotos</h3>
        </div>
        <div class="gallery-one__bottom">
            <div class="gallery-one__container">
                <ul class="list-unstyled gallery-one__list">
                    <li class="gallery-one__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="gallery-one__img">
                            <img src="{{ asset('assets/images/gallery/gallery-1-1.jpg') }}" alt="">
                            <a href="{{ asset('assets/images/gallery/gallery-1-1.jpg') }}" class="img-popup"></a>
                            <div class="gallery-one__content">
                                <p class="gallery-one__sub-title">Caridad</p>
                                <h5 class="gallery-one__title"><a href="#!">Educación</a></h5>
                            </div>
                        </div>
                    </li>
                    <li class="gallery-one__single wow fadeInUp" data-wow-delay="200ms">
                        <div class="gallery-one__img">
                            <img src="{{ asset('assets/images/gallery/gallery-1-2.jpg') }}" alt="">
                            <a href="{{ asset('assets/images/gallery/gallery-1-2.jpg') }}" class="img-popup"></a>
                            <div class="gallery-one__content">
                                <p class="gallery-one__sub-title">Caridad</p>
                                <h5 class="gallery-one__title"><a href="#!">Educación</a></h5>
                            </div>
                        </div>
                    </li>
                    <li class="gallery-one__single wow fadeInUp" data-wow-delay="300ms">
                        <div class="gallery-one__img">
                            <img src="{{ asset('assets/images/gallery/gallery-1-3.jpg') }}" alt="">
                            <a href="{{ asset('assets/images/gallery/gallery-1-3.jpg') }}" class="img-popup"></a>
                            <div class="gallery-one__content">
                                <p class="gallery-one__sub-title">Caridad</p>
                                <h5 class="gallery-one__title"><a href="#!">Educación</a></h5>
                            </div>
                        </div>
                    </li>
                    <li class="gallery-one__single wow fadeInUp" data-wow-delay="400ms">
                        <div class="gallery-one__img">
                            <img src="{{ asset('assets/images/gallery/gallery-1-4.jpg') }}" alt="">
                            <a href="{{ asset('assets/images/gallery/gallery-1-4.jpg') }}" class="img-popup"></a>
                            <div class="gallery-one__content">
                                <p class="gallery-one__sub-title">Caridad</p>
                                <h5 class="gallery-one__title"><a href="#!">Educación</a></h5>
                            </div>
                        </div>
                    </li>
                    <li class="gallery-one__single wow fadeInUp" data-wow-delay="500ms">
                        <div class="gallery-one__img">
                            <img src="{{ asset('assets/images/gallery/gallery-1-5.jpg') }}" alt="">
                            <a href="{{ asset('assets/images/gallery/gallery-1-5.jpg') }}" class="img-popup"></a>
                            <div class="gallery-one__content">
                                <p class="gallery-one__sub-title">Caridad</p>
                                <h5 class="gallery-one__title"><a href="#!">Educación</a></h5>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Gallery One End-->

    <!--FAQ One Start-->
    <section class="faq-one">
        <div class="faq-one-shape-1" style="background-image: url({{ asset('assets/images/shapes/faq-one-shape-1.png') }});"></div>
        <div class="faq-one-bg" style="background-image: url({{ asset('assets/images/backgrounds/faq-one-bg.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Preguntas hechas recientemente</span>
                            <h2 class="section-title__title">La gente nos hace preguntas con frecuencia.
                            </h2>
                        </div>
                        <p class="faq-one__text-1">La gente nos hace preguntas con frecuencia de todas las actividades o servicios que brindamos a la personas que hemos ayudado.</p>
                        <a href="#!" class="thm-btn faq-one__btn">Obtener ayuda</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-one__right">
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>¿Ayudan a los niños pobres?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Sí, la Fundación Mamá Lulu se dedica a ayudar a niños en situación de pobreza, brindándoles apoyo integral para cubrir sus necesidades básicas, como alimentación, educación y salud.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>¿Cómo puede solicitar su ayuda?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Para solicitar ayuda de la Fundación Mamá Lulu, puedes ponerte en contacto con ellos a través de su sitio web oficial, donde encontrarás información sobre los requisitos y el proceso para solicitar asistencia.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>¿Dónde están sus oficinas?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Las oficinas de la Fundación Mamá Lulu están ubicadas en Salcedo, pero también puedes comunicarte con ellos a través de su sitio web o por teléfono para obtener información más detallada sobre su ubicación y horarios de atención.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion last-chiled">
                                <div class="accrodion-title">
                                    <h4>¿Cómo me convierto en un voluntario?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Si estás interesado en convertirte en voluntario de la Fundación Mamá Lulu, puedes comunicarte directamente con ellos a través de su sitio web o por teléfono para obtener información sobre los requisitos y el proceso de solicitud de voluntariado. Ellos estarán encantados de recibir ayuda adicional y te brindarán orientación sobre cómo involucrarte en sus actividades en beneficio de los más necesitados.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQ One End-->

    <!--Counter One Start-->
    <section class="counter-one">
        <div class="container">
            <div class="counter-one__inner">
                <div class="counter-one-bg" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url({{ asset('assets/images/backgrounds/counter-one-bg.jpg') }});"></div>
                <ul class="list-unstyled counter-one__list">
                    <li class="counter-one__single">
                        <div class="counter-one__count-box">
                            <h3 class="odometer" data-count="70">00</h3>
                            <span class="counter-one__letter">m</span>
                        </div>
                        <p class="counter-one__text">Total donación</p>
                    </li>
                    <li class="counter-one__single">
                        <div class="counter-one__count-box">
                            <h3 class="odometer" data-count="48">00</h3>
                            <span class="counter-one__letter">k</span>
                        </div>
                        <p class="counter-one__text">Proyectos financiados</p>
                    </li>
                    <li class="counter-one__single">
                        <div class="counter-one__count-box">
                            <h3 class="odometer" data-count="38">00</h3>
                            <span class="counter-one__letter">%</span>
                        </div>
                        <p class="counter-one__text">Los niños necesitan ayuda</p>
                    </li>
                    <li class="counter-one__single">
                        <div class="counter-one__count-box">
                            <h3 class="odometer" data-count="230">00</h3>
                            <span class="counter-one__letter"></span>
                        </div>
                        <p class="counter-one__text">nuestros voluntarios</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Counter One End-->

    <!--News One Start-->
    <section class="news-one" id="news">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Noticias y artículos</span>
                <h2 class="section-title__title">Directamente de las <br> últimas noticias y artículos.
                </h2>
            </div>
            <div class="row">
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="{{ asset('assets/images/blog/news-1-1.jpg') }}" alt="">
                        </div>
                        <div class="news-one__content-box">
                            <div class="news-one__content-inner">
                                <div class="news-one__content">
                                    <ul class="list-unstyled news-one__meta">
                                        <li><a href="#!"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><a href="#!"><i class="fas fa-comments"></i> 2
                                            Comentarios</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="#!">Fundación Mamá Lulu lanza programa educativo innovador para niños en situación de pobreza</a></h3>
                                </div>
                                <div class="news-one__bottom">
                                    <div class="news-one__read-more">
                                        <a href="#!"> <span class="icon-right-arrow"></span> Leer más</a>
                                    </div>
                                    <div class="news-one__share">
                                        <a href="#"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                </div>
                                <div class="news-one__social-box">
                                    <ul class="list-unstyled news-one__social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>23 May, 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="{{ asset('assets/images/blog/news-1-2.jpg') }}" alt="">
                        </div>
                        <div class="news-one__content-box">
                            <div class="news-one__content-inner">
                                <div class="news-one__content">
                                    <ul class="list-unstyled news-one__meta">
                                        <li><a href="#!"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><a href="#!"><i class="fas fa-comments"></i> 2
                                                Comentarios</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="#!">Historias de éxito: La Fundación Mamá Lulu transforma vidas de familias desfavorecidas</a></h3>
                                </div>
                                <div class="news-one__bottom">
                                    <div class="news-one__read-more">
                                        <a href="#!"> <span class="icon-right-arrow"></span> Leer más</a>
                                    </div>
                                    <div class="news-one__share">
                                        <a href="#"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                </div>
                                <div class="news-one__social-box">
                                    <ul class="list-unstyled news-one__social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>23 May, 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="{{ asset('assets/images/blog/news-1-3.jpg') }}" alt="">
                        </div>
                        <div class="news-one__content-box">
                            <div class="news-one__content-inner">
                                <div class="news-one__content">
                                    <ul class="list-unstyled news-one__meta">
                                        <li><a href="#!"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><a href="#!"><i class="fas fa-comments"></i> 2
                                            Comentarios</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="#!">Fundación Mamá Lulu organiza campaña de donación de alimentos para comunidades vulnerables</a></h3>
                                </div>
                                <div class="news-one__bottom">
                                    <div class="news-one__read-more">
                                        <a href="#!"> <span class="icon-right-arrow"></span> Leer más</a>
                                    </div>
                                    <div class="news-one__share">
                                        <a href="#"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                </div>
                                <div class="news-one__social-box">
                                    <ul class="list-unstyled news-one__social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>23 May, 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
            </div>
        </div>
    </section>
    <!--News One End-->
@endsection