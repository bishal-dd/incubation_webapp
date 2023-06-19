<?php

namespace App\Models\FacilityModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "t_facilities";
    protected $guarded = [];
}
