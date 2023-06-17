<?php

namespace App\Models\EventModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "t_event_master";
    protected $guarded = [];
}
