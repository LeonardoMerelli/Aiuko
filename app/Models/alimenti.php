<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alimenti extends Model
{
    use HasFactory;
    protected $table = 'alimenti';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'idUtente',
        'alimento',
        'quantita'
    ];

    public function salvaAlimentiUtente($alimentiQuantita) {
        $alimentiQuantita = json_decode($alimentiQuantita);

        $idUser = auth()->user()->idUtente;
        
        for ($i = 0; $i < count($alimentiQuantita); $i += 2) {
            $alimento = $alimentiQuantita[$i];
            $quantita = $alimentiQuantita[$i + 1]; 
            alimenti::create([
                'idUtente' => $idUser,
                'alimento' => $alimento,
                'quantita' => $quantita
            ]);
        }
    }
}
