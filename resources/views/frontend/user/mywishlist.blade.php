@extends('frontend.main')
@section('content')
<!-- page-title -->
<div class="tf-page-title">
    <div class="container-full">
        <div class="heading text-center">Wishlist</div>
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

                        <li><a href="<?= url('/') ?>/my-profile" class="my-account-nav-item">Dashboard</a></li>
                        <li><a href="<?= url('/') ?>/my-orders" class="my-account-nav-item">Orders</a></li>
                        <li><span class="my-account-nav-item active">Wishlist</span></li>
                        <li><a href="<?= url('/') ?>/logout" class="my-account-nav-item">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="my-account-content account-wishlist">
                    <div class="grid-layout wrapper-shop" data-grid="grid-3">

                        <?php
                        if(!empty($wishlist)){
                            // print_r($wishlist);
                            // exit;
                            foreach ($wishlist as $key => $item) {
                        ?>
                        <!-- card product 1 -->
                        <div class="card-product">
                            <div class="card-product-wrapper">
                                <a href="<?= url('/') ?>/product/<?= $item->slug ?>/<?=$item->color ?>" class="product-img">
                                    <?php if($item->image_url == null){ ?>
                                    <img class="lazyload img-product" data-src="<?= url('/') ?>/frontassets/images/products/orange-1.jpg" src="<?= url('/') ?>/frontassets/images/products/orange-1.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="<?= url('/') ?>/frontassets/images/products/white-1.jpg" src="<?= url('/') ?>/frontassets/images/products/white-1.jpg" alt="image-product">
                                    <?php }else{ ?>
                                        <img class="lazyload img-product" data-src="<?= url('/') ?>/<?=$item->image_url ?>" src="<?= url('/') ?>/<?=$item->image_url ?>" alt="image-product">
                                        <img class="lazyload img-hover" data-src="<?= url('/') ?>/<?=$item->image_url ?>" src="<?= url('/') ?>/<?=$item->image_url ?>" alt="image-product">
                                    <?php } ?>


                                </a>
                                <div class="list-product-btn absolute-2">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist delete-value"  data-hash="<?= $item->id ?>" >
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    {{--<a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a> --}}
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link"><?= $item->product_name ?></a>
                                <span class="price">Rs.<?= $item->price ?> <span class="old-price">Rs.<?= $item->old_price ?></span></span>
                                {{-- <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Orange</span>
                                        <span class="swatch-value bg_orange-3"></span>
                                        <img class="lazyload" data-src="images/products/orange-1.jpg" src="images/products/orange-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="images/products/black-1.jpg" src="images/products/black-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="images/products/white-1.jpg" src="images/products/white-1.jpg" alt="image-product">
                                    </li>
                                </ul> --}}
                            </div>
                        </div>
                        <?php }} ?>
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
{{-- <script src="<?= url('/') ?>/frontassets/js/main.js"></script> --}}
<script src="<?=url('/')?>/assets/datatable/js/jquery-3.4.1.min.js"></script>
<script src="<?php echo url('/');?>/assets/datatable/js/sweetalert2@11.js"></script>
<script type="text/javascript">
$(document).on("click", ".delete-value", function (e) {
    e.preventDefault();
    //var result = confirm("");
    Swal.fire({
        title: 'Are you sure?',
        text: "Are you sure, you want to remove this from Wishlist?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
        }).then((result) => {
        if (result.isConfirmed) {
        var id = $(this).attr('data-hash');
        $.ajax({
                    type:'DELETE',
                    url:'<?php echo url('/');?>/api/v1/products/remove-wishlist',
                    data:{'id': id},
                    success:function(data) {
                        console.log(data);
                        if(data.status =="SUCCESS")
                        {
                            location.reload();
                        }else{
                          alert(data.message);
                        }

                    }
                });
    }
});
});
</script>

@endsection
