<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'rating',
        'comment',
        'client_id',
        'service_id'
    ];




public function client()
{
    return $this->belongsTo(User::class, 'client_id')
        ->where('role', 'client');
}

public function service()
{
    return $this->belongsTo(Service::class);
}
}
