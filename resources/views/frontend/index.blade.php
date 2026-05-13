@extends('frontend.main')
@section('content')

                @include('frontend.banner')

                    <!-- Categories -->
                    <section class="flat-spacing-5 pb_0">
                        <div class="container">
                            <div class="flat-title text-center">
                                <h1 class="title wow fadeInUp" data-wow-delay="0s">Curated Collections</h1>
                                <p class="sub-title wow fadeInUp" data-wow-delay="0.1s">Discover the Art of Elegance</p>
                            </div>
                            <div class="hover-sw-nav">
                                <div dir="ltr" class="swiper tf-sw-collection" data-preview="4" data-tablet="2" data-mobile="2" data-space-lg="30" data-space-md="30" data-space="15" data-loop="false" data-auto-play="false">
                                    <div class="swiper-wrapper">
                                        <?php
                                                        // print_r($categoryCnt);
                                                        if(!empty($categoryCnt)){
                                                            foreach ($categoryCnt as $key => $item) { ?>
                                        <div class="swiper-slide" lazy="true">
                                            <div class="collection-item style-2 hover-img">
                                                <div class="collection-inner">
                                                    <a href="<?= url('/') ?>/user-product/<?= $item->cat_name?>" class="collection-image img-style">
                                                        <?php if($item->categoryimage == null){ ?>
                                                        <img class="lazyload" data-src="<?= url('/') ?>/" src="<?= url('/') ?>/" alt="collection-img">

                                                        <?php }else{ ?>
                                                        <img class="lazyload" data-src="<?= url('/') ?>/<?=$item->categoryimage?>" src="<?= url('/') ?>/<?=$item->categoryimage?>" alt="collection-img">
                                                        <?php } ?>
                                                    </a>
                                                    <div class="collection-content">
                                                        <a href="<?= url('/') ?>/user-product/<?= $item->cat_name?>" class="tf-btn collection-title rounded-0"><span class="btnhome"><?=$item->category_name?></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }} ?>
<!-- style= -->
                                    </div>
                                </div>
                                <div class="nav-sw nav-next-slider nav-next-collection box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
                                <div class="nav-sw nav-prev-slider nav-prev-collection box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
                                <div class="sw-dots style-2 sw-pagination-collection justify-content-center"></div>
                            </div>
                        </div>
                    </section>
                    <!-- /Categories -->

                    <!-- Shop Collection -->
        <section class="flat-spacing-4 pt_5">
            <div class="container">
                <div class="tf-grid-layout md-col-2 tf-img-with-text style-2 align-items-center">
                    <div class="tf-image-wrap wow fadeInUp" data-wow-delay="0s" style="border: 1px solid var(--ayuraa-gold-muted); padding: 10px;">
                        <img class="lazyload" data-src="<?= url('/') ?>/frontassets/images/collections/mart-collection.png" src="<?= url('/') ?>/frontassets/images/collections/mart-collection.png" alt="collection-img">
                    </div>
                    <div class="tf-content-wrap text-center w-100 wow fadeInUp" data-wow-delay="0.2s">
                        <span class="sub-heading text-uppercase fw-7 text-gold letter-spacing-2">ELEGANCE REDEFINED</span>
                        <div class="heading font-heading mb-4 mt-2" style="font-size: 48px;">The Designer Atelier</div>
                        <p class="description mx-auto mb-5" style="max-width: 500px;">Where traditional grace meets modern style. Discover our exclusive range of designer short kurtis crafted for the sophisticated woman who values craftsmanship and luxury.</p>
                        <a href="<?= url('/') ?>/user-product/czoxOiIwIjs" class="tf-btn btn-fill">Explore Collection</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Shop Collection -->

                       <!-- New Arrivals -->
                        <section class="flat-spacing-8">
                            <div class="container">
                                <div class="flat-title text-center">
                                    <h2 class="title wow fadeInUp" data-wow-delay="0s">New Arrivals</h2>
                                    <p class="sub-title wow fadeInUp" data-wow-delay="0.1s">Check out our latest fashion must-haves</p>
                                </div>
                                <div class="hover-sw-nav hover-sw-2">
                                    <div dir="ltr" class="swiper tf-sw-product-sell wrap-sw-over" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3" data-pagination-lg="3">
                                        <div class="swiper-wrapper">
                                            <?php
                                            if(!empty($products)){
                                                foreach ($products as $key => $data) { ?>
                                            <div class="swiper-slide" lazy="true">
                                                <div class="card-product style-3">
                                                    <div class="card-product-wrapper">
                                                        <a href="<?= url('/') ?>/product/<?= $data->slug ?>/<?=$data->color ?>" class="product-img">
                                                            <?php if($data->image_url == null){ ?>
                                                            <img class="lazyload img-product" data-src="<?= url('/') ?>/frontassets/images/products/81v3kUfxYHL._AC_SX569_pp1.jpg" src="<?= url('/') ?>/frontassets/images/products/81v3kUfxYHL._AC_SX569_pp1.jpg" alt="image-product">
                                                            <img class="lazyload img-hover" data-src="<?= url('/') ?>/frontassets/images/products/81v3kUfxYHL._AC_SX569_pp1.jpg" src="<?= url('/') ?>/frontassets/images/products/81v3kUfxYHL._AC_SX569_pp1.jpg" alt="image-product">
                                                            <?php }else{ ?>
                                                                <img class="lazyload img-product" data-src="<?= url('/') ?>/<?=$data->image_url ?>" src="<?= url('/') ?>/<?=$data->image_url ?>" alt="image-product">
                                                                <img class="lazyload img-hover" data-src="<?= url('/') ?>/<?=$data->image_url ?>" src="<?= url('/') ?>/<?=$data->image_url ?>" alt="image-product">
                                                            <?php } ?>

                                                        </a>
                                                        <div class="list-product-btn column-right">
                                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                                <span class="icon icon-heart"></span>
                                                                <span class="tooltip">Add to Wishlist</span>
                                                                <span class="icon icon-delete"></span>
                                                            </a>
                                                           
                                                        </div>
                                                        <div class="list-product-btn absolute-3">
                                                            <a href="<?= url('/') ?>/product/<?= $data->slug ?>/<?=$data->color ?>" class="box-icon quick-add tf-btn-loading style-2">
                                                                <span class="icon icon-bag"></span>
                                                                <span class="text">DETAILS</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card-product-info text-center">
                                                        <a href="<?= url('/') ?>/product/<?= $data->slug ?>/<?=$data->color ?>" class="title link"> <?=$data->product_name ?></a>
                                                        <span class="price">Rs.<?=$data->price ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php }} ?>
                                        </div>
                                    </div>
                                    <div class="nav-sw nav-next-slider nav-next-product box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
                                    <div class="nav-sw nav-prev-slider nav-prev-product box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
                                    <div class="sw-dots style-2 sw-pagination-product justify-content-center"></div>
                                </div>
                            </div>
                        </section>
                        <!-- /New Arrivals -->





                  <!-- Banner collection -->
        <section class="tf-slideshow slider-video position-relative" id="mBanner">
            <div class="banner-wrapper">
                <img src="<?= url('/') ?>/frontassets/images/shop/gallery/middle.png" alt="image">
                <div class="box-content text-center">
                    <div class="container wow fadeInUp" data-wow-delay="0s">
                        <a href="<?= url('/') ?>/user-product/czoxOiIwIjs" class="tf-btn btn-md btn-light-icon btn-icon radius-3 animate-hover-btn"><span>Shop now</span><i class="icon icon-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <style>
            #mBanner img {
    width: 100%;
    height: auto;
    object-fit: contain;
}
</style>
        <!-- /Banner collection -->

         <!-- Trending Products -->
         <section class="flat-spacing-11">
            <div class="container">
                <div class="flat-title text-center">
                    <h2 class="title wow fadeInUp font-heading" data-wow-delay="0s">The Season's Best for Her</h2>
                    <p class="sub-title wow fadeInUp" data-wow-delay="0.1s">Curated highlights from our latest designer collection</p>
                </div>
                <div class="hover-sw-nav hover-sw-2">
                    <div dir="ltr" class="swiper tf-sw-product-sell wrap-sw-over" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3" data-pagination-lg="3">
                        <div class="swiper-wrapper">
                            <?php
                            if(!empty($products)){
                                foreach ($products as $key => $data) { ?>
                            <div class="swiper-slide" lazy="true">
                                <div class="card-product style-3">
                                    <div class="card-product-wrapper">
                                        <a href="<?= url('/') ?>/product/<?= $data->slug ?>/<?=$data->color ?>" class="product-img">
                                            <?php if($data->image_url == null){ ?>
                                            <img class="lazyload img-product" data-src="<?= url('/') ?>/frontassets/images/products/orange-1.jpg" src="<?= url('/') ?>/frontassets/images/products/orange-1.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="<?= url('/') ?>/frontassets/images/products/white-1.jpg" src="<?= url('/') ?>/frontassets/images/products/white-1.jpg" alt="image-product">
                                            <?php }else{ ?>
                                                <img class="lazyload img-product" data-src="<?= url('/') ?>/<?=$data->image_url ?>" src="<?= url('/') ?>/<?=$data->image_url ?>" alt="image-product">
                                                <img class="lazyload img-hover" data-src="<?= url('/') ?>/<?=$data->image_url ?>" src="<?= url('/') ?>/<?=$data->image_url ?>" alt="image-product">
                                            <?php } ?>


                                        </a>
                                        <div class="list-product-btn column-right">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            {{-- <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a> --}}
                                        </div>
                                        <div class="list-product-btn absolute-3">
                                            <a href="<?= url('/') ?>/product/<?= $data->slug ?>/<?=$data->color ?>" class="box-icon bg_white quick-add tf-btn-loading style-2">
                                                <span class="icon icon-bag"></span>
                                                <span class="text">QUICK ADD</span>
                                            </a>
                                        </div>


                                        {{-- <div class="size-list style-2">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div> --}}
                                    </div>
                                    <div class="card-product-info">
                                        <a href="<?= url('/') ?>/product/<?= $data->slug ?>/<?=$data->color ?>" class="title link"> <?=$data->product_name ?></a>
                                        <span class="price">Rs.<?=$data->price ?></span>
                                        {{-- <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Orange</span>
                                                <span class="swatch-value bg_orange-3"></span>
                                                <img class="lazyload" data-src="<?= url('/') ?>/frontassets/images/products/orange-1.jpg" src="<?= url('/') ?>/frontassets/images/products/orange-1.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="<?= url('/') ?>/frontassets/images/products/black-1.jpg" src="<?= url('/') ?>/frontassets/images/products/black-1.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="<?= url('/') ?>/frontassets/images/products/white-1.jpg" src="<?= url('/') ?>/frontassets/images/products/white-1.jpg" alt="image-product">
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                            </div>
                            <?php }} ?>
                        </div>
                    </div>
                    <div class="nav-sw nav-next-slider nav-next-product box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
                    <div class="nav-sw nav-prev-slider nav-prev-product box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
                    <div class="sw-dots style-2 sw-pagination-product justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Trending Products -->

        <section class="flat-spacing-1">
            <div class="container">
                <div class="flat-title text-center wow fadeInUp" data-wow-delay="0s">
                    <h2 class="title font-heading">The Ayuraa Muse</h2>
                    <p class="sub-title">Real style. Real women. Join our circle of elegance.</p>
                </div>
                <div class="wrap-carousel wrap-shop-gram">
                    <div dir="ltr" class="swiper tf-sw-shop-gallery" data-preview="5" data-tablet="3" data-mobile="2" data-space-lg="7" data-space-md="7">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img wow fadeInUp" data-wow-delay="0s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="<?= url('/') ?>/frontassets/images/shop/gallery/Oneone.jpg" src="<?= url('/') ?>/frontassets/images/shop/gallery/Oneone.jpg" alt="image-gallery">
                                </div>
                                <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">Quick Add</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".1s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="<?= url('/') ?>/frontassets/images/shop/gallery/twoTwo.jpg" src="<?= url('/') ?>/frontassets/images/shop/gallery/twoTwo.jpg" alt="image-gallery">
                                </div>
                                <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">Quick Add</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".2s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="<?= url('/') ?>/frontassets/images/shop/gallery/threeTh.jpg" src="<?= url('/') ?>/frontassets/images/shop/gallery/threeTh.jpg" alt="image-gallery">
                                </div>
                                <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">Quick Add</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".3s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="<?= url('/') ?>/frontassets/images/shop/gallery/fourFo.jpg" src="<?= url('/') ?>/frontassets/images/shop/gallery/fourFo.jpg" alt="image-gallery">
                                </div>
                                <a href="product-detail.html" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">View product</span></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".4s">
                                <div class="img-style">
                                    <img class="lazyload img-hover" data-src="<?= url('/') ?>/frontassets/images/shop/gallery/fivefi.jpg" src="<?= url('/') ?>/frontassets/images/shop/gallery/fivefi.jpg" alt="image-gallery">
                                </div>
                                <a href="product-detail.html" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">View product</span></a>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="sw-dots style-2 justify-content-center sw-pagination-gallery"></div>
                </div>
            </div>
        </section>
        <!-- /Shop Gram -->


                            <!-- Icon box -->
                            <section class="flat-spacing-1 flat-iconbox wow fadeInUp" data-wow-delay="0s">
                                <div class="container">
                                    <div class="wrap-carousel wrap-mobile">
                                        <div dir="ltr" class="swiper tf-sw-mobile" data-preview="1" data-space="15">
                                            <div class="swiper-wrapper wrap-iconbox">
                                                <div class="swiper-slide">
                                                    <div class="tf-icon-box style-row">
                                                        <div class="icon">
                                                            <i class="icon-shipping"></i>
                                                        </div>
                                                        <div class="content">
                                                            <div class="title fw-5 text-gold">Curated Shipping</div>
                                                            <p>Complimentary on all orders</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tf-icon-box style-row">
                                                        <div class="icon">
                                                            <i class="icon-payment fs-22"></i>
                                                        </div>
                                                        <div class="content">
                                                            <div class="title fw-5 text-gold">Seamless Payments</div>
                                                            <p>Safe and multiple options available</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tf-icon-box style-row">
                                                        <div class="icon">
                                                            <i class="icon-return fs-20"></i>
                                                        </div>
                                                        <div class="content">
                                                            <div class="title fw-5 text-gold">Elegant Exchanges</div>
                                                            <p>Hassle-free 7-day returns</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tf-icon-box style-row">
                                                        <div class="icon">
                                                            <i class="icon-suport"></i>
                                                        </div>
                                                        <div class="content">
                                                            <div class="title fw-5 text-gold">Personal Atelier Support</div>
                                                            <p>Dedicated assistance for your style needs</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="sw-dots style-2 sw-pagination-mb justify-content-center"></div>
                                    </div>
                                </div>
                            </section>
                            <!-- /Icon box -->

        <script src="<?= url('/') ?>/assets/datatable/js/jquery-3.4.1.min.js"></script>
        <script src="<?php echo url('/'); ?>/assets/datatable/js/sweetalert2@11.js"></script>
        <script type="text/javascript">
            function addToWishlist(id) {

                var login = "<?php echo session('logged_in'); ?>";
                if (login == true) {
                    var prod_id = id;
                    console.log(prod_id);

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

                } else {
                    window.location.href = "<?= url('/') ?>/user-login";
                }

            }

            function addtocart(id) {

                // var login = "<?php echo session('logged_in'); ?>" ;
                // if(login == true){


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
                //     }else{
                //     window.location.href = "<?= url('/') ?>/user-login";
                // }

            }


        </script>
    @endsection
