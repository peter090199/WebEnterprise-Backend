<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Userseminar extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'code',
        'transNo',
        'seminar_title',
        'seminar_provider',
        'date_completed',
    ];

}
