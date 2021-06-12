<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'title',
        'description',
        'color',
        'user_id',
        'team_id',
        'shared'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function fishs()
    {
        return $this->hasMany(Fish::class);
    }

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($school) { // before delete() method call this
            $school->fishs()->delete();
        });
    }
}
