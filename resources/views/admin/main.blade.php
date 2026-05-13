@include('admin.meta_header')
<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">

	<!--  WRAPPER  -->
	<div class="wrapper">
        <div class="ec-left-sidebar ec-bg-sidebar">
        @include('admin.sidenav')
    </div>
    <div class="ec-page-wrapper">
        @include('admin.topnav')

    <div class="ec-content-wrapper">
                @yield('content')
        </div> <!-- End Content Wrapper -->
        <footer class="footer mt-auto">
        @include('admin.footer')
    </footer>

    </div> <!-- End Page Wrapper -->
</div> <!-- End Wrapper -->

<div id="filterProducts"></div>


    <!-- Common Javascript -->
	<script src="<?= url('/') ?>/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="<?= url('/') ?>/assets/js/bootstrap.bundle.min.js"></script>
	<script src="<?= url('/') ?>/assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="<?= url('/') ?>/assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="<?= url('/') ?>/assets/plugins/slick/slick.min.js"></script>
    <script src="<?= url('/') ?>/assets/plugins/swiper/swiper-bundle.min.js"></script>

	<!-- Chart -->
	<script src="<?= url('/') ?>/assets/plugins/charts/Chart.min.js"></script>
	<script src="<?= url('/') ?>/assets/js/chart.js"></script>



	<!-- Date Range Picker -->
	<script src="<?= url('/') ?>/assets/plugins/daterangepicker/moment.min.js"></script>
    <script src="<?= url('/') ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="<?= url('/') ?>/assets/js/date-range.js"></script>

    <!-- Data Tables -->
	<script src='<?= url('/') ?>/assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='<?= url('/') ?>/assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='<?= url('/') ?>/assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="<?= url('/') ?>/assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="<?= url('/') ?>/assets/js/ekka.js"></script>

<!-- include summernote css/js -->
<link href="{{url ('assets/summernote/summernote-bs5.css') }}" rel="stylesheet">
<script src="{{url ('assets/summernote/summernote-bs5.js') }}"></script>

<!-- DataTables Buttons Extension -->
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>



</body>

</html>
