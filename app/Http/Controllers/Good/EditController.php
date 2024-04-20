<?php

namespace App\Http\Controllers\Good;

use App\Http\Controllers\Controller;
use App\Models\Good;

class EditController extends Controller
{
    public function __invoke(Good $good)
    {
        return view('good.edit', compact('good'));
    }
}
