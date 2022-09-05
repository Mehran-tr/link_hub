<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LinkTagRelation extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        "link_id",
        "tag_id"
    ];
    protected $hidden = [
        "created_at",
        "updated_at"
    ];

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
