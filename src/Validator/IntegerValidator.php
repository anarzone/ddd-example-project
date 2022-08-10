<?php

declare(strict_types=1);

namespace TradeNetwork\Validator;

class IntegerValidator
{
    public function validate(?int $string): bool{
        return is_numeric($string);
    }
}
