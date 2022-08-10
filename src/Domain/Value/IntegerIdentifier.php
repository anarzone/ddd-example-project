<?php

declare(strict_types=1);

namespace TradeNetwork\Domain\Value;

use TradeNetwork\Validator\IntegerValidator;

class IntegerIdentifier
{
    private int $intIdentifier;

    private function __construct(int $identifierInteger)
    {
        $this->intIdentifier = $identifierInteger;
    }

    public static function createFromInteger(int $intIdentifier): self
    {
        $identifierInteger = new IntegerValidator();

        if (!$identifierInteger->validate($intIdentifier)) {
            throw new \Exception('not valid integer');
        }

        return new self($intIdentifier);
    }

    public function asInt(): int
    {
        return $this->intIdentifier;
    }
}
