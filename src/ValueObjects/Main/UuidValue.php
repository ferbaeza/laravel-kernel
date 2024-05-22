<?php

namespace Baezeta\Kernel\ValueObjects\Main;

use Illuminate\Support\Str;
use Baezeta\Kernel\ValueObjects\Interfaces\Value;
use Baezeta\Kernel\Exceptions\ValueObjects\UuidException;
use Baezeta\Kernel\ValueObjects\Base\CustomBaseValueObject;

class UuidValue extends CustomBaseValueObject implements Value
{
    public function __construct(
        public readonly string $uuid
    )
        {
        if (!str($uuid)->isUuid()) {
            throw UuidException::drop($uuid);
        }
    }

    public static function create(): self
    {
        return new self(Str::uuid());
    }

    public function value(): mixed
    {
        return $this->uuid;
    }

}
