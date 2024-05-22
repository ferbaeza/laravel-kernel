<?php

namespace Baezeta\Kernel\Laravel\Controller;

use App\Http\Controllers\Controller;
use Baezeta\Kernel\ValueObjects\Main\UuidValue;
use Baezeta\Kernel\ValueObjects\Main\FechaValue;

class CustomBaseController extends Controller
{
    protected string $id;
    protected $fecha;

    public function __construct()
    {
        $this->id = UuidValue::create();
        $this->fecha = FechaValue::create();
    }
}
