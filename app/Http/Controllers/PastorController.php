<?php

namespace App\Http\Controllers;

use App\Models\Pastor;
use Illuminate\Http\Request;

class PastorController extends Controller
{
    //
 
    public function index()//nama ini ditulis di router sebagai 'index'
    {
        return view('home', [
            'pastors' => Pastor::index()
        ]);
    }

}
