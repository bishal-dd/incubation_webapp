<?php

namespace App\Models\AdvisoryModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvisoryModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "t_advisory_master";
    protected $guarded = [];
}
