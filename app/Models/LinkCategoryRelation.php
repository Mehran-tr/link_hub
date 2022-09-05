<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LinkCategoryRelation extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        "link_id",
        "category_id"
    ];
    protected $hidden = [
        "created_at",
        "updated_at"
    ];
}
