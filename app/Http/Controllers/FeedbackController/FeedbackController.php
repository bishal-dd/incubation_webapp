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
}
