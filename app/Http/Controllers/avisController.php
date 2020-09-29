<?php

namespace App\Http\Controllers;

use App\{avisRecherche, traversant};
use Illuminate\Http\Request;

class avisController extends Controller
{
    public function index()
    {

        $allCl = traversant::all();
        return view('pages/avis', compact('allCl'));
    }
}
