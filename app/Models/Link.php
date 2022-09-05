<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Link extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = [
        "title",
        "description",
        "author",
        "resource_url",
        "status",
        "lang",
        "total_click",
    ];
    protected $hidden = [
        "created_at",
        "updated_at"
    ];
}
