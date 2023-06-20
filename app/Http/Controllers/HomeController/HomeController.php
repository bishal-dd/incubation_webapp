<?php

namespace App\Http\Controllers\HomeController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderModel\SliderModel;
use App\Models\EventModel\EventModel;
use App\Models\HomeModel\HomeModel;
use App\Models\VisitorModel\VisitorModel;
use App\Models\AboutModel\AboutModel;
use App\Models\DocumentModel\DocumentModel;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function home()
    {
        $Slider = SliderModel::latest()->get();
        $event = EventModel::latest()
            ->take(3)
            ->get();
        $home_content = HomeModel::first();
        return view(
            "user/home/home",
            compact("Slider", "event", "home_content")
        );
    }

    public function about()
    {
        $data = AboutModel::first();
        return view("user/about/about", compact("data"));
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
            "link" => $request->link,
            "updated_at" => date("Y-m-d h:i:s"),
            "updated_by" => $request->current_user,
        ];

        HomeModel::where("id", $request->edit_id)->update($data);
        return redirect("/dashboard/add_home");
    }

    public function add_about()
    {
        $data = AboutModel::get();
        return view("admin/add_about/add_about", compact("data"));
    }

    public function edit_about(Request $request)
    {
        $data = [
            "vision" => $request->vision,
            "mission" => $request->mission,
            "objectives" => $request->objectives,
            "updated_at" => date("Y-m-d h:i:s"),
            "updated_by" => $request->current_user,
        ];

        AboutModel::where("id", $request->edit_id)->update($data);
        return redirect("/dashboard/add_about");
    }

    public function get_documents()
    {
        $data = DocumentModel::get();
        return view("admin/add_documents/add_documents", compact("data"));
    }

    public function add_documents(Request $request)
    {
        $files = $request->photo;
        $file_name = "";
        $file_store_path = "documents";
        if ($files != null && $files != "") {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, true);
            }
            $file_name = time() . "_" . $files->getClientOriginalName();
            move_uploaded_file($files, $file_store_path . "/" . $file_name);
        }

        $data = [
            "name" => $request->name,
            "file" => $file_name,
            "created_at" => date("Y-m-d h:i:s"),
            "created_by" => $request->current_user,
        ];

        DocumentModel::create($data);

        return redirect("/dashboard/add_documents");
    }

    public function delete_documents($id)
    {
        $slider = DocumentModel::find($id);

        if ($slider) {
            $imagePath = public_path("documents/" . $slider->file);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $slider->delete();
        }

        return redirect("/dashboard/add_documents");
    }

    public function forms()
    {
        $data = DocumentModel::get();
        return view("user/forms/forms", compact("data"));
    }
}
