<?php

namespace App\Http\Controllers\Good;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('good.create');
    }
}
