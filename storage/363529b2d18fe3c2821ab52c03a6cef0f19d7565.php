
<?php $__env->startSection("title" , "Chi tiết"); ?>
<?php $__env->startSection('main'); ?>
    <?php echo $__env->make("layouts-fe.header2", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="banner-wrapper no_background">
        <div class="banner-wrapper-inner">
            <nav class="akasha-breadcrumb"><a href="index-2.html">Home</a><i class="fa fa-angle-right"></i><a href="#">Shop</a>
                <i class="fa fa-angle-right"></i><?php echo e($product->category->cate_name); ?>

            </nav>
        </div>
    </div>
    <div class="single-thumb-vertical main-container shop-page no-sidebar">
        <div class="container">
            <div class="row">
                <div class="main-content col-md-12">
                    <div class="akasha-notices-wrapper"></div>
                    <div id="product-27"
                         class="post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-variable has-default-attributes">
                        <div class="main-contain-summary">
                            <div class="contain-left has-gallery">
                                <div class="single-left">
                                    <div class="akasha-product-gallery akasha-product-gallery--with-images akasha-product-gallery--columns-4 images">



                                        <img src="<?php echo e(BASE_ULR . $product->image); ?>" alt="">
                                    </div>
                                </div>

                                <div class="summary entry-summary">
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span></div>
                                    <h1 class="product_title entry-title"><?php echo e($product->name); ?></h1>
                                    <p class="price"> <span class="akasha-Price-amount amount">
                                            <span class="akasha-Price-currencySymbol">$</span><?php echo e($product->price); ?></span></p>

                                    <div class="akasha-product-details__short-description">
                                        <p><?php echo $product->detail ?> </p>
                                    </div>
                                    <form action="<?php echo e(BASE_ULR . "update-qty"); ?>" class="variations_form cart" method="post">
                                        <div class="single_variation_wrap">
                                            <div class="akasha-variation single_variation"></div>
                                            <div class="akasha-variation-add-to-cart variations_button akasha-variation-add-to-cart-disabled">
                                                <div class="quantity">
                                                    <span class="qty-label">Quantiy:</span>
                                                    <div class="control">
                                                        <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                        <input type="text" data-step="1" min="1" max="" name="qty[<?php echo e($product->id); ?>]" value="0" title="Qty" class="input-qty input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                                                        <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                                    </div>
                                                </div>
                                                <button type="submit">
                                                    Add to cart
                                                </button>

                                                <input name="add-to-cart" value="27" type="hidden">
                                                <input name="product_id" value="27" type="hidden">

                                                <input name="variation_id" class="variation_id" value="0" type="hidden">
                                            </div>
                                        </div>
                                    </form>
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" rel="nofollow"
                                               data-product-id="27" data-product-type="variable" class="add_to_wishlist">
                                                Add to Wishlist</a>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <a href="#"
                                       class="compare button" data-product_id="27" rel="nofollow">Compare</a>
                                    <div class="product_meta">
                                        <div class="wcml-dropdown product wcml_currency_switcher">
                                            <ul>
                                                <li class="wcml-cs-active-currency">
                                                    <a class="wcml-cs-item-toggle">USD</a>
                                                    <ul class="wcml-cs-submenu">
                                                        <li>
                                                            <a>EUR</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="sku_wrapper">SKU: <span class="sku">885B712</span></span>
                                        <span class="posted_in">Categories: <a
                                                    href="#"
                                                    rel="tag"><?php echo e($product->category->cate_name); ?></a>
                                        </span>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-12 col-sm-12 akasha_dreaming_upsell-product">
                    <div class="block-title">
                        <h2 class="product-grid-title">
                            <span>Sản phẩm tương tự</span>
                        </h2>
                    </div>
                    <div class="owl-slick owl-products equal-container better-height"
                         data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4}"
                         data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                       <?php $__currentLoopData = $khac; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product-item style-01 post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock  instock shipping-taxable purchasable product-type-variable has-default-attributes ">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link"
                                       href="<?php echo e(BASE_ULR); ?>detail/<?php echo e($val->id); ?>/<?php echo e($product->cate_id); ?>" tabindex="0">
                                        <img class="img-responsive"
                                             src="<?php echo e(BASE_ULR . $val->image); ?>"
                                             alt="Mini Dress" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span></div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="akasha product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_external add_to_cart_button">Buy
                                                it on Amazon</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="detail/<?php echo e($product->id); ?>/<?php echo e($product->cate_id); ?>" tabindex="0"><?php echo e($val->name); ?></a>
                                    </h3>
                                    <div class="rating-wapper ">
                                        <div class="star-rating"><span style="width:100%">Rated <strong
                                                        class="rating">5.00</strong> out of 5</span></div>
                                        <span class="review">(1)</span></div>
                                    <span class="price"><span class="akasha-Price-amount amount"><span
                                                    class="akasha-Price-currencySymbol">$</span><?php echo e(number_format($val->price)); ?></span></span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </div>
                </div>

            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>



<?php echo $__env->make("layouts-fe.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OOP_MVC\mvc\app\views/detailProduct.blade.php ENDPATH**/ ?>