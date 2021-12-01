<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use App\Models\Voting;
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
            ['name' => "Dashboard"]
        ];
        $activity = Http::get('https://www.boredapi.com/api/activity/')->json();
        $waktu = Waktu::first();
        $nama_kandidat = Kandidat::pluck('nama')->toArray();
        $id_kandidat = Kandidat::pluck('id');
        $total_pemilih = [];
        foreach ($id_kandidat as $id) {
            array_push($total_pemilih, Voting::where('kandidat_id', $id)->count());
        }
        return view('content.peserta.homepage', compact('activity', 'breadcrumbs', 'waktu', 'nama_kandidat', 'total_pemilih'));
    }

    public function voting()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Dashboard"], ['name' => "Voting"]
        ];
        $kandidat = Kandidat::all();
        return view('content.peserta.voting', compact('breadcrumbs', 'kandidat'));
    }
}