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
        'opzionePasto',
        'tempoPasto'
    ];

    public function salvaImpegniUtente($date, $opzioniPasti, $tempiPasti) {
        $date = json_decode($date);
        $opzioniPasti = json_decode($opzioniPasti);
        $tempiPasti = json_decode($tempiPasti);

        $idUser = auth()->user()->idUtente;
        
        for ($i = 0; $i < count($date); $i += 1) {
            $tempo = 0;
            
            if($date[$i] != "" && $opzioniPasti[$i] != "Seleziona una voce") {  
                if($tempiPasti[$i] != "") {
                    $tempo = $tempiPasti[$i];
                }  
                calendario::create([
                    'idUtente' => $idUser,
                    'data' => $date[$i],
                    'opzionePasto' => $opzioniPasti[$i],
                    'tempoPasto' => $tempo
                ]);
            }
        }
    }
}
