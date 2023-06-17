<?php

namespace App\Models\IncubatesModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncubatesModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "t_incubates";
    protected $guarded = [];
}
