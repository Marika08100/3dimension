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

     <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                            <h1><?php echo e(__('messages.title')); ?></h1>
                            <p><?php echo e(__('messages.subTitle')); ?>.</p>
                            <a href="#product-area"><?php echo e(__('messages.offer')); ?></a>
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
                        <h2><?php echo e(__('messages.tech')); ?></h2>
                        <p><?php echo e(__('messages.techDes')); ?></p>
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
                <h4><?php echo e(__('messages.knownQuality')); ?></h4>
                        <p><?php echo e(__('messages.knownQualityDes')); ?></p>
                    </div>
                </div>
                <!--end feature single-->
                <!--start feature single-->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-single text-center">
                        <div class="icon">
                            <i class="icofont-speed-meter"></i>
                        </div>
                        <h4><?php echo e(__('messages.knownProt')); ?></h4>
                        <p><?php echo e(__('messages.knownProtDes')); ?></p>
                    </div>
                </div>
                <!--end feature single-->
                <!--start feature single-->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-single text-center">
                        <div class="icon">
                            <i class="icofont-bucket"></i>
                            </div>
                        <h4><?php echo e(__('messages.knownTech')); ?></h4>
                        <p><?php echo e(__('messages.knownTechDes')); ?></p>
                    </div>
                </div>
                <!--end feature single-->
                <!--start feature single-->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-single text-center">
                        <div class="icon">
                            <i class="icofont-money-bag"></i>
                        </div>
                        <h4><?php echo e(__('messages.knownCheap')); ?></h4>
                        <p><?php echo e(__('messages.knownCheapDes')); ?></p>
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
                        <h2><?php echo e(__('messages.service')); ?></h2>
                        <p><?php echo e(__('messages.serviceBio')); ?></p>
                        <ul>
                            <h3><li><i class="icofont-check"></i> <?php echo e(__('messages.serviceOne')); ?></li></h3>
                            <p><?php echo e(__('messages.serviceOneBio')); ?></p>
                            <h3><li><i class="icofont-check"></i> <?php echo e(__('messages.serviceTwo')); ?></li></h3>
                            <p><?php echo e(__('messages.serviceTwoBio')); ?></p>
                            <h3><li><i class="icofont-check"></i> <?php echo e(__('messages.serviceThree')); ?></li></h3>
                            <p><?php echo e(__('messages.serviceThreeBio')); ?></p>
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
                        <h2><?php echo e(__('messages.printablesHeader')); ?></h2>
                        <p><?php echo e(__('messages.printablesBio')); ?></p>
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
                        <h2><?php echo e(__('messages.showcaseTitle')); ?></h2>
                        <p><?php echo e(__('messages.showcaseBio')); ?></p>
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
                            <h4>Luxurious Watch</h4>
                            <ul>
                                
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
                            <h4>Pink Torex Watch</h4>
                            <ul>
                                
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
                            <h4>New Yellow Watch</h4>
                            <ul>
                                
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
                            <h4>Brand New Black</h4>
                            <ul>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end product single-->
            </div>
            <div class="more-prod-btn text-center">
                <a id="contactButton" href="/contact"><?php echo e(__('messages.contact')); ?></a>
            </div>
        </div>
    </section>
    <!--end product area-->

    <!--start faq area-->
    <section id="faq-area" data-scroll-index="4">
        <div class="container">
            <div class="row">
                <!--start heading-->
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <div class="section-heading text-center">
                        <h2>Frequently Asked Questions</h2>
                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.
                            Aenean dignissim pellentesque felis.</p>
                    </div>
                </div>
                <!--end heading-->
            </div>
            <!--start faq accordian-->
            <div id="accordion2" role="tablist">
                <div class="row">
                    <div class="col-md-6">
                        <!--start faq single-->
                        <div class="card">
                            <div class="card-header" role="tab" id="faq1">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#collapse1" aria-expanded="false"
                                        aria-controls="collapse1">How can I buy the watch?</a>
                                </h5>
                            </div>
                            <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="faq1"
                                data-parent="#accordion2">
                                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel,
                                    dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra,
                                    tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut
                                    justo. Suspendisse potenti.</div>
                            </div>
                        </div>
                        <!--end faq single-->
                        <!--start faq single-->
                        <div class="card">
                            <div class="card-header" role="tab" id="faq2">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse2" aria-expanded="false"
                                        aria-controls="collapse2">How can I order the watch?</a>
                                </h5>
                            </div>
                            <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="faq2"
                                data-parent="#accordion2">
                                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel,
                                    dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra,
                                    tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut
                                    justo. Suspendisse potenti.</div>
                            </div>
                        </div>
                        <!--end faq single-->
                        <!--start faq single-->
                        <div class="card">
                            <div class="card-header" role="tab" id="faq3">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse3" aria-expanded="false"
                                        aria-controls="collapse3">How much price of the watch?</a>
                                </h5>
                            </div>
                            <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="faq3"
                                data-parent="#accordion2">
                                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel,
                                    dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra,
                                    tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut
                                    justo. Suspendisse potenti.</div>
                            </div>
                        </div>
                        <!--end faq single-->
                        <!--start faq single-->
                        <div class="card">
                            <div class="card-header" role="tab" id="faq4">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse4" aria-expanded="false"
                                        aria-controls="collapse4">How can I get refund?</a>
                                </h5>
                            </div>
                            <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="faq4"
                                data-parent="#accordion2">
                                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel,
                                    dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra,
                                    tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut
                                    justo. Suspendisse potenti.</div>
                            </div>
                        </div>
                        <!--end faq single-->
                    </div>
                    <div class="col-md-6">
                        <!--start faq single-->
                        <div class="card">
                            <div class="card-header" role="tab" id="faq5">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse5" aria-expanded="false"
                                        aria-controls="collapse5">How can I order the watch?</a>
                                </h5>
                            </div>
                            <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="faq5"
                                data-parent="#accordion2">
                                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel,
                                    dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra,
                                    tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut
                                    justo. Suspendisse potenti.</div>
                            </div>
                        </div>
                        <!--end faq single-->
                        <!--start faq single-->
                        <div class="card">
                            <div class="card-header" role="tab" id="faq6">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse6" aria-expanded="false"
                                        aria-controls="collapse6">How can I buy the watch?</a>
                                </h5>
                            </div>
                            <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="faq6"
                                data-parent="#accordion2">
                                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel,
                                    dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra,
                                    tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut
                                    justo. Suspendisse potenti.</div>
                            </div>
                        </div>
                        <!--end faq single-->
                        <!--start faq single-->
                        <div class="card">
                            <div class="card-header" role="tab" id="faq7">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse7" aria-expanded="false"
                                        aria-controls="collapse7">How can I get refund?</a>
                                </h5>
                            </div>
                            <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="faq7"
                                data-parent="#accordion2">
                                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel,
                                    dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra,
                                    tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut
                                    justo. Suspendisse potenti.</div>
                            </div>
                        </div>
                        <!--end faq single-->
                        <!--start faq single-->
                        <div class="card">
                            <div class="card-header" role="tab" id="faq8">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse8" aria-expanded="false"
                                        aria-controls="collapse8"> How much price of the watch?</a>
                                </h5>
                            </div>
                            <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="faq8"
                                data-parent="#accordion2">
                                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel,
                                    dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra,
                                    tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut
                                    justo. Suspendisse potenti.</div>
                            </div>
                        </div>
                        <!--end faq single-->
                    </div>
                </div>
            </div>
            <!--end faq accordian-->
        </div>
    </section>
    <!--end faq area-->

    <!--start contact area-->
    <!--end contact area-->
    <!--start footer-->
    <footer id="footer" class="bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <div class="footer-social">
                        <ul>
                            <li><span>Follow Us:</span></li>
                            <li><a href><i class="icofont-facebook"></i></a></li>
                            <li><a href><i class="icofont-twitter"></i></a></li>
                            <li><a href><i class="icofont-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="copyright-text text-right">
                        <p>&copy; <?php echo e(__('messages.copy')); ?> <a href="https://github.com/Marika08100" target="blank">Marika</a></p>
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
<?php /**PATH C:\laragon\www\3dimension\3dimension\resources\views/home.blade.php ENDPATH**/ ?>