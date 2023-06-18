<?php

namespace App\Http\Controllers\FeedbackController;

use App\Http\Controllers\Controller;
use App\Models\FeedbackModel\FeedbackModel;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function view_feedback()
    {
        $data = FeedbackModel::get();
        return view("admin/view_feedback/view_feedback", compact("data"));
    }

    public function give_feedback(Request $request)
    {
        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "phone_no" => $request->phone,
            "feedback_message" => $request->note,
            "created_at" => date("Y-m-d h:i:s"),
        ];
        FeedbackModel::create($data);

        return redirect("/");
    }
}
