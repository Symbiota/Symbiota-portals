<?php

namespace PhpOffice\PhpSpreadsheet\Style\NumberFormat\Wizard;

enum CurrencyNegative
{
    case minus;
    case redMinus;
    case parentheses;
    case redParentheses;

    public function start(): string
    {
        return match ($this) {
            self::minus, self::redMinus => '-',
<<<<<<< HEAD
            self::parentheses, self::redParentheses => '\\(',
=======
            self::parentheses, self::redParentheses => '\(',
>>>>>>> origin
        };
    }

    public function end(): string
    {
        return match ($this) {
            self::minus, self::redMinus => '',
<<<<<<< HEAD
            self::parentheses, self::redParentheses => '\\)',
=======
            self::parentheses, self::redParentheses => '\)',
>>>>>>> origin
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::redParentheses, self::redMinus => '[Red]',
            self::parentheses, self::minus => '',
        };
    }
}
