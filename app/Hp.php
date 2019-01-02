<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hp extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'produk', 'content'
    ];
    protected $dates = ['deleted_at'];
}