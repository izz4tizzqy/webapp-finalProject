<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\users;

class page extends Controller


{

    public function input(){

        Return view ('pages.userview');
    }

    public function save(Request $req)
    {

       
        $users=new users;
        $users->name = request('name');
        $users->phone = request('phone');
        $users->hospital = request('hospital');
        $users->date = request('date');
        $users->time = request('time');
        $users->save();
        Return view ('output');

    }

}
