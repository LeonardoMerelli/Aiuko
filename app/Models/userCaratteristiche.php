<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userIntollerances extends Model
{
    use HasFactory;
    protected $table = 'user_caratteristiche';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'idUtente',
        'caratteristica',
    ];

    public function salvaCaratteristicheUtente($caratteristiche) {
        $idUser = auth()->user()->idUtente;
        $caratteristicheUtente = userCaratteristiche::where('idUtente', $idUser);

        if(count($caratteristicheeUtente->get()) != 0) {
            $caratteristicheUtente->delete();
        }
        if(!is_null($caratteristiche)) {
            foreach($caratteristiche as $caratteristica) {
                userCaratteristiche::create([
                    'idUtente' => $idUser,
                    'caratteristica' => $caratteristica,
                ]);
            }
        }
    }
}
