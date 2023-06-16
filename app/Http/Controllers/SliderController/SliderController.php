<?php

namespace App\Http\Controllers\SliderController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderModel\SliderModel;

class SliderController extends Controller
{
    public function get_slider()
    {
        $data = SliderModel::get();
        return view("admin/add_slider_image/add_slider_image", compact("data"));
    }
    public function add_slider(Request $request)
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

        SliderModel::create($data);

        return redirect("/dashboard/add_slider_image");
    }
}
