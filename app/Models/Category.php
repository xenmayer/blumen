<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Category
 *
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Category onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Category withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Category withoutTrashed()
 * @mixin \Eloquent
 */
class Category extends Model
{
    use SoftDeletes;

    /**
     * {*@inheritdoc*}
     */
    protected $table = 'categories';

    /**
     * {*@inheritdoc*}
     */
    protected $fillable = [
        'name',
    ];

    /**
     * {*@inheritdoc*}
     */
    public $timestamps = TRUE;
}