<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use SoftDeletes, HasSlug;

    protected $guarded = [];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeSale($query)
    {
        return $query->where('is_sale', true);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPrice()
    {
        return 'Rp. ' .amount_international_with_comma($this->price);
    }

    public function getDiscount()
    {
        return '-' .$this->discount.'%';
    }

    public function getPriceBeforeDiscount()
    {
        return 'Rp. ' .amount_international_with_comma($this->price_before_sale);
    }
}
