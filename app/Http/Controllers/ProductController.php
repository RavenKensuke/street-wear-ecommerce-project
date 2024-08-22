<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\BrandModel;

class ProductController extends Controller
{
    public function getCategoryGender($slug, $gender = ''){
        
       $getCategory = CategoryModel::getSingleSlug($slug);
       $getGender = ProductModel::getGender($gender);

       if(!empty($getCategory) && !empty($getGender)) {

            $data['meta_title'] = $getCategory->meta_title;
            $data['meta_description'] = $getCategory->meta_description;
            $data['meta_keywords'] = $getCategory->meta_keywords;
            $data['getGender'] = $getGender;
            $data['getCategory'] = $getCategory;

            $data['getProduct'] = ProductModel::getProductGender($getCategory->id, $getGender->gender);

            return view('product.category-gender-list', $data);
    } else {
        abort(404);
    }
    }
}   
