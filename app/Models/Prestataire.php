<?php

namespace App\Models;

use App\PrestataireStatus;
use Illuminate\Database\Eloquent\Model;

class Prestataire extends Model
{
    protected $fillable = [
      'status',
      'user_id',
      'company_name'
    ];


    protected $guarded = [
        'id'
    ];

    protected $casts = [
    'status' => PrestataireStatus::class,
    ];

    public function user()
    {
    return $this->belongsTo(User::class);
    }

    public function documents()
   {
    return $this->hasMany(Document::class);
   }
    public function services()
   {
    return $this->hasMany(Service::class);
   }

}
