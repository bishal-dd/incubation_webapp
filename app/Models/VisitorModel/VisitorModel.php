<?php

namespace App\Models\VisitorModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "t_visitors";
    protected $guarded = [];
}
