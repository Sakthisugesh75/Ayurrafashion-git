@extends('frontend.main')
@section('content')




 <!-- page-title -->
 <div class="tf-page-title style-2">
    <div class="container-full">
        <div class="heading text-center">Log in</div>
    </div>
</div>
<!-- /page-title -->

<section class="flat-spacing-10">
    <div class="container">
        <div class="tf-grid-layout lg-col-2 tf-login-wrap">
            <div class="tf-login-form">
                <div id="recover">
                    <h5 class="mb_24">Reset your password</h5>
                    <p class="mb_30">We will send you an email to reset your password</p>
                    <div>
                        <form class="" id="login-form" action="#" method="post" accept-charset="utf-8" data-mailchimp="true">
                            <div class="tf-field style-1 mb_15">
                                <input class="tf-field-input tf-input" placeholder="" type="email" name="username1" id="username1">
                                <label class="tf-field-label fw-4 text_black-2" for="property3">Email *</label>
                            </div>
                            <div class="mb_20">
                                <a href="#login" class="tf-btn btn-line">Cancel</a>
                            </div>
                            <div class="">
                                <button type="submit" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Reset password</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="login">
                    <h5 class="mb_36">Log in</h5>
                    <div>
                        <form class="" id="login-form">
                            <input type="hidden" id="session" name="session" value="<?php echo $session; ?>">
                            <div class="tf-field style-1 mb_15">
                                <input class="tf-field-input tf-input" placeholder="" type="text" name="username" id="username">
                                <label class="tf-field-label fw-4 text_black-2" for="property3">Email *</label>
                            </div>
                            <div class="tf-field style-1 mb_30">
                                <input class="tf-field-input tf-input" placeholder="" type="password" id="password" name="password">
                                <label class="tf-field-label fw-4 text_black-2" for="property4">Password *</label>
                            </div>
                            <div class="mb_20">
                                <a href="<?=url('/')?>/forgot-password" class="tf-btn btn-line">Forgot your password?</a>
                            </div>
                            <div class="">
                                <button type="submit" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center login">Log in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tf-login-content">
                <h5 class="mb_36">I'm new here</h5>
                <p class="mb_20">Sign up for early Sale access plus tailored new arrivals, trends and promotions. To opt out, click unsubscribe in our emails.</p>
                <a href="<?=url('/')?>/user-register" class="tf-btn btn-line">Register<i class="icon icon-arrow1-top-left"></i></a>
            </div>
        </div>
    </div>
</section>
<script src="{{ url('assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
<script src="<?php echo url('/'); ?>/assets/datatable/js/sweetalert2@11.js"></script>

<script>
    $(document).on("click", ".login", function (e) {
        e.preventDefault();
var username = $("#username").val();
    var password = $("#password").val();

    var session = $("#session").val();

    console.log(username);
    console.log(password);


    if (username != "" && password != "") {
        $.ajax({
            type: 'POST',
            url: '<?php echo url('/'); ?>/api/v1/login',
            data: {
                'username': username,
                'password': password
            },
            success: function(data) {
                console.log(data);
                if (data.status == "SUCCESS") {
                    if(data.role == 1){
                        window.location.href = "<?=url('/')?>/dashboard";
                    }else{
                        if(session){
                            window.location.href = "<?=url('/')?>/cart";
                        }else{
                        window.location.href = "<?=url('/')?>/my-profile";
                        }

                    }



                    //location.reload();
                } else {
                    $("#error").show();
                    $("#errormessage").text(data.message);
                }

            }
        });
    } else {
        Swal.fire(
            'Failed!',
            'Please Fill the (*) Fields',
            'error'
        );

    }
    e.preventDefault();
});
</script>
@endsection
