<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\Guess;
use App\Models\Race;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class GuessController extends Controller
{
    public function getGuess(): View
    {
        $races = Race::all();

        return view('guess.getGuess', compact('races'));
    }

    public function getForm()
    {
        $drivers = Driver::all();

        return view('guess.getForm', compact('drivers'));
    }

    public function postGuess(Request $request)
    {
        // Validar os campos do formulário
        $validator = Validator::make($request->all(), [
            'code' => 'required|string|max:21',
            'pole' => 'required|string|max:21',
            'first' => 'required|string|max:21',
            'second' => 'required|string|max:21',
            'third' => 'required|string|max:21',
        ]);

        // Verificar se a validação falhou
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::where('code', $request->code)->first();

        // Se nenhum usuário for encontrado com o código fornecido
        if (!$user) {
            return back()->with('error', 'Código do usuário incorreto.');
        }

        // Criar e salvar o palpite no banco de dados
        $guess = new Guess();
        $guess->user_id = $user->id;
        $guess->race_id = $request->race_id;
        $guess->pole = $request->pole;
        $guess->first = $request->first;
        $guess->second = $request->second;
        $guess->third = $request->third;
        $guess->save();

        return back()->with('success', 'Palpite enviado com sucesso.');
    }


    public function getRaceGuess($city): View
    {
        switch ($city) {
            case 'BAHREIN':
                return view('guess.getGuessBahrein2024');
                break;
            case 'ARÁBIA SAUDITA':
                return view('guess.getGuessJeddah2024');
                break;
            case 'AUSTRÁLIA':
                return view('guess.getGuessAustralia2024');
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
