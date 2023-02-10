<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CurrencyExchangeController extends Controller
{
    public function index()
    {
        $response = Http::get('https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml');
        $xmldata = simplexml_load_string($response);
        $data = $xmldata;
        return view("exchange",compact("data"));
    }
}
