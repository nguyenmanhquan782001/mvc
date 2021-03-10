
<?php $__env->startSection('title' , 'Đặt hàng'); ?>
<?php $__env->startSection('main-content'); ?>

    <div class="banner-wrapper has_background">
        <img src="<?php echo e(FE_URL); ?>images/banner-for-all2.jpg"
             class="img-responsive attachment-1920x447 size-1920x447" alt="img">
        <div class="banner-wrapper-inner">
            <h1 class="page-title">Checkout</h1>
            <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items breadcrumb">
                    <li class="trail-item trail-begin"><a href="index-2.html"><span>Home</span></a></li>
                    <li class="trail-item trail-end active"><span>Checkout</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <main class="site-main  main-container no-sidebar">
        <div class="container">
            <div class="row">
                <div class="main-content col-md-12">
                    <div class="page-main-content">
                        <div class="akasha">
                            <div class="akasha-notices-wrapper"></div>
                            <div class="checkout-before-top">
                                <div class="akasha-checkout-login">
                                    <div class="akasha-form-login-toggle">
                                        <div class="akasha-info">
                                            Returning customer? <a href="#" class="showlogin">Click here to login</a></div>
                                    </div>
                                    <form class="akasha-form akasha-form-login login" method="post"

                                          style="display:none;">
                                        <p>If you have shopped with us before, please enter your details below. If you are a
                                            new customer, please proceed to the Billing &amp; Shipping section.</p>
                                        <p class="form-row form-row-first">
                                            <label for="username">Username or email&nbsp;<span
                                                        class="required">*</span></label>
                                            <input type="text" class="input-text" name="username" id="username"
                                                   autocomplete="username">
                                        </p>
                                        <p class="form-row form-row-last">
                                            <label for="password">Password&nbsp;<span class="required">*</span></label>
                                            <input class="input-text" type="password" name="password" id="password"
                                                   autocomplete="current-password">
                                        </p>
                                        <div class="clear"></div>
                                        <p class="form-row">
                                            <input type="hidden" id="akasha-login-nonce" name="akasha-login-nonce"
                                                   value="832993cb93"><input type="hidden" name="_wp_http_referer"
                                                                             value="/akasha/checkout/">
                                            <button type="submit" class="button" name="login" value="Login">Login</button>
                                            <label class="akasha-form__label akasha-form__label-for-checkbox inline">
                                                <input class="akasha-form__input akasha-form__input-checkbox"
                                                       name="rememberme" type="checkbox" id="rememberme" value="forever">
                                                <span>Remember me</span>
                                            </label>
                                        </p>
                                        <p class="lost_password">
                                            <a href="#">Lost your
                                                password?</a>
                                        </p>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                                <div class="akasha-checkout-coupon">
                                    <div class="akasha-notices-wrapper"></div>
                                    <div class="akasha-form-coupon-toggle">
                                        <div class="akasha-info">
                                            Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a>
                                        </div>
                                    </div>
                                    <form class="checkout_coupon akasha-form-coupon" method="post"
                                          style="display:none">
                                        <p>If you have a coupon code, please apply it below.</p>
                                        <p class="form-row form-row-first">
                                            <input type="text" name="coupon_code" class="input-text"
                                                   placeholder="Coupon code" id="coupon_code" value="">
                                        </p>
                                        <p class="form-row form-row-last">
                                            <button type="submit" class="button" name="apply_coupon" value="Apply coupon">
                                                Apply coupon
                                            </button>
                                        </p>
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                            <form  method="post" class="checkout akasha-checkout"
                                  action="<?php echo e(BASE_ULR . 'save-checkout'); ?>" enctype="multipart/form-data"
                                  novalidate="novalidate">
                                <div class="col2-set" id="customer_details">
                                    <div class="col-1">
                                        <div class="akasha-billing-fields">
                                            <h3>Billing details</h3>
                                            <div class="akasha-billing-fields__field-wrapper">
                                                <p class="form-row form-row-first validate-required"
                                                   id="billing_first_name_field" data-priority="10"><label
                                                            for="billing_first_name" class="">Full name&nbsp;<abbr
                                                                class="required" title="required">*</abbr></label><span
                                                            class="akasha-input-wrapper"><input type="text" class="input-text " name="customer_name"
                                                                                                id="billing_first_name"
                                                                                                   placeholder="Tên khách hàng" required></span>
                                                </p>

                                                <p class="form-row form-row-last validate-required"
                                                   id="billing_last_name_field" data-priority="20"><label
                                                            for="billing_last_name" class="">Bỏ trống&nbsp;<abbr
                                                                class="required" title="required">*</abbr></label><span
                                                            class="akasha-input-wrapper"><input disabled type="text"
                                                                                                class="input-text "
                                                                                                name="billing_last_name"
                                                                                                id="billing_last_name"
                                                                                                placeholder="" value=""
                                                                                                autocomplete="family-name" ></span>
                                                </p>



                                                <p class="form-row form-row-wide adchair-field validate-required"
                                                   id="billing_adchair_1_field" data-priority="50"><label
                                                            for="billing_adchair_1" class="">Street adchair&nbsp;<abbr
                                                                class="required" title="required">*</abbr></label><span
                                                            class="akasha-input-wrapper"><input type="text"
                                                                                                class="input-text "
                                                                                                name="customer_address"
                                                                                                id="billing_adchair_1"
                                                                                                placeholder="House number and street name"
                                                                                                value=""
                                                                                                autocomplete="adchair-line1"
                                                                                                data-placeholder="House number and street name" required></span>
                                                </p>



                                                <p class="form-row form-row-wide validate-required validate-phone"
                                                   id="billing_phone_field" data-priority="100"><label for="billing_phone"
                                                                                                       class="">Phone&nbsp;<abbr
                                                                class="required" title="required">*</abbr></label><span
                                                            class="akasha-input-wrapper"><input type="tel"
                                                                                                class="input-text "
                                                                                                name="customer_phone_number"
                                                                                                id="billing_phone"
                                                                                                placeholder="" value=""
                                                                                                autocomplete="tel" ></span>
                                                </p>
                                                <p class="form-row form-row-wide validate-required validate-email"
                                                   id="billing_email_field" data-priority="110"><label for="billing_email"
                                                                                                       class="">Email
                                                        adchair&nbsp;<abbr class="required"
                                                                           title="required">*</abbr></label><span
                                                            class="akasha-input-wrapper"><input type="email"
                                                                                                class="input-text "
                                                                                                name="customer_email"
                                                                                                id="billing_email"
                                                                                                placeholder="" value=""
                                                                                                autocomplete="email username" required></span>
                                                </p></div>
                                        </div>


                                    </div>

                                </div>
                                <h3 id="order_review_heading">Your order</h3>
                                <div id="order_review" class="akasha-checkout-review-order">
                                    <table class="shop_table akasha-checkout-review-order-table">
                                        <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         foreach ($list as $product) {
                                              foreach ($_SESSION['cart'][ $product->id] as $carts){
                                        ?>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                               <?php echo e($product->name); ?> <strong class="product-quantity">×
                                                    <?php echo e($_SESSION['cart'][$product->id]['qty']); ?> </strong></td>
                                            <td class="product-total">
                                            <span class="akasha-Price-amount amount"><span
                                                        class="akasha-Price-currencySymbol">$</span><?php echo e(number_format($product->price*$_SESSION['cart'][$product->id]['qty'])); ?></span></td>
                                        </tr>
                                        <?php
                                        @$totalPrice  += $product->price *   $carts;
                                              }
                                              }
                                         ?>
                                        </tbody>
                                        <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td><span class="akasha-Price-amount amount"><span
                                                            class="akasha-Price-currencySymbol">$</span><?php echo e($totalPrice); ?></span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td><strong><span class="akasha-Price-amount amount"><span
                                                                class="akasha-Price-currencySymbol">$</span><?php echo e($totalPrice); ?></span></strong>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <input type="hidden" name="lang" value="en">
                                    <div id="payment" class="akasha-checkout-payment">
                                        <ul class="wc_payment_methods payment_methods methods">

                                            <li class="wc_payment_method payment_method_cheque">
                                                <input id="payment_method" type="radio"
                                                       name="payment_method" value="1" required >
                                                <label for="payment_method_cheque">
                                                    Tiền mặt </label>
                                                <div class="payment_box payment_method_cheque" style="display:none;">
                                                    <p>Please send a check to Store Name, Store Street, Store Town, Store
                                                        State / County, Store Postcode.</p>
                                                </div>
                                            </li>
                                            <li class="wc_payment_method payment_method_cod">
                                                <input id="payment_method" type="radio"
                                                       name="payment_method" value="2" required>
                                                <label for="payment_method_cod">
                                                   Chuyển khoản </label>
                                                <div class="payment_box payment_method_cod" style="display:none;">
                                                    <p>Pay with cash upon delivery.</p>
                                                </div>
                                            </li>


                                        </ul>
                                        <div class="form-row place-order">

                                            <div class="akasha-terms-and-conditions-wrapper">

                                            </div>
                                            <button  type="submit" class="button alt" name="ck"
                                                     id="place_order" value="Place order" data-value="Place order">Place
                                                order
                                            </button>

                                        <!-- Button trigger modal -->

                                            <!-- Modal -->


                                            <input type="hidden" id="akasha-process-checkout-nonce"
                                                   name="akasha-process-checkout-nonce" value="634590c981"><input
                                                    type="hidden" name="_wp_http_referer"
                                                    value="/akasha/?akasha-ajax=update_order_review"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('appendjs'); ?>
    <script type="text/javascript">
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts-fe.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OOP_MVC\mvc\app\views/cart/checkout.blade.php ENDPATH**/ ?>