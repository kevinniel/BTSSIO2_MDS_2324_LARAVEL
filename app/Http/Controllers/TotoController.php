<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TotoController extends Controller
{
    public function index()
    {
        $models = User::all();
        $tata = 1;
        return view('toto.index', compact('models', 'tata'));
    }
}
