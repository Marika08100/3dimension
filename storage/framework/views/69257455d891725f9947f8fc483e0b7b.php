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

<!--start header-->
    <header id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo -->
                    <a class="logo" href="#"><img src="images/logo.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"><i class="icofont-navigation-menu"></i></span>
                    </button>
                    <!-- navbar links -->
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="/" ><?php echo e(__('messages.home')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll-nav="1"><?php echo e(__('messages.features')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll-nav="2"><?php echo e(__('messages.about')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll-nav="3"><?php echo e(__('messages.product')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/materials"><?php echo e(__('messages.faq')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-scroll-nav="5"><?php echo e(__('messages.reviews')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact" ><?php echo e(__('messages.contact')); ?></a>
                            </li>
                        </ul>
                        <form action="<?php echo e(route('language.switch')); ?>" method="POST" class="inline-block">
                            <?php echo csrf_field(); ?>
                            <select name="language" onchange="this.form.submit()"
                                class="p-2 rounded bg-gray-100 text-gray-800">
                                <option value="en" <?php echo e(app()->getLocale() === 'en' ? 'selected' : ''); ?>>English</option>
                                <option value="hu" <?php echo e(app()->getLocale() === 'hu' ? 'selected' : ''); ?>>Magyar</option>
                                <option value="ro" <?php echo e(app()->getLocale() === 'ro' ? 'selected' : ''); ?>>Romana</option>
                            </select>
                        </form>
                        <?php if(session('language_switched')): ?>
                        <span class="language"><?php echo e(session('language_switched') === 'hu' ? 'Magyar' : ''); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--end header-->

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
<?php /**PATH C:\laragon\www\3dimension\3dimension\resources\views/header.blade.php ENDPATH**/ ?>
