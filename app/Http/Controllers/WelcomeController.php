<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\About;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $dataContent = [
            'about' => About::first(),
            'team'  => Team::all(),
        ];
        return view('welcome', ['data' => $dataContent]);
    }
}
