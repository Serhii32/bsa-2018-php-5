<?php

namespace App\Services;

class GetPopularCurrenciesCommandHandler
{
    const POPULAR_COUNT = 3;

    private $currencyRepository;

    public function __construct(CurrencyRepositoryInterface $currencyRepository) {

        $this->currencyRepository = $currencyRepository;

    }

    public function handle(int $count = self::POPULAR_COUNT): array
    {

        $currencies = $this->currencyRepository->findAll();
        
        usort($currencies, function($firstCurrency, $secondCurrency)  {

            return (float)$firstCurrency->getPrice() < (float)$secondCurrency->getPrice();

        });
            
        return array_slice($currencies, 0, $count);

    }
}