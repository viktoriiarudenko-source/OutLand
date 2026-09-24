<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavedExperience extends Model
{
    protected $table = 'saved_experiences';

    // La table saved_experiences n'a pas de created_at / updated_at
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'experience_id',
    ];

    // L'enregistrement appartient à un utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // L'enregistrement correspond à une expérience
    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }
}