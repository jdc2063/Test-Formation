<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convention extends Model
{
    use HasFactory;
    protected $table = "convention";

    // Montre les élèves lié à une convention
    public function etudiants_convention()
    {
        return $this->hasMany('App\Models\Etudiant', 'convention', 'idConvention');
    }

    static function ConventionOBJ($request) 
    {
        $convention = New Convention;
        $convention->nom = $request->nom;
        $convention->nbHeur = $request->nbHeur;
        return $convention;
    }
}
