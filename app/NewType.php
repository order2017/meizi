<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewType extends Model
{
    protected $primaryKey = 'new_type_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'new_type_name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
