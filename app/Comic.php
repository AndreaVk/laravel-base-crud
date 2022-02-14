<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','description','series','thumb','sale_date','type','price'];
}
