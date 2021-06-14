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

class ConventionController extends HomeController
{
    public function ShowAll()
    {
        return Convention::all();
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request ->all(), [
            'nom' => 'required',
            'nbHeur' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
            'message' => "A field is missing",
            ], 400);
        } else {           
            $convention = Convention::ConventionOBJ($request);
            $convention->save();
            return redirect('/home/convention');
        }      
    }
}
