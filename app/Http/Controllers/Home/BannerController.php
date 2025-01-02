<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Carbon\Carbon;
use App\Models\right_banner;
use Illuminate\Http\RedirectResponse;

class BannerController extends Controller
{
    public function AllBanner(){
        $allbanner = Banner::latest()->get();
        return view('admin.banner.all_banner', compact('allbanner'));
    }// End Method

    public function RightBanner(){
        $rightbanner = right_banner::latest()->get();
        return view('admin.banner.right_banner', compact('rightbanner'));
    }// End Method

    public function AddLeftBanner(){
        return view('admin.banner.add_left_banner');
    }// End Method

    public function StoreLeftBanner(Request $request){
        if($request->file('image_one')){
        
            $image = $request->file('image_one');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('image_one')->getClientOriginalExtension();
            $img = $manager->read($request->file('image_one'));
            $img = $img->resize(30,30);
      
            $img->toJpeg(80)->save(base_path('public/upload/banner_image/'.$name_gen));
            $save_url = 'upload/banner_image/'.$name_gen;
      
            Banner::insert([
              'title_article_one' => $request->title_article_one,
              'details_article_one' => $request->details_article_one,
              'readmore_article_one' => $request->readmore_article_one,
              'image_one' => $save_url,
              'created_at' => Carbon::now(),
            ]);
      
            $notification = array(
              'message' => 'New Left Banner Published With Image Successfully',
              'alert-type' => 'success'
          );
      
      }else{
        Banner::insert([
            'title_article_one' => $request->title_article_one,
            'details_article_one' => $request->details_article_one,
            'readmore_article_one' => $request->readmore_article_one,
            
        ]);
        $notification = array(
            'message' => 'New Left Banner Published Without Image Successfully',
            'alert-type' => 'info'
        );
    
    }
        return redirect()->route('all.banner')->with($notification);
    }// End Method

    public function AddRightBanner(){
        return view('admin.banner.add_right_banner');
    }// End Method

    public function StoreRightBanner(Request $request){
        if($request->file('image_two')){
        
            $image = $request->file('image_two');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('image_two')->getClientOriginalExtension();
            $img = $manager->read($request->file('image_two'));
            $img = $img->resize(30,30);
      
            $img->toJpeg(80)->save(base_path('public/upload/banner_image/'.$name_gen));
            $save_url = 'upload/banner_image/'.$name_gen;
      
            right_banner::insert([
              'title_article_two' => $request->title_article_two,
              'details_article_two' => $request->details_article_two,
              'readmore_article_two' => $request->readmore_article_two,
              'image_two' => $save_url,
              'created_at' => Carbon::now(),
            ]);
      
            $notification = array(
              'message' => 'New Right Banner Published With Image Successfully',
              'alert-type' => 'success'
          );
      
      }else{
        right_banner::insert([
            'title_article_two' => $request->title_article_two,
            'details_article_two' => $request->details_article_two,
            'readmore_article_two' => $request->readmore_article_two,
            
        ]);
        $notification = array(
            'message' => 'New Right Banner Published Without Image Successfully',
            'alert-type' => 'info'
        );
    
    }
        return redirect()->route('right.banner')->with($notification);
    }// End Method

    public function EditLeftBenner($id){
        $leftbanner = Banner::findOrFail($id);
        return view('admin.banner.left_banner_edit',compact('leftbanner'));

    }// End Method

    public function UpdateLeftBanner(Request $request){
        $leftbanner_id = $request->id;

        if($request->file('image_one')){
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('image_one')->getClientOriginalExtension(); // 3453533.jpg
            $img = $manager->read($request->file('image_one'));
            $img = $img->resize(30,30);

            $img->toJpeg(80)->save(base_path('public/upload/banner_image/'.$name_gen));
            $save_url = 'upload/banner_image/'.$name_gen;

            Banner::findOrFail($leftbanner_id)->update([
                'title_article_one' => $request->title_article_one,
                'details_article_one' => $request->details_article_one,
                'readmore_article_one' => $request->readmore_article_one,
                'image_one' => $save_url,
            ]);

            $notification = array(
                'message' => 'Left Banner With Image Updated Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->route('all.banner')->with($notification);

       
        }else{
            Banner::findOrFail($leftbanner_id)->update([
                'title_article_one' => $request->title_article_one,
                'details_article_one' => $request->details_article_one,
                'readmore_article_one' => $request->readmore_article_one,
                
            ]);
            $notification = array(
                'message' => 'Left Banner Without Image Updated Successfully',
                'alert-type' => 'info'
            );
    
            return redirect()->route('all.banner')->with($notification);
        }// End If Else

    }// End Method

    public function DeleteLeftBanner($id){
        
        $item = Banner::findOrFail($id);
        $img = $item->image_one;
        unlink($img);

        Banner::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Left Banner Details Deleted Successfully',
            'alert-type' => 'error'
        );
    
        return redirect()->back()->with($notification);
    }// End Method

    public function EditRightBenner($id){
        $rightbanner = right_banner::findOrFail($id);
        return view('admin.banner.right_banner_edit',compact('rightbanner'));
    }// End Method

    public function UpdateRightBanner(Request $request){
        $rightbanner_id = $request->id;

        if($request->file('image_two')){
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('image_two')->getClientOriginalExtension(); // 3453533.jpg
            $img = $manager->read($request->file('image_two'));
            $img = $img->resize(30,30);

            $img->toJpeg(80)->save(base_path('public/upload/banner_image/'.$name_gen));
            $save_url = 'upload/banner_image/'.$name_gen;

            right_banner::findOrFail($rightbanner_id)->update([
                'title_article_two' => $request->title_article_two,
                'details_article_two' => $request->details_article_two,
                'readmore_article_two' => $request->readmore_article_two,
                'image_two' => $save_url,
            ]);

            $notification = array(
                'message' => 'Right Banner With Image Updated Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->route('right.banner')->with($notification);

       
        }else{
            right_banner::findOrFail($rightbanner_id)->update([
                'title_article_two' => $request->title_article_two,
                'details_article_two' => $request->details_article_two,
                'readmore_article_two' => $request->readmore_article_two,
                
            ]);
            $notification = array(
                'message' => 'Right Banner Without Image Updated Successfully',
                'alert-type' => 'info'
            );
    
            return redirect()->route('right.banner')->with($notification);
        }// End If Else
    }// End Method

    public function DeleteRightBanner($id){
        $item = right_banner::findOrFail($id);
        $img = $item->image_two;
        unlink($img);

        right_banner::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Right Banner Details Deleted Successfully',
            'alert-type' => 'error'
        );
    
        return redirect()->back()->with($notification);
    }// End Method
}
