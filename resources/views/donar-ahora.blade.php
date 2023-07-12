@extends('layouts.app')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Inicio</a></li>
                    <li><span>/</span></li>
                    <li class="active">Donar ahora</li>
                </ul>
                <h2>Donar ahora</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Donate Now Start-->
    <section class="donate-now">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="donate-now__left">
                        <div class="donate-now__enter-donation">
                            <h3 class="donate-now__title">Ingresa tu donación</h3>
                            <div class="donate-now__enter-donation-input">
                                <select class="selectpicker">
                                    <option>$</option>
                                    <option>₤</option>
                                    <option>¥</option>
                                </select>
                                <input type="text" name="donation-money" value=".00">
                            </div>
                        </div>
                        <div class="donate-now__personal-info-box">
                            <h3 class="donate-now__title">Información personal</h3>
                            <form class="donate-now__personal-info-form">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="donate-now__personal-info-input">
                                            <input type="text" placeholder="Nombres" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__personal-info-input">
                                            <input type="text" placeholder="Apellidos" name="last-name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__personal-info-input">
                                            <input type="email" placeholder="Email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__personal-info-input">
                                            <input type="text" placeholder="Teléfono" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__personal-info-input">
                                            <input type="text" placeholder="Dirección" name="Address">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__personal-info-input">
                                            <select class="selectpicker" aria-label="Default select example">
                                                <option selected>País</option>
                                                <option value="1">USA</option>
                                                <option value="2">England</option>
                                                <option value="3">Australia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div
                                            class="donate-now__personal-info-input donate-now__personal-info-message-box">
                                            <textarea name="message" placeholder="Escribe un mensaje"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="donate-now__payment-info">
                            <h3 class="donate-now__title">Información de pago</h3>
                            <form class="donate-now__payment-info-form">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="donate-now__payment-info-input">
                                            <input type="text" placeholder="Número de tarjeta" name="number">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__payment-info-input">
                                            <input type="text" placeholder="MM / YY" name="date" id="datepicker">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__payment-info-input">
                                            <input type="text" placeholder="Código de tarjeta ( CVC )" name="code">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__payment-info-input">
                                            <input type="text" placeholder="Dirección de envió" name="Billing">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__payment-info-input">
                                            <input type="text" placeholder="Cuidad" name="City">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__payment-info-input">
                                            <select class="selectpicker" aria-label="Default select example">
                                                <option selected>País</option>
                                                <option value="1">USA</option>
                                                <option value="2">England</option>
                                                <option value="3">Australia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="donate-now__payment-info-btn-box">
                                    <button type="submit" class="thm-btn donate-now__payment-info-btn">Done ahora</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="donate-now__right">
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
                                <p class="causes-one__text">Dejemos que la educación para los niños tenga una buena vida.</p>
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
                        <div class="donation-details__organizer">
                            <div class="sidebar-shape-1"
                                style="background-image: url({{ asset('assets/images/shapes/sidebar-shape-1.png') }});"></div>
                            <div class="donation-details__organizer-img">
                                <img src="{{ asset('assets/images/resources/donation-details-organizer-img.jpg') }}" alt="">
                            </div>
                            <div class="donation-details__organizer-content">
                                <p class="donation-details__organizer-date">Creado 20 april, 2022</p>
                                <p class="donation-details__organizer-title">Organizador:</p>
                                <p class="donation-details__organizer-name">Jessica smith</p>
                                <ul class="list-unstyled donation-details__organizer-list">
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-tag"></span>
                                        </div>
                                        <div class="text">
                                            <p>Educación</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-map-marker-alt"></span>
                                        </div>
                                        <div class="text">
                                            <p>Salcedo, Cotopaxi</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Donate Now End-->
@endsection