<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;

class FormationController extends Controller
{
    public function index(){
        $liste = Formation::all();
        return view('formation',['liste' => $liste]);
    }
}
