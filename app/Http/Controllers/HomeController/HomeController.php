<?php

namespace App\Http\Controllers\HomeController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderModel\SliderModel;
use App\Models\EventModel\EventModel;

class HomeController extends Controller
{
    public function home()
    {
        $Slider = SliderModel::get();
        $event = EventModel::latest()
            ->take(3)
            ->get();
        return view("user/home/home", compact("Slider", "event"));
    }
}
