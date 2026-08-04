<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    public const CATEGORY_BEHANDELING = 'behandeling';
    public const CATEGORY_SPA = 'spa';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category', 'name', 'description', 'image', 'webp_image',
    ];
}
