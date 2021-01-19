<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
    function adminLogin()
    {
        return redirect('adminview');
    }



    function submitSymptom(Request $req)
    {
        $data= $req->input();
        return redirect('/input');
    }


}
