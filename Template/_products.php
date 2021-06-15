<!--Product start-->
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['products_submit'])){
        //call method addTOCart
        $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }

}
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :
?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                    </div>
                    <div class="col">
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1 ?>">
                            <?php
                            if(in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                echo'<button type="submit" disabled class="btn btn-success font-size-16 form-control">In the Cart</button>';
                            } else{
                                echo '<button type="submit" name="products_submit" class="btn btn-warning font-size-16 form-control">Add to cart</button>';
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answered questions</a>
                </div>
                <hr class="m-0">

                <!--product price start-->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>M.R.P:</td>
                        <td><strike>£162.00</strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal Price:</td>
                        <td class="font-size-20 text-danger">£<span><?php echo $item['item_price'] ?? 0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;inclusive of all taxes</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You Save:</td>
                        <td><span class="font-size-16 text-danger">£10.00</span></td>
                    </tr>
                </table>
                <!--product price end-->

                <!--Policy start-->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-secondary">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-secondary">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Daily Tuition <br>Delivery</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-secondary">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">1 year <br>Warranty</a>
                        </div>
                    </div>
                </div>
                <!--Policy end-->
                <hr>

                <!--order details start-->
                <div id="order-details" class="font-rele d-flex flex-column text-dark">
                    <small>Delivery by: Mar 29 - Apr 1</small>
                    <small>Sold by <a href="#">Daily Electronics</a>(4.5 out of 5 | 18,198 ratings)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Delivery to Customer - 424201</small>
                </div>
                <!--order details end-->

                <div class="row">
                    <div class="col-6">
                        <!--color start-->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-secondary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                        <!-- color end-->
                    </div>
                    <div class="col-6">
                        <!--product qty section start-->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty:</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" style="width: 50%;" class="qty_input border px-2 bg-light"disabled value="1" placeholder="1">
                                <button class="qty-down border bg-light" data-id="pro1"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!--product qty section end-->
                    </div>
                </div>

                <!--size start-->
                <div class="size my-3">
                    <h6 class="font-baloo">SIze :</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border py-2">
                            <button class="btn p-0 font-size-14">4GB RAM</button>
                        </div>
                        <div class="font-rubik border py-2">
                            <button class="btn p-0 font-size-14">6GB RAM</button>
                        </div>
                        <div class="font-rubik border py-2">
                            <button class="btn p-0 font-size-14">8GB RAM</button>
                        </div>
                    </div>
                </div>
                <!--size end-->
            </div>

            <div class="col-12">
                <h6 class="font-rubik">Product Description</h6>
                <hr>
                <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint deserunt nemo nihil soluta voluptate optio ad corporis obcaecati, quos numquam, distinctio quis? Cumque dicta quod sapiente velit. Ipsum voluptatum commodi soluta eveniet minima quae eligendi nihil dignissimos perspiciatis et autem tempore sapiente rerum aliquid, fugit nulla deserunt sed voluptatem repellat officiis quam eaque quidem voluptas? Minus cupiditate voluptas sint corporis?</p>
                <p class="font-rale font-size-14">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta adipisci eius recusandae quod vitae voluptas voluptatum ullam enim est mollitia pariatur consectetur debitis, reiciendis repellat sint delectus necessitatibus tempore esse quos minus aperiam ipsam voluptatem magni? Itaque a accusantium magni culpa facilis minus omnis adipisci voluptas atque, quos quod praesentium dolorem esse quidem quo id rem ducimus dolores minima ratione.</p>
            </div>
        </div>
    </div>
</section>
<!--Product end-->

<?php
    endif;
    endforeach;
?>