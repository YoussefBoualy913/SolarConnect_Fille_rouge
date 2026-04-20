<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    protected $fillable = [
        'status',
        'client_id',
        'total_price'
    ];

 public function services()
{
    return $this->belongsToMany(Service::class,'order_items')
        ->withPivot('quantity', 'price')
        ->withTimestamps();
}

public function client()
{
    return $this->belongsTo(User::class, 'client_id')
        ->where('role', 'client');
}
}
