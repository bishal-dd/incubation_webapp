<?php

namespace App\Http\Controllers\MentorController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MentorModel\MentorModel;

class MentorController extends Controller
{
    public function get_mentor()
    {
        $data = MentorModel::get();
        return view("admin/add_mentor/add_mentor", compact("data"));
    }

    public function add_mentor(Request $request)
    {
        $file = $request->photo;
        $file_name = "";
        $file_store_path = "mentor_images";

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

        MentorModel::create($data);

        return redirect("/dashboard/add_mentor");
    }

    public function edit_mentor(Request $request)
    {
        $file = $request->photo;
        $file_name = "";
        $file_store_path = "mentor_images";

        if ($file != null && $file->isValid()) {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, true);
            }

            $original_file_name = $file->getClientOriginalName();
            $file_name =
                time() . "_" . str_replace(" ", "_", $original_file_name);

            $file->move($file_store_path, $file_name);
        } else {
            $existing_photo = MentorModel::where(
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

        MentorModel::where("id", $request->edit_id)->update($data);
        return redirect("/dashboard/add_mentor");
    }

    public function delete_mentor($id)
    {
        $slider = MentorModel::find($id);

        if ($slider) {
            $imagePath = public_path("mentor_images/" . $slider->photo);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $slider->delete();
        }

        return redirect("/dashboard/add_mentor");
    }
}
