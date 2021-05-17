<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Session;
class Users extends Controller
{
    //
    function list()
    {
        $user = User::all();
        return view('userlist', ['user' => $user]);
    }
    function create()
    {

        return view('create');
    }
    function loginsubmit(Request $req)
    {

         User::select('*')->where(
            [
                ['email', '=', $req->email],
                ['password', '=', $req->password]
            ]
        )->get();
        $req->session()->put('logData', [$req->input()]);
        return redirect('/list');
        // return User::all();
        //print_r ($req->input());
        // return view('create');


    }
    public function createsubmit(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $result = $user->save();
        if ($result) {
            $req->session()->put('logData', [$req->input()]);
            return redirect('/list');
        }
    }
}
