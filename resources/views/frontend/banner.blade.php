<!-- Slider -->
<div class="tf-slideshow slider-home-2 slider-effect-fade position-relative">
    <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1" data-centered="false" data-space="0" data-loop="true" data-auto-play="true" data-delay="2000" data-speed="1000">
        <div class="swiper-wrapper">
            <?php
            if (!empty($banner)) {
                foreach ($banner as $key => $banners) {
                    if ($banners->page == 'home') {
            ?>
            <div class="swiper-slide" lazy="true">
                <div class="wrap-slider">
                    <img class="lazyload" data-src="<?= url('/') ?>/<?= $banners->image_url ?>" src="<?= url('/') ?>/<?= $banners->image_url ?>" alt="fashion-slideshow-01">
                    <div class="box-content text-center">
                        <div class="container">
                            <h1 class="fade-item fade-item-1 font-heading text-white mb-3" style="font-size: clamp(32px, 5vw, 72px); text-shadow: 0 2px 10px rgba(0,0,0,0.3);">Timeless Elegance</h1>
                            <p class="fade-item fade-item-2 text-white mb-4 letter-spacing-2 text-uppercase" style="font-size: clamp(12px, 2vw, 16px); opacity: 0.9;">Curated Designs for the Modern Woman</p>
                            <div class="fade-item fade-item-3">
                                <a href="<?= url('/') ?>/user-product/czoxOiIwIjs" class="tf-btn btn-fill">Shop the Collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }}} ?>
        </div>
    </div>
    <div class="wrap-pagination sw-absolute-2">
        <div class="container">
            <div class="sw-dots sw-pagination-slider"></div>
        </div>
    </div>
</div>
<!-- /Slider -->
<style>
@media(max-width: 720px){
    .wrap-slider img{
        width: 100% !important;       
        height: auto !important;
        min-height: 250px;
        object-fit: cover;
      }

    .tf-slideshow{
      height: auto;
      min-height: 250px;
    }
}

.box-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    z-index: 10;
}

.fade-item {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease-out;
}

.swiper-slide-active .fade-item {
    opacity: 1;
    transform: translateY(0);
}

.fade-item-1 { transition-delay: 0.2s; }
.fade-item-2 { transition-delay: 0.4s; }
.fade-item-3 { transition-delay: 0.6s; }
</style>

