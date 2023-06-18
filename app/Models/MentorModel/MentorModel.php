<?php

namespace App\Models\MentorModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "t_mentors";
    protected $guarded = [];
}
