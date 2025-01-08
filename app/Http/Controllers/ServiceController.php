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

    public function EditService($id){
        $editservice = Services::findOrFail($id);
        return view('admin.services.edit_service',compact('editservice'));
    }// End Method

    public function UpdateService(Request $request){
        $service_id = $request->id;
        
        Services::findOrFail($service_id)->update([
            'title' => $request->title,
            'subtile' => $request->subtile,
            'details' => $request->details,
            'Contact_link' => $request->Contact_link,
            'Vegetable' => $request->Vegetable,
            'Vegetabler_d' => $request->Vegetabler_d,
            'Fruit' => $request->Fruit,
            'Fruit_d' => $request->Fruit_d,
            'healty' => $request->healty,
            'healty_d' => $request->healty_d,
            'Modern' => $request->Modern,
            'Modern_d' => $request->Modern_d,
            'Farmang' => $request->Farmang,
            'farming_d' => $request->farming_d,
            
        ]);
        $notification = array(
            'message' => 'Service Data Updated and Published Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('all.Services')->with($notification);
        //
    }// End Method
}
