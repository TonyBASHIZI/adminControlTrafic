<?php

namespace App\Http\Controllers;

use App\{mouvement, users};
use Illuminate\Http\Request;

class allTraficController extends Controller
{
    public function index()
    {
        $all = mouvement::all();
        $nb = mouvement::count();
        $allAcces = users::all();
        $allSortie = mouvement::where("type_mvt", "Sortie")->count();
        $allENTRER = mouvement::where("type_mvt", "entrer")->count();
        return view("pages/allTrafic", compact('all', 'nb'), compact('allSortie', 'allENTRER', 'allAcces'));
    }
}
