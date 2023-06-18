<?php

namespace App\Http\Controllers\ApplicationController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplicationModel\ApplicationModel;

class ApplicationController extends Controller
{
    public function submit_application(Request $request)
    {
        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "age" => $request->age,
            "phone_no" => $request->phone,
            "idea" => $request->idea,
            "created_at" => date("Y-m-d h:i:s"),
        ];

        ApplicationModel::create($data);

        return redirect("/");
    }

    public function view_application()
    {
        $data = ApplicationModel::get();
        return view("admin/view_application/view_application", compact("data"));
    }
}
