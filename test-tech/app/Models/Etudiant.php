<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $table = "etudiant";

    //Voir la convention lié à l'étudiant
    public function conventions_eleve()
    {
        return $this->hasOne('App\Models\Convention', 'idConvention', 'convention');
    }

    static function EtudiantOBJ($request) 
    {
        $etudiant = New Etudiant;
        $convention_id = Convention::where('idConvention', '=', $request->convention)->first();
        if ($convention_id == NULL) {
            return ("400");
        }
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->mail = $request->mail;
        $etudiant->convention = $request->convention;
        return $etudiant;
    }
}
