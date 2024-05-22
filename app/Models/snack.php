<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class snack extends Model
{
    use HasFactory;
    protected $table = 'snacks';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'idUtente',
        'faSpuntino',
        'snackPreferiti',
        'colazionePranzo',
        'pranzoCena',
        'dopoCena'
    ];

    public function salvaPreferenzeSnack($preferenzSnack, $orariSnack) {
        $idUser = auth()->user()->idUtente;
        $preferenzeSnackUtente = snack::where('idUtente', $idUser);

        if(count($preferenzeSnackUtente->get()) != 0) {
            $preferenzeSnackUtente->delete();
        }

        $faSpuntino = false;
        $colazionePranzo = false;
        $pranzoCena = false;
        $dopoCena = false;
        if($orariSnack != null) {
            foreach($orariSnack as $orari) {
                if($orari == "colazione pranzo") {
                    $colazionePranzo = true;
                }
                if($orari == "pranzo cena") {
                    $pranzoCena = true;
                }
                if($orari == "dopo cena") {
                    $dopoCena = true;
                }
                $faSpuntino = true;
            }
        }

        snack::create([
            'idUtente' => $idUser,
            'faSpuntino' => $faSpuntino,
            'snackPreferiti' => DB::raw('"' . $preferenzSnack . '"'),
            'colazionePranzo' => $colazionePranzo,
            'pranzoCena' => $pranzoCena,
            'dopoCena' => $dopoCena
        ]);
    }
}
