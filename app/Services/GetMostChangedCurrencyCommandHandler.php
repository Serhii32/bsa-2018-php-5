<?php

namespace App\Services;

class GetMostChangedCurrencyCommandHandler
{

	private $currencyRepository;
    
    public function __construct(CurrencyRepositoryInterface $currencyRepository) {

        $this->currencyRepository = $currencyRepository;

    }

    public function handle(): Currency
    {

        $currencies = $this->currencyRepository->findAll();

        usort($currencies, function($firstCurrency, $secondCurrency)  {

            return (float)$firstCurrency->getDailyChangePercent() < (float)$secondCurrency->getDailyChangePercent();

        });
            
       return $currencies[0];

    }
}