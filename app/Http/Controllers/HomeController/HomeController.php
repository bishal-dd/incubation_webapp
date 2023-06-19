<?php

namespace App\Http\Controllers\HomeController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderModel\SliderModel;
use App\Models\EventModel\EventModel;
use App\Models\VisitorModel\VisitorModel;
use Illuminate\Support\Carbon;

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

    public function dashboard()
    {
        $currentMonth = Carbon::now()->format("m");
        $monthlyVisitors = VisitorModel::whereMonth("visited_at", $currentMonth)
            ->distinct("ip_address")
            ->count("ip_address");
        $currentYear = Carbon::now()->format("Y");
        $yearlyVisitors = VisitorModel::whereYear("visited_at", $currentYear)
            ->distinct("ip_address")
            ->count("ip_address");
        $data = VisitorModel::get();
        $number = count($data);
        $uniqueVisitors = VisitorModel::distinct("ip_address")->count(
            "ip_address"
        );

        return view(
            "admin/dashboard/dashboard",
            compact(
                "number",
                "uniqueVisitors",
                "monthlyVisitors",
                "yearlyVisitors"
            )
        );
    }
}
