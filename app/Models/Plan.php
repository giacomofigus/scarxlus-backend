<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        "type",
        "personalized",
        "test_videocall",
        "send_photos",
        "workout_videocall",
        "product_id",
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
