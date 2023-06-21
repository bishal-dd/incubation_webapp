<?php

namespace App\Http\Controllers\FAQController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQModel\FAQModel;

class FAQController extends Controller
{
    public function FAQ()
    {
        $data = FAQModel::get();
        return view("user/FAQ/FAQ", compact("data"));
    }

    public function get_FAQ()
    {
        $data = FAQModel::get();
        return view("admin/add_FAQ/add_FAQ", compact("data"));
    }

    public function add_FAQ(Request $request)
    {
        $data = [
            "question" => $request->question,
            "answer" => $request->answer,
            "created_at" => date("Y-m-d h:i:s"),
            "created_by" => $request->current_user,
        ];

        FAQModel::create($data);

        return redirect("/dashboard/add_FAQ");
    }

    public function edit_FAQ(Request $request)
    {
        $data = [
            "question" => $request->question,
            "answer" => $request->answer,
            "updated_at" => date("Y-m-d h:i:s"),
            "updated_by" => $request->current_user,
        ];

        FAQModel::where("id", $request->edit_id)->update($data);
        return redirect("/dashboard/add_FAQ");
    }

    public function delete_FAQ($id)
    {
        FAQModel::where("id", $id)->delete();
        return redirect("/dashboard/add_FAQ");
    }
}
