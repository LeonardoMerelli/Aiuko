<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userIntollerances extends Model
{
    use HasFactory;
    protected $table = 'user_intollerances';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'idUtente',
        'intolleranza',
    ];

    public function salvaIntolleranzeUtente($intolleranze) {
        $idUser = auth()->user()->idUtente;
        $intolleranzeUtente = userIntollerances::where('idUtente', $idUser);

        if(count($intolleranzeUtente->get()) != 0) {
            $intolleranzeUtente->delete();
        }
        foreach($intolleranze as $intolleranza) {
            userIntollerances::create([
                'idUtente' => $idUser,
                'intolleranza' => $intolleranza,
            ]);
        }
    }
}
