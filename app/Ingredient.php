<?php

namespace Webcipe;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','quantity','measurement'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];
}