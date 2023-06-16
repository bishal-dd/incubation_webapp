<?php

namespace App\Models\SliderModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "t_slider";
    protected $guarded = [];
}
