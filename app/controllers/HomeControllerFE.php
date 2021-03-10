<?php
namespace App\Controllers  ;
use App\Models\Category;
use App\Models\Product;
  class HomeControllerFE extends BaseController {
      public  function  index () {
          $categories = Category::where('show_menu' , '=' , '1')->take(5)->get();
          $products = Product::orderBy('id' , 'desc')->take(10)->get() ;
          $productBoy = Product::where('cate_id' , '=' , '62')->take(5)->get() ;
          $this->render('home_frontend' , ['categories'=> $categories , 'products'=>$products , 'boy'=>$productBoy] );
      }
      public  function  listProduct() {
          $categories = Category::where('show_menu' , '=' , '1')->take(5)->get();
              $listProduct = Product::all() ;
          $this->render('products' , ['categories'=> $categories , 'products'=>$listProduct ]);
      }
      public function  ProductCate($id) {
          $categories = Category::where('show_menu' , '=' , '1')->take(5)->get();
          if(isset($id)) {
              $listProduct = Product::where('cate_id' , '=' , "$id")->get();
          }
            $listProduct->load('category') ;
          $this->render('products' , ['categories'=> $categories , 'products'=>$listProduct]);
      }

      public function DetailProduct($id , $cate_id) {
          $categories = Category::where('show_menu' , '=' , '1')->take(5)->get();
          if (isset($id)) {
              $product = Product::find($id) ;
              $khac = Product::select('id' , 'name' , 'price' , 'image')->where('cate_id' , "=" , "$cate_id")->limit(4)->get() ;
          }
          $product->load('category');
          $this->render('detailProduct' , ['categories'=>$categories  , 'product'=>$product , 'khac'=>$khac] );

      }



  }
