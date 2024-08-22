<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ProductModel extends Model
{
    use HasFactory;

    protected $table = 'product';

    static public function getSingle($id){
        return self::find($id);
    }

    static public function getRecord(){
        return self::select('product.*', 'users.name as created_by_name')
        ->join('users', 'users.id', '=', 'product.created_by')
        ->where('product.is_delete', '=', 0)
        ->orderBy('product.id', 'desc')
        ->paginate(10);
    }

    static public function getProductGender($id, $gender) {
        return self::select('product.*', 'users.name as created_by_name', 'category.name as category_name', 'category.slug as category_slug', 'brand.name as brand_name', 'brand.slug as brand_slug')
        ->join('users', 'users.id', '=', 'product.created_by')
        ->join('category', 'category.id', '=', 'product.category_id')
        ->join('brand', 'brand.id', '=', 'product.brand_id')
        ->where('product.category_id', '=', $id)
        ->where('product.gender', '=', $gender)
        ->where('product.is_delete', '=', 0)
        ->where('product.status', '=', 0)
        ->orderBy('product.id', 'desc')
        ->paginate(9);
    }

    static public function getGender($gender){
        return self::where('gender', '=', $gender)
        ->where('product.status', '=' ,0)
        ->where('product.is_delete','=',0)
        ->first();
    } 


    static public function checkSlug($slug){
        return self::where('slug', '=', $slug)->count();
    }

    public function getColor(){
        return $this->hasMany(ProductColorModel::class, "product_id");
    }

    static public function getImageSingle($product_id){
        return ProductImageModel::where('product_id', '=', $product_id)->orderBy('order_by', 'asc')->first();
    }

    public function getSize(){
        return $this->hasMany(ProductSizeModel::class, "product_id");
    }

    public function getImage(){
        return $this->hasMany(ProductImageModel::class, "product_id")->orderBy('order_by', 'asc');
    }
}
