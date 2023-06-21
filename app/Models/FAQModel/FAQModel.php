<?php

namespace App\Models\FAQModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "t_faq";
    protected $guarded = [];
}
