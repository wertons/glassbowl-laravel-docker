<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'owner',
        'description',
        'user_id',
        'school_id'
    ];

    /*public function users()
    {
        return $this->hasMany(User::class);
    }*/

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('isOwner', 'joined');
    }

    public function schools()
    {
        return $this->HasMany(School::class);
    }
}
