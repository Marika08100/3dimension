<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content>
    <meta name="description" content>
    <title>3Dimensions</title>
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!--owl carousel css-->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <!--magnific popup css-->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <!--icomoon css-->
    <link rel="stylesheet" type="text/css" href="css/icomoon.css">
    <!--icofont css-->
    <link rel="stylesheet" type="text/css" href="css/icofont.min.css">
    <!--animate css-->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!--main css-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--responsive css-->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

     @include('header')
</head>
<body>
    <!--Start Preloader-->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell align-middle">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>
    <!--End Preloader-->

    <!--start home area-->
    <section id="home-area" data-scroll-index="0">
        <div class="container">
            <div class="row">
                <!--start caption content-->
                <div class="col-md-6">
                    <div class="caption d-table">
                        <div class="d-table-cell align-middle">
                            <h1>{{__('messages.title')}}</h1>
                            <p>{{__('messages.subTitle')}}.</p>
                            <a href="#product-area">{{__('messages.offer')}}</a>
                        </div>
                    </div>
                </div>
                <!--end caption content-->
                <!--start caption image-->
                <div class="col-md-6">
                    <div class="caption-img text-right">
                        <img src="images/wath-7.png" class="img-fluid animation-jump" alt>
                    </div>
                </div>
                <!--end caption image-->
            </div>
        </div>
        <div class="pattern-bg"></div>
    </section>
    <!--end home area-->
    <!--start feature area-->
    <section id="feature-area" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <div class="section-heading text-center">
                                                <h2>{{__('messages.tech')}}</h2>
                        <p>{{__('messages.techDes')}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--start feature single-->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-single text-center">
                        <div class="icon">
                            <i class="icofont-unique-idea"></i>
                        </div>
                <h4>{{__('messages.knownQuality')}}</h4>
                        <p>{{__('messages.knownQualityDes')}}</p>
                    </div>
                </div>
                <!--end feature single-->
                <!--start feature single-->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-single text-center">
                        <div class="icon">
                            <i class="icofont-speed-meter"></i>
                        </div>
                        <h4>{{__('messages.knownProt')}}</h4>
                        <p>{{__('messages.knownProtDes')}}</p>
                    </div>
                </div>
                <!--end feature single-->
                <!--start feature single-->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-single text-center">
                        <div class="icon">
                            <i class="icofont-bucket"></i>
                            </div>
                        <h4>{{__('messages.knownTech')}}</h4>
                        <p>{{__('messages.knownTechDes')}}</p>
                    </div>
                </div>
                <!--end feature single-->
                <!--start feature single-->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-single text-center">
                        <div class="icon">
                            <i class="icofont-money-bag"></i>
                        </div>
                        <h4>{{__('messages.knownCheap')}}</h4>
                        <p>{{__('messages.knownCheapDes')}}</p>
                    </div>
                </div>
                <!--end feature single-->
            </div>
        </div>
    </section>
    <!--end feature area-->
    <!--start about area-->
    <section id="about-area" class="bg-gray" data-scroll-index="2">
        <div class="container">
            <div class="row">
                <!--start about image-->
                <div class="col-md-6">
                    <div class="about-img text-center">
                        <img src="images/watch-8.png" class="img-fluid animation-jump" alt="Image">
                    </div>
                </div>
                <!--end about image-->
                <!--start about info-->
                <div class="col-md-6">
                    <div class="about-info">
                        <h2>{{__('messages.service')}}</h2>
                        <p>{{__('messages.serviceBio')}}</p>
                        <ul>
                            <h3><li><i class="icofont-check"></i> {{__('messages.serviceOne')}}</li></h3>
                            <p>{{__('messages.serviceOneBio')}}</p>
                            <h3><li><i class="icofont-check"></i> {{__('messages.serviceTwo')}}</li></h3>
                            <p>{{__('messages.serviceTwoBio')}}</p>
                            <h3><li><i class="icofont-check"></i> {{__('messages.serviceThree')}}</li></h3>
                            <p>{{__('messages.serviceThreeBio')}}</p>
                        </ul>
                    </div>
                </div>
                <!--end about info-->
            </div>
        </div>
    </section>
    <!--end about area-->
    <!--start video area-->
    <section id="video-area">
        <div class="container">
            <div class="row">
                <!--start video content-->
                <div class="col-md-6">
                    <div class="video-cont">
                        <h2>{{__('messages.printablesHeader')}}</h2>
                        <p>{{__('messages.printablesBio')}}</p>
                    </div>
                </div>
                <!--end video content-->
                <!--start video box-->
                <div class="col-md-6">
                    <div class="video-box">
                        <div class="d-table text-center">
                            <div class="d-table-cell align-middle">
                                <a class="icofont-location-arrow" href="https://www.printables.com" target="_blank"><i class="icofont-location-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end video box-->
            </div>
        </div>
    </section>
    <!--end video area-->

    <!--start product area-->
    <section id="product-area" data-scroll-index="3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <div class="section-heading text-center">
                        <h2>{{__('messages.showcaseTitle')}}</h2>
                        <p>{{__('messages.showcaseBio')}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--start product single-->
                <div class="col-md-6">
                    <div class="product-single row">
                        <div class="product-img text-center col-lg-6">
                            <img src="images/kep1.jpeg" class="img-fluid" alt="Image">
                        </div>
                        <div class="product-cont col-lg-6">
                            <h4>Polylactic acid (PLA)</h4>
                            <ul>
                                <li><i class="icofont-check"></i> Környezetbarát</li>
                                <li><i class="icofont-check"></i> Könnyen nyomtatható</li>
                                <li><i class="icofont-check"></i> Széles színválaszték</li>
                                <li><i class="icofont-check"></i> Alacsony zsugorodás</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end product single-->
                <!--start product single-->
                <div class="col-md-6">
                    <div class="product-single row">
                        <div class="product-img text-center col-lg-6">
                            <img src="images/kep2.png" class="img-fluid" alt="Image">
                        </div>
                        <div class="product-cont col-lg-6">
                            <h4>PET-G</h4>
                            <ul>
                                <li><i class="icofont-check"></i> Szilárdság és ütésállóság</li>
                                <li><i class="icofont-check"></i> Keményített és könnyen nyomtatható</li>
                                <li><i class="icofont-check"></i> Kiváló átláthatóság és fényáteresztés</li>
                                <li><i class="icofont-check"></i> Kevésbé hajlamos a deformációra</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end product single-->
                <!--start product single-->
                <div class="col-md-6">
                    <div class="product-single row">
                        <div class="product-img text-center col-lg-6">
                            <img src="images/kep3.jpeg" class="img-fluid" alt="Image">
                        </div>
                        <div class="product-cont col-lg-6">
                            <h4>ABS</h4>
                            <ul>
                                <li><i class="icofont-check"></i> Szilárdság és Tartósság</li>
                                <li><i class="icofont-check"></i> Hőállóság</li>
                                <li><i class="icofont-check"></i> Változatos Felhasználások</li>
                                <li><i class="icofont-check"></i> Utókezelhetőség</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end product single-->
                <!--start product single-->
                <div class="col-md-6">
                    <div class="product-single row">
                        <div class="product-img text-center col-lg-6">
                            <img src="images/kep4.jpeg" class="img-fluid" alt="Image">
                        </div>
                        <div class="product-cont col-lg-6">
                            <h4>ASA</h4>
                            <ul>
                                <li><i class="icofont-check"></i> Időjárásállóság</li>
                                <li><i class="icofont-check"></i> Magas hőállóság</li>
                                <li><i class="icofont-check"></i> Kemikáliák ellenállása</li>
                                <li><i class="icofont-check"></i> Könnyű kezelhetőség</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end product single-->
            </div>
            <div class="more-prod-btn text-center">
                <a id="contactButton" href="/contact" target="_blank">{{__('messages.contact')}}</a>
            </div>
        </div>
    </section>
    <!--end product area-->


    <!--start contact area-->
    <!--end contact area-->
    <!--start footer-->
    <footer id="footer" class="bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <div class="footer-social">
                        <ul>
                            <li><span>{{ __('messages.follow') }}</span></li>
                            <li><a href="https://www.instagram.com/3dmnsns?igsh=YXZ2dGM3dzd3emR3" target="_blank"><i class="icofont-instagram"></i></a></li>
                            {{-- <li><a href><i class="icofont-twitter"></i></a></li>
                            <li><a href><i class="icofont-google-plus"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="copyright-text text-right">
                        <p>&copy; {{ __('messages.copy') }} <a href="https://github.com/Marika08100" target="blank">Marika</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end footer-->
    <!--jQuery js-->
    <script>
        var contactButton = document.getElementById('contactButton');

        contactButton.addEventListener('click', function() {
          window.location.href = '/contact';
        });
      </script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!--proper js-->
    <script src="js/popper.min.js"></script>
    <!--bootstrap js-->
    <script src="js/bootstrap.min.js"></script>
    <!--magnic popup js-->
    <script src="js/magnific-popup.min.js"></script>
    <!--owl carousel js-->
    <script src="js/owl.carousel.min.js"></script>
    <!--scrollIt js-->
    <script src="js/scrollIt.min.js"></script>
    <!--validator js-->
    <script src="js/validator.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <!--main js-->
    <script src="js/custom.js"></script>
</body>

</html>
