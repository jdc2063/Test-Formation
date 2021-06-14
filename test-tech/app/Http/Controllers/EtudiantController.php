<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Attestation;
Use App\Models\Convention;
Use App\Models\Etudiant;

class EtudiantController extends HomeController
{
    public function ShowAll()
    {
        return Etudiant::all();
    }

    // Affiche un étudiant
    public function ShowById($id)
    {
        return Etudiant::where('idEtudiant', '=', $id)->first();
    }

    public function StudentForConvention($id_convention)
    {
        return Convention::where('idConvention', '=', $id_convention)->first()->etudiants_convention;
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request ->all(), [
            'nom' => 'required',
            'prenom' => 'required',
            'mail' => 'required',
            'convention' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
            'message' => "A field is missing",
            ], 400);
        } else {           
            $etudiant = Etudiant::etudiantOBJ($request);
            if ($etudiant == "400") {
                return response()->json([
                    'message' => "Convention non existant",
                ], 400);
            }
            $etudiant->save();
            return redirect('/home/etudiant');
        }      
    }
}
