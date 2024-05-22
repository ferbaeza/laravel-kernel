<?php

namespace Baezeta\Kernel\Entity;

use Baezeta\Kernel\Entity\CustomBaseEntity;

class EntityBase extends CustomBaseEntity
{
    public function serialize(): mixed
    {
        return get_object_vars($this);
    }
}
