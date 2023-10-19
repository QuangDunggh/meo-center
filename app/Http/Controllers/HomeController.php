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
        $list = DB::select('SELECT T01_Ranking.KeywordNo, T01_Ranking.Ranking, M02_Keyword.Keyword, DATE(T01_Ranking.UpdateTime) AS UpdateTime, DATE(T01_Ranking.AddTime) AS AddTime
        FROM T01_Ranking 
        JOIN M02_Keyword 
        ON T01_Ranking.KeywordNo = M02_Keyword.KeywordNo
        ORDER BY T01_Ranking.Ranking ASC', []);

        $result = [];
        foreach ($list as $key => $value) {
            $title =  $value->Keyword . ' ' . $value->Ranking;

            $result[] = [
                "title" => $title,
                "start" => $value->AddTime,
                "end" => $value->UpdateTime,
                "ranking" => $value->Ranking
            ];
        }
    
        return view('welcome', ['events' => $result]);
    }

    public function getData(Request $request)
    {
       

        $monthAndYear = $request->monthAndYear;

        $arrayMonthAndYear = explode('-', $monthAndYear);

        $year = $arrayMonthAndYear[0];
        $month = $arrayMonthAndYear[1];
        // $result = DB::select('WITH recursive child(AnkenNo, OyaAnkenNo, AnkenName) AS(
        // SELECT AnkenNo, OyaAnkenNo,AnkenName 
        // FROM M01_Anken 
        // WHERE M01_Anken.AnkenNo = ?
        // UNION ALL SELECT M01_Anken.AnkenNo,M01_Anken.OyaAnkenNo,M01_Anken.AnkenName 
        // FROM M01_Anken,child 
        // WHERE M01_Anken.OyaAnkenNo = child.AnkenNo) 
        // SELECT AnkenNo, OyaAnkenNo, AnkenName 
        // FROM child', [1]);

        $list = DB::select('SELECT T01_Ranking.KeywordNo, T01_Ranking.Ranking, M02_Keyword.Keyword, DATE(T01_Ranking.UpdateTime) AS UpdateTime, DATE(T01_Ranking.AddTime) AS AddTime
        FROM T01_Ranking 
        JOIN M02_Keyword 
        ON T01_Ranking.KeywordNo = M02_Keyword.KeywordNo
        WHERE MONTH(T01_Ranking.UpdateTime) = ? AND YEAR(T01_Ranking.UpdateTime) = ? ORDER BY T01_Ranking.Ranking ASC', [$month, $year]);

        $result = [];
        foreach ($list as $key => $value) {
            $title = $value->KeywordNo . ' ' . $value->Keyword . ' ' . $value->Ranking;

            $result[] = [
                "title" => $title,
                "start_date" => $value->AddTime,
                "end_date" => $value->UpdateTime
            ];
        }

        return $result;
    }
}