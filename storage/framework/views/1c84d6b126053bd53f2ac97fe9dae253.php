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

<div id="contact-area">
    <div class="container">
        <div class="row">
            <!--start section heading-->
            <div class="col-lg-6 col-md-8">
                <div class="section-heading">
                    <h2>Contact With Us</h2>
                    
                </div>
            </div>
            <!--end section heading-->
        </div>
        <div class="row">
            <!--start contact form-->
            <div class="col-md-7">
                <div class="contact-form">
                    <form action="<?php echo e(route('contact')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php if(Session::has('success')): ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <?php echo e(Session::get('success')); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php elseif(Session::has('error')): ?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <?php echo e(Session::get('error')); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="name"><?php echo e(__('messages.name')); ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo e(__('messages.name')); ?>">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="email"><?php echo e(__('messages.email')); ?> <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo e(__('messages.email')); ?>">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="phone"><?php echo e(__('messages.phone')); ?> <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="<?php echo e(__('messages.phone')); ?>">
                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="subject"><?php echo e(__('messages.subject')); ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="<?php echo e(__('messages.subject')); ?>" value="<?php echo e(old('subject')); ?>">
                            <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="message"><?php echo e(__('messages.message')); ?> <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="message" name="message" rows="10" placeholder="<?php echo e(__('messages.message')); ?>"><?php echo e(old('message')); ?></textarea>
                            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" id="attachment" name="attachment" accept=".stl, .obj, .3mf, image/*, .pdf, .doc, .docx">
                        </div>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('actions.submit')); ?></button>
                    </form>
                </div>
                </div>
            </div>
            <!--end contact form-->
            <!--start contact image-->
            <div class="col-md-5">
                <div class="contact-img text-center">
                    <img src="images/tiertime_up300_image5.jpg" class="img-fluid animation-jump" alt>
                </div>
            </div>
            <!--end contact image-->
        </div>
    </div>
</div>

<!--jQuery js-->
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
<!--main js-->
<script src="js/custom.js"></script>
<?php /**PATH C:\laragon\www\3dimension\3dimension\resources\views/contact.blade.php ENDPATH**/ ?>