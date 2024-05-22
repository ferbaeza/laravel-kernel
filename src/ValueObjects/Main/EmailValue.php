<?php

namespace Baezeta\Kernel\ValueObjects\Main;

use Baezeta\Kernel\Utils\Primitivos\StringUtils;
use Baezeta\Kernel\ValueObjects\Interfaces\Value;
use Baezeta\Kernel\ValueObjects\Base\CustomBaseValueObject;
use Baezeta\Kernel\Exceptions\ValueObjects\EmailInvalidoException;

class EmailValue extends CustomBaseValueObject implements Value
{
    public function __construct(
        private string $email
    ) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw EmailInvalidoException::drop();
        }

        $this->email = StringUtils::minusculas($email);
    }

    public function value(): string
    {
        return $this->email;
    }
}
