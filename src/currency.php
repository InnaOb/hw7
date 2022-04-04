<?php

declare(strict_types=1);

namespace Currency;

class Currency
{
    private string $isoCode;

    private const CURRENCY_CODE = ['UAH', 'USD', 'EUR', 'GBP', 'JPY', 'CHF', 'CNY', 'RUB', 'AED', 'AFN', 'ALL', 'AMD', 'AOA', 'ARS', 'AUD', 'AZN', 'BDT', 'BGN', 'BHD', 'BIF', 'BND', 'BOB', 'BRL', 'BWP', 'BYN', 'CAD', 'CDF', 'CLP', 'COP', 'CRC', 'CUP', 'CZK', 'DJF', 'DKK', 'DZD', 'EGP', 'ETB', 'GEL', 'GHS', 'GMD', 'GNF', 'HKD', 'HRK', 'HUF', 'IDR', 'ILS', 'INR', 'IQD', 'IRR', 'ISK', 'JOD', 'KES', 'KGS', 'KHR', 'KPW', 'KRW', 'KWD', 'KZT', 'LAK', 'LBP', 'LKR', 'LYD', 'MAD', 'MDL', 'MGA', 'MKD', 'MNT', 'MRO', 'MUR', 'MVR', 'MWK', 'MXN', 'MYR', 'MZN', 'NAD', 'NGN', 'NIO', 'NOK', 'NPR', 'NZD', 'OMR', 'PEN', 'PHP', 'PKR', 'PLN', 'PYG', 'QAR', 'RON', 'RSD', 'SAR', 'SCR', 'SDG', 'SEK', 'SGD', 'SLL', 'SOS', 'SRD', 'SYP', 'SZL', 'THB', 'TJS', 'TMT', 'TND', 'TRY', 'TWD', 'TZS', 'UGX', 'UYU', 'UZS', 'VEF', 'VND', 'XAF', 'XDR', 'XOF', 'YER', 'ZAR', 'ZMK'];

    public function __construct(string $isoCode)
    {
        $this->setIsoCode($isoCode);
    }


    public function getIsoCode(): string
    {
        return $this->isoCode;
    }


    public function setIsoCode($isoCode): void
    {
        $isoCode = strtoupper($isoCode);
        $this->validate($isoCode);
        $this->isoCode = $isoCode;
    }

    private function validate($value)
    {
        if (!in_array($value, self::CURRENCY_CODE)) {
            throw new \Exception('This currency doesnt\'t exist');
        }
    }

    public function equals(Currency $currency): bool
    {
        return $this == $currency;
    }

}
//
//$cal = new Currency('UAH');
//$cal2 = new Currency('uah');
//var_dump($cal2);
//var_dump($cal->equals($cal2));
