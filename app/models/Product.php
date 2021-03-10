<?php
namespace App\Models ;
use Illuminate\Database\Eloquent\Model ;
class Product extends Model {
    protected  $table = "products" ;
    protected $fillable = ['id' , 'name' , 'cate_name' , 'image' , 'price' ,'detail' ,
        'short_desc' , 'views' , 'star' , 'cate_id'] ;

  public function category() {
      return $this->belongsTo(Category::class , 'cate_id') ;
  }
}
