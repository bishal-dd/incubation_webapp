<?php

namespace App\Models\StakeholderModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StakeholderModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "t_stakeholder";
    protected $guarded = [];
}
