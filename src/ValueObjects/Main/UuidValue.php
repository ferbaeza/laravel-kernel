<?php

namespace Baezeta\Kernel\ValueObjects\Main;

use Ramsey\Uuid\Uuid;
use Baezeta\Kernel\ValueObjects\Interfaces\Value;
use Baezeta\Kernel\Exceptions\ValueObjects\UuidException;
use Baezeta\Kernel\ValueObjects\Base\CustomBaseValueObject;

class UuidValue extends CustomBaseValueObject implements Value
{
    public function __construct(
        public readonly string $uuid
    ) {
        if (!is_string($uuid)) {
            throw UuidException::drop($uuid);
        }

        if (!isUuid($uuid)) {
            throw UuidException::drop($uuid);
        }
    }

    public static function create(): self
    {
        return new self(Uuid::uuid4()->toString());
    }

    public function value(): mixed
    {
        return $this->uuid;
    }

}
