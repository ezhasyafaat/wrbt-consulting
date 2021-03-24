<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Ahli;
use Illuminate\Http\Request;

class AhliController extends Controller
{
    public function index()
    {
        $dataAhli   = Ahli::all();
        return view('frontend.ahli.index', ['data' => $dataAhli]);
    }

    public function show($id)
    {
        $dataAhli   = Ahli::where('id', $id)->first();
        return view('frontend.ahli.show', ['data' => $dataAhli]);
    }
}
