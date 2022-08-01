<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $data = DB::table("rajwa_dedi")->get();
        $hadir = DB::table("rajwa_dedi")->where('kehadiran', 'Ya')->get();
        $tidak =  DB::table("rajwa_dedi")->where('kehadiran', 'Tidak')->get();
        return view(
            'dashboard',
            [
                'data' => $data,
                'hadir' => $hadir,
                'tidak' => $tidak
            ]
        );
    }
}
