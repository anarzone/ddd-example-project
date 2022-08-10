<?php

declare(strict_types=1);

namespace TradeNetwork\Validator;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use TradeNetwork\Domain\Value\StringIdentifier;

class UserLoginValidator
{
    public function __construct(public ?User $user, public StringIdentifier $identifier)
    {
    }

    /**
     * @throws ValidationException
     */
    public function validate(): bool
    {
        if (!$this->user || !Hash::check($this->identifier->asString(), $this->user->password)) {
            throw ValidationException::withMessages([
                'credentials' => 'Credentials is not valid'
            ]);
        }

        return true;
    }
}
