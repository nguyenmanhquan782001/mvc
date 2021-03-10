<?php
session_start() ;
//session_destroy();

 $url = isset($_GET['url']) == true ? $_GET['url'] : "/" ;
 require_once "./commons/uitil.php" ; 
require_once "./vendor/autoload.php" ;
require_once "./config/database.php";
require_once  "./commons/routers.php" ;

//  require_once  "./app/controllers/HomeController.php" ;
//  require_once "./app/controllers/ProductController.php" ;
//  require_once "./app/controllers/CategoryController.php" ;
//  require_once "./app/models/BaseModel.php" ;
//  require_once "./app/models/Category.php" ;
//var_dump(password_hash('123456' , PASSWORD_DEFAULT));
//die();
//$2y$10$1GoGSC8EjdIQ.a.5Z7px.eWR8CfFQL3VnLOgM0WkZLGOQYj7A68eG

// use App\Controllers\HomeController ;
// use App\Controllers\CategoryController ;
// use App\Controllers\ProductController ;
// use App\Controllers\LoginController ;
// use App\Controllers\UserController ;
// use App\Controllers\HomeControllerFE ;
// use App\Controllers\CartController ;
// use App\Controllers\InvoiceController ;

// switch ($url) {
//     case "/" :
//         $ctr = new HomeControllerFE() ;
//         $ctr->index() ;
//         break ;

//     case "category" :
//         checkAuth();
//       $ctr = new CategoryController() ;
//         $ctr->index() ;
//        break ;
//
//     case "new-cate":
//         checkAuth();
//         $ctr = new CategoryController() ;
//          $ctr->add();
//         break ;
//     case "save-cate":
//         $ctr = new CategoryController() ;
//         $ctr->saveCate() ;
//         break ;
//
//     case "edit-cate" :
//         $ctr = new CategoryController() ;
//          $ctr->edit();
//         break ;
//
//     case "save-edit-cate":
//         $ctr = new  CategoryController() ;
//         $ctr->saveEdit() ;
//         break ;
//
//     case  "remove" :
//         $ctr = new CategoryController() ;
//         $ctr->remove() ;
//         break ;
//
//     case  "products" :
//         checkAuth();
//         $ctr = new ProductController() ;
//         $ctr->index() ;
//         break ;
//
//     case "add-product" :
//         $ctr = new ProductController() ;
//         $ctr->add() ;
//         break ;
//
//     case  "save-product" :
//         $ctr = new ProductController();
//         $ctr->saveProduct() ;
//         break ;
//     case  "edit-product":
//         $ctr = new ProductController() ;
//         $ctr->EditProduct() ;
//          break;
//
//     case "saveUpdateProduct":
//         $ctr = new ProductController() ;
//         $ctr->SaveEdit();
//         break ;
//
//     case  "remove-product" :
//         $ctr = new ProductController();
//         $ctr->RemoveProduct() ;
//         break;
//
//     case  "account" :
//         $ctr  = new UserController() ;
//         $ctr->index() ;
//         break ;
//     case "res" :
//         $ctr = new LoginController() ;
//         $ctr->register() ;
//         break ;
//     case "saveReg" :
//         $ctr = new LoginController() ;
//         $ctr->saveReg() ;
//         break ;
//     case "remove-acc" :
//          $ctr = new LoginController() ;
//          $ctr->removeUser();
//          break ;
//     case  "edit-acc" :
//         $ctr = new LoginController();
//         $ctr->edit() ;
//         break ;
//     case "save-edit-acc" :
//         $ctr = new LoginController() ;
//         $ctr->saveEdit() ;
//         break ;
//
//     case "product" :
//         $ctr = new HomeControllerFE() ;
//          $ctr->listProduct();
//          break ;

//     case "detail" :
//         $ctr = new HomeControllerFE() ;
//         $ctr->DetailProduct() ;
//         break ;
//
//     case "cart" :
//          $ctr = new CartController() ;
//          $ctr->cart() ;
//          break ;
//
//     case "add" :
//         $ctr = new CartController() ;
//         $ctr->Cart() ;
//         break  ;
//
//     case "add-cart":
//         $ctr = new  CartController() ;
//         $ctr->updateCart(true) ;
//         break ;
//
//     case "update-cart" :
//         $ctr = new  CartController() ;
//         $ctr->updateCart(false) ;
//         break ;
//     case "delete-cart" :
//         $ctr = new CartController() ;
//         $ctr->deleteCart() ;
//         break ;
//
//     case "checkout" :
//         $ctr = new CartController() ;
//         $ctr->CheckOut() ;
//         break;
//     case  "save-checkout" :
//         $ctr = new CartController();
//         $ctr->SaveCheckOut() ;
//         break ;
//
//      case "login":
//          $ctr = new LoginController() ;
//          $ctr->login() ;
//         break ;
//
//     case "logout" :
//          $ctr = new LoginController() ;
//          $ctr->logout() ;
//          break ;
//
//     case "post-login" :
//         $ctr = new LoginController() ;
//         $ctr->postLogin() ;
//         break ;
//
//     case "orders" :
//         $ctr= new InvoiceController() ;
//         $ctr->index();
//         break ;
//     case "details-order" :
//         $ctr = new InvoiceController() ;
//         $ctr->InvoiveDetail() ;
//         break ;
//
//     default :
//          echo  "Not found" ;
//          break ;
//
// }
?>