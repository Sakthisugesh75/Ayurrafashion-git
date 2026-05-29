@extends('frontend.main')
@section('content')
{{-- <?php print_r($products);
exit;
?> --}}


    <!-- breadcrumb -->
    <div class="tf-breadcrumb">
        <div class="container">
            <div class="tf-breadcrumb-wrap d-flex justify-content-between flex-wrap align-items-center">
                <div class="tf-breadcrumb-list">
                    <a href="<?= url('/') ?>/" class="text opacity-50">Home</a>
                    <i class="icon icon-arrow-right opacity-30"></i>
                    <a href="#" class="text opacity-50">Products</a>
                    <i class="icon icon-arrow-right opacity-30"></i>
                    <span class="text fw-5"> <?php echo $products->product_name ?></span>
                </div>
            </div>
        </div>
    </div>
    <!-- /breadcrumb -->

    <!-- default -->
    <section class="flat-spacing-4 pt_0">
        <div class="tf-main-product section-image-zoom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tf-product-media-wrap sticky-top">
                            <div class="thumbs-slider">
                                <div dir="ltr" class="swiper tf-product-media-thumbs other-image-zoom" data-direction="vertical">
                                    <div class="swiper-wrapper stagger-wrap">
                                        <?php
                                        if(!empty($images)){
                                        foreach ($images as $key => $value) { ?>
                                        <div class="swiper-slide stagger-item" data-color="<?php echo $products->color_name ?>">
                                            <div class="item border-0">
                                                <img class="lazyload" data-src="<?= url('/') ?>/<?=$value->image_url ?: 'frontassets/images/shop/products/hmgoepprod31.jpg'?>" src="<?= url('/') ?>/<?=$value->image_url ?: 'frontassets/images/shop/products/hmgoepprod31.jpg'?>" alt="img-product">
                                            </div>
                                        </div>
                                        <?php }} ?>
                                    </div>
                                </div>
                                <div dir="ltr" class="swiper tf-product-media-main" id="gallery-swiper-started">
                                    <div class="swiper-wrapper">
                                        <?php
                                        if(!empty($images)){
                                        foreach ($images as $key => $value) { ?>
                                        <div class="swiper-slide" data-color="<?php echo $products->color_name ?>">
                                            <a href="<?= url('/') ?>/<?=$value->image_url ?: 'frontassets/images/shop/products/hmgoepprod31.jpg'?>" target="_blank" class="item" data-pswp-width="770" data-pswp-height="1075">
                                                <img class="tf-image-zoom lazyload" data-zoom="<?= url('/') ?>/<?=$value->image_url ?: 'frontassets/images/shop/products/hmgoepprod31.jpg'?>" data-src="<?= url('/') ?>/<?=$value->image_url ?: 'frontassets/images/shop/products/hmgoepprod31.jpg'?>" src="<?= url('/') ?>/<?=$value->image_url ?: 'frontassets/images/shop/products/hmgoepprod31.jpg'?>" alt="image">
                                            </a>
                                        </div>
                                        <?php }} ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tf-product-info-wrap position-relative ps-md-5">
                            <div class="tf-zoom-main"></div>
                            <div class="tf-product-info-list other-image-zoom">
                                <div class="tf-product-info-title mb-4">
                                    <h1 class="font-heading" style="font-size: 36px; line-height: 1.2;"> <?php echo $products->product_name ?></h1>
                                </div>
                                <div class="tf-product-info-badges mb-4">
                                    <span class="badge bg-emerald text-white px-3 py-2 text-uppercase letter-spacing-1" style="font-size: 10px;">Atelier Exclusive</span>
                                </div>
                                <div class="tf-product-info-price mb-4 d-flex align-items-baseline gap-3">
                                    <div class="price-on-sale font-heading" data-base-price="<?php echo $products->price ?>" style="font-size: 28px; color: var(--ayuraa-emerald);">Rs.<?php echo $products->price ?></div>
                                    <div class="compare-at-price opacity-50 text-decoration-line-through" style="font-size: 18px;">Rs.<?php echo $products->old_price ?></div>
                                    @php
                                        $discount = round((($products->old_price - $products->price) / $products->old_price) * 100) ;
                                    @endphp
                                    <div class="text-gold fw-6" style="font-size: 14px;">({{ $discount }}% OFF)</div>
                                </div>

                                <div class="tf-product-info-variant-picker mb-5">
                                    <div class="variant-picker-item mb-4">
                                        <div class="variant-picker-label mb-3">
                                            SELECT COLOR: <span class="fw-6 text-gold value-currentColor">{{ $products->color_name }}</span>
                                        </div>
                                        <div id="color-options" class="d-flex gap-2">
                                            @foreach($color as $price)
                                                <a href="<?= url('/') ?>/product/<?= $products->slug ?>/<?= $price->color ?>" class="color-link">
                                                    <div class="color-box <?php if($price->color == $products->color){ ?> selected <?php } ?>"
                                                        style="background-color: {{ $price->color_code }}; width: 32px; height: 32px; border-radius: 50%; border: 1px solid rgba(0,0,0,0.1); transition: all 0.3s ease;"
                                                        title="{{ $price->color_name }}"
                                                        data-color="{{ $price->color }}"
                                                        data-color-name="{{ $price->color_name }}">
                                                    </div>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="variant-picker-item">
                                        <div class="variant-picker-label d-flex justify-content-between align-items-center mb-3">
                                            <span>SELECT SIZE:</span>
                                            <a href="#find_size" data-bs-toggle="modal" class="text-gold text-decoration-underline" style="font-size: 11px;">SIZE GUIDE</a>
                                        </div>
                                        <div id="size-options" class="d-flex flex-wrap gap-2">
                                            <?php $sizes = explode(",",$products->size_name); ?>
                                            @foreach($sizes as $size)
                                                <div class="size-option d-flex align-items-center justify-content-center"
                                                    data-size="{{ $size }}"
                                                    style="width: 50px; height: 50px; border: 1px solid #eee; cursor: pointer; transition: all 0.3s ease; font-size: 13px;">
                                                    {{ $size }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div> 
                                </div>

                                <form action="#" id="sizeDt" method="POST">
                                    <input type="hidden" id="combo" name="combo" value="0">
                                    <input type="hidden" id="prod_id" name="prod_id" value="<?php echo $products->id ?>">
                                    <input type="hidden" id="size" name="size" value="">
                                    <input type="hidden" id="color" name="color" value="{{ $products->color }}">
                                </form>

                                <div class="tf-product-info-buy-button mb-5">
                                    <div class="d-flex gap-3 mb-3">
                                        <a href="javascript:void(0);" class="tf-btn btn-fill flex-grow-1" onclick="addtocart(<?php echo $products->id ?>)">ADD TO BAG</a>
                                        <a href="javascript:void(0);" class="tf-product-btn-wishlist d-flex align-items-center justify-content-center border" style="width: 56px; height: 56px;" onclick="addToWishlist(<?php echo $products->id ?>)">
                                            <i class="icon icon-heart" style="font-size: 24px;"></i>
                                        </a>
                                    </div>
                                    <a href="javascript:void(0);" class="tf-btn btn-outline w-100" onclick="addtocart(<?php echo $products->id ?>)">BUY IT NOW</a>
                                </div>

                              
                                <div class="tf-product-info-share mt-4 pt-4 border-top">
                                    <div class="d-flex align-items-center gap-15">
                                        <span class="text-uppercase fw-5 text_black-2" style="font-size: 12px; letter-spacing: 1px;">Share:</span>
                                        <div class="d-flex gap-10">
                                            @php
                                                $productUrl = urlencode(url()->current());
                                                $productName = urlencode($products->product_name);
                                            @endphp
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ $productUrl }}" target="_blank" class="share-icon-btn facebook" title="Share on Facebook">
                                                <i class="icon icon-fb"></i>
                                            </a>
                                            <a href="https://api.whatsapp.com/send?text={{ $productName }}%20{{ $productUrl }}" target="_blank" class="share-icon-btn whatsapp" title="Share on WhatsApp">
                                                <i class="icon icon-whatsapp"></i>
                                            </a>
                                            <a href="javascript:void(0);" onclick="copyProductLink()" class="share-icon-btn instagram" title="Copy Link for Instagram">
                                                <i class="icon icon-instagram"></i>
                                            </a>
                                            <a href="javascript:void(0);" onclick="shareProductNative()" class="share-icon-btn tiktok" title="Share Product">
                                                <i class="icon icon-share"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="tf-product-info-trust-seal pt-4 border-top">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="icon-safe text-gold" style="font-size: 24px;"></i>
                                                <p class="mb-0 fw-5" style="font-size: 12px; line-height: 1.2;">Secured <br>Checkout</p>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <img src="<?= url('/') ?>/frontassets/images/payments/img.png" alt="Payment Methods" style="height: 20px; opacity: 0.7;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /default -->
    <!-- tabs -->
    <section class="flat-spacing-17 pt_0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="widget-tabs style-has-border">
                        <ul class="widget-menu-tab">
                            <li class="item-title active">
                                <span class="inner">Description</span>
                            </li>
                            <li class="item-title">
                                <span class="inner">Additional Information</span>
                            </li>
                            <li class="item-title">
                                <span class="inner">Review</span>
                            </li>

                        </ul>
                        <div class="widget-content-tab">
                            <div class="widget-content-inner active">
                                <div class="">
                                    <p class="mb_30">
                                        <?php echo $products->detail ?>
                                    </p>

                                </div>
                            </div>
                            <div class="widget-content-inner">
                                <div class="">
                                    <p class="mb_30">
                                        <?php echo $products->add_detail ?>
                                    </p>

                                </div>
                            </div>
                            <div class="widget-content-inner">
                                <div class="tab-reviews write-cancel-review-wrap">
                                    <div class="tab-reviews-heading">
                                        <div class="top">
                                            <div class="text-center">
                                                <h1 class="number fw-6">4.8</h1>
                                                <div class="list-star">
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                </div>
                                                <p>(168 Ratings)</p>
                                            </div>
                                            <div class="rating-score">
                                                <div class="item">
                                                    <div class="number-1 text-caption-1">5</div>
                                                    <i class="icon icon-star"></i>
                                                    <div class="line-bg">
                                                        <div style="width: 94.67%;"></div>
                                                    </div>
                                                    <div class="number-2 text-caption-1">59</div>
                                                </div>
                                                <div class="item">
                                                    <div class="number-1 text-caption-1">4</div>
                                                    <i class="icon icon-star"></i>
                                                    <div class="line-bg">
                                                        <div style="width: 60%;"></div>
                                                    </div>
                                                    <div class="number-2 text-caption-1">46</div>
                                                </div>
                                                <div class="item">
                                                    <div class="number-1 text-caption-1">3</div>
                                                    <i class="icon icon-star"></i>
                                                    <div class="line-bg">
                                                        <div style="width: 0%;"></div>
                                                    </div>
                                                    <div class="number-2 text-caption-1">0</div>
                                                </div>
                                                <div class="item">
                                                    <div class="number-1 text-caption-1">2</div>
                                                    <i class="icon icon-star"></i>
                                                    <div class="line-bg">
                                                        <div style="width: 0%;"></div>
                                                    </div>
                                                    <div class="number-2 text-caption-1">0</div>
                                                </div>
                                                <div class="item">
                                                    <div class="number-1 text-caption-1">1</div>
                                                    <i class="icon icon-star"></i>
                                                    <div class="line-bg">
                                                        <div style="width: 0%;"></div>
                                                    </div>
                                                    <div class="number-2 text-caption-1">0</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="tf-btn btn-outline-dark fw-6 btn-comment-review btn-cancel-review">Cancel Review</div>
                                            <div class="tf-btn btn-outline-dark fw-6 btn-comment-review btn-write-review">Write a review</div>
                                        </div>
                                    </div>
                                    <div class="reply-comment cancel-review-wrap">
                                        <div class="d-flex mb_24 gap-20 align-items-center justify-content-between flex-wrap">
                                            <h5 class="">03 Comments</h5>
                                            <div class="d-flex align-items-center gap-12">
                                                <div class="text-caption-1">Sort by:</div>
                                                <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                                                    <div class="btn-select">
                                                        <span class="text-sort-value">Most Recent</span>
                                                        <span class="icon icon-arrow-down"></span>
                                                    </div>
                                                    <div class="dropdown-menu">
                                                        <div class="select-item active">
                                                            <span class="text-value-item">Most Recent</span>
                                                        </div>
                                                        <div class="select-item">
                                                            <span class="text-value-item">Oldest</span>
                                                        </div>
                                                        <div class="select-item">
                                                            <span class="text-value-item">Most Popular</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reply-comment-wrap">
                                            <div class="reply-comment-item">
                                                <div class="user">
                                                    <div class="image">
                                                        <img src="<?= url('/') ?>/frontassets/images/collections/collection-circle-9.jpg" alt="image">
                                                    </div>
                                                    <div>
                                                        <h6>
                                                            <a href="#" class="link">Superb quality apparel that exceeds expectations</a>
                                                        </h6>
                                                        <div class="day text_black-2">1 days ago</div>
                                                    </div>
                                                </div>
                                                <p class="text_black-2">Great theme - we were looking for a theme with lots of built in features and flexibility and this was perfect. We expected to need to employ a developer to add a few finishing touches. But we actually managed to do everything ourselves. We did have one small query and the support given was swift and helpful.</p>
                                            </div>
                                            <div class="reply-comment-item type-reply">
                                                <div class="user">
                                                    <div class="image">
                                                        <img src="<?= url('/') ?>/frontassets/images/collections/collection-circle-10.jpg" alt="image">
                                                    </div>
                                                    <div>
                                                        <h6>
                                                            <a href="#" class="link">Reply from Modave</a>
                                                        </h6>
                                                        <div class="day text_black-2">1 days ago</div>
                                                    </div>
                                                </div>
                                                <p class="text_black-2">We love to hear it! Part of what we love most about Modave is how much it empowers store owners like yourself to build a beautiful website without having to hire a developer :) Thank you for this fantastic review!</p>
                                            </div>
                                            <div class="reply-comment-item">
                                                <div class="user">
                                                    <div class="image">
                                                        <img src="<?= url('/') ?>/frontassets/images/collections/collection-circle-9.jpg" alt="image">
                                                    </div>
                                                    <div>
                                                        <h6>
                                                            <a href="#" class="link">Superb quality apparel that exceeds expectations</a>
                                                        </h6>
                                                        <div class="day text_black-2">1 days ago </div>
                                                    </div>
                                                </div>
                                                <p class="text_black-2">Great theme - we were looking for a theme with lots of built in features and flexibility and this was perfect. We expected to need to employ a developer to add a few finishing touches. But we actually managed to do everything ourselves. We did have one small query and the support given was swift and helpful.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="form-write-review write-review-wrap">
                                        <div class="heading">
                                            <h5>Write a review:</h5>
                                            <div class="list-rating-check">
                                                <input type="radio" id="star5" name="rate" value="5" />
                                                <label for="star5" title="text"></label>
                                                <input type="radio" id="star4" name="rate" value="4" />
                                                <label for="star4" title="text"></label>
                                                <input type="radio" id="star3" name="rate" value="3" />
                                                <label for="star3" title="text"></label>
                                                <input type="radio" id="star2" name="rate" value="2" />
                                                <label for="star2" title="text"></label>
                                                <input type="radio" id="star1" name="rate" value="1" />
                                                <label for="star1" title="text"></label>
                                            </div>
                                        </div>
                                        <div class="form-content">
                                            <fieldset class="box-field">
                                                <label class="label">Review Title</label>
                                                <input type="text" placeholder="Give your review a title" name="text" tabindex="2" value="" aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="box-field">
                                                <label class="label">Review</label>
                                                <textarea rows="4" placeholder="Write your comment here" tabindex="2" aria-required="true" required=""></textarea>
                                            </fieldset>
                                            <div class="box-field group-2">
                                                <fieldset>
                                                    <input type="text" placeholder="You Name (Public)" name="text" tabindex="2" value="" aria-required="true" required="">
                                                </fieldset>
                                                <fieldset>
                                                    <input type="email" placeholder="Your email (private)" name="email" tabindex="2" value="" aria-required="true" required="">
                                                </fieldset>
                                            </div>
                                            <div class="box-check">
                                                <input type="checkbox" name="availability" class="tf-check" id="check1">
                                                <label class="text_black-2" for="check1">Save my name, email, and website in this browser for the next time I comment.</label>
                                            </div>
                                        </div>
                                        <div class="button-submit">
                                            <button class="tf-btn btn-fill animate-hover-btn" type="submit">Submit Reviews</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /tabs -->

    @php
        $relatedProducts = DB::table('products')
            ->leftJoin('category','category.id','=','products.category_id')
            ->leftJoin('color','color.id','=','products.color')
            ->select('products.*','category.category_name','category.slug as cat_slug','color.color as color_name')
            ->where('products.category_id', $products->category_id)
            ->where('products.id', '!=', $products->id)
            ->where('products.status', '1')
            ->limit(4)
            ->get();

        if ($relatedProducts->isEmpty()) {
            $relatedProducts = DB::table('products')
                ->leftJoin('category','category.id','=','products.category_id')
                ->leftJoin('color','color.id','=','products.color')
                ->select('products.*','category.category_name','category.slug as cat_slug','color.color as color_name')
                ->where('products.id', '!=', $products->id)
                ->where('products.status', '1')
                ->limit(4)
                ->get();
        }
    @endphp

    <!-- Related Products -->
    <section class="flat-spacing-1 pt_0">
        <div class="container">
            <div class="flat-title text-center mb-5">
                <span class="title font-heading" style="font-size: 36px; letter-spacing: 1.5px; position: relative; padding-bottom: 15px;">Related Products</span>
                <p class="sub-title mt-2">You might also love these curated boutique styles</p>
            </div>
            <div class="row mt-4">
                @foreach($relatedProducts as $related)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-6 mb-4">
                        <div class="card-product grid" style="border: none; background: transparent; transition: all 0.4s ease;">
                            <div class="card-product-wrapper" style="position: relative; overflow: hidden; border-radius: 4px; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                                <a href="{{ url('/') }}/product/{{ $related->slug }}/{{ $related->color }}" class="product-img d-block">
                                    @if($related->image_url == null)
                                        <img class="lazyload img-product w-100" data-src="{{ url('/') }}/frontassets/images/products/orange-1.jpg" src="{{ url('/') }}/frontassets/images/products/orange-1.jpg" alt="image-product" style="object-fit: cover; aspect-ratio: 3/4;">
                                    @else
                                        <img class="lazyload img-product w-100" data-src="{{ url('/') }}/{{ $related->image_url }}" src="{{ url('/') }}/{{ $related->image_url }}" alt="image-product" style="object-fit: cover; aspect-ratio: 3/4;">
                                    @endif
                                </a>
                                <div class="list-product-btn absolute-2" style="position: absolute; bottom: 15px; left: 50%; transform: translateX(-50%); display: flex; gap: 10px; transition: all 0.3s ease; z-index: 2;">
                                    <a href="{{ url('/') }}/product/{{ $related->slug }}/{{ $related->color }}" class="box-icon bg_white quick-add tf-btn-loading" style="width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background: #fff; box-shadow: 0 4px 10px rgba(0,0,0,0.1); color: var(--ayuraa-emerald); transition: var(--transition-smooth);">
                                        <span class="icon icon-bag" style="font-size: 16px;"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info text-center mt-3">
                                <a href="{{ url('/') }}/product/{{ $related->slug }}/{{ $related->color }}" class="title link d-block font-heading" style="font-size: 18px; color: var(--ayuraa-obsidian); text-decoration: none; transition: color 0.3s ease;">{{ $related->product_name }}</a>
                                <span class="price current-price fw-5 mt-1 d-block" style="color: var(--ayuraa-gold-muted); font-size: 15px;">Rs.{{ $related->price }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /Related Products -->

    <!-- product tab end -->

    <script type="text/javascript" src="<?= url('/') ?>/frontassets/js/drift.min.js"></script>
    <script type="text/javascript" src="<?= url('/') ?>/frontassets/js/wow.min.js"></script>

    <script type="module" src="<?= url('/') ?>/frontassets/js/model-viewer.min.js"></script>
    <script type="module" src="<?= url('/') ?>/frontassets/js/zoom.js"></script>

    <script src="<?= url('/') ?>/assets/datatable/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo url('/'); ?>/assets/datatable/js/sweetalert2@11.js"></script>
    <script type="text/javascript">


function addtocart(id) {

var combo = $('#combo').val();
var prod_id = $('#prod_id').val();
var color = $('#color').val();
var size = $('#size').val();

if(color !="" && size != ""){


         $.ajax({
             type: 'POST',
             url: '<?php echo url('/'); ?>/api/v1/order/add-cart',
             data: {
                 'id': id,
                 'color' : color,
                'size' : size,
                'combo' : combo
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
        }else{
            Swal.fire(
           'Failed!',
           'Please Select Any Size!..',
           'error'
           );
        }

     }
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

   // Handle color selection
   document.querySelectorAll('.color-box').forEach(box => {
      box.addEventListener('click', (e) => {
        // e.preventDefault(); // Don't prevent default if it's a link, but we want to update the hidden input
        document.querySelectorAll('.color-box').forEach(b => b.classList.remove('selected'));
        box.classList.add('selected');
        
        const colorId = box.dataset.color;
        const colorName = box.dataset.colorName;
        
        console.log('Selected Color:', colorName, '(', colorId, ')');
        $('#color').val(colorId);
        $('.value-currentColor').text(colorName);
      });
    });

    // Handle size selection
    document.querySelectorAll('.size-option').forEach(option => {
        console.log(option);

      option.addEventListener('click', () => {
        document.querySelectorAll('.size-option').forEach(o => o.classList.remove('selected'));
        option.classList.add('selected');
        console.log('Selected Size:', option.dataset.size);
        $('#size').val(option.dataset.size);


      });
    });

    function copyProductLink() {
        var dummy = document.createElement('input'),
        text = window.location.href;
        document.body.appendChild(dummy);
        dummy.value = text;
        dummy.select();
        document.execCommand('copy');
        document.body.removeChild(dummy);
        
        Swal.fire({
            title: 'Link Copied!',
            text: 'Product link copied to clipboard. You can now share it on Instagram, TikTok, or anywhere else!',
            icon: 'success',
            timer: 2500,
            showConfirmButton: false
        });
    }

    function  shareProductNative() {
        if (navigator.share) {
            navigator.share({
                title: '<?php echo addslashes($products->product_name) ?>',
                text: 'Check out this gorgeous designer kurti on Ayuraa Fashion!',
                url: window.location.href
            }).then(() => {
                console.log('Product shared successfully!');
            }).catch((err) => {
                console.log('Error sharing product:', err);
            });
        } else {
            copyProductLink();
        }
    }
     </script>
@endsection
