<?php

namespace App\Models\HomeModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "t_home_content";
    protected $guarded = [];
}
