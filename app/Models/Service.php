<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    


 protected $fillable   = [
    'title',
    'price',
    'description',
    'category_id',
    'prestataire_id',
    'image_url',
    'duree'
 ];
  
 protected $guarded = [
     'id'        
 ]; 

 public function category()
{
    return $this->belongsTo(Category::class);
}

 public function prestataire()
{
    return $this->belongsTo(Prestataire::class);
}

public function orders()
{
    return $this->belongsToMany(Order::class)
        ->withPivot('quantity', 'price');
}

public function getDurationFormattedAttribute(): string
{
    $minutes = $this->duree;

    $days = floor($minutes / 1440);
    $hours = floor(($minutes % 1440) / 60);
    $mins = $minutes % 60;

    $parts = [];

    if ($days > 0) {
        $parts[] = $days . 'j';
    }

    if ($hours > 0) {
        $parts[] = $hours . 'h';
    }

    if ($mins > 0 && $days === 0) {
        $parts[] = $mins . 'min';
    }

    return implode(' ', $parts);
}
}
