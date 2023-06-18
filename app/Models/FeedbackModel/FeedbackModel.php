<?php

namespace App\Models\FeedbackModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "t_feedback_master";
    protected $guarded = [];
}
