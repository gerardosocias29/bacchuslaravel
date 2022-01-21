<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $queryString = http_build_query([
            'access_key' => '7fbd1b887380e5b3c5c1557bb757a66d'
        ]);

        $ch = curl_init(sprintf('%s?%s', 'http://api.marketstack.com/v1/tickers/aapl/eod', $queryString));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($ch);
        curl_close($ch);

        $apiResult = json_decode($json, true);

        $datas = $apiResult['data'];
        $labels = [];
        $data = [];
        foreach ($datas['eod'] as $key => $eod) {
            $date = date_create($eod['date']);
            array_unshift($labels, date_format($date,"M d, Y"));
            array_unshift($data, $eod['close']);
        }



        $chartjs = app()->chartjs
            ->name('lineChartTest')
            ->type('line')
            ->size(['width' => 400, 'height' => 200])
            ->labels($labels)
            ->datasets([
                [
                    "label" => $datas['name'],
                    'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => $data,
                ]
            ])
            ->options([
                "scales" => [
                    "xAxes" => ["display" => false]
                ]
            ]);

        return view('home', compact('chartjs', 'data'));
    }
}
