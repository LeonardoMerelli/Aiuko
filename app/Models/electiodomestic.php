<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class electiodomestic extends Model
{
    use HasFactory;
    protected $table = 'electrodomestic';
    protected $primaryKey = 'idElettrodomestico';
    public $timestamps = false;

    protected $fillable = [
        'idUtente',
        'elettrodomestico',
    ];

    public function salvaElettrodomestici($elettrodomestici) {
        $idUser = auth()->user()->idUtente;
        $elettrodomesticiUtente = electiodomestic::where('idUtente', $idUser);

        if(count($elettrodomesticiUtente->get()) != 0) {
            $elettrodomesticiUtente->delete();
        }
        if(!is_null($elettrodomestici)) {
            foreach($elettrodomestici as $elettrodomestico) {
                electiodomestic::create([
                    'idUtente' => $idUser,
                    'elettrodomestico' => $elettrodomestico,
                ]);
            }
        }
    }
}
