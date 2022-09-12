<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    //
    public function index($id)
    {

        $user = DB::table("user")->where('data', $id)->first();

        if ($user == null) {
            abort(404);
        }

        $data = DB::table($user->nama)->get();
        $hadir = DB::table($user->nama)->where('kehadiran', 'Ya')->get();
        $tidak =  DB::table($user->nama)->where('kehadiran', 'Tidak')->get();
        $total = DB::table($user->nama)->sum('jumlah');
        return view(
            'dashboard',
            [
                'user' => $user,
                'data' => $data,
                'hadir' => $hadir,
                'tidak' => $tidak,
                'total' => $total
            ]
        );
    }


    public function randomid()
    {
        $uid = Str::random(32);
        echo $uid;
    }
}
