<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class admin extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\AdminFactory> */
    use HasFactory, Notifiable;

    protected $guarded = ['id_admins'];

    protected $hidden = [
        'password',
    ];

    protected $primaryKey = 'id_admin';

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
