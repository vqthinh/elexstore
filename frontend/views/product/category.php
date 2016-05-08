<?php include_once('frontend/views/common/header.php'); ?>
<style>
    .img1 {
        max-width: 200px;
        height: 200px;
    }
</style>


<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>
                        <?php if($products):
                            echo $title
                            ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
<!--                @{Html.RenderAction("_SearchBox", "Products");}-->
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Random Products</h2>
                    <?php foreach($listRandom as $productrd):?>
                        <div class="thubmnail-recent">
                            <img src="assets/upload/images/Products/<?php echo $productrd['Image'];?>" class="recent-thumb" alt="">
                            <h2><a href="index.php?controller=product&action=details&pid=<?php echo $productrd['ID']; ?>"><?php echo $productrd['Name'];?></a></h2>
                            <div class="product-sidebar-price">
                                <ins><?php echo $productrd['Price'];?> <span style="font-weight: bold;font-size: 9px;color:red"> USD</span></ins>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="container">
                    <div class="row">
                        <?php foreach($products as $product):?>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-shop-product">
                                <div class="product-upper">
                                    <img src="assets/upload/images/Products/<?php echo $product['Image'];?>" class="img1">
                                </div>
                                <h2>
                                    <a href="index.php?controller=product&action=details&pid=<?php echo $productrd['ID']; ?>"><?php echo $product['Name'];?></a>
                                </h2>
                                <div class="product-carousel-price">
                                    <ins><?php echo $product['Price'];?><span style="font-weight: bold; font-size: 9px; color: red"> USD</span></ins>
                                </div>

                                <div class="product-option-shop">
                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-pagination text-center">
                                <?php echo $pagination; ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php else:
                            echo 'This category have nothing'
                            ?>
                        </h2>
                </div>
            </div>
        </div>
    </div>
</div>
                        <?php endif;?>



<?php include_once('frontend/views/common/footer.php'); ?>
