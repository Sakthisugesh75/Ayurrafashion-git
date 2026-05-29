<!-- announcement-bar -->
<div class="announcement-bar">
    <div class="container-full">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <div class="box-sw-announcement-bar speed-1" id="scrollList" style="height: 40px; display: flex; align-items: center; justify-content: center;">
                    <!-- Content populated by JS -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /announcement-bar -->

<!-- Header -->
<header id="header" class="header-default">
    <div class="px_15 lg-px_40">
        <div class="row wrapper-header align-items-center">
            <div class="col-md-4 col-3 tf-lg-hidden">
                <a href="#mobileMenu" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                        <path d="M2.00056 2.28571H16.8577C17.1608 2.28571 17.4515 2.16531 17.6658 1.95098C17.8802 1.73665 18.0006 1.44596 18.0006 1.14286C18.0006 0.839753 17.8802 0.549063 17.6658 0.334735C17.4515 0.120408 17.1608 0 16.8577 0H2.00056C1.69745 0 1.40676 0.120408 1.19244 0.334735C0.978109 0.549063 0.857702 0.839753 0.857702 1.14286C0.857702 1.44596 0.978109 1.73665 1.19244 1.95098C1.40676 2.16531 1.69745 2.28571 2.00056 2.28571ZM0.857702 8C0.857702 7.6969 0.978109 7.40621 1.19244 7.19188C1.40676 6.97755 1.69745 6.85714 2.00056 6.85714H22.572C22.8751 6.85714 23.1658 6.97755 23.3801 7.19188C23.5944 7.40621 23.7148 7.6969 23.7148 8C23.7148 8.30311 23.5944 8.59379 23.3801 8.80812C23.1658 9.02245 22.8751 9.14286 22.572 9.14286H2.00056C1.69745 9.14286 1.40676 9.02245 1.19244 8.80812C0.978109 8.59379 0.857702 8.30311 0.857702 8ZM0.857702 14.8571C0.857702 14.554 0.978109 14.2633 1.19244 14.049C1.40676 13.8347 1.69745 13.7143 2.00056 13.7143H12.2863C12.5894 13.7143 12.8801 13.8347 13.0944 14.049C13.3087 14.2633 13.4291 14.554 13.4291 14.8571C13.4291 15.1602 13.3087 15.4509 13.0944 15.6653C12.8801 15.8796 12.5894 16 12.2863 16H2.00056C1.69745 16 1.40676 15.8796 1.19244 15.6653C0.978109 15.4509 0.857702 15.1602 0.857702 14.8571Z" fill="currentColor"></path>
                    </svg>
                </a>
            </div>
            <div class="col-xl-3 col-md-4 col-6">
                <a href="<?= url('/') ?>/" class="logo-header">
                    <img src="<?= url('/') ?>/frontassets/images/logo/logo-ayurranew.png" alt="logo" class="logo" style="height: 60px; width: auto;">
                </a>
            </div>
            <div class="col-xl-6 tf-md-hidden" >
                <nav class="box-navigation text-center" >
                    <ul class="box-nav-ul d-flex align-items-center justify-content-center gap-40" >
                        <li class="menu-item"><a href="<?= url('/') ?>/" class="item-link">Home</a></li>
                        <li class="menu-item"><a href="<?= url('/') ?>/user-product/czoxOiIwIjs" class="item-link">New Arrivals</a></li>
                        <li class="menu-item"><a href="<?= url('/') ?>/user-product/czoxOiIwIjs" class="item-link">The Atelier</a></li>
                        <li class="menu-item"><a href="<?= url('/') ?>/about-us" class="item-link">Our Story</a></li>
                        <li class="menu-item"><a href="<?= url('/') ?>/contact-us" class="item-link">Contact</a></li>
                    </ul>
                </nav>
            </div>

            <style>
                .logo { transition: transform 0.3s ease; }
                .logo:hover { transform: scale(1.05); }
                
                .nav-account { position: relative; }
                
                .dropdown-menu {
                    position: absolute;
                    top: 100%;
                    right: 0;
                    border: 1px solid rgba(0,0,0,0.05);
                    border-radius: 0;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
                    min-width: 160px;
                    display: none;
                    list-style: none;
                    padding: 10px 0;
                    margin-top: 15px;
                    z-index: 1000;
                    animation: fadeInDown 0.3s ease;
                }

                @keyframes fadeInDown {
                    from { opacity: 0; transform: translateY(-10px); }
                    to { opacity: 1; transform: translateY(0); }
                }

                .dropdown-menu a {
                    display: block;
                    padding: 10px 20px;
                    text-decoration: none;
                    color: var(--ayuraa-obsidian);
                    font-family: var(--font-body);
                    font-size: 13px;
                    text-transform: uppercase;
                    letter-spacing: 1px;
                    transition: var(--transition-smooth);
                }

                .dropdown-menu a:hover {
                    background: var(--ayuraa-off-white);
                    color: var(--ayuraa-gold);
                    padding-left: 25px;
                }

                .nav-account:hover .dropdown-menu {
                    display: block;
                }
                
                .nav-icon-item i {
                    font-size: 20px;
                    color: var(--ayuraa-obsidian);
                    transition: var(--transition-smooth);
                }
                
                .nav-icon-item:hover i {
                    color: var(--ayuraa-gold);
                }
                
                .count-box {
                    background-color: var(--ayuraa-gold) !important;
                    color: var(--ayuraa-white) !important;
                    font-size: 10px !important;
                    width: 16px !important;
                    height: 16px !important;
                }
            </style>
            <div class="col-xl-3 col-md-4 col-3">
                <ul class="nav-icon d-flex justify-content-end align-items-center gap-25">
                    <li class="nav-search"><a href="#canvasSearch" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="nav-icon-item"><i class="icon icon-search"></i></a></li>
                    <?php if(session('logged_in') == true){ ?>
                    <li class="nav-account">
                        <a href="javascript:void(0);" class="nav-icon-item">
                            <i class="icon icon-account"></i>
                        </a>
                        <ul class="dropdown-menu" style="margin-top: 0">
                            <li><a href="<?= url('/') ?>/my-profile">Profile</a></li>
                            <li><a href="<?= url('/') ?>/my-wishlist">Wishlist</a></li>
                            <li><a href="<?= url('/') ?>/logout">Logout</a></li>
                        </ul>
                    </li>
                    <?php }else{ ?>
                    <li class="nav-account"><a href="<?= url('/') ?>/user-login" class="nav-icon-item"><i class="icon icon-account"></i></a></li>
                    <?php } ?>
                    <li class="nav-wishlist"><a href="<?= url('/') ?>/my-wishlist" class="nav-icon-item"><i class="icon icon-heart"></i><span class="count-box">0</span></a></li>
                    <li class="nav-cart"><a href="#shoppingCart" data-bs-toggle="modal" class="nav-icon-item"><i class="icon icon-bag"></i><span class="count-box" id="cartcount">0</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- /Header -->

<!-- mobile menu -->
<div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
    <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
    <div class="mb-canvas-content">
        <div class="mb-body">
            <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                <li class="nav-mb-item">
                    <a href="<?= url('/') ?>/" class="mb-menu-link">Home</a>
                </li>
                <li class="nav-mb-item">
                    <a href="<?= url('/') ?>/user-product/czoxOiIwIjs" class="mb-menu-link">Shop</a>
                </li>
                <li class="nav-mb-item">
                    <a href="<?= url('/') ?>/about-us" class="mb-menu-link">About Us</a>
                </li>
                <li class="nav-mb-item">
                    {{-- <a href="<?= url('/') ?>/faq" class="mb-menu-link">Faq</a> --}}
                </li>
                <li class="nav-mb-item">
                    <a href="<?= url('/') ?>/contact-us" class="mb-menu-link">Contact Us</a>
                </li>
            </ul>
            <div class="mb-other-content">
                <div class="d-flex group-icon">
                    <a href="<?= url('/') ?>/my-wishlist" class="site-nav-icon"><i class="icon icon-heart"></i>Wishlist</a>
                    {{-- <a href="home-search.html" class="site-nav-icon"><i class="icon icon-search"></i>Search</a> --}}
                </div>
                <div class="mb-notice">
                    <a href="<?= url('/') ?>/contact-us" class="text-need">Need help ?</a>
                </div>
                <ul class="mb-info">
                    <li>Ayuraa Fashion Headquarters,<br> Serving Women Worldwide.</li>
                    <li>Email: <b>info@ayurra-fashion.com</b></li>
                    <li>Phone: <b>(+91) 999 888 7777</b></li>
                </ul>
            </div>
        </div>
        <div class="mb-bottom">
            <a href="<?= url('/') ?>/user-login" class="site-nav-icon"><i class="icon icon-account"></i>Login</a>
            {{-- <div class="bottom-bar-language">
                <div class="tf-currencies">
                    <select class="image-select center style-default type-currencies">
                        <option data-thumbnail="<?= url('/') ?>/frontassets/images/country/fr.svg">EUR <span>€ | France</span></option>
                        <option data-thumbnail="<?= url('/') ?>/frontassets/images/country/de.svg">EUR <span>€ | Germany</span></option>
                        <option selected data-thumbnail="<?= url('/') ?>/frontassets/images/country/us.svg">USD <span>$ | United States</span></option>
                        <option data-thumbnail="<?= url('/') ?>/frontassets/images/country/vn.svg">VND <span>₫ | Vietnam</span></option>
                    </select>
                </div>
                <div class="tf-languages">
                    <select class="image-select center style-default type-languages">
                        <option>English</option>
                        <option>العربية</option>
                        <option>简体中文</option>
                        <option>اردو</option>
                    </select>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- /mobile menu -->

<!-- shoppingCart -->
<div class="modal fullRight fade modal-shopping-cart" id="shoppingCart">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="header">
                <div class="title fw-5">Shopping cart</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="wrap">

                <div class="tf-mini-cart-wrap">
                    <div class="tf-mini-cart-main">
                        <div class="tf-mini-cart-sroll">
                            <div class="tf-mini-cart-items" id="cartlist">

                                {{-- <div class="tf-mini-cart-item">
                                    <div class="tf-mini-cart-image">
                                        <a href="product-detail.html">
                                            <img src="<?= url('/') ?>/frontassets/images/products/white-3.jpg" alt="image">
                                        </a>
                                    </div>
                                    <div class="tf-mini-cart-info">
                                        <a class="title link" href="product-detail.html">Oversized Motif T-shirt</a>
                                        <div class="price fw-6">$25.00</div>
                                        <div class="tf-mini-cart-btns">
                                            <div class="wg-quantity small">
                                                <span class="btn-quantity minus-btn">-</span>
                                                <input type="text" name="number" value="1">
                                                <span class="btn-quantity plus-btn">+</span>
                                            </div>
                                            <div class="tf-mini-cart-remove">Remove</div>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>

                        </div>
                    </div>
                    <div class="tf-mini-cart-bottom">

                        <div class="tf-mini-cart-bottom-wrap">
                            <div class="tf-cart-totals-discounts">
                                <div class="tf-cart-total">Subtotal</div>
                                <div class="tf-totals-total-value fw-6" id="subtotal"><Rs class="0 00"></Rs></div>
                            </div>
                            <div class="tf-cart-tax">Taxes and <a href="#">shipping</a> calculated at checkout</div>
                            <div class="tf-mini-cart-line"></div>

                            <div class="tf-mini-cart-view-checkout">
                                <a href="<?=url('/')?>/cart" class="tf-btn btn-outline radius-3 link w-100 justify-content-center">View cart</a>
                                <a href="<?=url('/')?>/checkout" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Check out</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /shoppingCart -->

<!-- canvasSearch -->
<div class="offcanvas offcanvas-end canvas-search" id="canvasSearch">
    <div class="canvas-wrapper">
        <header class="tf-search-head">
            <div class="title fw-5">
                Search our site
                <div class="close">
                    <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
                </div>
            </div>

            <style>
                .search-container {
                    position: relative;
                    width: 300px;
                }
                .search-box {
                    width: 100%;
                    padding: 10px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                }
                .dropdown {
                    position: absolute;
                    top: 40px;
                    width: 100%;
                    background: white;
                    border: 1px solid #ccc;
                    border-top: none;
                    display: none;
                    max-height: 450px;
                    overflow-y: auto;
                }
                .dropdown div {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    padding: 1px;
                    border-bottom: 1px solid #eee;
                    cursor: pointer;
                }
                .dropdown div:hover {
                    background: #f0f0f0;
                }
                .product-info {
                    display: flex;
                    align-items: center;
                    gap: 10px;
                }
                .product-prices {
                    text-align: left;
                }
                .product-prices .old-price {
                    text-decoration: line-through;
                    color: red;
                    font-size: 12px;
                }
                .product-prices .new-price {
                    font-size: 14px;
                    font-weight: bold;
                }
                .product-image img {
                    width: 40px;
                    height: 40px;
                    object-fit: cover;
                }
            </style>
            <div class="search-container">
                <input type="text" class="search-box" placeholder="Search products..." onkeyup="filterProducts()">
                <div class="dropdown" id="dropdown"></div>
            </div>
        </header>
        {{-- <div class="canvas-body p-0">
            <div class="tf-search-content">
                <div class="tf-cart-hide-has-results">
                    <div class="tf-col-quicklink">
                        <div class="tf-search-content-title fw-5">Quick link</div>
                        <ul class="tf-quicklink-list">
                            <li class="tf-quicklink-item">
                                <a href="shop-default.html" class="">Fashion</a>
                            </li>
                            <li class="tf-quicklink-item">
                                <a href="shop-default.html" class="">Men</a>
                            </li>
                            <li class="tf-quicklink-item">
                                <a href="shop-default.html" class="">Women</a>
                            </li>
                            <li class="tf-quicklink-item">
                                <a href="shop-default.html" class="">Accessories</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tf-col-content">
                        <div class="tf-search-content-title fw-5">Need some inspiration?</div>
                        <div class="tf-search-hidden-inner">
                            <div class="tf-loop-item">
                                <div class="image">
                                    <a href="product-detail.html">
                                        <img src="<?= url('/') ?>/frontassets/images/products/white-3.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="product-detail.html">Cotton jersey top</a>
                                    <div class="tf-product-info-price">
                                        <div class="compare-at-price">$10.00</div>
                                        <div class="price-on-sale fw-6">$8.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-loop-item">
                                <div class="image">
                                    <a href="product-detail.html">
                                        <img src="<?= url('/') ?>/frontassets/images/products/white-2.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="product-detail.html">Mini crossbody bag</a>
                                    <div class="tf-product-info-price">
                                        <div class="price fw-6">$18.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-loop-item">
                                <div class="image">
                                    <a href="product-detail.html">
                                        <img src="<?= url('/') ?>/frontassets/images/products/white-1.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="product-detail.html">Oversized Printed T-shirt</a>
                                    <div class="tf-product-info-price">
                                        <div class="price fw-6">$18.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
<!-- /canvasSearch -->

<script src="<?=url('/')?>/assets/datatable/js/jquery-3.4.1.min.js"></script>
<script src="<?php echo url('/');?>/assets/datatable/js/sweetalert2@11.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
    var user_id = "<?php echo session('user_id') ?>";
if(user_id){
    $.ajax({
                type:'GET',
                url:'<?php echo url('/');?>/api/v1/products/get-wishlistbyuserid',
                data:{'user_id': user_id},
                success:function(data) {
                    console.log(data);
                    if(data.status =="SUCCESS"){
                        // console.log(data.list);
                        // document.getElementById("wishlist").innerHTML= data.list;
                        // document.getElementById("wishlist1").innerHTML= data.list;
                        // document.getElementById("wishlist").textContent=data.list;

                    }else{
                        // document.getElementById("wishlist").innerHTML=0;
                        // document.getElementById("wishlist1").innerHTML= 0;

                    //   alert(data.message);
                    }
                }
            });
        }else{
            // document.getElementById("wishlist").innerHTML=0;
            // document.getElementById("wishlist1").innerHTML= 0;
        }
  });

  $(document).ready(function(){

    let page = 'home';
    let loc = 'scroll';
    var s = '';
    $.ajax({
                type:'GET',
                url:'<?php echo url('/');?>/api/v1/page/list-page-ByPandL',
                data:{'page': page,'loc':loc},
                success:function(data) {
                    console.log(data);
                    for(i=0;i<data.list.length;i++){
                    s += '<div class="announcement-bar-item"><p>'+data.list[i].content+'</p></div>';
                    }
                    document.getElementById("scrollList").innerHTML= s;
                }
            });




        var session_id = "<?php echo session('session_id') ?>";
        if(session_id){
    $.ajax({
                type:'GET',
                url:'<?php echo url('/');?>/api/v1/order/get-cartby-sessionid',
                data:{'session_id': session_id},
                success:function(data) {
                    console.log(data);
                    if(data.status =="SUCCESS"){
                        console.log(data.data);
                        var cartcount = data.data.length;
                        document.getElementById("cartcount").innerHTML= cartcount;
                        document.getElementById("cartcount1").innerHTML= cartcount;
                        // document.getElementById("wishlist").textContent=data.list;

                        var a='';
                        var total = 0;
                        for(i=0;i<data.data.length;i++){
                            // a += '<li><div class="ec-pro-content"><a href="single-product-left-sidebar.html" class="cart_pro_title">'+data.data[i].product_name+'</a><span class="cart-price"><span>'+data.data[i].price+'</span> x '+data.data[i].quantity+'</span><div class="qty-plus-minus"><input class="qty-input" type="text" name="ec_qtybtn" value="'+data.data[i].quantity+'" /></div><a href="#" id="'+data.data[i].session_id+'" data-hash="'+data.data[i].product_id+'" class="remove-cart"><i class="ecicon eci-trash-o"></i></a></div></li>';

                            // a += ' <li><div class="content"><a href="single-product.html" class="title">'+data.data[i].product_name+'</a><span class="quantity-price">'+data.data[i].quantity+' x <span class="amount">Rs.'+data.data[i].price+'</span></span><a href="#" id="'+data.data[i].session_id+'" data-hash="'+data.data[i].product_id+'" class="remove remove-cart">×</a></div></li>';

                            var img ="<?= url('/') ?>/"+data.data[i].image_url;
                            var url ="<?= url('/') ?>/product/"+data.data[i].slug+"/"+data.data[i].color;

                            a += '<div class="tf-mini-cart-item"><div class="tf-mini-cart-image"><a href="'+url+'"><img src="'+img+'" alt="image"></a></div><div class="tf-mini-cart-info"><a class="title link" href="'+url+'">'+data.data[i].product_name+'</a><div class="price fw-6">Rs.'+data.data[i].price+'</div><div class="tf-mini-cart-btns"><div class="wg-quantity small">'+data.data[i].quantity+'</div><div class="tf-mini-cart-remove remove-cart" id="'+data.data[i].session_id+'" data-hash="'+data.data[i].product_id+'" data-cart-id="'+data.data[i].cart_id+'">Remove</div></div></div></div>';
                            total += parseInt(data.data[i].quantity_price);
                        }

                        document.getElementById("cartlist").innerHTML = a;
                        var vat = total * (10/100);
                        var net = total + vat;
                        document.getElementById("subtotal").innerHTML = total;
                        // document.getElementById("vat").innerHTML = vat;
                        // document.getElementById("net").innerHTML = net;


                    }else{
                        document.getElementById("cartcount").innerHTML=0;
                        document.getElementById("cartcount1").innerHTML= 0;

                    //   alert(data.message);
                    }
                }
            });
        }else{
            document.getElementById("cartcount").innerHTML=0;
            document.getElementById("cartcount1").innerHTML= 0;
        }

  });

  $(document).on("click", ".remove-cart", function(e) {


Swal.fire({
        title: 'Are you sure?',
        text: "Are you sure, you want to Remove this Product?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
        }).then((result) => {
        if (result.isConfirmed) {
            var product_id = $(this).attr('data-hash');
            var session_id = $(this).attr('id');
            var cart_id = $(this).attr('data-cart-id');
        $.ajax({
                    type:'POST',
                    url:'<?php echo url('/');?>/api/v1/order/remove-cart',
                    data:{'product_id': product_id,'session_id':session_id,'cart_id':cart_id},
                    success:function(data) {
                        console.log(data);
                        if(data.status =="SUCCESS")
                        {
                            window.location.href = "<?=url('/');?>/cart";
                        }else{
                          alert(data.message);
                        }

                    }
                });
    }
    });

});






        async function fetchProducts(query) {
            try {
                let response = await fetch("<?php echo url('/');?>/api/v1/products/find-query", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({ data: query })
                });
                let data = await response.json();
                return data.list;
            } catch (error) {
                console.error("Error fetching products:", error);
                return [];
            }
        }
        async function filterProducts() {
            let input = document.querySelector(".search-box").value.toLowerCase();
            let dropdown = document.getElementById("dropdown");
            dropdown.innerHTML = "";

            if (input) {
                let products = await fetchProducts(input);
                if (products.length > 0) {
                    dropdown.style.display = "block";
                    products.forEach(product => {
                        let div = document.createElement("div");
                        let productInfo = document.createElement("div");
                        productInfo.classList.add("product-info");

                        let prices = document.createElement("div");
                        prices.classList.add("product-prices");
                        prices.innerHTML = `<div class='new-price'>$${product.price}</div><div class='old-price'>$${product.old_price}</div>`;

                        let name = document.createElement("a");
                        name.href = "<?= url('/') ?>/product/"+product.slug+'/'+product.color;
                        name.textContent = `${product.color_name} ${product.product_name}`;
                        name.onclick = () => selectProduct(product);

                        let imageDiv = document.createElement("div");
                        imageDiv.classList.add("product-image");
                        let img = document.createElement("img");
                        img.src = product.image_url;
                        imageDiv.appendChild(img);

                        productInfo.appendChild(imageDiv);
                        productInfo.appendChild(name);
                        productInfo.appendChild(prices);

                        div.appendChild(productInfo);
                        dropdown.appendChild(div);
                    });
                } else {
                    dropdown.style.display = "none";
                }
            } else {
                dropdown.style.display = "none";
            }
        }

        function selectProduct(product) {
            document.querySelector(".search-box").value = product.product_name;
            document.getElementById("dropdown").style.display = "none";
        }
</script>

