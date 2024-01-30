<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // PRENDO LA DATA E ORA DI ADESSO, POI CONSIDERO SOLO LA DATA
        $today = Carbon::now()->toDateString();
        // TUTTI I TRENI DEL DATABASE
        $trains = Train::all();
        // SOLO I TRENI IN PARTENZA OGGI E IN ORDINE DI ORARIO CRESCENTE
        $trains_today = Train::where('data_partenza', '=', $today)->orderBy('orario_partenza')->get();

        // dd($trains, $trains_today);
        return view('welcome', compact('trains_today'));
    }
}
