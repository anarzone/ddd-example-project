<?php

declare(strict_types=1);

namespace TradeNetwork\Domain\Value;

use Nette\Schema\ValidationException;
use TradeNetwork\Validator\StringValidator;

class StringIdentifier
{
    private string $identifierString;

    private function __construct(string $identifierString)
    {
        $this->identifierString = $identifierString;
    }

    public static function createFromString(string $identifierString): self
    {
        $stringValidator = new StringValidator();

        if (!$stringValidator->validate($identifierString)) {
            throw new ValidationException('It is not valid string');
        }

        return new self($identifierString);
    }

    public function asString(): string
    {
        return $this->identifierString;
    }
}
