<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use App\Models\User;
use App\Models\Voting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $breadcrumbs = [
            ['link' => "dashboard", 'name' => "Dashboard"], ['name' => "Index"]
        ];
        $activity = Http::get('https://www.boredapi.com/api/activity/')->json();
        $pemilih = User::doesntHave('roles')->get()->count();
        $kandidat = Kandidat::all()->count();
        $suara_masuk = Voting::all()->count();
        return view('content.home', ['breadcrumbs' => $breadcrumbs, 'activity' => $activity, 'pemilih' => $pemilih, 'kandidat' => $kandidat, 'suara_masuk' => $suara_masuk]);
    }
}