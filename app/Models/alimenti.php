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
        $alimentiUtente = alimenti::where('idUtente', $idUser);

        if(count($alimentiUtente->get()) != 0) {
            $alimentiUtente->delete();
        }
        foreach($alimentiUtente as $alimento) {
            alimenti::create([
                'idUtente' => $idUser,
                'alimento' => $alimento,
            ]);
        }
    }
}
