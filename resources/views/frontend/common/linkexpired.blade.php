@extends('frontend.main')
@section('content')
<!-- page-404 -->
        <section class="page-404-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        {{-- <div class="image">
                            <img src="images/item/404.svg" alt="">
                        </div> --}}
                        <div class="title">
                            Oops...That link is Expired.
                        </div>
                        <p>Sorry for the inconvenience. </p>
                        <a href="<?= url('/') ?>/user-product/czoxOiIwIjs" class="tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn">Shop now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /page-404 -->
@endsection
