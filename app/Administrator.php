<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    const ADMIN_STATUS_ONE = '10';

    const ADMIN_ID = '1';

    protected $primaryKey = 'admin_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'admin_name',
        'password',
        'admin_status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

}
