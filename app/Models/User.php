<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 'email', 'password', 'xp', 'category_scores',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'category_scores' => 'array',
    ];

    public function getRankAttribute()
    {
        if ($this->xp < 1500) {
            return 'Quiz Apprentice';
        } elseif ($this->xp < 5000) {
            return 'Average Quizer';
        } elseif ($this->xp < 10000) {
            return 'Epic Quizer';
        } else {
            return 'Quiz Master';
        }
    }
}