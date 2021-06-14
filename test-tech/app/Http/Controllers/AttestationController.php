<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
Use App\Models\Attestation;
Use App\Models\Convention;
Use App\Models\Etudiant;

class AttestationController extends HomeController
{

    // Affiche toutes les attestations
    public function ShowAll()
    {
        return Attestation::all();
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request ->all(), [
            'message' => 'required',
            'etudiant' => 'required',
            'convention' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
            'message' => "A field is missing",
            ], 400);
        } else {           
            $attestation = Attestation::AttestationOBJ($request);
            if ($attestation == "400") {
                return response()->json([
                    'message' => "Convention ou Etudiant non existant",
                ], 400);
            }
            $attestation->save();
            return redirect('/home');
        }      
    }
}
