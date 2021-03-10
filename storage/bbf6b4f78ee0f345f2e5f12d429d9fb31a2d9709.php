<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ledthanhdat.vn/html/akasha/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jan 2021 14:26:47 GMT -->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(FE_URL); ?>images/favicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(FE_URL); ?>css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(FE_URL); ?>css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(FE_URL); ?>css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(FE_URL); ?>css/chosen.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(FE_URL); ?>css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(FE_URL); ?>css/jquery.scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(FE_URL); ?>css/lightbox.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(FE_URL); ?>css/magnific-popup.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(FE_URL); ?>css/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(FE_URL); ?>fonts/flaticon.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(FE_URL); ?>css/megamenu.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(FE_URL); ?>css/dreaming-attribute.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(FE_URL); ?>css/style.css"/>
    <title><?php echo $__env->yieldContent('title' , 'Mặc định'); ?> </title>
</head>
<body>
<header id="header" class="header style-02 header-dark header-transparent header-sticky">
    <div class="header-wrap-stick">
        <div class="header-position">
            <div class="header-middle">
                <div class="akasha-menu-wapper"></div>
                <div class="header-middle-inner">
                    <div class="header-search-menu">
                        <div class="block-menu-bar">
                            <a class="menu-bar menu-toggle" href="#">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="header-logo-nav">
                        <div class="header-logo">
                            <a href="<?php echo e(BASE_ULR); ?>"><img alt="Akasha" src="<?php echo e(FE_URL); ?>images/logo.png"
                                                        class="logo"></a></div>
                        <div class="box-header-nav menu-nocenter">
                            <ul id="menu-primary-menu"
                                class="clone-main-menu akasha-clone-mobile-menu akasha-nav main-menu">
  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li id="menu-item-230"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="akasha-menu-item-title" title="Home" href="<?php echo e(BASE_ULR); ?>product/<?php echo e($category->id); ?>"><?php echo e($category->cate_name); ?></a>
                                </li>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                    <div class="header-control">
                        <div class="header-control-inner">
                            <div class="meta-dreaming">

                                <div class="header-search akasha-dropdown">
                                    <div class="header-search-inner" data-akasha="akasha-dropdown">
                                        <a href="#" class="link-dropdown block-link">
                                            <span class="flaticon-magnifying-glass-1"></span>
                                        </a>
                                    </div>
                                    <div class="block-search">
                                        <form role="search" method="get"
                                              class="form-search block-search-form akasha-live-search-form">
                                            <div class="form-content search-box results-search">
                                                <div class="inner">
                                                    <input autocomplete="off" class="searchfield txt-livesearch input"
                                                           name="s" value="" placeholder="Search here..." type="text">
                                                </div>
                                            </div>
                                            <input name="post_type" value="product" type="hidden">
                                            <input name="taxonomy" value="product_cat" type="hidden">

                                            <button type="submit" class="btn-submit">
                                                <span class="flaticon-magnifying-glass-1"></span>
                                            </button>
                                        </form><!-- block search -->
                                    </div>
                                </div>
                                <div class="akasha-dropdown-close">x</div>
                                <div class="menu-item block-user block-dreaming akasha-dropdown">
                                    <a class="block-link" href="my-account.html">
                                            <span class="flaticon-profile"></span>



                                    </a>
                                    <ul class="sub-menu">

                                        <?php if(isset($_SESSION[AUTH])): ?>
                                            <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--edit-account">
                                                <a style="font-size: 10px;" href=""><?php echo e($_SESSION[AUTH]['name']); ?></a>
                                            </li>
                                        <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--customer-logout">
                                            <a href="<?php echo e(BASE_ULR ."logout"); ?>">Logout</a>
                                        </li>

                                        <?php else: ?>
                                            <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--edit-account">
                                                <a href="<?php echo e(BASE_ULR."res"); ?>">Đăng kí</a>
                                            </li>
                                            <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--customer-logout">
                                                <a href="<?php echo e(BASE_ULR ."login"); ?>">Login</a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>

                                </div>
                                <div class="block-minicart block-dreaming akasha-mini-cart akasha-dropdown">

                                        <a class="block-link link-dropdown" href="<?php echo e(BASE_ULR . "cart"); ?>">
                                            <span class="flaticon-bag"></span>

                                        </a>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile">
        <div class="header-mobile-left">
            <div class="block-menu-bar">
                <a class="menu-bar menu-toggle" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class="header-search akasha-dropdown">
                <div class="header-search-inner" data-akasha="akasha-dropdown">
                    <a href="#" class="link-dropdown block-link">
                        <span class="flaticon-magnifying-glass-1"></span>
                    </a>
                </div>
                <div class="block-search">
                    <form role="search" method="get"
                          class="form-search block-search-form akasha-live-search-form">
                        <div class="form-content search-box results-search">
                            <div class="inner">
                                <input autocomplete="off" class="searchfield txt-livesearch input" name="s" value=""
                                       placeholder="Search here..." type="text">
                            </div>
                        </div>
                        <input name="post_type" value="product" type="hidden">
                        <input name="taxonomy" value="product_cat" type="hidden">
                        <div class="category">
                            <select title="product_cat" name="product_cat"
                                    class="category-search-option" tabindex="-1"
                            >
                                <option value="0">All Categories</option>
                                <option class="level-0" value="light">Shoes</option>
                                <option class="level-0" value="chair">Accessories</option>
                                <option class="level-0" value="table">Bags</option>
                                <option class="level-0" value="bed">Life style</option>
                                <option class="level-0" value="new-arrivals">New arrivals</option>
                                <option class="level-0" value="lamp">Summer Sale</option>
                                <option class="level-0" value="specials">Specials</option>
                                <option class="level-0" value="sofas">Women</option>
                            </select>
                        </div>
                        <button type="submit" class="btn-submit">
                            <span class="flaticon-magnifying-glass-1"></span>
                        </button>
                    </form><!-- block search -->
                </div>
            </div>
            <ul class="wpml-menu">
                <li class="menu-item akasha-dropdown block-language">
                    <a href="#" data-akasha="akasha-dropdown">
                        <img src="<?php echo e(FE_URL); ?>images/en.png"
                             alt="en" width="18" height="12">
                        English
                    </a>
                    <span class="toggle-submenu"></span>
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="#">
                                <img src="<?php echo e(FE_URL); ?>images/it.png"
                                     alt="it" width="18" height="12">
                                Italiano
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
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
                </li>
            </ul>
        </div>
        <div class="header-mobile-mid">
            <div class="header-logo">
                <a href="index-2.html"><img alt="Akasha" src="<?php echo e(FE_URL); ?>images/logo.png" class="logo"></a>
            </div>
        </div>
        <div class="header-mobile-right">
            <div class="header-control-inner">
                <div class="meta-dreaming">
                    <div class="menu-item block-user block-dreaming akasha-dropdown">
                        <a class="block-link" href="my-account.html">
                            <span class="flaticon-profile"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--dashboard is-active">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--orders">
                                <a href="#">Orders</a>
                            </li>
                            <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--downloads">
                                <a href="#">Downloads</a>
                            </li>
                            <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--edit-adchair">
                                <a href="#">Addresses</a>
                            </li>
                            <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--edit-account">
                                <a href="#">Account details</a>
                            </li>
                            <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--customer-logout">
                                <a href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="block-minicart block-dreaming akasha-mini-cart akasha-dropdown">
                        <div class="shopcart-dropdown block-cart-link" data-akasha="akasha-dropdown">
                            <a class="block-link link-dropdown" href="cart.html">
                                <span class="flaticon-bag"></span>
                                <span class="count">3</span>
                            </a>
                        </div>
                        <div class="widget akasha widget_shopping_cart">
                            <div class="widget_shopping_cart_content">
                                <h3 class="minicart-title">Your Cart<span class="minicart-number-items">3</span></h3>
                                <ul class="akasha-mini-cart cart_list product_list_widget">
                                    <li class="akasha-mini-cart-item mini_cart_item">
                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                        <a href="#">
                                            <img src="<?php echo e(FE_URL); ?>images/apro134-1-600x778.jpg"
                                                 class="attachment-akasha_thumbnail size-akasha_thumbnail"
                                                 alt="img" width="600" height="778">T-shirt with skirt – Pink&nbsp;
                                        </a>
                                        <span class="quantity">1 × <span
                                                    class="akasha-Price-amount amount"><span
                                                        class="akasha-Price-currencySymbol">$</span>150.00</span></span>
                                    </li>
                                    <li class="akasha-mini-cart-item mini_cart_item">
                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                        <a href="#">
                                            <img src="<?php echo e(FE_URL); ?>images/apro1113-600x778.jpg"
                                                 class="attachment-akasha_thumbnail size-akasha_thumbnail"
                                                 alt="img" width="600" height="778">Abstract Sweatshirt&nbsp;
                                        </a>
                                        <span class="quantity">1 × <span
                                                    class="akasha-Price-amount amount"><span
                                                        class="akasha-Price-currencySymbol">$</span>129.00</span></span>
                                    </li>
                                    <li class="akasha-mini-cart-item mini_cart_item">
                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                        <a href="#">
                                            <img src="<?php echo e(FE_URL); ?>images/apro201-1-600x778.jpg"
                                                 class="attachment-akasha_thumbnail size-akasha_thumbnail"
                                                 alt="img" width="600" height="778">Mini Dress&nbsp;
                                        </a>
                                        <span class="quantity">1 × <span
                                                    class="akasha-Price-amount amount"><span
                                                        class="akasha-Price-currencySymbol">$</span>139.00</span></span>
                                    </li>
                                </ul>
                                <p class="akasha-mini-cart__total total"><strong>Subtotal:</strong>
                                    <span class="akasha-Price-amount amount"><span
                                                class="akasha-Price-currencySymbol">$</span>418.00</span>
                                </p>
                                <p class="akasha-mini-cart__buttons buttons">
                                    <a href="cart.html" class="button akasha-forward">Viewcart</a>
                                    <a href="checkout.html" class="button checkout akasha-forward">Checkout</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="fullwidth-template">

    <?php echo $__env->yieldContent("main-content"); ?>

</div>
<?php echo $__env->yieldContent('main'); ?>



<?php echo $__env->make('layouts-fe.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts-fe.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

<!-- Mirrored from ledthanhdat.vn/html/akasha/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jan 2021 14:30:40 GMT -->
</html>
<?php /**PATH C:\xampp\htdocs\OOP_MVC\mvc\app\views/layouts-fe/main.blade.php ENDPATH**/ ?>