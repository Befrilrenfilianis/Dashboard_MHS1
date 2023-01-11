<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    //
    public function index()
    {
        $Mahasiswa = Mahasiswa::count();
        return view('contents.dashboard.dashboard', compact('Mahasiswa'));

        // return view('contents.dashboard.dashboard', compact('data','treatment','mitra','vendor','usulan'));
    }

}
