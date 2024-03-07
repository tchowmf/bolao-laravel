<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Race;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RacesController extends Controller
{
    public function getRaces(): View
    {
        $races = Race::all();

        return view('races.getRaces', compact('races'));
    }
}
