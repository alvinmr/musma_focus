<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use App\Models\Waktu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $waktu = Waktu::first();
            if (now() > $waktu->waktu_mulai && now() < $waktu->waktu_selesai) {
                return $next($request);
            }
            return redirect('/soon');
        });
    }
    public function index()
    {
        $breadcrumbs = [
            ['link' => "dashboard", 'name' => "Dashboard"], ['name' => "Index"]
        ];
        $activity = Http::get('https://www.boredapi.com/api/activity/')->json();
        $waktu = Waktu::first();
        return view('content.peserta.homepage', compact('activity', 'breadcrumbs', 'waktu'));
    }

    public function voting()
    {
        $breadcrumbs = [
            ['link' => "dashboard", 'name' => "Dashboard"], ['name' => "Voting"]
        ];
        $kandidat = Kandidat::all();
        return view('content.peserta.voting', compact('breadcrumbs', 'kandidat'));
    }
}