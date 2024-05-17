<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'idUtente';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'cognome',
        'peso',
        'altezza',
        'attivitaGiornaliera',
        'genere',
        'eta',
        'citta',
        'email',
        'password',
        'google_id',
        'durataPiano',
        'setup'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

}
