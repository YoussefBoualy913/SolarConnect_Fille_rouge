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
}
