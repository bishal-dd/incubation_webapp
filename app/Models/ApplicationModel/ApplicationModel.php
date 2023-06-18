<?php

namespace App\Models\ApplicationModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "t_application";
    protected $guarded = [];
}
