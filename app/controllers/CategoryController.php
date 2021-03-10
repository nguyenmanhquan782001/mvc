<?php
namespace App\Controllers  ;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends BaseController {

    public function  index () {
           $keyword= isset($_GET['keyword']) == true ? $_GET['keyword'] : "" ;
          if ($keyword != "") {
              $cates = Category::where('cate_name' ,'like' , "%$keyword%")->get() ;

          }
          else {
              $cates = Category::all()  ;
          }
        $cates->load('products');
        $this->render('cates/cate-list' ,['cates' => $cates] );
    }

     public  function  add() {
        $this->render('cates/add-new' );
     }
     public  function  saveCate() {
        if (isset($_POST['sub'])) {
            $error = [];
            $file = $_FILES['image'];
         $check = Category::where('cate_name' , '=' , "{$_POST['cate_name']}")->get() ;
         if ($check->count() > 0) {
              $error['cate_name'] = "Trùng tên danh mục" ;
         }
         $nameCategory = trim(@$_POST['cate_name']);
            $checkNameCategory = "/([^\d]*)\s([^\d]*)/i";
            $validateNameCategory = preg_match_all($checkNameCategory, $nameCategory, $matches);
            if (!$validateNameCategory) {
                $error['cate_name'] = "Tên danh mục không đúng";
            }
            if (!isset($_POST['desc']) || empty($_POST['desc'])) {
                $error['desc'] = "Không được để trống mô tả danh mục";

            } else {
                $description = trim(@$_POST['desc']);
                $checkDesc = explode(' ', $description);
                $length = count($checkDesc);
                if ($length > 200) {
                    $error['desc'] = "Mô tả nhập tối đa 200 từ";
                }

            }
            if($file['size'] == 0) {
                $error['image'] = "Cần chọn ảnh danh mục" ;
            }
            if (empty($error)) {

                $data = $_POST;

//                var_dump($_FILES);
                $image = '';
                if ($file['size'] > 0) {
                    $image = 'uploads/' . uniqid() . '-' . $file['name'];
                    move_uploaded_file($file['tmp_name'], $image);
                    $data['image'] = $image;
                }
                $model = new Category();
                $model->fill($data);
                $model->save();

                header('Location:'. BASE_ULR . "admin/category");
            }
        }

    $this->render('cates/add-new' , ['error' => @$error]);

     }
     public  function  edit($id) {
//        $id = $_GET['id'] ;
        $model  = Category::find($id) ;
        if($model) {
            $this->render('cates/editCate' , ['edit' => $model]);

        } else {
            header("Location:" . BASE_ULR . "category" );
        }
     }

     public function  saveEdit ($id) {
         if(isset($_POST['sub'])) {
             $model = Category::find($id) ;
             $error = [];
             $check = Category::where('cate_name' , '=' , "{$_POST['cate_name']}")->get() ;
             if ($check->count() > 0) {
                 $error['cate_name'] = "Trùng tên danh mục" ;

             }
             $file = $_FILES['image'];
             $nameCategory = trim(@$_POST['cate_name']);
             $checkNameCategory = "/([^\d]*)\s([^\d]*)/i";
             $validateNameCategory = preg_match_all($checkNameCategory, $nameCategory, $matches);
             if (!$validateNameCategory) {
                 $error['cate_name'] = "Tên danh mục không đúng";

             }
             if (!isset($_POST['desc']) || empty($_POST['desc'])) {
                 $error['desc'] = "Không được để trống mô tả danh mục";

             } else {
                 $description = trim(@$_POST['desc']);
                 $checkDesc = explode(' ', $description);
                 $length = count($checkDesc);
                 if ($length > 200) {
                     $error['desc'] = "Mô tả nhập tối đa 200 từ";
                 }
             }
             header("Location:" . BASE_ULR . "admin/category") ;
         }
         if (empty($error)) {
             $data = $_POST;
             $image = '';
             if ($file['size'] > 0) {
                 $image = 'uploads/' . uniqid() . '-' . $file['name'];
                 move_uploaded_file($file['tmp_name'], $image);
                 $data['image'] = $image;
             }
             $model->fill($data);
             $model->save();
             header('Location:' . BASE_ULR . "admin/category");
         }
     }
     public function remove ($id) {
        $model = Category::find($id) ;
        if (!$model) {
            header("Location:./");
            die();
        } else {
            Product::where('cate_id' , $id)->delete() ;
            $model->delete()  ;
            header("Location:" . BASE_ULR . "admin/category");
        }
     }


}
