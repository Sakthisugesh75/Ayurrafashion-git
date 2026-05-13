 @extends('frontend.main')
 @section('content')

 <!-- page-title -->
 <div class="tf-page-title">
     <div class="container-full">
         <div class="heading text-center">Check Out</div>
     </div>
 </div>
 <!-- /page-title -->

 <!-- page-cart -->
 <section class="flat-spacing-11">
     <div class="container">
         <div class="tf-page-cart-wrap layout-2">
             <div class="tf-page-cart-item">
                 <h5 class="fw-5 mb_20">Billing details</h5>
                 <form class="form-checkout">
                     <fieldset class="box fieldset">
                         <label for="fullname">Full Name</label>
                         <input type="text" id="fullname" name="fullname">
                     </fieldset>
                     <fieldset class="box fieldset">
                         <label for="mobile">Phone Number</label>
                         <input type="number" id="mobile" name="mobile">
                     </fieldset>
                     <fieldset class="box fieldset">
                         <label for="email">Email</label>
                         <input type="email" id="email" name="email">
                     </fieldset>
                     <fieldset class="box fieldset">
                         <label for="address">Address</label>
                         <input type="text" id="address" name="address">
                     </fieldset>
                     <div class="box grid-2">
                         <fieldset class="box fieldset">
                             <label for="state">State/Region</label>
                             <div class="select-custom">
                                 <select class="tf-select w-100" id="state" name="state" onchange="getCity()">
                                     <option value="">Select State</option>
                                     @foreach ($state as $item)
                                         <option value="{{ $item->state_id }}">{{ $item->state_name }}</option>
                                     @endforeach
                                 </select>
                             </div>
                         </fieldset>
                         <fieldset class="box fieldset">
                             <label for="city">Town/City</label>
                             <div class="select-custom">
                                 <select class="tf-select w-100" id="city" name="city">
                                     <option value="">Select City</option>
                                 </select>
                             </div>
                         </fieldset>
                     </div>
                     <div class="box grid-2">
                         <fieldset class="fieldset">
                             <label for="landmark">Landmark</label>
                             <input type="text" id="landmark" name="landmark">
                         </fieldset>
                         <fieldset class="fieldset">
                             <label for="postcode">Pincode</label>
                             <input type="text" id="postcode" name="postcode">
                         </fieldset>
                     </div>
                     <fieldset class="box fieldset">
                         <label for="order_notes">Order notes (optional)</label>
                         <textarea name="order_notes" id="order_notes"></textarea>
                     </fieldset>
                 </form>
             </div>

             @php
                 $subtotal = collect($cart)->sum('price');
                 $deliverycharge = 0.00;
                 $net = $subtotal + $deliverycharge;
             @endphp

             <div class="tf-page-cart-footer">
                 <div class="tf-cart-footer-inner">
                     <h5 class="fw-5 mb_20">Your order</h5>
                     <input type="hidden" id="coupon_discount" name="coupon_discount" value="0">
                     <input type="hidden" id="applied_coupon_code" name="applied_coupon_code" value="">
                     <input type="hidden" id="amtcurrency" value="INR">
                     <input type="hidden" id="shipping" name="shipping" value="<?=$deliverycharge?>">

                     <form class="tf-page-cart-checkout widget-wrap-checkout">
                         <ul class="wrap-checkout-product">
                             @foreach ($cart as $item)
                             <li class="checkout-product-item">
                                 <figure class="img-product">
                                     <img src="{{ url('/') }}/{{ $item->image_url }}" alt="product">
                                     <span class="quantity">{{ $item->quantity }}</span>
                                 </figure>
                                 <div class="content">
                                     <div class="info">
                                         <p class="name">{{ $item->product_name }}</p>
                                         <span class="variant">{{ $item->color_name }} / {{ $item->size }}</span>
                                     </div>
                                     <span class="price">Rs.{{ $item->price }}</span>
                                 </div>
                             </li>
                             @endforeach
                         </ul>

                         <div class="coupon-box">
                             <input type="text" placeholder="Discount code" id="coupon_code" name="coupon_code">
                             <a href="#" class="tf-btn btn-sm radius-3 btn-fill coupon">Apply</a>
                             <div id="error" style="display:none; color:red;">
                                 <span id="errormessage"></span>
                             </div>
                         </div>

                         <div class="d-flex justify-content-between line pb_20">
                             <h6 class="fw-5">Sub Total</h6>
                             <h6 class="total fw-5">Rs.{{ $subtotal }}</h6>
                         </div>
                         <div class="d-flex justify-content-between line pb_20" id="discount-row" style="display:none;">
                             <h6 class="fw-5">Discount</h6>
                             <h6 class="total fw-5 text-success">- Rs.<span id="discount-amount">0</span></h6>
                         </div>
                         <div class="d-flex justify-content-between line pb_20">
                             <h6 class="fw-5">Shipping</h6>
                             <h6 class="total fw-5">Rs.{{ $deliverycharge }}</h6>
                         </div>
                         <div class="d-flex justify-content-between line pb_20">
                             <h6 class="fw-5">Total</h6>
                             <h6 class="total fw-5" id="final-total">Rs.{{ $net }}</h6>
                         </div>
                          <script>
                            fbq('track', 'Checkout', {value: {{ $net }}, currency: 'INR'});
                          </script>
                         <button type="button" class="tf-btn radius-3 btn-fill btn-icon justify-content-center" onclick="paynow()">Place order</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <script src="<?= url('/') ?>/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
     <script src="<?php echo url('/'); ?>/assets/datatable/js/sweetalert2@11.js"></script>
     <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
     <script type="text/javascript">
 $(document).on("click", ".coupon", function(e) {
     e.preventDefault();
     var ccode = $('#coupon_code').val().trim();
     if (!ccode) return alert("Please enter a coupon code.");

     $.post("{{ url('/api/v1/coupon/get-coupon-by-code') }}", { ccode }, function(data) {
         if (data.status === "SUCCESS") {
             let type = parseInt(data.list.coupon_type);
             let value = parseFloat(data.list.coupon_value);
             let subtotal = {{ $subtotal }};
             let shipping = {{ $deliverycharge }};
             let discount = type === 0 ? value : (subtotal * value / 100);
             if (discount > (subtotal + shipping)) discount = subtotal + shipping;
             let newTotal = (subtotal + shipping - discount).toFixed(2);

             $('#discount-amount').text(discount.toFixed(2));
             $('#discount-row').show();
             $('#final-total').text('Rs.' + newTotal);
             $('#coupon_discount').val(discount.toFixed(2));
             $('#applied_coupon_code').val(ccode);
             $('#error').hide();
         } else {
             $('#error').show();
             $('#errormessage').text(data.message);
         }
     }).fail(function() {
         alert("Something went wrong while applying the coupon.");
     });
 });

 function paynow() {


let fullname = $('#fullname').val();
let mobile = $('#mobile').val();
let email = $('#email').val();
let city = $('#city').val();
let state = $('#state').val();
let country = '101';
let postcode = $('#postcode').val();
let address = $('#address').val();
let order_notes = $('#order_notes').val();
let landmark = $('#landmark').val();
let shipping = $('#shipping').val();
let coupon_discount = $('#coupon_discount').val();
let applied_coupon_code = $('#applied_coupon_code').val();

if (fullname != "" && address != "" && postcode != "" && city != "" && state != "" && country != "" && mobile !=
    "" && email != "") {

    $.ajax({
        type: 'POST',
        url: '<?php echo url('/'); ?>/api/v1/order/checkout',
        data: {
            'fullname': fullname,
            'mobile': mobile,
            'email': email,
            'city': city,
            'state': state,
            'country': country,
            'postcode': postcode,
            'address': address,
            'order_notes': order_notes,
            'landmark': landmark,
            'coupon_discount': coupon_discount,
            'applied_coupon_code': applied_coupon_code,
            'shipping': shipping,
        },
        success: function(data) {
            console.log(data);
            if (data.status == "SUCCESS") {


                var order_id = data["order_id"];
                var user_id = data["user_id"];
                var payment_id = data["payment_id"];
                var amount = data["amount"];
                console.log("amt:" + amount);
                var total_amount = (amount * 100).toFixed(2);
                console.log("t_amt:" + total_amount);
                // alert("1");
                var options = {
                    "key": "{{ env('RAZORPAY_KEY') }}", // Enter the Key ID generated from the Dashboard
                    "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
                    "currency": $('#amtcurrency').val(),
                    "name": "Ayuraa Fashion",
                    "description": "Purchase Payment",
                    "image": "<?php echo url('/'); ?>/frontassets/images/logo/Capture-removebg-footer.png",
                    "order_id": payment_id, //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                    "handler": function(response) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content')
                            }
                        });
                        $.ajax({
                            type: 'POST',
                            url: "{{ route('razorpay-payment') }}",
                            data: {
                                razorpay_payment_id: response.razorpay_payment_id,
                                amount: amount
                            },
                            success: function(data) {
                                 // alert("successfully ordered");
                                             console.log(data);

                                             window.location.href =
                                                 "<?php echo url('/'); ?>/my-profile";

                                                        // Swal.fire({
                                                        //     title: "Thanks for your purchase! We've emailed your order details to you.",
                                                        //     body:"Thanks for your purchase! We've emailed your order details to you.",
                                                        //     icon: 'success',
                                                        //     confirmButtonColor: '#3085d6',
                                                        //     confirmButtonText: 'Ok'
                                                        //     }).then((result) => {
                                                        //     if (result.isConfirmed) {
                                                        //         window.location.href = "<?=url('/');?>/";
                                                        //     }});

                            }
                        });
                    },
                    "prefill": {
                        "name": name,
                        "email": email,
                        "contact": mobile
                    },
                    "notes": {
                        "address": address,
                        "merchant_order_id": order_id
                    },
                    "theme": {
                        "color": "#F37254"
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.open();


            }
        },
        error: function(request, error) {
            alert("Request: " + JSON.stringify(request));
            // $("#staticBackdrop").modal("show");
            // alert("failed data")
        },
    });
} else {

    // $("#staticBackdrop").modal("show");
    alert("Required all fields");

}





// }
}





function getCity() {
var state = $('#state').val();
$.ajax({
    type: 'GET',
    url: '<?php echo url('/'); ?>/api/v1/state/getCityByState',
    data: {
        'id': state
    },
    success: function(data) {
        console.log(data);
        if (data.status == "SUCCESS") {
            $("#city").empty();
            $("#city").append("<option value=''>Select City</option>");
            console.log(data.list.length);
            for (var i = 0; i < data.list.length; i++) {
                $("#city").append("<option value='" + data.list[i].city_id + "'>" + data.list[i]
                    .city_name + '</option>');
            }
        }
    }
});

}







 </script>

 @endsection
