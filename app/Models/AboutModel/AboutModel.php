<?php

namespace App\Models\AboutModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "t_about_details";
    protected $guarded = [];
}
