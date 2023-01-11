<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntegrationCcxtController extends Controller
{
    protected $apiKey;
    protected $secretKey;

    public function __construct(Request $request) {
    }

    public function binance(Request $request) {

        $exchange =  new \ccxt\binance(array(
            'apiKey' => $request->get('apiKey'), // ←------------ replace with your keys
            'secret' =>  $request->get('secretKey'),
            'verbose' => false,
        ));
        $fetchBalance = $exchange->fetch_balance();
        return response($fetchBalance, 200);
    }

    public function load_markets() {
        $exchange = new \ccxt\binance();
        return response($exchange->load_markets(), 200);
    }

}
