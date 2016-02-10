<?php

namespace cubesummation\Http\Controllers;

use Illuminate\Http\Request;

use cubesummation\Http\Requests;
use cubesummation\Http\Controllers\Controller;

class CubeController extends Controller
{
    /**
     * 
     */
    public function create()
    {
        return view('cube.create');
    }
}
