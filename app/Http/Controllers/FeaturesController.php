<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;

class FeaturesController extends Controller
{
    public function AllFeatures() {
        $allfeature = Feature::latest()->get();
        return view('admin.features.all_features', compact('allfeature'));
        
    }//End Method

    public function CreateFeature(){
        return view('admin.features.add_features');
    }// End Method
}
