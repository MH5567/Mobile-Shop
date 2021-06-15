<!--shopping cart section start-->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);
    }
    //save for later
    if(isset($_POST['wishlist-submit'])){
        $Cart->saveForLater($_POST['item_id']);
    }

}
?>

<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!--cart items start-->
        <div class="row">
            <div class="col-sm-9">
                <?php
                    foreach ($product->getData('cart') as $item) :
                   $cart = $product->getProduct($item['item_id']);
                    $subTotal[] = array_map(function ($item){
                    ?>
                <!--cart item start-->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="<?PHP echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="cart1" style="height: 120px" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? 'Unknown'; ?></h5>
                        <small>by <?php echo $item['item_brand'] ?? 'Brand'; ?></small>
                        <!--product ratings start-->
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">20, 534 ratings</a>
                        </div>
                        <!--prodcuct ratings end-->

                        <!--product qty start-->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-25">
                                <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" style="width: 100%;" class="qty_input border px-2 bg-light"disabled value="1" placeholder="1">
                                <button class="qty-down border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-down"></i></button>
                            </div>

                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id' ?? 0] ?>" name="item_id">
                            <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                            </form>

                                <form method="post">
                                    <input type="hidden" value="<?php echo $item['item_id' ?? 0] ?>" name="item_id">
                                    <button type="submit" name="wishlist-submit" class="btn font-baloo text-danger px-3"">Save for later</button>
                                </form>
                        </div>
                        <!--product qty end-->

                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text danger font-baloo">
                            £<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0' ?>"><?PHP echo $item['item_price'] ?? '0' ?></span>
                        </div>
                    </div>
                </div>
                <!--cart item end-->
                <?php
                    return $item['item_price'];
                    }, $cart); //closing array map function
                    endforeach;
                    ?>
            </div>
            <!--sub total section start-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i>Your order is eligible for FREE Delivery</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span class="text-danger">£<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span></span></h5>
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
