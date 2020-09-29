<?php

namespace App\Http\Controllers;

use App\users;
use Illuminate\Http\Request;

class accessController extends Controller
{
    public function index()
    {
        $all = users::all();
        // dd($all);
        return view('pages/accesSystem', compact('all'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'usertag' => 'required',
            'pwdtag' => 'required',
            'mvt' => 'required',
            'etat' => 'required'
        ]);
        $add = new users();
        $add->username = $request->input('usertag');
        $add->password = $request->input('pwdtag');
        $add->tag = $request->input('mvt');
        $add->etat = $request->input('etat');
        $add->save();

        return redirect(url('access'))->with('message', 'success');
    }
}
