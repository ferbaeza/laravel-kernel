<?php

namespace Baezeta\Test\src\Collection;

use Baezeta\Test\KernelTestCase;
use Baezeta\Kernel\Entity\EntityBase;
use Baezeta\Kernel\Collection\CollectionBase;

class CollectionTest extends KernelTestCase
{
    public function testCollection(): void
    {
        $collection = new PersonaCollection();
        $personaUno = new Persona("Juan", "Perez");
        $personaDos = new Persona("Pedro", "Gomez");

        $collection->add($personaUno);
        $collection->add($personaDos);

        $this->assertEquals(2, $collection->count());
        $this->assertEquals($personaUno, $collection->get(0));
    }
}



class PersonaCollection extends CollectionBase
{
    protected $type = Persona::class;
}

class Persona extends EntityBase
{
    public function __construct(
        public readonly string $name,
        public readonly string $lastName,
    ) {
        parent::__construct();
    }
}
