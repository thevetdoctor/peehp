<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwitController extends Controller
{
    //
    function getTwit()
    {
        return [
            'name' => 'obafemi', 
            'email' => 'thevetdoctor@gmail.com', 
            'username' => 'oba'
        ];
    }
}
