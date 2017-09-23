<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
        //relationship: one order belongs to one user
        return $this->belongsTo('App\User');
    }
}
