<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DriversController extends Controller
{
    public function getDrivers(): View
    {
        $drivers = Driver::all();

        return view('drivers.getDrivers', compact(['drivers']));
    }
}
