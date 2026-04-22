<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'cin_path',
        'certificat_path',
        'prestataire_id',
        'type'
    ];

    protected $guarded = [
        'id'
    ];
}
