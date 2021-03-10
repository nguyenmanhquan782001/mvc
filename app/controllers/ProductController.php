<?php
namespace App\Controllers  ;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class  ProductController extends BaseController {
    public  function index () {

//        $keyword= isset($_GET['keyword']) == true ? $_GET['keyword'] : "" ;
//        if ($keyword != "") {
//            $products = Product::where('name' ,'like' , "%$keyword%")->get() ;
//        }
//        else {
//            $sx = isset($_GET['sx']) == true ? $_GET['sx'] : "" ;
//            if ($sx == "descs") {
//                $products = Product::orderBy('price' , 'desc')->get() ;
//            }
//            elseif ($sx == "ascs") {
//                $products = Product::orderBy('price' , 'asc')->get() ;
//            }
//            else {
//                $products = Product::all() ;
//            }
//
//        }
//        $products->load('category');
//        $this->render('products.list-product' , ['products' => $products]);

        $pagenumber = isset($_GET['page']) == true ? $_GET['page'] : 1;
        $pagesize = isset($_GET['size']) == true ? $_GET['size'] : 5;
        $offset = ($pagenumber-1)*$pagesize;

        $keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";
        if($keyword != ""){
            $products = Product::where("name", "like", "%$keyword%")
                ->take($pagesize)
                ->skip($offset)
                ->get();
            $totalPage = intval(ceil(Product::where("name", "like", "%$keyword%")->count()/$pagesize));
        }else{

            $sx = isset($_GET['sx']) == true ? $_GET['sx'] : "" ;
            if ($sx == "descs") {
                $products = Product::orderBy('price' , 'desc')->get() ;
            }
            elseif ($sx == "ascs") {
                $products = Product::orderBy('price' , 'asc')->get() ;

            }
            else {
                $products = Product::take($pagesize)
                    ->skip($offset)
                    ->get();
                $totalPage = intval(ceil(Product::count()/$pagesize));
            }
//            $products = Product::take($pagesize)
//                ->skip($offset)
//                ->get();
//            $totalPage = intval(ceil(Product::count()/$pagesize));
        }
        $products->load('category');
        $this->render('products.list-product', [
            'products' => $products,
            'totalPage' => @$totalPage,
            'offset' => $offset,
            'keyword' => $keyword
        ]);

    }
    public  function  add() {
        $categories = Category::select ('id' ,'cate_name')->get() ;
        $this->render('products/new_product' ,['categories' => $categories]);
    }
    public function  saveProduct() {
        $categories = Category::select ('id' ,'cate_name')->get() ;
        if(isset($_POST['sub'])) {
            $error = [] ;
            $check = Product::where("name", '=' , "{$_POST['name']}")->get() ;
            if($check->count() > 0) {
                $error['name'] = "Tên sản phẩm đã tồn tại" ;
            }
            $file = $_FILES['image'] ;
            $nameProduct = trim(@$_POST['name']) ;
            $checkNameProduct = "/([^\d]*)\s([^\d]*)/i";
            $validateNameProduct = preg_match_all($checkNameProduct , $nameProduct , $matches) ;
            if (!$validateNameProduct) {
                $error['name'] = "Tên sản phẩm phải lớn hơn hoặc bằng 2 chữ" ;
            }
            if ( empty($_POST['price']) || isset($_POST['price']) <= 0  ) {
                $error['price'] = "Giá sản phẩm không được để trống hoặc phải lớn hơn không" ;

            }
            if (!isset($_POST['detail']) || empty($_POST['detail'])) {
                $error['detail'] = "Không để trống mô tả sản phẩm" ;
            }
            if ($file['size'] == 0) {
                $error['image'] = "Cần chọn ảnh sản phẩm" ;
            }

            if (empty($error)) {
                $data = $_POST ;
                $image = "" ;
                if($file['size'] > 0) {
                    $image = 'uploads/' . uniqid() . '-' . $file['name'];
                    move_uploaded_file($file['tmp_name'], $image);
                    $data['image'] = $image;
                }
                $model = new Product();
                $model->fill($data);
                $model->save();
                header("Location:" .BASE_ULR ."admin/product");
            }
        }
        $this->render('products/new_product' , ['error' => @$error , 'categories'=>$categories]);
    }
    public function EditProduct($id) {
        $categories = Category::all() ;
         $model = Product::find($id);
        if($model) {
            $this->render('products/edit_product' , ['edit' => $model , 'categories'=>$categories]);

        } else {
            header("Location:./products");
        }
    }
    public function  SaveEdit($id) {
        if(isset($_POST['sub'])) {
            $model = Product::find($id) ;
            $error = [] ;
            $check = Product::where("name", '=' , "{$_POST['name']}")->get() ;
            if($check->count() > 0) {
                $error['name'] = "Tên sản phẩm đã tồn tại" ;
            }
            $file = $_FILES['image'] ;
            $nameProduct = trim(@$_POST['name']) ;
            $checkNameProduct = "/([^\d]*)\s([^\d]*)/i";
            $validateNameProduct = preg_match_all($checkNameProduct , $nameProduct , $matches) ;
            if (!$validateNameProduct) {
                $error['name'] = "Tên sản phẩm phải lớn hơn hoặc bằng 2 chữ" ;
            }
            if (!isset($_POST['price']) || isset($_POST['price']) == 0   ) {
                $error['price'] = "Giá sản phẩm không được để trống và phải lớn hơn 0" ;
            }
            if (!isset($_POST['detail']) || empty($_POST['detail'])) {
                $error['detail'] = "Không để trống mô tả sản phẩm" ;
            }
            header("Location:" . BASE_ULR . "admin/product") ;
        }
        if (empty($error)) {
            $data = $_POST ;
            $image = "" ;
            if($file['size'] > 0) {
                $image = 'uploads/' . uniqid() . '-' . $file['name'];
                move_uploaded_file($file['tmp_name'], $image);
                $data['image'] = $image;
            }
            $model->fill($data);
            $model->save();
            header("Location:" . BASE_ULR . "admin/product");
        }
    }
    public  function RemoveProduct($id) {
        $model = Product::find($id) ;
        if (!$model) {
            header("Location:./");
            die();
        } else {
            Product::where('cate_id' , $id)->delete() ;
            $model->delete()  ;
            header("Location:" . BASE_ULR . "admin/product");
        }

    }
}
