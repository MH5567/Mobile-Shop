<!--shopping cart section start-->
<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!--cart items start-->
        <div class="row">
            <div class="col-sm-9 text-center py-2">
                <!--Empty cart start-->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-12">
                        <img src="./assets/blog/empty_cart.png" alt="empty cart" class="img_fluid" style="height: 200px">
                        <p class="font-baloo font-size-16 text-black-50">Empty Cart</p>
                    </div>
                </div>
                <!--Empty cart end-->
            </div>
            <!--sub total section start-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i>Your order is eligibe for free Delivery</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal (<?php echo isset($subTotal) ? count($subTotal) : 0 ?> items):&nbsp; <span class="text-danger">£<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0 ?></span></span></h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                    </div>
                </div>
            </div>
            <!--sub total section end-->
        </div>
        <!--cart items end-->
    </div>
</section>
<!--shopping cart section end-->

