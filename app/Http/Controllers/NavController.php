<?php

namespace cubesummation\Http\Controllers;

use Illuminate\Http\Request;

use cubesummation\Http\Requests;
use cubesummation\Http\Controllers\Controller;

class NavController extends Controller
{
    /**
     * Returns the main layout which acts as a placeholder for the application components
     * @return View layouts.main
     */
    public function index()
    {
        return view('layouts.main');
    }

    public function info()
    {
        return view('cube.info');
    }
}
