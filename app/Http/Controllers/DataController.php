<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Entete;
//use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(){
        $entetes = Entete::where('actif', true)->orderBy('id', 'DESC')->limit(1)->get()->toArray()[0] ?? [];
        $abouts = About::whereActif(true)->orderBy('id', 'DESC')->limit(1)->get()->toArray()[0] ?? [];
        return view("pages.index", compact('entetes', 'abouts'));

    }
}
