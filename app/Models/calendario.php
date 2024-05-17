<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calendario extends Model
{
    use HasFactory;
    protected $table = 'calendario';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'idUtente',
        'data',
        'tipoPasto',
        'opzionePasto',
        'tempoPasto'
    ];

    public function salvaImpegniUtente($date, $tipoPasti, $opzioniPasti, $tempiPasti) {
        $date = json_decode($date);
        $tipoPasti = json_decode($tipoPasti);
        $opzioniPasti = json_decode($opzioniPasti);
        $tempiPasti = json_decode($tempiPasti);

        $idUser = auth()->user()->idUtente;
        for ($i = 0; $i < count($date); $i += 1) {
            $tempo = 0;
            if($date[$i] != "" && $opzioniPasti[$i] != "Seleziona una voce" && $tipoPasti != "Seleziona una voce") {  
                if($tempiPasti[$i] != "") {
                    $tempo = $tempiPasti[$i];
                }  

                calendario::create([
                    'idUtente' => $idUser,
                    'data' => $date[$i],
                    'tipoPasto' => $tipoPasti[$i],
                    'opzionePasto' => $opzioniPasti[$i],
                    'tempoPasto' => $tempo
                ]);
            }
        }
    }
}
