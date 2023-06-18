<?php

namespace App\Http\Controllers\AdvisoryController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdvisoryModel\AdvisoryModel;

class AdvisoryController extends Controller
{
    public function advisory()
    {
        $advisor = AdvisoryModel::get();
        return view("user/advisory/advisory", compact("advisor"));
    }
    public function get_advisor()
    {
        $data = AdvisoryModel::get();
        return view("admin/add_advisory/add_advisory", compact("data"));
    }

    public function add_advisor(Request $request)
    {
        $file = $request->photo;
        $file_name = "";
        $file_store_path = "advisor_images";

        if ($file != null && $file->isValid()) {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, true);
            }

            $original_file_name = $file->getClientOriginalName();
            $file_name =
                time() . "_" . str_replace(" ", "_", $original_file_name);

            $file->move($file_store_path, $file_name);
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

    public function edit_advisor(Request $request)
    {
        $file = $request->photo;
        $file_name = "";
        $file_store_path = "advisor_images";

        if ($file != null && $file->isValid()) {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, true);
            }

            $original_file_name = $file->getClientOriginalName();
            $file_name =
                time() . "_" . str_replace(" ", "_", $original_file_name);

            $file->move($file_store_path, $file_name);
        } else {
            $existing_photo = AdvisoryModel::where(
                "id",
                $request->edit_id
            )->value("photo");
            $file_name = $existing_photo;
        }

        $data = [
            "name" => $request->name,
            "photo" => $file_name,
            "designation" => $request->designation,
            "affiliation" => $request->affiliation,
            "updated_at" => date("Y-m-d h:i:s"),
            "updated_by" => $request->current_user,
        ];

        AdvisoryModel::where("id", $request->edit_id)->update($data);
        return redirect("/dashboard/add_advisory");
    }

    public function delete_advisor($id)
    {
        $slider = AdvisoryModel::find($id);

        if ($slider) {
            $imagePath = public_path("advisor_images/" . $slider->photo);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $slider->delete();
        }

        return redirect("/dashboard/add_advisory");
    }
}
