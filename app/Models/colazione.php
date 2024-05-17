<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class colazione extends Model
{
    use HasFactory;

    protected $table = 'colazioni';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'idUtente',
        'faColazione',
        'alimentiPreferiti'
    ];

    public function salvaInfoColazione($preferenzSnack, $orariSnack) {
        $idUser = auth()->user()->idUtente;
        $preferenzeSnackUtente = colazione::where('idUtente', $idUser);

        if(count($preferenzeSnackUtente->get()) != 0) {
            $preferenzeSnackUtente->delete();
        }

        $faColazione = true;
        if($orariSnack == null) {
            $faColazione = false;
        }

        colazione::create([
            'idUtente' => $idUser,
            'faColazione' => $faColazione,
            'alimentiPreferiti' => DB::raw('"' . $preferenzSnack . '"')
        ]);
    }
}
