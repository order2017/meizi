<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{

    protected $primaryKey = 'product_type_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_type_name',
        'product_type_pid',
        'product_type_path',
        'product_type_sort'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
