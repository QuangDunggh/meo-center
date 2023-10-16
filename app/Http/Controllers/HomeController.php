<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
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

    public function getData()
    {
        // $result = DB::select('WITH recursive child(AnkenNo, OyaAnkenNo, AnkenName) AS(
        // SELECT AnkenNo, OyaAnkenNo,AnkenName 
        // FROM M01_Anken 
        // WHERE M01_Anken.AnkenNo = ?
        // UNION ALL SELECT M01_Anken.AnkenNo,M01_Anken.OyaAnkenNo,M01_Anken.AnkenName 
        // FROM M01_Anken,child 
        // WHERE M01_Anken.OyaAnkenNo = child.AnkenNo) 
        // SELECT AnkenNo, OyaAnkenNo, AnkenName 
        // FROM child', [1]);
        $now = date('m-d-Y');
    
        $result = DB::select('SELECT T01_Ranking.KeywordNo, T01_Ranking.Ranking, M02_Keyword.Keyword 
        FROM T01_Ranking 
        JOIN M02_Keyword 
        ON T01_Ranking.KeywordNo = M02_Keyword.KeywordNo
        WHERE DATE(T01_Ranking.UpdateTime) = ? ORDER BY T01_Ranking.Ranking ASC', ['2023-01-31']);

        return $result;
    }
}