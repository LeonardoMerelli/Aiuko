<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alimenti extends Model
{
    use HasFactory;
    protected $table = 'user_alimenti';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'idUtente',
        'alimento',
        'quantita'
    ];

    public function salvaAlimentiUtente($alimenti, $quantita) {
        $idUser = auth()->user()->idUtente;
        $alimentiUtente = userAlimenti::where('idUtente', $idUser);

        if(count($alimentiUtente->get()) != 0) {
            $alimentiUtente->delete();
        }
        foreach($aliemnti as $dieta) {
            userDiets::create([
                'idUtente' => $idUser,
                'dieta' => $dieta,
            ]);
        }
    }
}
