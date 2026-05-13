@extends('frontend.main')
@section('content')

 <!-- Slider -->
 {{-- <section class="tf-slideshow about-us-page position-relative">
    <div class="banner-wrapper">
        <img class="lazyload" src="<?= url('/') ?>/frontassets/images/slider/about-banner-01.jpg" data-src="<?= url('/') ?>/frontassets/images/slider/about-banner-01.jpg" alt="image-collection">
        <div class="box-content text-center">
            <div class="container">
                <div class="text text-white">Empowering women to achieve <br class="d-xl-block d-none"> fitness goals with style</div>
            </div>
        </div>
    </div>
</section> --}}
<!-- /Slider -->
<!-- flat-title -->
<section class="flat-spacing-9">
    <div class="container">
        <div class="flat-title my-0"> 
            <span class="title">Ayuraa Fashion — The Art of Refined Living</span>
            <p class="sub-title text_black-2">
            Ayuraa Fashion is a celebration of timeless style and enduring craftsmanship.
Rooted in the principles of classic heritage fashion, we design for the modern gentleman who values substance over show and grace over noise.
Each collection embodies the quiet confidence of old-world sophistication — tailored silhouettes, premium fabrics, and meticulous details that stand the test of time. From polished polos to refined shirts, every piece is created to reflect elegance that never fades.
.At Ayuraa Fashion, we believe true luxury lies in simplicity and authenticity. Our vision is to revive the spirit of heritage dressing, blending tradition with contemporary ease to redefine modern elegance.
We don’t chase trends — we craft legacies.
Timeless style. Effortless grace. That’s the Kira Heritage way.</p>
            
        </div>
    </div>
</section>
<!-- /flat-title -->
<div class="container"><div class="line"></div></div>
<!-- image-text -->
<section class="flat-spacing-23 flat-image-text-section">
    <div class="container">
        <div class="tf-grid-layout md-col-2 tf-img-with-text style-4">
            <div class="tf-image-wrap">
                <!-- <img class="lazyload w-100" data-src="<?= url('/') ?>/frontassets/images/collections/4b05ab0f8445b6fc2e48d5b1e5014d20eeeee.jpg src="<?= url('/') ?>/frontassets/images/collections/4b05ab0f8445b6fc2e48d5b1e5014d20eeeee.jpg" alt="collection-img"> -->

                <img class="lazyload w-100" 
     data-src="<?= url('/') ?>/frontassets/images/collections/ChatG.png" 
     src="<?= url('/') ?>/frontassets/images/collections/ChatG.png" 
     alt="collection-img">

            </div>
            <div class="tf-content-wrap px-0 d-flex justify-content-center w-100">
                <div>
                    <div class="heading"> What We Stand For</div>
                    <div class="text">
At Ayuraa Fashion, we believe true style is not about excess — it’s about elegance that endures.
Our philosophy is rooted in timeless craftsmanship, refined design, and quiet confidence. Every garment we create embodies the spirit of heritage — classic, sophisticated, and built to last.

We stand for authenticity over trend, quality over quantity, and grace over grandeur. Our collections are thoughtfully designed for the modern gentleman who values detail, heritage, and understated luxury.


                    </div>
                    <div class="text">At Ayuraa Fashion, we don’t follow fashion — we preserve it.
</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="flat-spacing-15">
    <div class="container">
        <div class="tf-grid-layout md-col-2 tf-img-with-text style-4">
            <div class="tf-content-wrap px-0 d-flex justify-content-center w-100">
                <div>
                    <div class="heading"> Why Choose Ayuraa Fashion?
</div>
                    <div class="text">

                        Because timeless style never goes out of fashion.
                    </div>

                    <div class="heading">
                        Our Mission
                    </div>
                    <div class="text">
                At Ayuraa Fashion, our mission is to redefine modern menswear through the lens of heritage craftsmanship and quiet luxury. We create pieces that aren’t driven by trends — but by timeless values,
                        impeccable tailoring, and enduring quality.
                    </div>
                    <div class="heading">
                         What We Offer
                    </div>
                  
                    <div class="text">
                    Heritage Craftsmanship:
                    Every garment is crafted with precision, combining traditional tailoring techniques and contemporary refinement to ensure elegance in every detail.

                    Timeless Design:
                    We believe true style is everlasting. Our collections feature versatile classics designed to elevate the modern gentleman’s wardrobe.

                    Quality Without Compromise:
                    From premium fabrics to enduring construction, we focus on pieces made to last — investments, not impulses.

                    Effortless Sophistication:
                    Each design embodies ease, comfort, and confidence — perfect for the man who values grace in simplicity.

                    Sustainable Vision:
                    We believe in conscious creation — building fashion that honors both people and the plane.
                    </div>
                </div>

                {{-- <div>
                    <div class="heading"> Our Mission</div>
                    <div class="text">

                       At Ayuraa Fashion, our mission is to redefine modern menswear through the lens of heritage craftsmanship and quiet luxury. We create pieces that aren’t driven by trends — but by timeless values,
                        impeccable tailoring, and enduring quality
                    </div>
                </div> --}}
            </div>
            <div class="grid-img-group">
                {{-- <div class="tf-image-wrap box-img item-1">
                    <div class="img-style">
                        <img class="lazyload" src="<?= url('/') ?>/frontassets/images/collections/132644e.jpg" data-src="<?= url('/') ?>/frontassets/images/collections/132644e.jpg" alt="img-slider">
                    </div>
                </div> --}}
                <div class="tf-image-wrap box-img item-2">
                    <div class="img-style">
                        <img class="lazyload" src="<?= url('/') ?>/frontassets/images/collections/ChatGPT-Image.png" data-src="<?= url('/') ?>/frontassets/images/collections/ChatGPT-Image.png" alt="img-slider">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /image-text -->

@endsection
