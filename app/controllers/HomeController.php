<?php
namespace App\Controllers  ;
use App\Models\BaseModel;
use App\Models\Category;

class HomeController extends BaseController {
    public function  index () {
        $cates = Category::all()  ;
//         include_once "./app/views/cate-list.php" ;
         $this->render('cates/cate-list' ,['cates' => $cates] );
    }


}