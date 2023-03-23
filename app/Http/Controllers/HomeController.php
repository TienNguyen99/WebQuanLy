<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanQuan;
use App\Models\ThanhPhan;
use App\Models\User;
use DB;

class HomeController extends Controller
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
    public function index(Request $request)
    {
        $danquan = DanQuan::all();
        $thanhphan = ThanhPhan::all();
        $users = User::select("*")
        ->whereNotNull('last_seen')
        ->orderBy('last_seen', 'DESC')
        ->paginate(2);
        $counttongdq = DB::table('danquans')->count();
        $countdqtt = DB::table('danquans')
        ->where('thanhphan_id','2')
        ->count();
        $countdqcd = DB::table('danquans')
        ->where('thanhphan_id','4')
        ->count();
        $countdqkp = DB::table('danquans')
        ->where('thanhphan_id','14')
        ->count();
        $countdqrr = DB::table('danquans')
        ->where('thanhphan_id','16')
        ->count();
        // fill
        $range = \Carbon\Carbon::now()->subYears(15);
        $chart = DB::table('danquans')
        ->select(DB::raw('year(vaonam) as getYear'), DB::raw('COUNT(*) as value'))
        ->where('vaonam', '>=', $range)
        ->groupBy('getYear')
        ->orderBy('getYear', 'ASC')
        ->get();
        $chartraquan = DB::table('danquans')
        ->select(DB::raw('year(ranam) as getYear'), DB::raw('COUNT(*) as value'))
        ->where('ranam', '>=', $range)
        ->groupBy('getYear')
        ->orderBy('getYear', 'ASC')
        ->get();
                $charttuoi17 = DB::table('tuoi17s')
        ->select(DB::raw('year(vaonam) as getYear'), DB::raw('COUNT(*) as value'))
        ->where('vaonam', '>=', $range)
        ->groupBy('getYear')
        ->orderBy('getYear', 'ASC')
        ->get();
        


        return view('home',compact('counttongdq','users','danquan','thanhphan','countdqtt','countdqcd','countdqkp','countdqrr','chart','chartraquan','charttuoi17'));
    }
}
