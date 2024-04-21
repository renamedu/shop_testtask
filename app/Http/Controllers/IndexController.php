<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Good;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $goods = Good::all();
        $categories = DB::table('goods')->select('category')->distinct()->pluck('category');
        return view('index', compact('goods', 'categories'));
    }
}
