<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Race;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function getResults(): View
    {
        $races = Race::all();

        return view('results.getRacesResult', compact('races'));
    }

    public function getRank(): View
    {
        $users = User::orderBy('points', 'DESC')->get();

        return view('rank.getRank', compact('users'));
    }

    public function getRaceResult($country): View
    {
        switch ($country) {
            case 'BAHREIN':
                return view('results.getResultBahrein2024');
                break;
            case 'ARÁBIA SAUDITA':
                return view('results.getResultJeddah2024');
                break;
            case 'AUSTRÁLIA':
                return view('results.getResultAustralia2024');
                break;
            /*case 'JAPÃO':
                return view('guess.getJapao2024');
                break;
            case 'CHINA':
                return view('guess.getChina2024');
                break;
            case 'MIAMI':
                return view('guess.getMiami2024');
                break;
            case 'EMILIA ROMAGNA':
                return view('guess.getEmilia2024');
                break;
            case 'MÔNACO':
                return view('guess.getMonaco2024');
                break;
            case 'CANADÁ':
                return view('guess.getCanada2024');
                break;
            case 'ESPANHA':
                return view('guess.getEspanha2024');
                break;
            case 'ÁUSTRIA':
                return view('guess.getAustria2024');
                break;
            case 'INGLATERRA':
                return view('guess.getInglaterra2024');
                break;
            case 'HUNGRIA':
                return view('guess.getHungria2024');
                break;
            case 'BÉLGICA':
                return view('guess.getBelgica2024');
                break;
            case 'HOLANDA':
                return view('guess.getHolanda2024');
                break;
            case 'ITÁLIA':
                return view('guess.getItalia2024');
                break;
            case 'AZERBAIJÃO':
                return view('guess.getAzerbaijao2024');
                break;
            case 'SINGAPURA':
                return view('guess.getSingapura2024');
                break;
            case 'ESTADOS UNIDOS':
                return view('guess.getEua2024');
                break;
            case 'MÉXICO':
                return view('guess.getMexico2024');
                break;
            case 'BRASIL':
                return view('guess.getBrasil2024');
                break;
            case 'LAS VEGAS':
                return view('guess.getVegas2024');
                break;
            case 'QATAR':
                return view('guess.getQatar2024');
                break;
            case 'ABU DHABI':
                return view('guess.getAbu2024');
                break;*/
            // Adicione mais casos para outras cidades aqui, conforme necessário
            default:
                abort(404); // Tratar se a cidade não for reconhecida
                break;
        }
    }
}
