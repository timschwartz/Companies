<?php

namespace timschwartz\Companies\models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'timschwartz_companies';

    public function employees()
    {
        return $this->belongsToMany('App\User', 'timschwartz_company_user');
    }

    public function phones()
    {
        return $this->belongsToMany('timschwartz\Phone', 'timschwartz_company_phone');
    }

}
