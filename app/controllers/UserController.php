<?php
namespace App\Controllers;
use App\Models\User ;

class UserController extends  BaseController {
    public  function index () {
          $users = User::all() ;
        $this->render("user/list-users" ,['users'=>$users]);

    }
}


