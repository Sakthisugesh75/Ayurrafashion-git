@extends('frontend.main')
@section('content')
{{-- <link rel="stylesheet" href="<?= url('/') ?>/frontassets/css/style.css" />
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
                            <h2 class="ec-breadcrumb-title">Reset Password</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="<?= url('/') ?>/">Home</a></li>
                                <li class="ec-breadcrumb-item active">Reset Password</li>
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
                                <input type="hidden" id="user_id" name="user_id" value="<?php echo $user->id; ?>">
                                <h5>Reset Password</h5>
                                <p class="form-row form-row-first">

                                    <input class="input-text" placeholder="New Password" type="n_password" id="n_password" name="password">&nbsp;
                                    <input class="input-text" placeholder="Confirm Password" type="c_password" id="c_password" name="password">
                                </p>
                                <div class="clear"></div>
                                <p class="form-row">
                                    {{-- <button class="button btn" type="button" onclick="update()">Reset password</button> --
                                    <button class="btn btn-primary login" type="button" onclick="update()">Reset password</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- #content -->
        </div><!-- #primary -->
    </div><!-- #main-content -->

    </section> --}}


     <!-- page-title -->
 <div class="tf-page-title style-2">
    <div class="container-full">
        <div class="heading text-center">Reset Password</div>
    </div>
</div>
<!-- /page-title -->

<section class="flat-spacing-10">
    <div class="container" id="email">
        <div class="tf-grid-layout lg-col-2 tf-login-wrap">
            <div class="tf-login-form">
                <div id="login">
                    <h5 class="mb_24">Reset password</h5>
                    {{-- <p class="mb_30">We will send you an email to reset your password</p> --}}
                    <div>
                        <form id="login-form" >
                            <input type="hidden" id="user_id" name="user_id" value="<?php echo $user->id; ?>">
                            <div class="tf-field style-1 mb_15">
                                <input class="tf-field-input tf-input" type="text" type="n_password" id="n_password">
                                <label class="tf-field-label fw-4 text_black-2" for="property3">New Password *</label>
                            </div>
                            <div class="tf-field style-1 mb_15">
                                <input class="tf-field-input tf-input" type="text" type="c_password" id="c_password">
                                <label class="tf-field-label fw-4 text_black-2" for="property3">Confirm Password *</label>
                            </div>

                            <div class="">
                                <button type="button" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center" onclick="update()">Reset password</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="container" id="resetLink">
        <h3>Password Changed Successfully</h3>
        <p><a href="<?=url('/')?>/user-login">click here</a>to Login</p>
    </div>
</section>


<script src="{{ url('assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('email').style.display = 'block';
            document.getElementById('resetLink').style.display = 'none';
        });
    // $(document).on("click", ".login", function (e) {
    function update(){
        // e.preventDefault();
        var id = $("#user_id").val();
var c_password = $("#c_password").val();
    var n_password = $("#n_password").val();

    if (c_password ===  n_password) {
        var password = c_password;
        $.ajax({
            type: 'POST',
            url: '<?php echo url('/'); ?>/api/v1/update-password',
            data: {
                'id':id,
                'password': password
            },
            success: function(data) {
                console.log(data);
                if (data.status == "SUCCESS") {
                    document.getElementById('email').style.display = 'none';
                    document.getElementById('resetLink').style.display = 'block';



                    //location.reload();
                } else {
                    $("#error").show();
                    $("#errormessage").text(data.message);
                }

            }
        });
    } else {
        $("#errormessage").show();
        $("#errormessage").text("Password and Confirm Password are Not Match");

    }
    // e.preventDefault();
// });
    }
</script>
@endsection
