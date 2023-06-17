<?php

namespace App\Http\Controllers\IncubatesController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IncubatesModel\IncubatesModel;

class IncubatesController extends Controller
{
    public function get_incubates()
    {
        $data = IncubatesModel::get();
        return view("admin/add_incubates/add_incubates", compact("data"));
    }
    public function add_incubates(Request $request)
    {
        $files = $request->photo;
        $file_name = "";
        $file_store_path = "incubates_images";
        if ($files != null && $files != "") {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, true);
            }
            $file_name = time() . "_" . $files->getClientOriginalName();
            move_uploaded_file($files, $file_store_path . "/" . $file_name);
        }

        $data = [
            "photo" => $file_name,
            "description" => $request->description,
            "created_at" => date("Y-m-d h:i:s"),
            "created_by" => $request->current_user,
        ];

        IncubatesModel::create($data);

        return redirect("/dashboard/add_incubates");
    }
}
