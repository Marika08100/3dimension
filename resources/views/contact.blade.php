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
                    {{-- <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.
                        Aenean dignissim pellentesque felis.</p> --}}
                </div>
            </div>
            <!--end section heading-->
        </div>
        <div class="row">
            <!--start contact form-->
            <div class="col-md-7">
                <div class="contact-form">
                    <form action="{{ route('contact') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                {{ Session::get('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @elseif (Session::has('error'))
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                {{ Session::get('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="name">{{ __('messages.name') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('messages.name') }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">{{ __('messages.email') }} <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="{{ __('messages.email') }}">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">{{ __('messages.phone') }} <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="{{ __('messages.phone') }}">
                            @error('phone')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="subject">{{ __('messages.subject') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="{{ __('messages.subject') }}" value="{{ old('subject') }}">
                            @error('subject')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="message">{{ __('messages.message') }} <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="message" name="message" rows="10" placeholder="{{ __('messages.message') }}">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" id="attachment" name="attachment" accept=".stl, .obj, .3mf, image/*, .pdf, .doc, .docx">
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('actions.submit') }}</button>
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
