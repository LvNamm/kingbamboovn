<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title','price' , 'amount' , 'url_img' , 'sku' , 'fabrics' , 'export', 'pack' , 'uses' , 'describe' , 'note' , 'show_in_web' , 'created_by' , 'updated_by' , 'created_at' , 'updated_at' , 'link_shopee','classify'];

    public function createdBy(){
        return $this->belongsTo(Admin::class,"created_by");
    }

    public function updatedBy(){
        return $this->belongsTo(Admin::class,"updated_by");
    }

    public function img(){
        return $this->hasMany(ImgProduct::class,"id_product");
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories','id_product','id_category');
    }

    public function styleVND(){
        $a = array();
        $w = '';
        $s = (string) $this->price;
        for($i=strlen($s)-1;$i>=0;$i--){
            $w=$s[$i].$w;
            if(strlen($w)==3 && $i!=0){
                array_push($a, $w);
                $w = '';
            }
        }
        $s ='';
        foreach($a as $b){
            $s = ",".$b.$s;
        }

        return $w.$s;
    }
}
