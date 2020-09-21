<?php

namespace App\Clients;

use App\Stock;
use Illuminate\Support\Facades\Http;

class Target implements Client {

    public function checkAvailability(Stock $stock): StockStatus{
        return Http::get('http://foo.test')->json();
    }

}