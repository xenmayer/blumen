<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Post
 *
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Post onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Post withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Post withoutTrashed()
 * @mixin \Eloquent
 */
class Post extends Model
{
    use SoftDeletes;

    /**
     * {*@inheritdoc*}
     */
    protected $table = 'posts';

    /**
     * {*@inheritdoc*}
     */
    protected $fillable = [
        'name',
        'content',
    ];

    /**
     * {*@inheritdoc*}
     */
    public $timestamps = TRUE;
}