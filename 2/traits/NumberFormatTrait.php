<?php

namespace Project\traits;

trait NumberFormatTrait
{

    /**
     * Формирует строку числа с разделителем тысяч
     */
    public function formatNumberWithSeparator(?float $amount, int $decimals = 2): string
    {

        if ($amount === null || !is_numeric($amount)) {
            return '';
        }

        return number_format($amount, $decimals, '.', '');

    }

}
