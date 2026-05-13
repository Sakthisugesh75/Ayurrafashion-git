@extends('frontend.main')
@section('content')

<!-- page-title -->
 <div class="tf-page-title">
    <div class="container-full">
        <div class="heading text-center">My Account</div>
    </div>
</div>
<!-- /page-title -->

<!-- page-cart -->
<section class="flat-spacing-11">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="wrap-sidebar-account">
                    <ul class="my-account-nav">
                        <li><span class="my-account-nav-item active">Dashboard</span></li>
                        <li><a href="<?= url('/') ?>/my-order" class="my-account-nav-item">Orders</a></li>
                        <li><a href="<?= url('/') ?>/my-wishlist" class="my-account-nav-item">Wishlist</a></li>
                        <li><a href="<?= url('/') ?>/logout" class="my-account-nav-item">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="my-account-content account-dashboard">
                    <div class="mb_60">
                        <h5 class="fw-5 mb_20">Hello <?php echo $users->first_name ?> <?php echo $users->last_name ?></h5>
                        <p>
                            From your account dashboard you can view your <a class="text_primary" href="<?= url('/') ?>/my-order">recent orders</a>, and <a class="text_primary" href="<?= url('/') ?>/my-profile">edit your password and account details</a>.
                        </p>
                    </div>
                <div class="my-account-content account-edit">
                    <div class="">
                        <form class="" id="form-password-change" action="#">
                            <div class="tf-field style-1 mb_15">
                                <input class="tf-field-input tf-input" placeholder=" " type="text" id="fName" name="fName" value="<?php echo $users->first_name ?>">
                                <label class="tf-field-label fw-4 text_black-2" for="property1">First name</label>
                            </div>
                            <div class="tf-field style-1 mb_15">
                                <input class="tf-field-input tf-input" placeholder=" " type="text" id="lName" name="lName" value="<?php echo $users->last_name ?>">
                                <label class="tf-field-label fw-4 text_black-2" for="property2">Last name</label>
                            </div>
                            <div class="tf-field style-1 mb_15">
                                <input class="tf-field-input tf-input" placeholder=" " type="email" id="email" name="email" value="<?php echo $users->email ?>">
                                <label class="tf-field-label fw-4 text_black-2" for="property3">Email</label>
                            </div>
                            <h6 class="mb_20">Password Change</h6>
                            <div class="tf-field style-1 mb_30">
                                <input class="tf-field-input tf-input" placeholder=" " type="password" id="property4" name="password">
                                <label class="tf-field-label fw-4 text_black-2" for="property4">Current password</label>
                            </div>
                            <div class="tf-field style-1 mb_30">
                                <input class="tf-field-input tf-input" placeholder=" " type="password" id="property5" name="password">
                                <label class="tf-field-label fw-4 text_black-2" for="property5">New password</label>
                            </div>
                            <div class="tf-field style-1 mb_30">
                                <input class="tf-field-input tf-input" placeholder=" " type="password" id="property6" name="password">
                                <label class="tf-field-label fw-4 text_black-2" for="property6">Confirm password</label>
                            </div>
                            <div class="mb_20">
                                <button type="submit" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-cart -->

<div class="btn-sidebar-account">
    <button data-bs-toggle="offcanvas" data-bs-target="#mbAccount" aria-controls="offcanvas"><i class="icon icon-sidebar-2"></i></button>
</div>
<script src="<?= url('/') ?>/assets/plugins/jquery/jquery-3.5.1.min.js"></script>


<script src="<?php echo url('/');?>/assets/datatable/js/sweetalert2@11.js"></script>
<script type="text/javascript">
window.onload = function(){

    var formInstance = document.getElementById('form');
    formInstance.addEventListener('submit', function(event) {
        event.preventDefault();
        getcheckbox();
     var headers = new Headers();
     headers.set('Accept', 'application/json');
     $("#save_button").hide();
     $("#save_button_loading").show();
     var formData = new FormData();
     for (var i = 0; i < formInstance.length; ++i) {
        if(formInstance[i].name == "media"){
           const fileField = document.querySelector('input[name="media"]');
           formData.append('media', fileField.files[0]);
         }else{
           formData.append(formInstance[i].name, formInstance[i].value);
         }
     }
     var url = '<?php echo url('/');?>/api/v1/products/create';
     var fetchOptions = {
       method: 'POST',
       headers,
       body: formData
     };
     var responsePromise = fetch(url, fetchOptions);
     responsePromise
         .then(response => response.json())
           .then(data => {
            $("#save_button").show();
            $("#save_button_loading").hide();
               if (data.status == 'SUCCESS') {
                   // console.log(data);
                   Swal.fire({
                title: 'Products Added Successfully',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Ok'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "<?=url('/');?>/manage-products";
                }})

               } else {
                   Swal.fire(
                   'Failed!',
                   data.message,
                   'error'
                   );

               }
           })
     event.preventDefault();
    });
               }
            </script>
@endsection
