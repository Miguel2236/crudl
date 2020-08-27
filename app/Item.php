<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $table = 'items_cataloge';
    protected $fillable = ['name','stock','price','id_category'];
}
