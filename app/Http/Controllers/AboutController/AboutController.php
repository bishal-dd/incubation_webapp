<?php

namespace App\Http\Controllers\AboutController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutModel\AboutModel;

class AboutController extends Controller
{
    public function get_slider()
    {
        $data = AboutModell::get();
        return view("admin/add_about/add_about", compact("data"));
    }
    public function add_about(Request $request)
    {
        $files = $request->slider_image;
        $file_name = "";
        $file_store_path = "slider_images";
        if ($files != null && $files != "") {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, true);
            }
            $file_name = time() . "_" . $files->getClientOriginalName();
            move_uploaded_file($files, $file_store_path . "/" . $file_name);
        }

        $data = [
            "name" => $request->name,
            "image" => $file_name,
            "text" => $request->slider_text,
            "created_at" => date("Y-m-d h:i:s"),
            "created_by" => $request->current_user,
        ];

        AboutModel::create($data);

        return redirect("/dashboard/add_about");
    }
}
