<?php

namespace Baezeta\Kernel\Exceptions\Collections;

use Baezeta\Kernel\Exceptions\KernelBaseException;
use Baezeta\Kernel\Exceptions\Collections\CustomCollectionExceptions;

class CollectionBaseExceptions extends KernelBaseException
{
    protected static $messages = [
        CustomCollectionExceptions::class => CustomCollectionExceptions::MSG,
    ];

}
