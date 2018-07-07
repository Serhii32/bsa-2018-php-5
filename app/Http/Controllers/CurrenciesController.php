<?php

namespace App\Http\Controllers;

use App\Services\CurrencyRepositoryInterface;
use App\Services\GetMostChangedCurrencyCommandHandler;
use App\Services\GetPopularCurrenciesCommandHandler;
use App\Services\CurrencyPresenter;

class CurrenciesController extends Controller
{
    private $currencyRepository;
    
    public function __construct(CurrencyRepositoryInterface $currencyRepository) {

        $this->currencyRepository = $currencyRepository;

    }

    public function getCurrencies() {

        $jsonCurrencies = [];

        foreach ($this->currencyRepository->findAll() as $currency) {

            $jsonCurrencies[] = CurrencyPresenter::present($currency);

        }

        return response()->json($jsonCurrencies);

    }

    public function getUnstableCurrency() {

        $unstableCurrency = (new GetMostChangedCurrencyCommandHandler($this->currencyRepository))->handle();

        $jsonCurrency = CurrencyPresenter::present($unstableCurrency);

        return response()->json($jsonCurrency);

    }

    public function getPopularCurrencies() {

        $popularCurrencies = (new GetPopularCurrenciesCommandHandler($this->currencyRepository))->handle();

        return view("popular_currencies", compact("popularCurrencies"));

    }
}
