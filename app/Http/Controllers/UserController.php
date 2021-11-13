<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            ['link' => "dashboard", 'name' => "Dashboard"], ['name' => "Master Data"], ['name' => "Data Pemilih"]
        ];
        return view('content.pemilih.index', compact('breadcrumbs'));
    }
}