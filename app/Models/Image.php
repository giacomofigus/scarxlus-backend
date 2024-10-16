<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Image extends Model
{
    use HasFactory;

    protected $fillable = ['file_path', 'ebook_id'];

    public function ebook(): BelongsTo
    {
        return $this->belongsTo(Ebook::class);
    }
}
