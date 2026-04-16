<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    protected $fillable = [
        'price',
        'quantity'
    ];

 public function services()
{
    return $this->belongsToMany(Service::class)
        ->withPivot('quantity', 'price');
}
}
