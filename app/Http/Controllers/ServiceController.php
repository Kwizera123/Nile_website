<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class ServiceController extends Controller
{
    public function AllServices(){
        $allservice = Services::latest()->get();
        return view('admin.services.all_service', compact('allservice'));
    }//End Method
}
