<?php

namespace App\Http\Controllers\HomeController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderModel\SliderModel;

class HomeController extends Controller
{
    public function home()
    {
        $Slider = SliderModel::get();
        return view("user/home/home", compact("Slider"));
    }
}
