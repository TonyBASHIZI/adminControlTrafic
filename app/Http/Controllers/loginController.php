<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {

        return view("pages/login");
    } 
    function checklogin(Request $request)
    {
        $this->validate($request, [
            'user' => 'required',
            'pwd' => 'required|min:5'
        ]);


        $user_data = array(
            'username' => $request->get('user'),
            'password' => $request->get('pwd')
        );

        if (Auth::attempt($user_data)) {
            return redirect(url('access'));
            session(['admin' => 'user']);
        } else {
            return back()->to('error', 'Wrong login ');
        }
    }
}
