<?php
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
use App\Controllers\HomeController ;
use App\Controllers\CategoryController ;
use App\Controllers\ProductController ;
use App\Controllers\LoginController ;
use App\Controllers\UserController ;
use App\Controllers\HomeControllerFE ;
use App\Controllers\CartController ;
use App\Controllers\InvoiceController ;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;

$router =  new RouteCollector() ;
//
$router->filter('auth', function(){
    if(!isset($_SESSION[AUTH]) || empty($_SESSION[AUTH]) ||$_SESSION[AUTH]['role']<200){
        header('location: ' . BASE_ULR . 'login');
        die;
    }


});



// end filter


$router->get("/" , [HomeControllerFE::class , "index"]) ;
//
//filter - group
$router->group(['prefix' => 'admin' , 'before'=>'auth'] , function ($router){
     $router->group(['prefix'=>'category'] , function ($router){
         $router->get('/' , [CategoryController::class , "index"]) ;
         $router->get("/new-cate" , [CategoryController::class , "add"]) ;
         $router->post("/new-cate" , [CategoryController::class , "saveCate"]) ;
         $router->get('/edit-cate/{id}' ,[CategoryController::class , "edit"]) ;
         $router->post('/edit-cate/{id}' ,[CategoryController::class , 'saveEdit']) ;
         $router->get('/remove/{id}' , [CategoryController::class , 'remove']) ;
     });
     $router->group(['prefix'=>'product'] , function ($router){
         $router->get('/' , [ProductController::class ,'index']) ;
         $router->get('/add-product' , [ProductController::class , 'add']) ;
         $router->post('/add-product' , [ProductController::class , 'saveProduct']) ;
         $router->get('/edit-product/{id}' , [ProductController::class , 'EditProduct'])  ;
         $router->post('/edit-product/{id}' , [ProductController::class, 'SaveEdit']) ;
         $router->get('/remove-product/{id}' , [ProductController::class , 'RemoveProduct']) ;

     }) ;

     $router->group(['prefix'=> 'account'] ,function ($router) {
         $router->get('/' , [UserController::class , 'index']) ;
         $router->get('/edit-acc/{id}' , [LoginController::class , 'edit']) ;
         $router->post('/edit-acc/{id}' , [LoginController::class, "saveEdit"]) ;

     }) ;

     $router->group(['prefix' => 'invoices'] , function ($router){
         $router->get('/' , [InvoiceController::class , 'index']) ;
         $router->get('/orders-detail/{id}' , [InvoiceController::class , 'InvoiveDetail']) ;
         $router->get('/delete/{id}' , [InvoiceController::class , 'remove']) ;
         $router->get('/update/{id}' , [InvoiceController::class , 'update']) ;
         $router->post('/update/{id}' , [InvoiceController::class , 'save']) ;


     }) ;

}) ;


$router->get('/login' , [LoginController::class , 'login']) ;
$router->post('/post-login' , [LoginController::class , 'postLogin'] ) ;
$router->get('/logout' , [LoginController::class,  'logout']) ;
$router->get('/res' , [LoginController::class , 'register']) ;
$router->post('/res' , [LoginController::class  ,'saveReg']) ;


$router->get('/product' , [HomeControllerFE::class , 'listProduct']) ;
$router->get('/product/{id}' , [HomeControllerFE::class , 'ProductCate']) ;
$router->get('/detail/{id}/{cate_id}' , [HomeControllerFE::class , 'DetailProduct']) ;

$router->get('/add/{id}' , [CartController::class  , "cart"]) ;



$router->get('/checkout' , [CartController::class , 'CheckOut']);
$router->post('/save-checkout' , [CartController::class , 'SaveCheckOut']) ;
$router->get('/hoa-don/{id}' , [CartController::class , 'bill']) ;

$router->get('/cart' , [CartController::class  , "carts"]) ;
$router->get('/remove-cart/{id}' , [CartController::class , "deleteCart"]) ;

$router->post('/update-cart', [CartController::class, "updateCart"]);
$router->post('/update-qty', [CartController::class, "update"]);


$router->get('/error-404', function(){
    return "đường dẫn không tồn tại";
});

$dispatcher = new Dispatcher($router->getData());

try{
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
}catch(HttpRouteNotFoundException $ex){
    header('location: ' . BASE_ULR . 'error-404');
    die;
}
// Print out the value returned from the dispatched function
echo $response;
?>