<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprenant;

class ApprenantController extends Controller
{
    // liste des apprenants
    public function index(){
        $liste = Apprenant::all();
        return view('liste',['liste' => $liste]);
    }
}
