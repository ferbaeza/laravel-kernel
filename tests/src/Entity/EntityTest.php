<?php

namespace Baezeta\Test\src\Entity;

use Baezeta\Kernel\Entity\EntityBase;
use Baezeta\Test\KernelTestCase;

class EntityTest extends KernelTestCase
{
    public function testEntity(): void
    {
        $persona = new Persona("Juan", "Perez");
        $this->assertEquals("Juan", $persona->name);
        $this->assertEquals("Perez", $persona->lastName);
    }

}



class Persona extends EntityBase
{
    public function __construct(
        public readonly string $name,
        public readonly string $lastName,
    )
        {
    }

}