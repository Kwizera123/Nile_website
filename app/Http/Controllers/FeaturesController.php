<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Carbon\Carbon;

class FeaturesController extends Controller
{
    public function AllFeatures() {
        $allfeature = Feature::latest()->get();
        return view('admin.features.all_features', compact('allfeature'));
        
    }//End Method

    public function CreateFeature(){
        return view('admin.features.add_features');
    }// End Method

    public function StoreFeature(Request $request){
         if($request->file('image')){
        
        $image = $request->file('image');
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
        $img = $manager->read($request->file('image'));
        $img = $img->resize(600,348);
  
        $img->toJpeg(80)->save(base_path('public/upload/feature_image/'.$name_gen));
        $save_url = 'upload/feature_image/'.$name_gen;
  
        Feature::insert([
          'features' => $request->features,
          'whychooseus' => $request->whychooseus,
          'descreption' => $request->descreption,
          'image' => $save_url,
          'created_at' => Carbon::now(),
        ]);
  
        $notification = array(
          'message' => 'New Feature Data Inserted With Image Successfully',
          'alert-type' => 'success'
      );
  
  }else{
    Feature::insert([
        'features' => $request->features,
        'whychooseus' => $request->whychooseus,
        'descreption' => $request->descreption,
        
    ]);
    $notification = array(
        'message' => 'New Feature Data Inserted Without Image Successfully',
        'alert-type' => 'info'
    );

}
    return redirect()->route('all.features')->with($notification);
    }// End Method

    public function EditFeature($id){
        $feature = Feature::findOrFail($id);
        return view('admin.features.edit_features',compact('feature'));
    }// End Method

    public function UpdateFeature(Request $request){
        $feature_id = $request->id;

        if($request->file('image')){
        
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            $img = $img->resize(600,348);
      
            $img->toJpeg(80)->save(base_path('public/upload/feature_image/'.$name_gen));
            $save_url = 'upload/feature_image/'.$name_gen;

            Feature::findOrFail($feature_id)->update([
            'features' => $request->features,
            'whychooseus' => $request->whychooseus,
            'descreption' => $request->descreption,
            'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Feature Data Updated With Image Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->route('all.features')->with($notification);

       
        }else{
            Feature::findOrFail($feature_id)->update([
                'features' => $request->features,
                'whychooseus' => $request->whychooseus,
                'descreption' => $request->descreption,
                
            ]);
            $notification = array(
                'message' => 'Feature Data Updated Without Image Successfully',
                'alert-type' => 'info'
            );
    
            return redirect()->route('all.features')->with($notification);
        }// End If Else
    }// End Method
}
