<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Attestation;
Use App\Models\Convention;
Use App\Models\Etudiant;

class HomeController extends BaseController
{
    public function home()
    {
        $etudiant = Etudiant::all();
        return view('welcome')->withEtudiants($etudiant);
    }

    public function etudiant()
    {
        $convention = Convention::all();
        return view('etudiant')->withConventions($convention);
    }

    public function convention()
    {
        return view('convention');
    }

    public function message(Request $request): JsonResponse
    {
        $id = $request->input('id');

        $etudiant = Etudiant::where('idEtudiant', '=', $id)->first();

        $convention = $etudiant->conventions_eleve;
        return response()->json([
            'convention' => $convention,
            'etudiant' => $etudiant
        ]);
    }
}
