<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitor extends Model
{
    protected $fillables  = [

        'firstname',
        'lastname',
        'number',
        'email',
        'profession',
        'host',
        'purpose'


    ];
}
