<?php include_once('frontend/views/common/header.php'); ?>
<style>
    .img1 {
        max-width: 227px;
        max-height: 227px;
        height: 227px;
        width: 227px;
    }
    .logo {
        max-height: 200px;
        max-width: 200px;
    }
</style>
<div class="slider-area">
    <div class="zigzag-bottom"></div>
    <div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">

        <div class="slide-bulletz">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ol class="carousel-indicators slide-indicators">
                            <li data-target="#slide-list" data-slide-to="0" class="active"></li>
                            <li data-target="#slide-list" data-slide-to="1"></li>
                            <li data-target="#slide-list" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="single-slide">
                    <div class="slide-bg slide-one"></div>
                    <div class="slide-text-wrapper">
                        <div class="slide-text">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-6">
                                        <div class="slide-content">
                                            <h2>We are awesome</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi ab molestiae minus reiciendis! Pariatur ab rerum, sapiente ex nostrum laudantium.</p>
                                            <a href="" class="readmore">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-slide">
                    <div class="slide-bg slide-two"></div>
                    <div class="slide-text-wrapper">
                        <div class="slide-text">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-6">
                                        <div class="slide-content">
                                            <h2>We are great</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe aspernatur, dolorum harum molestias tempora deserunt voluptas possimus quos eveniet, vitae voluptatem accusantium atque deleniti inventore. Enim quam placeat expedita! Quibusdam!</p>
                                            <a href="" class="readmore">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-slide">
                    <div class="slide-bg slide-three"></div>
                    <div class="slide-text-wrapper">
                        <div class="slide-text">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-6">
                                        <div class="slide-content">
                                            <h2>We are superb</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eius?</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptates necessitatibus dicta recusandae quae amet nobis sapiente explicabo voluptatibus rerum nihil quas saepe, tempore error odio quam obcaecati suscipit sequi.</p>
                                            <a href="" class="readmore">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End slider area -->
<div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-promo">
                    <i class="fa fa-refresh"></i>
                    <p>30 Days return</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo">
                    <i class="fa fa-truck"></i>
                    <p>Free shipping</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo">
                    <i class="fa fa-lock"></i>
                    <p>Secure payments</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo">
                    <i class="fa fa-gift"></i>
                    <p>New products</p>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End promo area -->
<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Special Products</h2>
                    <div class="product-carousel">
                        <?php foreach($listSpecial as $special): ?>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="assets/upload/images/Products/<?php echo $special['Image'];?>" class="img1" alt="">
                                <div class="product-hover">
                                    <a href="javascript:void(0);" class="add-to-cart-link add-to-cart"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <a href="#" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                </div>
                            </div>

                            <h2>
                                <a href="#"><?php echo $special['Name'];?></a>
                            </h2>

                            <div class="product-carousel-price">
                                <ins><?php echo $special['Price'];?><span style="font-weight: bold;font-size: 9px;color:red"> VNĐ</span></ins>
                            </div>
                        </div>
<?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->
<div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-wrapper">
                    <h2 class="section-title">Suppliers</h2>
                    <div class="brand-list">
                        <?php foreach($listSuppliers as $supplier): ?>
                        <img src="assets/upload/images/Suppliers/<?php echo $supplier['Logo'];?>" class="logo" style="">
            <?php endforeach;?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End brands area -->

<div class="product-widget-area">
    <div class="zigzag-bottom"></div>
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-4">-->
<!--                <div class="single-product-widget">-->
<!--                    <h2 class="product-wid-title">Top Sellers</h2>-->
<!--                    <a href="" class="wid-view-more">View All</a>-->
<!--                    @foreach (Product product in ViewBag.TopSells)-->
<!--                    {-->
<!--                    <div class="single-wid-product">-->
<!--                        <a href="@Url.Action("Details","Products")/@product.ID"><img src="/Data/Images/images/@product.Image" alt="" class="product-thumb"></a>-->
<!--                        <h2><a href="@Url.Action("Details","Products")/@product.ID">@product.Name</a></h2>-->
<!--                        <div class="product-wid-rating">-->
<!--                            <i class="fa fa-star"></i>-->
<!--                            <i class="fa fa-star"></i>-->
<!--                            <i class="fa fa-star"></i>-->
<!--                            <i class="fa fa-star"></i>-->
<!--                            <i class="fa fa-star"></i>-->
<!--                        </div>-->
<!--                        <div class="product-wid-price">-->
<!--                            <ins>@product.Price<span style="font-weight: bold;font-size: 9px;color:red"> VNĐ</span></ins> <del>@product.Price<span style="font-weight: bold;font-size: 9px;color:red"> VNĐ</span></del>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    }-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4">-->
<!--                <div class="single-product-widget">-->
<!--                    <h2 class="product-wid-title">Top Views</h2>-->
<!--                    <a href="#" class="wid-view-more">View All</a>-->
<!--                    @foreach (Product product in ViewBag.TopViews)-->
<!--                    {-->
<!--                    <div class="single-wid-product">-->
<!--                        <a href="@Url.Action("Details","Products")/@product.ID"><img src="/Data/Images/images/@product.Image" alt="" class="product-thumb"></a>-->
<!--                        <h2><a href="@Url.Action("Details","Products")/@product.ID">@product.Name</a></h2>-->
<!--                        <div class="product-wid-rating">-->
<!--                            <i class="fa fa-star"></i>-->
<!--                            <i class="fa fa-star"></i>-->
<!--                            <i class="fa fa-star"></i>-->
<!--                            <i class="fa fa-star"></i>-->
<!--                            <i class="fa fa-star"></i>-->
<!--                        </div>-->
<!--                        <div class="product-wid-price">-->
<!--                            <ins>@product.Price<span style="font-weight: bold;font-size: 9px;color:red"> VNĐ</span></ins> <del>@product.Price<span style="font-weight: bold;font-size: 9px;color:red"> VNĐ</span></del>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    }-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4">-->
<!--                <div class="single-product-widget">-->
<!--                    <h2 class="product-wid-title">Top New</h2>-->
<!--                    <a href="#" class="wid-view-more">View All</a>-->
<!--                    @foreach (Product product in ViewBag.News)-->
<!--                    {-->
<!--                    <div class="single-wid-product">-->
<!--                        <a href="@Url.Action("Details","Products")/@product.ID"><img src="/Data/Images/images/@product.Image" alt="" class="product-thumb"></a>-->
<!--                        <h2><a href="@Url.Action("Details","Products")/@product.ID">@product.Name</a></h2>-->
<!--                        <div class="product-wid-rating">-->
<!--                            <i class="fa fa-star"></i>-->
<!--                            <i class="fa fa-star"></i>-->
<!--                            <i class="fa fa-star"></i>-->
<!--                            <i class="fa fa-star"></i>-->
<!--                            <i class="fa fa-star"></i>-->
<!--                        </div>-->
<!--                        <div class="product-wid-price">-->
<!--                            <ins>@product.Price<span style="font-weight: bold;font-size: 9px;color:red"> VNĐ</span></ins> <del>@product.Price<span style="font-weight: bold;font-size: 9px;color:red"> VNĐ</span></del>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    }-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
<!--</div> <!-- End product widget area-->
<?php include_once('frontend/views/common/footer.php'); ?>