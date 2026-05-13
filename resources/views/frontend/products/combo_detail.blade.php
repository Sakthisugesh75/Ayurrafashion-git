@extends('frontend.main')
@section('content')
    <!-- breadcrumb-section start -->
    {{-- <nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title pb-4 text-dark text-capitalize">
                            Product Details
                        </h2>
                    </div>
                </div>
                <div class="col-12">
                    <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                        <li class="breadcrumb-item"><a href="<?= url('/') ?>/">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.html">Products</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Product Details
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </nav> --}}
    <!-- breadcrumb-section end -->
    <?php
    // print_r($products);
    // exit;
    ?>
    <!-- product-single start -->
    <section class="product-single theme1 pt-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div>
                        <div class="position-relative">
                            <span class="badge badge-danger top-right">New</span>
                        </div>
                        <div class="product-sync-init mb-20">
                            <?php if(!empty($images)){
                                foreach ($images as $key => $value) { ?>
                                    <div class="single-product">
                                        <div class="product-thumb">
                                            <img src="<?= url('/') ?>/<?=$value->image_url?>" alt="product-thumb" />
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                              <?php  }}?>


                        </div>
                    </div>
                    <div class="product-sync-nav single-product">
                        <?php if(!empty($images)){
                                foreach ($images as $key => $value) { ?>
                        <div class="single-product">
                            <div class="product-thumb">
                                <a href="javascript:void(0)">
                                    <img src="<?= url('/') ?>/<?=$value->image_url?>" alt="product-thumb" /></a>
                            </div>
                        </div>
                        <!-- single-product end -->
                        <?php  }}?>


                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-product-info">
                        <div class="single-product-head">
                            <h2 class="title mb-20"><?php echo $products->combo_name ?></h2>
                            <div class="star-content mb-20">
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <a href="#" id="write-comment"><span class="ms-2"><i
                                            class="far fa-comment-dots"></i></span>
                                    Read reviews <span>(1)</span></a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><span
                                        class="edite"><i class="far fa-edit"></i></span> Write a
                                    review</a>
                            </div>
                        </div>
                        <div class="product-body mb-40">

                            <div class="d-flex align-items-center mb-30">
                                <!-- Display regular price and old price initially -->
                                <span class="product-price me-2">
                                    <span class="onsale" id="price">Rs.<?php echo $products->price; ?></span>

                                    <del class="del" id="old_price">Rs.<?php echo $products->mrp; ?></del>
                                </span>
                                <?php
                                    // Calculate the savings percentage based on initial price and old price
                                    $profit = (($products->mrp - $products->price) / $products->mrp) * 100;
                                ?>
                                <span class="badge position-static bg-dark rounded-0" id="save-badge">Save <?php echo round($profit); ?>%</span>
                            </div>
                            <p>
                                <?php echo $products->combo_name; ?>
                            </p>
                        </div>

                        <div class="product-body mb-40">
                            <form action="#" id="sizeDt" method="POST">
                                <input type="hidden" id="combo" name="combo" value="1">
                                <input type="hidden" id="prod_id" name="prod_id" value="<?php echo $products->id ?>">
                            <?php
                                $count = 0 ;
                                for($i = 0; $i < $products->qty ; $i++ ){
                                    $count = $count + 1 ;

                                ?>
                                   <div class="row">
                            <div class="col-3">
                                <label for="color">Color <?=$count?>:</label>
                                <select class="form-select" name="color[]" id="color_<?=$i?>">
                                    <option value="">Select</option>
                                    <?php

                                    if(!empty($color)){
                                    foreach ($color as $data) { ?>
                                    <option value="<?=$data->id?>" ><?=$data->color?></option>
                                    <?php   }} ?>
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="color">Size <?=$count?>:</label>
                                <select class="form-select" name="size[]" id="size_<?=$i?>">
                                    <option value="">Select</option>

                                    <?php

                                    if(!empty($size)){
                                    foreach ($size as $data) { ?>
                                    <option value="<?=$data->id?>" ><?=$data->size?></option>
                                    <?php   }} ?>

                                </select>
                            </div>
                        </div>
                            <?php } ?>
                            </form>
                        </div>



                        <div class="product-footer">
                            <div class="product-count style d-flex flex-column flex-sm-row mt-30 mb-30">

                                <div>
                                    <button class="btn btn-dark btn--xl mt-5 mt-sm-0">
                                        <span class="me-2"><i class="ion-android-add"></i></span>
                                        Add to cart
                                    </button>
                                    <button class="btn btn-dark btn--xl mt-5 mt-sm-0">
                                        <span class="me-2"><i class="fa fa-shopping-cart"></i></span>
                                        Buy Now
                                    </button>
                                </div>
                            </div>
                            <div class="addto-whish-list">
                                <a href="#"><i class="icon-heart"></i> Add to wishlist</a>
                            </div>
                            <div class="pro-social-links mt-10">
                                <ul class="d-flex align-items-center">
                                    <li class="share">Share</li>
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-google"></i></a></li>
                                    <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-single end -->
    <!-- product tab start -->
    <div class="product-tab theme1 bg-white pt-60 pb-80">
        <div class="container">
            <div class="product-tab-nav">
                <div class="row align-items-center">
                    <div class="col-12">
                        <nav class="product-tab-menu single-product">
                            <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">


                                <li class="nav-item">
                                    <a class="nav-link " id="pills-contact-tab" data-bs-toggle="pill"
                                        href="#pills-contact" role="tab" aria-controls="pills-contact"
                                        aria-selected="false">Reviews</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- product-tab-nav end -->
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="pills-tabContent">


                        <!-- third tab-pane -->
                        <div class="tab-pane fade show active" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="single-product-desc">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="review-wrapper">
                                            <div class="single-review">
                                                <div class="review-img">
                                                    <img src="<?= url('/') ?>/frontassets/img/testimonial-image/1.png" alt="image" />
                                                </div>
                                                <div class="review-content">
                                                    <div class="review-top-wrap">
                                                        <div class="review-left">
                                                            <div class="review-name">
                                                                <h4>White Lewis</h4>
                                                            </div>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="review-left">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="review-bottom">
                                                        <p>
                                                            Vestibulum ante ipsum primis aucibus orci
                                                            luctustrices posuere cubilia Curae Suspendisse
                                                            viverra ed viverra. Mauris ullarper euismod
                                                            vehicula. Phasellus quam nisi, congue id nulla.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-review child-review">
                                                <div class="review-img">
                                                    <img src="<?= url('/') ?>/frontassets/img/testimonial-image/2.png" alt="image" />
                                                </div>
                                                <div class="review-content">
                                                    <div class="review-top-wrap">
                                                        <div class="review-left">
                                                            <div class="review-name">
                                                                <h4>White Lewis</h4>
                                                            </div>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="review-left">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="review-bottom">
                                                        <p>
                                                            Vestibulum ante ipsum primis aucibus orci
                                                            luctustrices posuere cubilia Curae Sus pen disse
                                                            viverra ed viverra. Mauris ullarper euismod
                                                            vehicula.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="ratting-form-wrapper">
                                            <h3>Add a Review</h3>
                                            <div class="ratting-form">
                                                <form action="#">
                                                    <div class="star-box">
                                                        <span>Your rating:</span>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="rating-form-style mb-10">
                                                                <input placeholder="Name" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="rating-form-style mb-10">
                                                                <input placeholder="Email" type="email" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="rating-form-style form-submit">
                                                                <textarea name="Your Review" placeholder="Message"></textarea>
                                                                <input type="submit" value="Submit" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product tab end -->



     <!-- product tab end -->

     <script src="<?= url('/') ?>/assets/datatable/js/jquery-3.4.1.min.js"></script>
     <script src="<?php echo url('/'); ?>/assets/datatable/js/sweetalert2@11.js"></script>
     <script type="text/javascript">




function addtocart(id) {

    var formInstance = document.getElementById('sizeDt');
event.preventDefault();
 var headers = new Headers();
 headers.set('Accept', 'application/json');
//  $("#save_button").hide();
//  $("#save_button_loading").show();
 var formData = new FormData();
 let data = {};

 console.log(formInstance.length);
 for (var i = 0; i < formInstance.length; ++i) {
    // console.log(formInstance[i].name);
    var fieldName = formInstance[i].name; // Get the name of the form field
    var fieldValue = formInstance[i].value; // Get the value entered by the user
    data[fieldName] = fieldValue; // Store the field name and its value in the data object
}
var dt = JSON.stringify(data);


             $.ajax({
                 type: 'POST',
                 url: '<?php echo url('/'); ?>/api/v1/order/add-cart',
                 data: {
                     'id': id,
                 },
                 success: function(data) {
                     console.log(data);
                     if (data.status == "SUCCESS") {
                         window.location.href = "<?php echo url('/'); ?>/cart";

                     } else {
                         $("#error").show();
                         $("#errormessage").text(data.message);
                     }

                 }
             });

         }
function addToWishlist(id) {

     $.ajax({
         type: 'POST',
         url: '<?php echo url('/'); ?>/api/v1/products/add-wishlist',
         data: {
             'prod_id': prod_id,
         },
         success: function(data) {
             console.log(data);
             if (data.status == "SUCCESS") {
                 Swal.fire({
                     title: 'Product Add to Wishlist Successfully',
                     icon: 'success',
                     confirmButtonColor: '#3085d6',
                     confirmButtonText: 'Ok'
                 }).then((result) => {
                     if (result.isConfirmed) {
                         location.reload();
                     }
                 })

             } else {
                 $("#error").show();
                 $("#errormessage").text(data.message);
             }

         }
     });



 }




     </script>
@endsection
