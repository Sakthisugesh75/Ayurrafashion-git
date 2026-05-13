@extends('frontend.main')
@section('content')
{{-- <!-- Main Style -->
<link rel="stylesheet" href="<?= url('/') ?>/frontassets/css/style.css" />
<link rel="stylesheet" href="<?= url('/') ?>/frontassets/css/responsive.css" />
<style>


    #resetLink {
        display: none;
    }
</style>

<!-- Background css -->
<link rel="stylesheet" id="bg-switcher-css" href="<?= url('/') ?>/frontassets/css/backgrounds/bg-4.css">
    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Forgot Password</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="<?= url('/') ?>/">Home</a></li>
                                <li class="ec-breadcrumb-item active">Forgot Password</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">


            <div id="content" class="site-content" role="main">
                <div class="section-padding">
                    <div class="section-container p-l-r">
                        <div class="page-forget-password" id="email">
                            <form>
                                <p>Lost your password? Please enter your email address. You will receive a link to create a new password via email.</p>
                                <p class="form-row-first">
                                    <label>Email</label><br>
                                    <input class="input-text" placeholder="Type your Email Address here" type="email" id="username" name="username" autocomplete="email">
                                </p>
                                <div class="clear"></div>
                                <p class="form-row">
                                    {{-- <button class="button btn "  type="button" onclick="sendPasswordReset()">Reset password</button> --
                                    <button class="btn btn-primary login" type="button" onclick="sendPasswordReset()">Reset password</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- #content -->
        </div><!-- #primary -->
    </div><!-- #main-content -->
    <div class="container" id="resetLink">
        <h3>Reset Link Sent Success</h3>
        <p>Password Reset Link sent to your Mail Id</p>
    </div>
</section> --}}

 <!-- page-title -->
 <div class="tf-page-title style-2">
    <div class="container-full">
        <div class="heading text-center">Forgot Password</div>
    </div>
</div>
<!-- /page-title -->

<section class="flat-spacing-10">
    <div class="container" id="email">
        <div class="tf-grid-layout lg-col-2 tf-login-wrap">
            <div class="tf-login-form">
                <div id="login">
                    <h5 class="mb_24">Reset your password</h5>
                    <p class="mb_30">We will send you an email to reset your password</p>
                    <div>
                        <form id="login-form">
                            <div class="tf-field style-1 mb_15">
                                <input class="tf-field-input tf-input" type="email" id="username" name="username">
                                <label class="tf-field-label fw-4 text_black-2" for="property3">Email *</label>
                            </div>

                            <div class="">
                                <button type="button" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center" onclick="sendPasswordReset()">Reset password</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="container" id="resetLink">
        <h3>Reset Link Sent Success</h3>
        <p>Password Reset Link sent to your Mail Id</p>
    </div>
</section>


<script src="{{ url('assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>

<script>

document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('email').style.display = 'block';
            document.getElementById('resetLink').style.display = 'none';
        });

    // $(document).on("click", ".login", function (e) {
    function sendPasswordReset(){
        // e.preventDefault();

var username = $("#username").val();

var url = '';
    if (username != "" ) {
        $.ajax({
            type: 'POST',
            url: '<?php echo url('/'); ?>/api/v1/verifyusername',
            data: {
                'username': username,

            },
            success: function(data) {
                if(data.status == 'SUCCESS'){
                    document.getElementById('email').style.display = 'none';
                    document.getElementById('resetLink').style.display = 'block';
                }else{
                    Swal.fire(
            'Failed!',
            data.message,
            'error'
        );
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
    // e.preventDefault();
// });
    }
</script>
@endsection
