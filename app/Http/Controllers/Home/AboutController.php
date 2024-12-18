<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class AboutController extends Controller
{
    public function AboutPage(){
        $aboutpage = About::find(1);
        return view('admin.about_page.home_about_all',compact('aboutpage'));
    }// End Method  


    public function UpdateAbout(Request $request){
        $about_id = $request->id;

        if($request->file('about_image')){
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('about_image')->getClientOriginalExtension(); // 3453533.jpg
            $img = $manager->read($request->file('about_image'));
            $img = $img->resize(367,500);

            $img->toJpeg(80)->save(base_path('public/upload/about_page/'.$name_gen));
            $save_url = 'upload/about_page/'.$name_gen;

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'description' => $request->description,
                'small_title' => $request->small_title,
                'details' => $request->details,
                'about_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'About Page With Image Updated Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);

       
        }else{
            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'description' => $request->description,
                'small_title' => $request->small_title,
                'details' => $request->details,
                
            ]);
            $notification = array(
                'message' => 'About Page Without Image Updated Successfully',
                'alert-type' => 'info'
            );
    
            return redirect()->back()->with($notification);
        }// End Else
        
    }

    public function HomeAbout(){
    $aboutpage = About::find(1);
    return view('frontend.about_page',compact('aboutpage'));
    }// End Method
}
