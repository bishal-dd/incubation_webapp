<?php

namespace App\Http\Controllers\StakeholderController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StakeholderModel\StakeholderModel;

class StakeholderController extends Controller
{
    public function get_stakeholder()
    {
        $data = StakeholderModel::get();
        return view("admin/add_stakeholder/add_stakeholder", compact("data"));
    }
    public function add_stakeholder(Request $request)
    {
        $file = $request->photo;
        $file_name = "";
        $file_store_path = "stakeholder_images";

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

        StakeholderModel::create($data);

        return redirect("/dashboard/add_stakeholder");
    }

    public function edit_stakeholder(Request $request)
    {
        $file = $request->photo;
        $file_name = "";
        $file_store_path = "stakeholder_images";

        if ($file != null && $file->isValid()) {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, true);
            }

            $original_file_name = $file->getClientOriginalName();
            $file_name =
                time() . "_" . str_replace(" ", "_", $original_file_name);

            $file->move($file_store_path, $file_name);
        } else {
            $existing_photo = StakeholderModel::where(
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

        StakeholderModel::where("id", $request->edit_id)->update($data);
        return redirect("/dashboard/add_stakeholder");
    }

    public function delete_stakeholder($id)
    {
        $slider = StakeholderModel::find($id);

        if ($slider) {
            $imagePath = public_path("stakeholder_images/" . $slider->photo);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $slider->delete();
        }

        return redirect("/dashboard/add_stakeholder");
    }
}
