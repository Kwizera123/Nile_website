<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function ProductPage(){
        return view('admin.prodact_page.product');
    }// End Metho
}
