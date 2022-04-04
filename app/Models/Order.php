<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Order extends Model
{

     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id', 'quantity', 'total_price'
    ];

    public function user()
    {
    return $this->belongsTo('App\Models\User','user_id');
    }       
}
