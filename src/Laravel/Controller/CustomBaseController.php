<?php

namespace Baezeta\Kernel\Laravel\Controller;

use App\Http\Controllers\Controller;
use Baezeta\Kernel\ValueObjects\Main\ClassValue;
use Baezeta\Kernel\ValueObjects\Main\FechaValue;

/** @phpstan-ignore-next-line */
class CustomBaseController extends Controller
{
    protected ClassValue $id;
    protected FechaValue $fecha;

    public function __construct()
    {
        $this->id = ClassValue::create();
        $this->fecha = FechaValue::create();
    }
}
