<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sport extends Model
{
    use HasFactory;
    protected $table = 'sports';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'idUtente',
        'faSport',
        'livelloAttivita',
        'dataSport',
        'tempoSport'
    ];

    public function salvaSportUtente($faSport, $livello, $dateSport, $tempiSport) {
        $dateSport = json_decode($dateSport);
        $tempiSport = json_decode($tempiSport);

        $idUser = auth()->user()->idUtente;
        for ($i = 0; $i < count($dateSport); $i += 1) {
            sport::create([
                'idUtente' => $idUser,
                'livelloAttivita' => $livello,
                'faSport' => $faSport,
                'dataSport' => $dateSport[$i],
                'tempoSport' => $tempiSport[$i],
            ]);
        }
    }
}
