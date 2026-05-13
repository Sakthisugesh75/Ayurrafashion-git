@extends('frontend.main')
@section('content')

    <!-- page-title -->
    <div class="tf-page-title">
        <div class="container-full">
            <div class="row">
                <div class="col-12">
                    <div class="heading text-center">New Arrival</div>
                    <p class="text-center text-2 text_black-2 mt_5">Shop through our latest selection of Fashion</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /page-title -->
    <section class="flat-spacing-1">
        <div class="container-full">
            <div class="tf-shop-control grid-3 align-items-center">
                <div class="tf-control-filter">
                    {{-- <a href="#filterShop" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-btn-filter"><span class="icon icon-filter"></span><span class="text">Filter</span></a> --}}
                </div>
                <ul class="tf-control-layout d-flex justify-content-center">
                    <li class="tf-view-layout-switch sw-layout-list list-layout" data-value-layout="list">
                        <div class="item"><span class="icon icon-list"></span></div>
                    </li>
                    <li class="tf-view-layout-switch sw-layout-2" data-value-layout="tf-col-2">
                        <div class="item"><span class="icon icon-grid-2"></span></div>
                    </li>
                    <li class="tf-view-layout-switch sw-layout-3" data-value-layout="tf-col-3">
                        <div class="item"><span class="icon icon-grid-3"></span></div>
                    </li>
                    <li class="tf-view-layout-switch sw-layout-4 active" data-value-layout="tf-col-4">
                        <div class="item"><span class="icon icon-grid-4"></span></div>
                    </li>
                    <li class="tf-view-layout-switch sw-layout-5" data-value-layout="tf-col-5">
                        <div class="item"><span class="icon icon-grid-5"></span></div>
                    </li>
                    <li class="tf-view-layout-switch sw-layout-6" data-value-layout="tf-col-6">
                        <div class="item"><span class="icon icon-grid-6"></span></div>
                    </li>
                </ul>
                <div class="tf-control-sorting d-flex justify-content-end">
                    {{-- <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                        <div class="btn-select">
                            <span class="text-sort-value">Featured</span>
                            <span class="icon icon-arrow-down"></span>
                        </div>
                        <div class="dropdown-menu">
                            <div class="select-item active">
                                <span class="text-value-item">Featured</span>
                            </div>
                            <div class="select-item">
                                <span class="text-value-item">Best selling</span>
                            </div>
                            <div class="select-item" data-sort-value="a-z">
                                <span class="text-value-item">Alphabetically, A-Z</span>
                            </div>
                            <div class="select-item" data-sort-value="z-a">
                                <span class="text-value-item">Alphabetically, Z-A</span>
                            </div>
                            <div class="select-item" data-sort-value="price-low-high">
                                <span class="text-value-item">Price, low to high</span>
                            </div>
                            <div class="select-item" data-sort-value="price-high-low">
                                <span class="text-value-item">Price, high to low</span>
                            </div>
                            <div class="select-item">
                                <span class="text-value-item">Date, old to new</span>
                            </div>
                            <div class="select-item">
                                <span class="text-value-item">Date, new to old</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="wrapper-control-shop">
                <div class="meta-filter-shop">
                    <div id="product-count-grid" class="count-text"></div>
                    <div id="product-count-list" class="count-text"></div>
                    <div id="applied-filters"></div>
                    <button id="remove-all" class="remove-all-filters" style="display: none;">Remove All <i class="icon icon-close"></i></button>
                </div>
                <div class="tf-list-layout wrapper-shop" id="listLayout">
                    <?php
                    if($category == '0'){
                        // echo 'category-0';
                    if(!empty($products)){
                        foreach ($products as $key => $data) { ?>
                    <!-- card product 1 -->
                    <div class="card-product list-layout" data-availability="In stock" data-brand="Ecomus">
                        <div class="card-product-wrapper">
                            <a href="<?= url('/') ?>/product/<?= $data->slug ?>/<?=$data->color ?>" class="product-img">
                                <?php if($data->image_url == null){ ?>
                                <img class="lazyload img-product" data-src="<?= url('/') ?>/frontassets/images/products/orange-1.jpg" src="<?= url('/') ?>/frontassets/images/products/orange-1.jpg" alt="image-product">
                                <img class="lazyload img-hover" data-src="<?= url('/') ?>/frontassets/images/products/white-1.jpg" src="<?= url('/') ?>/frontassets/images/products/white-1.jpg" alt="image-product">
                                <?php }else{ ?>
                                    <img class="lazyload img-product" data-src="<?= url('/') ?>/<?= $data->image_url ?>" src="<?= url('/') ?>/<?= $data->image_url ?>" alt="image-product">
                                <img class="lazyload img-hover" data-src="<?= url('/') ?>/<?= $data->image_url ?>" src="<?= url('/') ?>/<?= $data->image_url ?>" alt="image-product">
                                <?php } ?>
                            </a>
                        </div>
                        <div class="card-product-info">
                            <a href="<?= url('/') ?>/product/<?= $data->slug ?>/<?=$data->color ?>" class="title link"> <?= $data->product_name ?></a>
                            <span class="price current-price">Rs.<?= $data->price ?></span>
                            <p class="description"><?= $data->short_desc ?></p>
                          
                            <div class="list-product-btn">
                                <a href="<?= url('/') ?>/product/<?= $data->slug ?>/<?=$data->color ?>"  class="box-icon quick-add style-3 hover-tooltip"><span class="icon icon-bag"></span><span class="tooltip">Quick add</span></a>
                                <a href="#" class="box-icon wishlist style-3 hover-tooltip"><span class="icon icon-heart"></span> <span class="tooltip">Add to Wishlist</span></a>
                               
                            </div>
                        </div>
                    </div>
                    <?php }} }else{
                        // echo 'category';
                            if(!empty($products)){
                            foreach ($products as $key => $data) {
                            // echo $category;
                            // echo $data->category_name;
                            if($category == $data->category_name ){
                            ?>
                            <div class="card-product list-layout" data-availability="In stock" data-brand="Ecomus">
                                <div class="card-product-wrapper">
                                    <a href="<?= url('/') ?>/product/<?= $data->slug ?>/<?=$data->color ?>" class="product-img">
                                        <?php if($data->image_url == null){ ?>
                                        <img class="lazyload img-product" data-src="<?= url('/') ?>/frontassets/images/products/orange-1.jpg" src="<?= url('/') ?>/frontassets/images/products/orange-1.jpg" alt="image-product">
                                        <img class="lazyload img-hover" data-src="<?= url('/') ?>/frontassets/images/products/white-1.jpg" src="<?= url('/') ?>/frontassets/images/products/white-1.jpg" alt="image-product">
                                        <?php }else{ ?>
                                            <img class="lazyload img-product" data-src="<?= url('/') ?>/<?= $data->image_url ?>" src="<?= url('/') ?>/<?= $data->image_url ?>" alt="image-product">
                                        <img class="lazyload img-hover" data-src="<?= url('/') ?>/<?= $data->image_url ?>" src="<?= url('/') ?>/<?= $data->image_url ?>" alt="image-product">
                                        <?php } ?>
                                    </a>
                                </div>
                                <div class="card-product-info">
                                    <a href="<?= url('/') ?>/product/<?= $data->slug ?>/<?=$data->color ?>" class="title link"> <?= $data->product_name ?></a>
                                    <span class="price current-price">Rs.<?= $data->price ?></span>
                                    <p class="description"><?= $data->short_desc ?></p>
                             
                                    <div class="list-product-btn">
                                        <a href="<?= url('/') ?>/product/<?= $data->slug ?>/<?=$data->color ?>"  class="box-icon quick-add style-3 hover-tooltip"><span class="icon icon-bag"></span><span class="tooltip">Quick add</span></a>
                                        <a href="#" class="box-icon wishlist style-3 hover-tooltip"><span class="icon icon-heart"></span> <span class="tooltip">Add to Wishlist</span></a>
                                        
                                    </div>
                                </div>
                            </div>
                            <?php }}}} ?>

                    <!-- pagination -->
                   
                </div>
                <div class="tf-grid-layout wrapper-shop tf-col-4" id="gridLayout">
                    <?php
                    if($category == '0'){
                        // echo 'category-0';
                    if(!empty($products)){
                        foreach ($products as $key => $data) { ?>

                    <!-- card product 1 -->
                    <div class="card-product grid" data-availability="In stock" data-brand="Ecomus">
                        <div class="card-product-wrapper">
                            <a href="<?= url('/') ?>/product/<?= $data->slug ?>/<?=$data->color ?>" class="product-img">
                                <?php if($data->image_url == null){ ?>
                                <img class="lazyload img-product" data-src="<?= url('/') ?>/frontassets/images/products/orange-1.jpg" src="<?= url('/') ?>/frontassets/images/products/orange-1.jpg" alt="image-product">
                                <img class="lazyload img-hover" data-src="<?= url('/') ?>/frontassets/images/products/white-1.jpg" src="<?= url('/') ?>/frontassets/images/products/white-1.jpg" alt="image-product">
                                <?php }else{ ?>
                                    <img class="lazyload img-product" data-src="<?= url('/') ?>/<?= $data->image_url ?>" src="<?= url('/') ?>/<?= $data->image_url ?>" alt="image-product">
                                <img class="lazyload img-hover" data-src="<?= url('/') ?>/<?= $data->image_url ?>" src="<?= url('/') ?>/<?= $data->image_url ?>" alt="image-product">
                                <?php } ?>
                            </a>
                            <div class="list-product-btn absolute-2">
                                <a href="<?= url('/') ?>/product/<?= $data->slug ?>/<?=$data->color ?>"  class="box-icon bg_white quick-add tf-btn-loading">
                                    <span class="icon icon-bag"></span>
                                    <span class="tooltip">Quick Add</span>
                                </a>
                                <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                    <span class="icon icon-delete"></span>
                                </a>
                               
                            </div>
                        </div>
                        <div class="card-product-info">
                            <a href="<?= url('/') ?>/product/<?= $data->slug ?>/<?=$data->color ?>" class="title link"> <?= $data->product_name ?></a>
                            <span class="price current-price">Rs.<?= $data->price ?></span>
                            
                        </div>
                    </div>

                    <?php }} }else{
                        // echo 'category';
                            if(!empty($products)){
                            foreach ($products as $key => $data) {
                            // echo $category;
                            // echo $data->category_name;
                            if($category == $data->category_name ){
                            ?>
                            <div class="card-product grid" data-availability="In stock" data-brand="Ecomus">
                                <div class="card-product-wrapper">
                                    <a href="<?= url('/') ?>/product/<?= $data->slug ?>/<?=$data->color ?>" class="product-img">
                                        <?php if($data->image_url == null){ ?>
                                        <img class="lazyload img-product" data-src="<?= url('/') ?>/frontassets/images/products/orange-1.jpg" src="<?= url('/') ?>/frontassets/images/products/orange-1.jpg" alt="image-product">
                                        <img class="lazyload img-hover" data-src="<?= url('/') ?>/frontassets/images/products/white-1.jpg" src="<?= url('/') ?>/frontassets/images/products/white-1.jpg" alt="image-product">
                                        <?php }else{ ?>
                                            <img class="lazyload img-product" data-src="<?= url('/') ?>/<?= $data->image_url ?>" src="<?= url('/') ?>/<?= $data->image_url ?>" alt="image-product">
                                        <img class="lazyload img-hover" data-src="<?= url('/') ?>/<?= $data->image_url ?>" src="<?= url('/') ?>/<?= $data->image_url ?>" alt="image-product">
                                        <?php } ?>
                                    </a>
                                    <div class="list-product-btn absolute-2">
                                        <a href="<?= url('/') ?>/product/<?= $data->slug ?>/<?=$data->color ?>"  class="box-icon bg_white quick-add tf-btn-loading">
                                            <span class="icon icon-bag"></span>
                                            <span class="tooltip">Quick Add</span>
                                        </a>
                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="<?= url('/') ?>/product/<?= $data->slug ?>/<?=$data->color ?>" class="title link"> <?= $data->product_name ?></a>
                                    <span class="price current-price">Rs.<?= $data->price ?></span>
                                    
                                </div>
                            </div>
                        <?php }}}} ?>

                    <!-- pagination -->
                  
                </div>

            </div>
        </div>
    </section>

    <script src="<?= url('/') ?>/assets/datatable/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo url('/'); ?>/assets/datatable/js/sweetalert2@11.js"></script>
    <script type="text/javascript">
        function addtocart(id) {


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
    </script>
@endsection
