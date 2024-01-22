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

  <section id="contact-area" data-scroll-index="6">
    <div class="container">
        <div class="row">
            <!--start section heading-->
            <div class="col-lg-6 col-md-8">
                <div class="section-heading">
                    <h2>Contact With Us</h2>
                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.
                        Aenean dignissim pellentesque felis.</p>
                </div>
            </div>
            <!--end section heading-->
        </div>
        <div class="row">
            <!--start contact form-->
            <div class="col-md-7">
                <div class="contact-form">
                    <form id="ajax-contact" action="{{ route('contact.submit') }}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder={{__('messages.name')}}
                                required="required" data-error="Name is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder={{__('messages.email')}}
                                required="required" data-error="Valid email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="phone" class="form-control" id="phone" name="phone" placeholder={{__('messages.phone')}}>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder={{__('messages.subject')}}
                                required="required" data-error="Subject is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" rows="10"
                                placeholder={{__('messages.message')}} required="required"
                                data-error="Please, leave us a message."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" id="attachment" name="attachment" accept=".stl, .obj, .3mf, image/*, .pdf, .doc, .docx">
                            <div class="help-block with-errors"></div>
                        </div>
                        <button type="submit">{{__('actions.submit')}}</button>
                        <button type="submit">{{__('messages.goBack')}}</button>
                        <div class="messages"></div>
                    </form>
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
</section>

<script>
    @if(session('success'))
        alert("{{ __('messages.thankYouMessage') }}");
    @endif
</script>
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
  <!--contact js-->
  <script src="js/contact.js"></script>
  <!--main js-->
  <script src="js/custom.js"></script>
