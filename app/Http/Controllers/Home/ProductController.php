<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Validator;

class ProductController extends Controller
{
    public function AllProduct(){
        //
    }//
    public function ProductPage(){
        return view('admin.prodact_page.product');
    }// End Metho

    public function StoreProduct(Request $request){
      //
    
    }// End Method
}
