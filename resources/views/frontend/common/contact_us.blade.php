@extends('frontend.main')
@section('content')
  <!-- page-title -->
  <div class="tf-page-title style-2">
    <div class="container-full">
        <div class="heading text-center">Contact Us</div>
    </div>
</div>
<!-- /page-title -->
<!-- map -->
<div class="w-100">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.856516438495!2d76.97795517479528!3d11.029050154483706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8584436afb75b%3A0xcb35bad5a1734f95!2s14%2C%20Avaram%20Palayam%20Rd%2C%20Dharani%20Nagar%2C%20Kamadhenu%20Nagar%2C%20Avarampalayam%2C%20Illango%20Nagar%2C%20Coimbatore%2C%20Tamil%20Nadu%20641006!5e1!3m2!1sen!2sin!4v1760448166655!5m2!1sen!2sin" width="100%" height="646" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- /map -->
<!-- form -->
<section class="flat-spacing-21">
    <div class="container">
        <div class="tf-grid-layout gap30 lg-col-2">
            <div class="tf-content-left">
                <h5 class="mb_20">Visit Our Store</h5>
                <div class="mb_20">
                    <p class="mb_15"><strong>Address</strong></p>
                   <p>Ayuraa Fashion Headquarters,<br> Serving Women Worldwide.</p>
                </div>
                <div class="mb_20">
                    <p class="mb_15"><strong>Phone</strong></p>
                    <p>(+91) 999 888 7777</p>
                </div>
                <div class="mb_20">
                    <p class="mb_15"><strong>Email</strong></p>
                    <p>info@ayurra-fashion.com</p>
                </div>
                <div class="mb_36">
                    <p class="mb_15"><strong>Open Time</strong></p>
                    <p class="mb_15">Our store is open for shopping,</p>
                    <p>Exchange every day: 10am to 9pm</p>
                </div>
                <div>
                    <ul class="tf-social-icon d-flex gap-20 style-default">
                          <li><a href="#" class="box-icon w_34 round social-facebook social-line"><i class="icon fs-14 icon-fb"></i></a></li>
                          <li><a href="#" class="box-icon w_34 round social-instagram social-line"><i class="icon fs-14 icon-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="tf-content-right">
                <h5 class="mb_20">Get in Touch</h5>
                <p class="mb_24">If you have got any questions, please reach out to us by filling this form. We will get back to you shortly.</p>
                <div>
                    <form id="contact-form" class="form-contact" action="#" method="post">
                        <div class="d-flex gap-15 mb_15">
                            <fieldset class="w-100">
                                <input type="text" name="name" placeholder="Name *" required>
                            </fieldset>
                            <fieldset class="w-100">
                                <input type="email" name="email" placeholder="Email *" required>
                            </fieldset>
                        </div>
                        <fieldset class="mb_15">
                            <textarea name="message" rows="4" placeholder="Message *" required></fieldset>
                        <div class="send-btn">
                            <button class="tf-btn btn-fill radius-3 animate-hover-btn justify-content-center" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
