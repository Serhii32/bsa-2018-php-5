<?php

namespace App\Services;

use App\Services\Currency;

class CurrencyGenerator
{
    public static function generate(): array
    {
        
        return [
        	new Currency(1, "Bitcoin", 6658.28, "https://s2.coinmarketcap.com/static/img/coins/16x16/1.png", 1.35), 
        	new Currency(2, "Ethereum", 473.71, "https://s2.coinmarketcap.com/static/img/coins/16x16/1027.png", 2.15),
        	new Currency(3, "XRP", 0.473783, "https://s2.coinmarketcap.com/static/img/coins/16x16/52.png", 1.60),
        	new Currency(4, "Bitcoin Cash", 728.74, "https://s2.coinmarketcap.com/static/img/coins/16x16/1.png", 1.30),
        	new Currency(5, "EOS", 8.66, "https://s2.coinmarketcap.com/static/img/coins/16x16/1.png", 2.49),
        	new Currency(6, "Litecoin", 83.13, "https://s2.coinmarketcap.com/static/img/coins/16x16/1.png", 1.04),
        	new Currency(7, "Stellar", 0.207120, "https://s2.coinmarketcap.com/static/img/coins/16x16/1.png", 2.95),
        	new Currency(8, "Cardano", 0.143530, "https://s2.coinmarketcap.com/static/img/coins/16x16/1.png", 1.25),
        	new Currency(9, "IOTA", 1.08, "https://s2.coinmarketcap.com/static/img/coins/16x16/1.png", -2.03),
        	new Currency(10, "Tether", 1.00, "https://s2.coinmarketcap.com/static/img/coins/16x16/1.png", -0.18)
        ];

    }
}