<?php

namespace App\Http\Controllers\HomeController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderModel\SliderModel;
use App\Models\EventModel\EventModel;
use App\Models\HomeModel\HomeModel;
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
        $home_content = HomeModel::first();
        return view(
            "user/home/home",
            compact("Slider", "event", "home_content")
        );
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

    public function add_home()
    {
        $data = HomeModel::get();
        return view("admin/add_home/add_home", compact("data"));
    }

    public function edit_home(Request $request)
    {
        $data = [
            "title" => $request->name,
            "content" => $request->description,
            "updated_at" => date("Y-m-d h:i:s"),
            "updated_by" => $request->current_user,
        ];

        HomeModel::where("id", $request->edit_id)->update($data);
        return redirect("/dashboard/add_home");
    }
}
