<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Carbon\Carbon;


class ProductController extends Controller
{
    public function AllProduct(){
        $product = Product::latest()->get();
        return view('admin.prodact_page.all_products',compact('product'));
    }//
    public function AddProduct(){
        return view('admin.prodact_page.add_product');
    }// End Metho

    public function StoreProduct(Request $request){

      $image = $request->file('image');
      $manager = new ImageManager(new Driver());
      $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
      $img = $manager->read($request->file('image'));
      $img = $img->resize(300,300);

      $img->toJpeg(80)->save(base_path('public/upload/product_page/'.$name_gen));
      $save_url = 'upload/product_page/'.$name_gen;


      Product::insert([
      'title' => $request->title,
      'description' => $request->description,
      'link' => $request->link,
      'image' => $save_url,
      'created_at' => Carbon::now(),
      ]);

      $notification = array(
        'message' => 'New Product Inserted With Image Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.product')->with($notification);
    }// End Method

    public function EditProduct($id){
        $product = Product::findOrFail($id);
        return view('admin.prodact_page.edit_product',compact('product'));
    }//End Method

    public function UpdateProduct(Request $request){
    $product_id = $request->id;

    if($request->file('image')){

        $image = $request->file('image');
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
        $img = $manager->read($request->file('image'));
        $img = $img->resize(300,300);
  
        $img->toJpeg(80)->save(base_path('public/upload/product_page/'.$name_gen));
        $save_url = 'upload/product_page/'.$name_gen;
  
  
        Product::findOrFail($product_id)->update([
        'title' => $request->title,
        'description' => $request->description,
        'link' => $request->link,
        'image' => $save_url,
        'created_at' => Carbon::now(),
        ]);
  
        $notification = array(
          'message' => 'Product Updated With Image Successfully',
          'alert-type' => 'success'
      );
  
      return redirect()->route('all.product')->with($notification);

    }else{

        Product::findOrFail($product_id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'created_at' => Carbon::now(),
            ]);
      
            $notification = array(
              'message' => 'Product Updated Without Image Successfully',
              'alert-type' => 'info'
          );
      
          return redirect()->route('all.product')->with($notification);

         }// End If else
    }// End Method

    public function DeleteProduct($id){

        $item = Product::findOrFail($id);
        $img = $item->image;
        unlink($img);

        Product::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'error'
        );
    
        return redirect()->back()->with($notification);
    }// End Method

}
