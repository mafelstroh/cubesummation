<?php

namespace cubesummation\Http\Controllers;

use Illuminate\Http\Request;

use cubesummation\Http\Requests;
use cubesummation\Http\Controllers\Controller;
use cubesummation\Matrix as Matrix;

class CubeController extends Controller
{
    /**
     * Retruns basic layout for initial configuration
     */
    public function create()
    {
        return view('cube.create');
    }

    public function configure(Request $request)
    {
        $matrix = new Matrix();

        /*$this->validate($request, [
            'nsize' => 'required|integer|between:1,1000',
            'msize' => 'required|integer|between:1,1000',
        ]);*/

        // Persist the pre-configured object
        $matrix->testcases = request('testcases');
        $matrix->n = request('nsize');
        $matrix->m = request('msize');
        $matrix->save();
        
        dd($matrix);
    }
}
