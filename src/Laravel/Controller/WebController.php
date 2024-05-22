<?php

namespace Baezeta\Kernel\Laravel\Controller;

use Baezeta\Kernel\Laravel\Controller\BaseController;

class WebController extends BaseController
{
    public function show()
    {
        return view('plantilla::index');
    }


}
