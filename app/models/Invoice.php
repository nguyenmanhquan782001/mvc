<?php
namespace App\Models ;
use Illuminate\Database\Eloquent\Model;
class Invoice extends Model {
    protected $table = "invoices" ;
    protected $fillable =['id','customer_name','customer_phone_number',
        'customer_email','customer_address','total_price','payment_method' , 'status'];
    public  function  dt() {
        return $this->hasMany(InvoiceDetail::class , 'invoice_id') ;
    }


}
