<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
       "name",
       "price",
       "description",
    //    "category_id",
       "slug" ,
    ];

    //FUNZIONE SLUG
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = static::generateSlug($product->name);
        });
    }

    public static function generateSlug($name)
    {
        $baseSlug = Str::slug($name . ' ');

        $count = static::where('slug', $baseSlug)->count();

        if($count > 0){
            $uniqueIdentifier = Str::random(5); 
            return $baseSlug . '-' . $uniqueIdentifier;
        }

        return $baseSlug;
    }

    // RELAZIONI
    public function ebooks(): HasOne
    {
        return $this->hasOne(Ebook::class);
    }
    
}
