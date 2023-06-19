<?php

namespace App\Http\Controllers\FacilityController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FacilityModel\FacilityModel;

class FacilityController extends Controller
{
    public function facilities()
    {
        $data = FacilityModel::get();
        return view("user/facilities/facilities", compact("data"));
    }
    public function get_facilities()
    {
        $data = FacilityModel::get();
        return view("admin/add_facilities/add_facilities", compact("data"));
    }
    public function add_facilities(Request $request)
    {
        $fileNames = []; // Initialize the array here

        if ($request->hasFile("photos")) {
            $photos = $request->file("photos");
            $fileNames = [];

            foreach ($photos as $photo) {
                $fileName = time() . "_" . $photo->getClientOriginalName();
                $photo->move("facilities_images", $fileName);
                $fileNames[] = $fileName;
            }
        }

        $data = [
            "name" => $request->name,
            "photo" => implode(",", $fileNames),
            "details" => $request->description,
            "created_at" => date("Y-m-d h:i:s"),
            "created_by" => $request->current_user,
        ];

        FacilityModel::create($data);

        return redirect("/dashboard/add_facilities");
    }

    public function edit_facilities(Request $request)
    {
        $file = $request->photo;
        $file_name = "";
        $file_store_path = "facilities_images";

        if ($file != null && $file->isValid()) {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, true);
            }

            $original_file_name = $file->getClientOriginalName();
            $file_name =
                time() . "_" . str_replace(" ", "_", $original_file_name);

            $file->move($file_store_path, $file_name);
        } else {
            $existing_photo = FacilityModel::where(
                "id",
                $request->edit_id
            )->value("photo");
            $file_name = $existing_photo;
        }

        $data = [
            "name" => $request->name,
            "photo" => $file_name,
            "details" => $request->description,
            "updated_at" => date("Y-m-d h:i:s"),
            "updated_by" => $request->current_user,
        ];

        FacilityModel::where("id", $request->edit_id)->update($data);
        return redirect("/dashboard/add_facilities");
    }

    public function delete_facilities($id)
    {
        $slider = FacilityModel::find($id);

        if ($slider) {
            $imagePath = public_path("facilities_images/" . $slider->photo);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $slider->delete();
        }

        return redirect("/dashboard/add_facilities");
    }
}
