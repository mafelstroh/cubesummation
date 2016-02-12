<?php

namespace cubesummation\Http\Controllers;

use Illuminate\Http\Request;

use cubesummation\Http\Requests;
use cubesummation\Http\Controllers\Controller;
use Validator;
use Toast;

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
        // Initial data has not been configured
        if (!session()->has('isCreated')) {
            // Simple validation to get right the params
            $validator = Validator::make($request->all(), [
                'testcases' => 'required|integer|between:1,10',
                'nsize'     => 'required|integer|between:1,100',
                'msize'     => 'required|integer|between:1,1000'
            ]);
            // Validator helpers
            if ($validator->fails()) {
                $strError = "";

                foreach ($validator->errors()->all() as $error) {
                    $strError .= $error;
                }
                toast()->error($error);
            }
            else {
                // Caching data on session to persist it
                session()->put('isCreated', true);
                session()->put('testcases', $request->get('testcases'));
                session()->put('nsize',     $request->get('nsize'));
                session()->put('msize',     $request->get('msize'));
                // Toast
                toast()->success('Initial parameters configured successfully');

                return view('cube.operate');
            }
        }
        return view('cube.create');
    }
}
