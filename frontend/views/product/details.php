<?php include_once('frontend/views/common/header.php'); ?>
<style>
    .product-hover a {
        font-size: 13px;
    }
</style>
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Shop</h2>
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
                <?php include_once('frontend/views/common/searchbox.php'); ?>
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
                <div class="product-content-right">
                    <div class="product-breadcroumb">
                        <a href="<?php echo base_url('index.php')?>">Home</a>
                        <a href="#"><?php echo $categoryprd['Name']?></a>
                        <a href="index.php?controller=product&action=details&pid=<?php echo $product['ID']; ?>"><?php echo $product['Name'];?></a>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="product-images">
                                <div class="product-main-img">
                                    <img src="assets/upload/images/Products/<?php echo $product['Image'];?>" alt="">
                                </div>


                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="product-inner">
                                <h2 class="product-name"><?php echo $product['Name'];?></h2>
                                <div class="product-inner-price">
                                    <ins><?php echo $product['Price'];?> <span style="font-weight: bold;font-size: 9px;color:red"> USD</span></ins>
                                </div>

                                <form action="" class="cart">
                                    <div class="quantity">
                                        <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" max="<?php echo $product['Quantity'];?>" step="1" id="txtQuantity">
                                    </div>
                                    <button class="add_to_cart_button" type="submit">Add to cart</button>
                                </form>

                                <div class="product-inner-category">
                                    <p>Category: <a href=""><?php echo $categoryprd['Name']?></a></p>
                                </div>

                                <div role="tabpanel">
                                    <ul class="product-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <?php echo $product['Description'];?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="related-products-wrapper">
                        <h2 class="related-products-title">Related Products</h2>
                        <div class="related-products-carousel">
<?php foreach($listRelated as $productrlt):?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="assets/upload/images/Products/<?php echo $productrlt['Image'];?>" class="img1" alt="">
                                </div>
                                <h2>
                                    <a href="index.php?controller=product&action=details&pid=<?php echo $productrlt['ID']; ?>"><?php echo $productrlt['Name'];?></a>
                                </h2>
                                <div class="product-carousel-price">
                                    <ins><?php echo $productrlt['Price'];?> <span style="font-weight: bold;font-size: 9px;color:red"> VNĐ</span></ins>
                                </div>
                            </div>
<?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('frontend/views/common/footer.php'); ?>