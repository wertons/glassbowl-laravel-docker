<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    protected $fillable = [
        'title',
        'description',
        'url',
        'school_id'
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
