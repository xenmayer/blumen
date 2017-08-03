<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Tag
 *
 * @mixin \Eloquent
 */
class Tag extends Model
{
    /**
     * {*@inheritdoc*}
     */
    protected $table = 'tags';

    /**
     * {*@inheritdoc*}
     */
    protected $fillable = [
        'name',
    ];
}