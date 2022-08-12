<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('site.pages.home');
    }

}
