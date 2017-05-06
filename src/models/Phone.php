<?php

namespace timschwartz\Companies\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Phone extends Model
{
    public function people()
    {
        return $this->belongsToMany('App\User', 'timschwartz_user_phone');
    }

    public function companies()
    {
        return $this->belongsToMany('App\Company', 'timschwartz_company_phone');
    }

    public function from_messages()
    {
        return $this->hasMany('App\SMS', 'From', 'number');
    }

    public function to_messages()
    {
        return $this->hasMany('App\SMS', 'To', 'number');
    }
}

