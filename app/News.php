<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    const PAGE_LIMIT = 15;

    protected $primaryKey = 'new_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'new_title',
        'new_picture',
        'new_content',
        'new_type',
        'new_order',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
