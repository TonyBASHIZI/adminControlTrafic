<?php

namespace App\Http\Controllers;

use App\{mouvement, traversant, avisRecherche};
use DateTime;
use Illuminate\Http\Request;

class welcomController extends Controller
{
    public function index()
    {
        $alltrav = traversant::count();
        $allmvt = mouvement::count();
        $allEntry = mouvement::where("type_mvt", "entrer")->count();
        $allSortie = mouvement::where("type_mvt", "Sortie")->count();
        $allNonAccess = traversant::where("statut", "Non autoriser")->count();
        $allAccess = traversant::where("statut", "Autoriser")->count();
        // dd($allmvt);
        return view("welcome", compact("alltrav", "allmvt", "allNonAccess"), compact("allSortie", "allEntry", "allAccess"));
    }
}
