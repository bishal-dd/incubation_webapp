<?php

namespace App\Models\DocumentModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "t_documents";
    protected $guarded = [];
}
