<?php

namespace App\Http\Controllers\AdvisoryController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdvisoryModel\AdvisoryModel;

class AdvisoryController extends Controller
{
    public function get_slider()
    {
        $data = AdvisoryModel::get();
        return view("admin/add_advisory/add_advisory", compact("data"));
    }

    public function add_advisor(Request $request)
    {
        $files = $request->photo;
        $file_name = "";
        $file_store_path = "advisor_images";
        if ($files != null && $files != "") {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, true);
            }
            $file_name = time() . "_" . $files->getClientOriginalName();
            move_uploaded_file($files, $file_store_path . "/" . $file_name);
        }

        $data = [
            "name" => $request->name,
            "photo" => $file_name,
            "designation" => $request->designation,
            "affiliation" => $request->affiliation,
            "created_at" => date("Y-m-d h:i:s"),
            "created_by" => $request->current_user,
        ];

        AdvisoryModel::create($data);

        return redirect("/dashboard/add_advisory");
    }
}
