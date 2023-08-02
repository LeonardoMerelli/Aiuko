<?php

namespace App\Rules;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class EmailRule implements Rule
{
    private $emailInUso;

    public function passes($value)
    {
        $user = auth()->user();
        if (!is_null($user)) {
            $this->emailInUso = User::where('idUtente', '!=', $user->idUtente)->where('email', $value)->exists();
        } else {
            $this->emailInUso = User::where('email', $value)->exists();
        }
        return preg_match('/^.*@.*\..*$/', $value) && !$this->emailInUso;

    }

    public function message()
    {
        if ($this->emailInUso) {
            return 'L\'email inserita è già in uso.';
        } else {
            return 'L\'email inserita deve essere valida (sia @ che .).';
        }
    }
}

           
        