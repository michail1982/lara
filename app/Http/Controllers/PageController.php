<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    //
    public function showPage(Request $request, $page = 'index')
    {
        $view_name = 'page.' . $page;
        if (!View::exists($view_name)) {
            abort(404);
        }
        return view($view_name);
    }
}
