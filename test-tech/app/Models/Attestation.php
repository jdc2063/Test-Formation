<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attestation extends Model
{
    use HasFactory;
    protected $table = "attestation";
    
    public function etudiants()
    {
        return $this->hasOne('App\Models\Etudiant', 'etudiant', 'idEtudiant');
    }

    public function conventions()
    {
        return $this->hasOne('App\Models\Convention', 'convention', 'idConvention');
    }

    static function AttestationOBJ($request) 
    {
        $attestation = New Attestation;
        $convention_id = Convention::where('nom', '=', $request->convention)->first();
        $etudiant_id = Etudiant::where('idEtudiant', '=', $request->etudiant)->first();
        if ($convention_id == NULL) {
            return ("400");
        }
        if ($etudiant_id == NULL) {
            return ("400");
        }
        $attestation->message = $request->message;
        $attestation->etudiant = $request->etudiant;
        $attestation->convention = $convention_id->idConvention;
        return $attestation;
    }
}
