@extends('frontend.main')
@section('content')
 <!-- page-title -->
 <div class="tf-page-title">
    <div class="container-full">
        <div class="heading text-center">My Orders</div>
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
                        <li><span class="my-account-nav-item active">Orders</span></li>
                        <li><a href="<?= url('/') ?>/my-wishlist" class="my-account-nav-item">Wishlist</a></li>
                        <li><a href="<?= url('/') ?>/logout" class="my-account-nav-item">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="my-account-content account-order">
                    <div class="wrap-account-order">
                        <table>
                            <thead>
                                <tr>
                                    <th class="fw-6">ID</th>
                                    <th class="fw-6">Invoice</th>
                                    <th class="fw-6">Quantity</th>
                                    <th class="fw-6">Date</th>
                                    <th class="fw-6">Price</th>
                                    <th class="fw-6">Status</th>
                                    <th class="fw-6">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // print_r($record);
                                $i = 0;
                                if(!empty($record)){
                                    foreach ($record as $key => $item) {

                                    ?>
                                <tr class="tf-order-item">
                                    <td>
                                        <?=$i = $i + 1;?>
                                    </td>
                                    <td>
                                        <?=$item->invoice_number?>
                                    </td>
                                    <td>
                                        <?=$item->total_quantity?>
                                    </td>
                                    <td>
                                        <?=$item->created_date?>
                                    </td>
                                    <td>
                                        <?=$item->net_amount?>
                                    </td>
                                    <td>
                                        <?=$item->order_status?>
                                    </td>
                                    <td>
                                        <a href="<?= url('/') ?>/user-invoice/<?=$item->id?>" target="_blank" class="tf-btn btn-fill animate-hover-btn rounded-0 justify-content-center">
                                            <span>View</span>
                                        </a>
                                    </td>
                                </tr>
                                <?php }} ?>

                            </tbody>
                        </table>
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



<script src="<?= url('/') ?>/assets/plugins/jquery/jquery-3.5.1.min.js"></script>


<script src="<?php echo url('/');?>/assets/datatable/js/sweetalert2@11.js"></script>

<script>




    $(document).on("click", ".update-status", function (e) {
		e.preventDefault();
        var id = $(this).attr('data-hash');
            var status = 'CANCEL';
		//var result = confirm("");
        Swal.fire({
            title: 'Are you sure?',
            text: "Are you sure, you want to Cancel this Order?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
            }).then((result) => {
            if (result.isConfirmed) {
			var id = $(this).attr('data-hash');
            $.ajax({
                        type:'POST',
                        url:'<?php echo url('/');?>/api/v1/order/update-orderstus',
                        data:{'order_id': id,'order_status':status},
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

    $(document).on("click", ".get-detail", function(e) {
            e.preventDefault();
            var id = $(this).attr('data-hash');
            $.ajax({
                type: 'GET',
                url: '<?php echo url('/'); ?>/api/v1/order/list-orderbyId',
                data: {
                    'id': id
                },
                success: function(data) {
                    console.log(data);
                    if (data.status == "SUCCESS") {
                        console.log(data.list);
                        $('#updateCanvas').offcanvas('show');
                        $('#u_id').val(data.list.id);
                        $('#u_role_name').val(data.list.role_name);
                    } else {
                        alert(data.message);
                    }
                }
            });
        });
        </script>
@endsection
