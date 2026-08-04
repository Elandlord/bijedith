<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class PricingTier extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price_cents', 'position',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'price_cents' => 'integer',
        'position'    => 'integer',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'formatted_price',
    ];

    public function getFormattedPriceAttribute(): string
    {
        $euros = intdiv($this->price_cents, 100);
        $cents = $this->price_cents % 100;

        if (0 === $cents) {
            return sprintf('€ %d,-', $euros);
        }

        return sprintf('€ %d,%02d', $euros, $cents);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('position')->orderBy('id');
    }
}
