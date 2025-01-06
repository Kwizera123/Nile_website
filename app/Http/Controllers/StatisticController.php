<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistic;

class StatisticController extends Controller
{
    public function AllStatistic(){
        $allstatistic = Statistic::latest()->get();
        return view('admin.statistics.all_statistic', compact('allstatistic'));
    }// End Method

    public function CreateStatistic(){
        return view('admin.statistics.create_statistic');
    }// End Method

    public function StoreStatistic(Request $request){
        Statistic::insert([
            'title_1' => $request->title_1,
            'number_1' => $request->number_1,
            'title_2' => $request->title_2,
            'number_2' => $request->number_2,
            'title_3' => $request->title_3,
            'number_3' => $request->number_3,
            'title_4' => $request->title_4,
            'number_4' => $request->number_4,
            
        ]);
        $notification = array(
            'message' => 'New Statistic Published Successfully',
            'alert-type' => 'success'
        );
    
    
        return redirect()->route('all.statistics')->with($notification);
    }// End Method
}
