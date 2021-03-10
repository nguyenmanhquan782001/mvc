<?php
namespace App\Controllers  ;
use App\Models\BaseModel;
use App\Models\Login;
use App\Models\User;

class LoginController extends BaseController {
    public function  login() {
        if (!isset($_SESSION[AUTH])){
            $this->render('login' );
        } else {
            header("Location:" .BASE_ULR);
        }
    }
    public function postLogin(){
        $email = isset($_POST['email']) == true ? trim($_POST['email']) : "";
        $password = isset($_POST['password']) == true ? trim($_POST['password']) : "";
        if(empty($email) || empty($password)){
            header('location: ' . BASE_ULR . 'login?msg=Tài khoản/mật khẩu không hợp lệ');
            die;
        }
        $user = Login::where('email', $email)->first();
        if(
            empty($user) ||
            !password_verify($password, $user->password)
        ){
            header('location: ' . BASE_ULR . 'login?msg=Tài khoản/mật khẩu không đúng');
            die;
        }

        $_SESSION[AUTH] = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'role' => $user->role
        ];
//        echo "<pre>" ;
//        var_dump($_SESSION[AUTH]);
//        echo "</pre>" ;
//        die();
        if (isset($_SESSION[AUTH]['role']) < 200) {
            header("Location:" . BASE_ULR);
        }
        else {
            header('location: ' . BASE_ULR . 'admin/category');
        }

    }

    public  function  logout() {
        unset($_SESSION[AUTH]);
        header('location: ' . BASE_ULR );
    }
    public  function  register() {
        $this->render("register");
    }
    public  function  saveReg() {
     if(isset($_POST['reg'])) {
         $error = [] ;
         $file = $_FILES['avatar'] ;
         $nameProduct = trim(@$_POST['name']) ;
         $checkNameProduct = "/([^\d]*)\s([^\d]*)/i";
         $validateNameProduct = preg_match_all($checkNameProduct , $nameProduct , $matches) ;
         if (!$validateNameProduct) {
             $error['name'] = "Tên khách hàng phải 2 chữ trở lên" ;

         }
         if(!isset($_POST["name"]) || empty($_POST["name"])) {
             $error["name"] = "Bắt buộc phải nhập tên của bạn";
         }
         if(!isset($_POST["email"]) || empty($_POST["email"])) {
             $error["email"] = "Bắt buộc phải nhập email ";
         } else {
             $studentEmail = trim($_POST["email"]);
             $patternStudentEmail = "/^([a-zA-Z0-9]{3,})@([a-zA-Z0-9]{3,})/i";
             $studentEmailValidate = preg_match_all($patternStudentEmail, $studentEmail, $matches);
             if (!$studentEmailValidate) {
                 $error["email"] = "email của bạn không đúng vui lòng nhập đúng  Regex";
             }
         }
         $check_email = Login::where('email' , $_POST['email'] )->get() ;
         if(!empty($check_email[0]['email'])){
             $error['emails'] = 'Email đã tồn tại, xin mời nhập email khác';
         }
         if(!isset($_POST["password"]) || empty($_POST["password"])) {
             $error["password"] = "Bắt buộc phải nhập password";
         }
         if(!isset($_POST["confirm"]) || empty($_POST["confirm"])) {
             $error["confirm"] = "Chưa xác thực password";
         }
         if ($_POST['password'] != $_POST['confirm']) {
             $error ['check'] = "Mật khẩu xác nhận không trùng khớp" ;

         }
         if ($file['size'] ==  0) {
             $error['avatar'] = "Cần thêm 1 ảnh mới" ;
         }
         if (empty($error)) {
             $data = $_POST ;
             $image = "" ;
             $data['role']=1;
             $data['password']=password_hash($data['password'],PASSWORD_DEFAULT);

             if($file['size'] > 0) {
                 $image = 'uploads/' . uniqid() . '-' . $file['name'];
                 move_uploaded_file($file['tmp_name'], $image);
                 $data['avatar'] = $image;

             }
             $model = new User() ;
             $model->fill($data);
             $model->save();
             header("Location: " . BASE_ULR . "login");
         }

     }
     $this->render('register' , ['error'=> @$error]);

    }
    public  function  removeUser() {
        $id = $_GET['id'] ;
        $model = Login::find($id) ;
        if (!$model) {
            header("Location:" . BASE_ULR . "hihi");
            die();
        } else {
            $model->delete()  ;
            header("Location:" . BASE_ULR . "admin/account");
        }


    }
    public  function  edit ($id) {

//        Ngoài việc lấy tất cả các records của table bằng hàm all(),
// chúng ta có thể lấy model instance bằng hàm find hoặc first
        $model = Login::find($id) ;
        if($model) {
            $this->render('user/edit' , ['edit'=>$model]);
        }
        else {
            header("Location: not");
        }

    }
    public  function saveEdit($id) {
        $model = User::find($id ) ;
        if (!$model) {
            header("Location:" . BASE_ULR . "admin/account");
        } else {
            $model->fill($_POST) ;
            $model->save() ;
//            echo  "1" ;
            header("Location: " . BASE_ULR . "admin/account");
        }
    }
    public  function delete() {
//        $id = $_GET['id'] ;
//        $model = User::find($id) ;
//        if (!$model) {
//            header("Location: not");
//            die();
//        } else {
//            $model->delete()  ;
//            header("Location:" . BASE_ULR . "account");
//        }

    }




}

