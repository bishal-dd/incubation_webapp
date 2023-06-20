<?php

namespace App\Http\Controllers\EventController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventModel\EventModel;

class EventController extends Controller
{
    public function event()
    {
        $event = EventModel::latest()->get();

        return view("user/event/event", compact("event"));
    }
    public function event_details($id)
    {
        $event = EventModel::where("id", $id)->first();
        $data = EventModel::get();
        return view(
            "user/event_details/event_details",
            compact("event", "data")
        );
    }
    public function get_event()
    {
        $data = EventModel::get();
        return view("admin/add_event/add_event", compact("data"));
    }
    public function add_event(Request $request)
    {
        $files = $request->event_image;
        $file_name = "";
        $file_store_path = "event_images";

        if ($files != null && $files != "") {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, true);
            }

            $original_file_name = $files->getClientOriginalName();
            $file_name =
                time() . "_" . str_replace(" ", "_", $original_file_name);

            move_uploaded_file($files, $file_store_path . "/" . $file_name);
        }
        $data = [
            "name" => $request->name,
            "image" => $file_name,
            "date" => $request->date,
            "description" => $request->description,
            "created_at" => date("Y-m-d h:i:s"),
            "created_by" => $request->current_user,
        ];

        EventModel::create($data);

        return redirect("/dashboard/add_event");
    }

    public function edit_event(Request $request)
    {
        $files = $request->event_image;
        $file_name = "";
        $file_store_path = "event_images";

        if ($files != null && $files != "") {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, true);
            }

            $original_file_name = $files->getClientOriginalName();
            $file_name =
                time() . "_" . str_replace(" ", "_", $original_file_name);

            move_uploaded_file($files, $file_store_path . "/" . $file_name);
        } else {
            $existing_photo = EventModel::where("id", $request->edit_id)->value(
                "image"
            );
            $file_name = $existing_photo;
        }

        $data = [
            "name" => $request->name,
            "image" => $file_name,
            "date" => $request->date,
            "description" => $request->description,
            "updated_at" => date("Y-m-d h:i:s"),
            "updated_by" => $request->current_user,
        ];

        EventModel::where("id", $request->edit_id)->update($data);

        return redirect("/dashboard/add_event");
    }

    public function delete_event($id)
    {
        $slider = EventModel::find($id);

        if ($slider) {
            $imagePath = public_path("event_images/" . $slider->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $slider->delete();
        }

        return redirect("/dashboard/add_event");
    }
}
