<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Carbon\Carbon;

class AboutController extends Controller
{
    public function AllAbout(){
        $allabout = About::latest()->get();
        return view('admin.about_page.about_all',compact('allabout'));
    }// End Method

    public function AddAbout(){
        return view('admin.about_page.add_about');
    }// End Method

    public function StoreAbout(Request $request){
    
    if($request->file('about_image')){
        
      $image = $request->file('about_image');
      $manager = new ImageManager(new Driver());
      $name_gen = hexdec(uniqid()).'.'.$request->file('about_image')->getClientOriginalExtension();
      $img = $manager->read($request->file('about_image'));
      $img = $img->resize(367,500);

      $img->toJpeg(80)->save(base_path('public/upload/about_page/'.$name_gen));
      $save_url = 'upload/about_page/'.$name_gen;

      About::insert([
        'title' => $request->title,
        'short_title' => $request->short_title,
        'description' => $request->description,
        'small_title' => $request->small_title,
        'award' => $request->award,
        'award_desc' => $request->award_desc,
        'details' => $request->details,
        'about_image' => $save_url,
        'created_at' => Carbon::now(),
      ]);

      $notification = array(
        'message' => 'New About Us Page Published With Image Successfully',
        'alert-type' => 'success'
    );

}else{
    About::insert([
        'title' => $request->title,
        'short_title' => $request->short_title,
        'description' => $request->description,
        'small_title' => $request->small_title,
        'award' => $request->award,
        'award_desc' => $request->award_desc,
        'details' => $request->details,
        
    ]);
    $notification = array(
        'message' => 'About Us Page Published Without Image Updated Successfully',
        'alert-type' => 'info'
    );

}
    return redirect()->route('all.about')->with($notification);

    

    }// End Method
    public function EditAbout($id){
        $aboutpage = About::findOrFail($id);
        
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
                'award' => $request->award,
                'award_desc' => $request->award_desc,
                'details' => $request->details,
                'about_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'About Page With Image Updated Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->route('all.about')->with($notification);

       
        }else{
            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'description' => $request->description,
                'small_title' => $request->small_title,
                'award' => $request->award,
                'award_desc' => $request->award_desc,
                'details' => $request->details,
                
            ]);
            $notification = array(
                'message' => 'About Page Without Image Updated Successfully',
                'alert-type' => 'info'
            );
    
            return redirect()->route('all.about')->with($notification);
        }// End Else
        
    }// End Method

    public function DeleteAbout($id){
        
        $item = About::findOrFail($id);
        $img = $item->about_image;
        unlink($img);

        About::findOrFail($id)->delete();

        $notification = array(
            'message' => 'About Us Details Deleted Successfully',
            'alert-type' => 'error'
        );
    
        return redirect()->back()->with($notification);
    }//End Method



    public function HomeAbout(){
    $aboutpage = About::find(1);
    return view('frontend.about_page',compact('aboutpage'));
    }// End Method
}
