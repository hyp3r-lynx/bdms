<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\User;
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
    public function index()
    {
        return view('home');
    }

    public function bChart()
    {
    	$users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
    				->get();
        $year = 2021;
        $chart = Charts::database($users, 'bar', 'highcharts')
			      ->title("Profile Added Monthly")
			      ->elementLabel($year)
                  ->colors(['rgba(0,69,91,1)'])
                  ->loaderColor('rgba(0,69,91,1)')
                  ->xAxisTitle("Months")
                  ->yAxisTitle("Number of profile created")
                  ->dimensions(0,350)
			      ->responsive(false)
			      ->groupByMonth(date('Y'), true);


        return view('home',compact('chart'));
    }
}
