<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Carbon\Carbon;

class HomeSliderController extends Controller
{
    public function AllhomeSlide(){
        $allhomeslide = HomeSlide::latest()->get();
        return view('admin.home_slide.all_home_slide',compact('allhomeslide'));
    }// End Method

    public function AddhomeSlide(){
        return view('admin.home_slide.add_home_slide');
    }// End Method

    public function StoreHomeSlider(Request $request){

      $image = $request->file('home_slide');
      $manager = new ImageManager(new Driver());
      $name_gen = hexdec(uniqid()).'.'.$request->file('home_slide')->getClientOriginalExtension();
      $img = $manager->read($request->file('home_slide'));
      $img = $img->resize(1920,1080);

      $img->toJpeg(80)->save(base_path('public/upload/home_slide/'.$name_gen));
      $save_url = 'upload/home_slide/'.$name_gen;


      HomeSlide::insert([
      'title' => $request->title,
      'short_title' => $request->short_title,
      'explore' => $request->explore,
      'home_slide' => $save_url,
      'created_at' => Carbon::now(),
      ]);

      $notification = array(
        'message' => 'New Home Slide Published With Image Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.home.slide')->with($notification);

        //
    }// End Method

    public function EditHomeSlide($id){
        $homeslide = HomeSlide::findOrFail($id);
        return view('admin.home_slide.edit_home_slide',compact('homeslide'));
    }// End Method


    public function UpdateSlide(Request $request){
        $slide_id = $request->id;

        if($request->file('home_slide')){
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('home_slide')->getClientOriginalExtension(); // 3453533.jpg
            $img = $manager->read($request->file('home_slide'));
            $img = $img->resize(1920,1080);

            $img->toJpeg(80)->save(base_path('public/upload/home_slide/'.$name_gen));
            $save_url = 'upload/home_slide/'.$name_gen;

            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'explore' => $request->explore,
                'home_slide' => $save_url,
            ]);


            $notification = array(
                'message' => 'Home Slide With Image Updated Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);

        }else{

            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'explore' => $request->explore,
                
            ]);
            $notification = array(
                'message' => 'Home Slide Without Image Updated Successfully',
                'alert-type' => 'info'
            );
    
            return redirect()->back()->with($notification);
        }// End Else

    }// End Method


    public function DeleteHomeSlide($id){
       
        $item = HomeSlide::findOrFail($id);
        
        $img = $item->home_slide;
        unlink($img);

        HomeSlide::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Home Slide Deleted Successfully',
            'alert-type' => 'error'
        );
    
        return redirect()->back()->with($notification);
        }// End Method
}
