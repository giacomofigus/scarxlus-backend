<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ebook extends Model
{
    use HasFactory;
    protected $fillable = [
        "file_path",
        "date_release",
        "images",
        "level",
        "equipment",
        "prerequisites",
        "weeks",
        "product_id",
    ];

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
