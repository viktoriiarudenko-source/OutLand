<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experiences';

    // Une expérience appartient à un utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Une expérience appartient à une destination
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}