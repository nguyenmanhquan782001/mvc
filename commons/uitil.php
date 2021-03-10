<?php 
 const BASE_ULR = "http://localhost/OOP_MVC/mvc/"  ;
 const PUBLIC_URL = BASE_ULR . "public/" ; 
 const THEME_ASSET_URL = PUBLIC_URL . "theme/" ;
 const FE_URL = PUBLIC_URL . "fe/" ;
 const MEMBER_ROLE = 1 ;
 const ADMIN_ROLE = 200 ;
 const AUTH = 'session_auth' ;
 function checkAuth($role = MEMBER_ROLE)
 {
     if (!isset($_SESSION[AUTH]) || empty($_SESSION[AUTH]) || $_SESSION[AUTH]['role'] < $role) {
         header('location: ' . BASE_ULR . 'login');
         die;
     }
 }

