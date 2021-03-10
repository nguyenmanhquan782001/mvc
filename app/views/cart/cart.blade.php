 @extends('layouts-fe.main')
 @section("title" , "Giỏ hàng")
 @section('main-content')

     <div class="banner-wrapper has_background">
         <img src="{{FE_URL}}images/banner-for-all2.jpg"
              class="img-responsive attachment-1920x447 size-1920x447" alt="img">
         <div class="banner-wrapper-inner">
             <h1 class="page-title">Cart</h1>
             <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                 <ul class="trail-items breadcrumb">
                     <li class="trail-item trail-begin"><a href="index-2.html"><span>Home</span></a></li>
                     <li class="trail-item trail-end active"><span>Cart</span>
                     </li>
                 </ul>
             </div>
         </div>
     </div>

  <?php if (empty($_SESSION['cart'])) { ?>
   <h1>Chưa có gì</h1>
     <?php }else { ?>
     <main class="site-main main-container no-sidebar">
         <div class="container">
             <div class="row">
                 <div class="main-content col-md-12">
                     <div class="page-main-content">
                         <div class="akasha">
                             <div class="akasha-notices-wrapper"></div>
                             <form class="akasha-cart-form"  action="{{BASE_ULR.'update-cart'}}" method="post">
                                 <table class="shop_table shop_table_responsive cart akasha-cart-form__contents"
                                        cellspacing="0">
                                     <thead>
                                     <tr>
                                         <th class="product-remove">&nbsp;</th>
                                         <th class="product-thumbnail">&nbsp;</th>
                                         <th class="product-name">Product</th>
                                         <th class="product-price">Price</th>
                                         <th class="product-quantity">Quantity</th>
                                         <th class="product-subtotal">Total</th>
                                     </tr>
                                     </thead>
                                     <tbody>
              <?php
              foreach (@$list_products as $product) {
                  foreach($_SESSION['cart'][ $product->id] as $carts) {
                 ?>

                                     <tr class="akasha-cart-form__cart-item cart_item">
                                         <td class="product-remove">
                                             <a href="{{BASE_ULR.'remove-cart'}}/{{$product->id}} "
                                                class="remove" aria-label="Remove this item" data-product_id="27"
                                                data-product_sku="885B712">×</a></td>
                                         <td class="product-thumbnail">
                                             <a href="#"><img
                                                         src="{{ BASE_ULR. $product->image}}"
                                                         class="attachment-akasha_thumbnail size-akasha_thumbnail"
                                                         alt="img" width="600" height="778"></a></td>
                                         <td class="product-name" data-title="Product">
                                             <a href="#">{{$product->name}}</a></td>
                                         <td class="product-price" data-title="Price">
                                        <span class="akasha-Price-amount amount"><span
                                                    class="akasha-Price-currencySymbol">$</span>{{number_format($product->price) }}</span></td>
                                         <td class="product-quantity" data-title="Quantity">
                                             <input  min="0" max="10" type="number" value="{{$carts}}" name="qty[{{$product->id}}]" >
                                         </td>
                                         <td class="product-subtotal" data-title="Total">
                                        <span class="akasha-Price-amount amount"><span
                                                    class="akasha-Price-currencySymbol">$</span>{{$product->price * $carts}}</span></td>
                                     </tr>
              <?php

                    @$totalPrice  += $product->price *   $carts;
              }
                  }
              ?>
                                     <tr>
                                         <td colspan="6" class="actions">

                                             <button type="submit" class="button" name="update-cart" value="Update cart"
                                                   >Update cart
                                             </button>

{{--                                             <input type="hidden" id="akasha-cart-nonce" name="akasha-cart-nonce"--}}
{{--                                                    value="f41b5bf554"><input type="hidden" name="_wp_http_referer"--}}
{{--                                                                              value="/akasha/cart/"></td>--}}
                                     </tr>

                                     </tbody>
                                 </table>
                             </form>




                             <div class="cart-collaterals">
                                 <div class="cart_totals ">
                                     <h2>Cart totals</h2>
                                     <table class="shop_table shop_table_responsive" cellspacing="0">
                                         <tbody>
                                         <tr class="cart-subtotal">
                                             <th>Subtotal</th>
                                             <td data-title="Subtotal"><span class="akasha-Price-amount amount"><span
                                                             class="akasha-Price-currencySymbol">$</span>{{number_format(@$totalPrice)}}</span></td>
                                         </tr>
                                         <tr class="order-total">
                                             <th>Total</th>
                                             <td data-title="Total"><strong><span
                                                             class="akasha-Price-amount amount"><span
                                                                 class="akasha-Price-currencySymbol">$</span>{{number_format(@$totalPrice)}}</span></strong>
                                             </td>
                                         </tr>
                                         </tbody>
                                     </table>
                                     <div class="akasha-proceed-to-checkout">
                                         <a href="{{BASE_ULR. "checkout"}}"
                                            class="checkout-button button alt akasha-forward">
                                             Proceed to checkout</a>
                                     </div>
                                 </div>
                             </div>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </main>
     <?php } ?>



 @endsection
