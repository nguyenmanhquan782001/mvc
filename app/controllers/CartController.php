<?php
namespace App\Controllers ;
use App\Models\Category ;
use App\Models\Invoice;
use App\Models\Product ;
use App\Models\InvoiceDetail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CartController extends  BaseController {
    public  function  carts (){
        @$cart = $_SESSION['cart'];
//        echo  "<pre>" ;
//        var_dump($cart);
//        echo "</pre>" ;
//        die();
        $list_id_produdct_cart = [];
        if (isset($_SESSION['cart'])) {
            foreach ($cart as $key => $value) {
                $list_id_produdct_cart[] = $key;
            }
        }
        $list_products = Product::find($list_id_produdct_cart);
        $categories = Category::where('show_menu' , '=' , '1')->take(5)->get();
         $this->render('cart/cart' , ['categories'=>$categories , 'list_products' => $list_products]);
    }
    public function Cart($id)
    {
        $categories = Category::where('show_menu' , '=' , '1')->take(5)->get();
        if (isset($id)) {
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }
            if (!isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id]['qty'] = 1;
            } else {
                $_SESSION['cart'][$id]['qty']++;
            }
        }
        @$cart = $_SESSION['cart'];
//        echo  "<pre>" ;
//        var_dump($cart);
//        echo  "</pre>" ;
        $list_id_produdct_cart = [];
        if (isset($_SESSION['cart'])) {
            foreach ($cart as $key => $value) {
                $list_id_produdct_cart[] = $key;
            }
        }
        $list_products = Product::find($list_id_produdct_cart);
        $this->render('cart.cart', ['list_products' => $list_products , 'categories'=>$categories]);
    }

    public function updateCart($add = false){
        foreach($_POST['qty'] as $id => $qty){
            if($qty == 0 ){
                unset($_SESSION['cart'][$id]);
            }else{
                if ($add) {
                    $_SESSION['cart'][$id]['qty'] += $qty;
                }else{
                    $_SESSION['cart'][$id]['qty'] = $qty;
                }
                header('Location: '.BASE_ULR. 'cart' );
            }
        }
    }
    public function update(){
        foreach($_POST['qty'] as $id => $qty){

            $_SESSION['cart'][$id]['qty'] += $qty;

            header('Location: '. BASE_ULR.'cart');
        }

    }

    public function deleteCart($id){
        $cart = $_SESSION['cart'];
        if($id== 0 ){
            unset($_SESSION['cart']);
        }else{
            unset($_SESSION['cart'][$id]);
        }
        header('Location: '.BASE_ULR);
    }
     public  function  CheckOut() {
         $categories = Category::where('show_menu' , '=' , '1')->take(5)->get();
     if (isset($_SESSION['cart'])) {
          $cart = $_SESSION['cart'] ;
         $list_id_produdct_cart = [];
         foreach ($cart as $key => $value) {
             $list_id_produdct_cart[] = $key;
         }
     }
         $list_products = Product::find($list_id_produdct_cart);
        $this->render('cart/checkout' , ['categories'=>$categories  , 'list'=>$list_products] );
     }
     public  function  SaveCheckOut() {

        $err = [] ;
         $cart = $_SESSION['cart'] ;
         $price = 0 ;
         $list_id_product_carts = [] ;
         $list_quantity_product_carts = [];
         foreach ($cart as $key => $value) {
             $list_id_product_carts[] = $key ;
             $list_quantity_product_carts[] = $value ;
             $product = Product::find($key) ;
             $price += $value['qty']* $product->price ;

         }

            $order = new Invoice();
            $order->fill($_POST);
            $order['total_price'] = $price;
            $order->save();
            $id = $order->id;
            foreach ($cart as $k => $value) {
                $product = Product::find($k);  // lấy ra 1 sản phẩm có id trong $_Session ;
                $price = $product['price']; //  tạo 1 biến price và gán nó bằng giá của sản phẩm được lấy ra ở trên
                $detail_invoice = [
                    'invoice_id' => $id,
                    'product_id' => $k,
                    'quantity' => $value['qty'],
                    'unit_price' => $price
                ];
                $model = new InvoiceDetail();
                $model->fill($detail_invoice);
                $model->save();
                unset($_SESSION['cart']);
            }
            header("Location:" . BASE_ULR . "hoa-don/$id" );
        }





    public  function  bill($id) {



        $model  = InvoiceDetail::where('invoice_id' ,'=', "$id")->get() ;

        $info = Invoice::select("*")->where('id' , '=' ,  "$id")->first() ;

        $model->load("products") ;


        $categories = Category::where('show_menu' , '=' , '1')->take(5)->get();
        $this->render('cart/bill' , compact('categories' , 'info' , 'model'));


    }


    }
