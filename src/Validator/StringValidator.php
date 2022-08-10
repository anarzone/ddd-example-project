<?php

declare(strict_types=1);

namespace TradeNetwork\Validator;

class StringValidator
{
    public function validate(?string $string): bool{
        return is_string($string) && strlen($string) > 0;
    }
}
