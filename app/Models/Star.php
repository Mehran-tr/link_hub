<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Star extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = [
        "star",
        "link_id"
    ];
    protected $hidden = [
        "created_at",
        "updated_at"
    ];

}
