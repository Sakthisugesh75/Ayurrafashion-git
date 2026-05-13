@extends('frontend.main')
@section('content')

<!-- page-title -->
<div class="tf-page-title style-2">
    <div class="container-full">
        <div class="heading text-center">Register</div>
    </div>
</div>
<!-- /page-title -->

<section class="flat-spacing-10">
    <div class="container">
        <div class="form-register-wrap">
            <div class="flat-title align-items-start gap-0 mb_30 px-0">
                <h5 class="mb_18">Register</h5>
                {{-- <p class="text_black-2">Sign up for early Sale access plus tailored new arrivals, trends and promotions. To opt out, click unsubscribe in our emails</p> --}}
            </div>
            <div>
                <form class="" id="register-form">
                    <div class="tf-field style-1 mb_15">
                        <input class="tf-field-input tf-input" placeholder=" " type="text" name="firstname" id="firstname">
                        <label class="tf-field-label fw-4 text_black-2" for="property1">First name</label>
                    </div>
                    <div class="tf-field style-1 mb_15">
                        <input class="tf-field-input tf-input" placeholder=" " type="text" name="lastname" id="lastname">
                        <label class="tf-field-label fw-4 text_black-2" for="property2">Last name</label>
                    </div>
                    <div class="tf-field style-1 mb_15">
                        <input class="tf-field-input tf-input" placeholder=" " type="email" name="email" id="email">
                        <label class="tf-field-label fw-4 text_black-2" for="property3">Email *</label>
                    </div>
                    <div class="tf-field style-1 mb_30">
                        <input class="tf-field-input tf-input" placeholder=" " type="text" name="phone" id="phone">
                        <label class="tf-field-label fw-4 text_black-2" for="property4">Phone Number *</label>
                    </div>
                    <div class="tf-field style-1 mb_30">
                        <input class="tf-field-input tf-input" placeholder=" " type="text" name="address" id="address">
                        <label class="tf-field-label fw-4 text_black-2" for="property4">Address *</label>
                    </div>

                    <div class="tf-field style-1 mb_30">

                            <div class="select-custom">

                                <select class="tf-select w-100" id="state" name="state" onchange="getCity()">
                                    <option value="">Select State</option>
                                    <?php
                                    if(!empty($state)){
                                    foreach ($state as $item) { ?>
                                    <option value="<?=$item->state_id?>"><?=$item->state_name?></option>
                                    <?php   }} ?>
                                    </select>
                            </div>
                            {{-- <label class="tf-field-label fw-4 text_black-2" for="property4">State/Region *</label> --}}
                    </div>
                    <div class="tf-field style-1 mb_30">

                            <div class="select-custom">
                            <select class="tf-select w-100" id="city" name="city" >
                                <option value="">Select City</option>
                                <?php
                                if(!empty($city)){
                                foreach ($city as $item) { ?>
                                <option value="<?=$item->city_id?>"><?=$item->city_name?></option>
                                <?php   }} ?>
                                </select>
                                </div>
                                {{-- <label class="tf-field-label fw-4 text_black-2" for="property4">Town/City *</label> --}}
                        </div>
                        <div class="tf-field style-1 mb_30">
                            <input class="tf-field-input tf-input" placeholder=" " type="text" name="pincode" id="pincode">
                            <label class="tf-field-label fw-4 text_black-2" for="property4">Post Code *</label>
                        </div>
                    <div class="mb_20">
                        <button type="submit" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Register</button>
                    </div>
                    <div class="text-center">
                        <a href="<?=url('/')?>/user-login" class="tf-btn btn-line">Already have an account? Log in here<i class="icon icon-arrow1-top-left"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>





    <script src="<?=url('/')?>/assets/datatable/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo url('/');?>/assets/datatable/js/sweetalert2@11.js"></script>

    <script>




    function getCity(){
        // alert("ADFA");
            let id = $("#state").val();
            // alert(id);
            $.ajax({
                        type:'GET',
                        url:'<?php echo url('/');?>/api/v1/state/getCityByState',
                        data:{'id': id},
                        success:function(data) {
                            console.log(data);

                            if (data.status == "SUCCESS") {
                                 $("#city").empty();
                                 $("#city").append("<option>Select City</option>");
                                 console.log(data.list.length);
                                    for(let i = 0; i < data.list.length; i++) {
                                         $("#city").append("<option value='"+data.list[i].city_id+"'>"+data.list[i].city_name+'</option>');
                                            }
                            }

                        }
                    });
    }


    window.onload = function(){

var formInstance = document.getElementById('register-form');
formInstance.addEventListener('submit', function(event) {
    event.preventDefault();
    // getcheckbox();
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
 var url = '<?php echo url('/');?>/api/v1/register';
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

               Swal.fire({
            title: 'Thank you for Register With Us, Your Username & Password Send to Your Mail ID',
            body:'Your Username & Password Send to Your Mail ID',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Ok'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?=url('/');?>/user-login";
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
