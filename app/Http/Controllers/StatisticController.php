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

    }// End Method
}
