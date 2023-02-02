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
        ->paginate(3);
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
        // fill
        $range = \Carbon\Carbon::now()->subYears(5);
        $chart = DB::table('danquans')
        ->select(DB::raw('year(vaonam) as getYear'), DB::raw('COUNT(*) as value'))
        ->where('vaonam', '>=', $range)
        ->groupBy('getYear')
        ->orderBy('getYear', 'ASC')
        ->get();
        


        return view('home',compact('counttongdq','users','danquan','thanhphan','countdqtt','countdqcd','countdqkp','chart'));
    }
}
