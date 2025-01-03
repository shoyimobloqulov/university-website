<!DOCTYPE html>
<html lang="uz">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>

    <link rel="shortcut icon" href="{{ asset("assets/images/logo/logo1.png") }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/logo/logo1.png') }}" type="image/x-icon">
    <!--- End favicon-->

    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Instrument+Sans:ital,wght@0,400..700;1,400..700&amp;family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">

    <!-- End google font  -->

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/niceselect.css') }}">


    <!-- Code Editor  -->

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
</head>

<body>

<div class="techin-preloader-wrap">
    <div class="techin-preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- End preloader -->

<div class="progress-bar-container">
    <div class="progress-bar"></div>
</div>

<!-- progress circle -->
<div class="paginacontainer">
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
        <div class="top-arrow" style="background-color: #fff;">
            <img src="{{ asset('assets/images/v1/arrow.svg') }}" alt="">
        </div>
    </div>
</div>
<!-- End All Js -->
@include('layouts.header')
<!--End landex-header-section -->

<!-- strat sidebar menu -->
@include('layouts.sidebar')

@yield('content')

<!-- Footer  -->

<footer class="techin-footer-section1 section" id='footer'
        style="background-image: url({{ asset('assets/images/v1/pricing-bg.png') }});">
    <div class="container">
        <div class="techin-footer-top">
            <div class="row">
                <div class="col-xl-4 col-lg-12">
                    <div class="techin-footer-textarea footer1">
                        <a href='/'>
                            <img src="{{ asset('assets/images/logo/logo-white.svg') }}" alt="">
                        </a>
                        <p>“IQTISODIYOT VA PEDAGOGIKA UNIVERSITETI” - Yangi olam, yangi jamiyatda ilg'or texnologiyalar
                            innovatsiyalar asosida yetuk mutaxassislarni tayyorlash maskani.</p>

                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="techin-footer-menu ml-60">
                        <div class="techin-footer-title footer-one">
                            <h5>Havolalar</h5>
                        </div>
                        <ul>
                            <li>
                                <a href='#'>
                                    <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                            fill="white"/>
                                    </svg>
                                    Bosh sahifa
                                </a>
                            </li>
                            <li>
                                <a href='#'>
                                    <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                            fill="white"/>
                                    </svg>
                                    Universitet
                                </a>
                            </li>
                            <li>
                                <a href='#'>
                                    <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                            fill="white"/>
                                    </svg>
                                    Yo'nalishlar
                                </a>
                            </li>
                            <li>
                                <a href='#'>
                                    <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                            fill="white"/>
                                    </svg>
                                    Yangiliklar
                                </a>
                            </li>
                            <li>
                                <a href='#'>
                                    <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                            fill="white"/>
                                    </svg>
                                    Aloqa
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="techin-footer-menu ml-35">
                        <div class="techin-footer-title footer-one">
                            <h5>Universitet</h5>
                        </div>
                        <ul>
                            <li>
                                <a href='#'>
                                    <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                            fill="white"/>
                                    </svg>
                                    Biz haqimizda
                                </a>
                            </li>
                            <li>
                                <a href='rahbariyat.html'>
                                    <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                            fill="white"/>
                                    </svg>
                                    Tuzilma
                                </a>
                            </li>
                            <li>
                                <a href='index.html'>
                                    <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                            fill="white"/>
                                    </svg>
                                    Ilmiy faoliyat
                                </a>
                            </li>
                            <li>
                                <a href='index.html'>
                                    <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                            fill="white"/>
                                    </svg>
                                    Xalqaro aloqalar
                                </a>
                            </li>
                            <li>
                                <a href='index.html'>
                                    <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                            fill="white"/>
                                    </svg>
                                    Fakultetlar
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="techin-footer-menu2 ml-60">
                        <div class="techin-footer-title footer-one">
                            <h5>Foto lavhalar</h5>
                        </div>
                        <div class="techin-instagram-wrap">
                            <div class="techin-instagram-thumb">
                                <a href='#'><img src="assets/images/new/12.jpg" alt=""></a>
                            </div>
                            <div class="techin-instagram-thumb">
                                <a href='#'><img src="assets/images/new/13.jpg" alt=""></a>
                            </div>
                            <div class="techin-instagram-thumb">
                                <a href='#'><img src="assets/images/new/14.jpg" alt=""></a>
                            </div>
                            <div class="techin-instagram-thumb">
                                <a href='#'><img src="assets/images/new/15.jpg" alt=""></a>
                            </div>
                            <div class="techin-instagram-thumb">
                                <a href='#'><img src="assets/images/new/16.jpg" alt=""></a>
                            </div>
                            <div class="techin-instagram-thumb">
                                <a href='#'><img src="assets/images/new/17.jpg" alt=""></a>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <a href='#'>

                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="techin-footer-info2">
            <div class="techin-footer-info-wraper">
                <div class="techin-footer-info-item">
                    <div class="techin-footer-info-icon">
                        <img src="assets/images/footer/icon1.svg" alt="">
                    </div>
                    <div class="techin-footer-info-text info1">
                        <span>Universitet manzili</span>
                        <h5>12th Street, New York, USA</h5>
                    </div>
                </div>
                <a href="mailto:name@gmail.com">
                    <div class="techin-footer-info-item">
                        <div class="techin-footer-info-icon">
                            <img src="assets/images/footer/icon2.svg" alt="">
                        </div>
                        <div class="techin-footer-info-text info1">
                            <span>Email manzil</span>
                            <h5>info@ffdffff.com</h5>
                        </div>
                    </div>
                </a>

                <a href="tel:009">
                    <div class="techin-footer-info-item">
                        <div class="techin-footer-info-icon">
                            <img src="assets/images/footer/icon3.svg" alt="">
                        </div>
                        <div class="techin-footer-info-text info1">
                            <span>Telefon raqam</span>
                            <h5>+(998) 999 99 99</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="techin-footer-bottom bottom2">
            <div class="techin-copywright">
                <p>Ishlab chiqildi &copy; <span id="current-year"></span> <span
                        class="footer-text">Qudratov Doniyor</span> tominidan. Barcha sahifalar <span
                        class="footer-text"> ximoyalangan.</span></p>
            </div>
            <div class="techin-header-social">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/">
                            <i class="ri-facebook-fill"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/">
                            <svg width="16" height="16" viewBox="0 0 13 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.5 3.60547C8.22266 3.60547 9.64453 5.02734 9.64453 6.75C9.64453 8.5 8.22266 9.89453 6.5 9.89453C4.75 9.89453 3.35547 8.5 3.35547 6.75C3.35547 5.02734 4.75 3.60547 6.5 3.60547ZM6.5 8.80078C7.62109 8.80078 8.52344 7.89844 8.52344 6.75C8.52344 5.62891 7.62109 4.72656 6.5 4.72656C5.35156 4.72656 4.44922 5.62891 4.44922 6.75C4.44922 7.89844 5.37891 8.80078 6.5 8.80078ZM10.4922 3.49609C10.4922 3.08594 10.1641 2.75781 9.75391 2.75781C9.34375 2.75781 9.01562 3.08594 9.01562 3.49609C9.01562 3.90625 9.34375 4.23438 9.75391 4.23438C10.1641 4.23438 10.4922 3.90625 10.4922 3.49609ZM12.5703 4.23438C12.625 5.24609 12.625 8.28125 12.5703 9.29297C12.5156 10.2773 12.2969 11.125 11.5859 11.8633C10.875 12.5742 10 12.793 9.01562 12.8477C8.00391 12.9023 4.96875 12.9023 3.95703 12.8477C2.97266 12.793 2.125 12.5742 1.38672 11.8633C0.675781 11.125 0.457031 10.2773 0.402344 9.29297C0.347656 8.28125 0.347656 5.24609 0.402344 4.23438C0.457031 3.25 0.675781 2.375 1.38672 1.66406C2.125 0.953125 2.97266 0.734375 3.95703 0.679688C4.96875 0.625 8.00391 0.625 9.01562 0.679688C10 0.734375 10.875 0.953125 11.5859 1.66406C12.2969 2.375 12.5156 3.25 12.5703 4.23438ZM11.2578 10.3594C11.5859 9.56641 11.5039 7.65234 11.5039 6.75C11.5039 5.875 11.5859 3.96094 11.2578 3.14062C11.0391 2.62109 10.6289 2.18359 10.1094 1.99219C9.28906 1.66406 7.375 1.74609 6.5 1.74609C5.59766 1.74609 3.68359 1.66406 2.89062 1.99219C2.34375 2.21094 1.93359 2.62109 1.71484 3.14062C1.38672 3.96094 1.46875 5.875 1.46875 6.75C1.46875 7.65234 1.38672 9.56641 1.71484 10.3594C1.93359 10.9062 2.34375 11.3164 2.89062 11.5352C3.68359 11.8633 5.59766 11.7812 6.5 11.7812C7.375 11.7812 9.28906 11.8633 10.1094 11.5352C10.6289 11.3164 11.0664 10.9062 11.2578 10.3594Z"
                                    fill="white"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.pinterest.com/">
                            <svg width="12" height="16" viewBox="0 0 11 15" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.82812 0.941406C8.39844 0.941406 10.75 2.71875 10.75 5.42578C10.75 7.96875 9.4375 10.8125 6.53906 10.8125C5.82812 10.8125 4.98047 10.457 4.625 9.82812C4.02344 12.2891 4.05078 12.6719 2.68359 14.5586C2.54688 14.6133 2.57422 14.6133 2.49219 14.5039C2.4375 13.9844 2.38281 13.4922 2.38281 12.9727C2.38281 11.3047 3.14844 8.87109 3.53125 7.25781C3.3125 6.82031 3.25781 6.32812 3.25781 5.86328C3.25781 3.67578 5.82812 3.34766 5.82812 5.15234C5.82812 6.21875 5.08984 7.23047 5.08984 8.26953C5.08984 8.95312 5.69141 9.44531 6.375 9.44531C8.26172 9.44531 8.83594 6.73828 8.83594 5.28906C8.83594 3.34766 7.46875 2.28125 5.58203 2.28125C3.42188 2.28125 1.75391 3.83984 1.75391 6.02734C1.75391 7.09375 2.41016 7.64062 2.41016 7.88672C2.41016 8.10547 2.24609 8.84375 1.97266 8.84375C1.31641 8.84375 0.25 7.75 0.25 5.83594C0.25 2.80078 3.01172 0.941406 5.82812 0.941406Z"
                                    fill="white"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- scripts -->
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/menu/menu.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/pricing.min.js') }}"></script>
<script src="{{ asset('assets/js/countdown.js') }}"></script>
<script src="{{ asset('assets/js/skillbar.js') }}"></script>
<script src="{{ asset('assets/js/slick-animation.js') }}"></script>
<script src="{{ asset('assets/js/slick-animation.min.js') }}"></script>
<script src="{{ asset('assets/js/faq.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/tabs-slider.js') }}"></script>
<script src="{{ asset('assets/js/product-increment.js') }}"></script>
<script src="{{ asset('assets/js/aos.js') }}"></script>
<script src="{{ asset('assets/js/datepicker-jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/niceselect.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyArZVfNvjnLNwJZlLJKuOiWHZ6vtQzzb1Y"></script>

<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
