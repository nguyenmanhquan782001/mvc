<?php
namespace App\Controllers ;
use App\Controllers\BaseController ;
use App\Models\Invoice ;
use App\Models\InvoiceDetail ;
class InvoiceController extends BaseController {
    public  function index() {
        $list = Invoice::all() ;
        $this->render('invoice/index' , ['orders'=>$list] );
    }
    public function InvoiveDetail($id) {
        $list  = InvoiceDetail::where('invoice_id' ,'=', "$id")->get() ;
        $price = Invoice::select('total_price')->where('id' , '=' ,  "$id")->first() ;
        $list->load("products");
        $this->render('invoice/detail' ,compact('list' , 'price'));
    }

    public function remove ($id) {
        $model = Invoice::find($id) ;
        if (!$model) {
            header("Location:./");
            die();
        } else {
            InvoiceDetail::where('invoice_id' , $id)->delete() ;
            $model->delete()  ;
            header("Location:" . BASE_ULR . "admin/invoices");
        }
    }
    public  function update($id) {
        $model = Invoice::find($id) ;
        if($model) {
            $this->render('invoice/update' , ['edit' => $model]);

        } else {
            header("Location:" . BASE_ULR . "admin/invoices" );
        }
    }
    public  function  save($id) {
        $model = Invoice::find( $id) ;
        if (!$model) {
//            header("Location:" . BASE_ULR . "admin/invoices");
        } else {
            $model->fill($_POST) ;
            $model->save() ;
//            echo  "1" ;
            header("Location: " . BASE_ULR . "admin/invoices");
        }
    }

}
