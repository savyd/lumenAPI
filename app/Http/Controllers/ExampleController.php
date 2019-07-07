<?php

namespace App\Http\Controllers;


use \Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('age', ['except' => ['generateKey']]);
    }

    public function generateKey(Request $request)
    {
        $mth = $request->method();
        $pth = $request->path();
        return str_random(32) ."<br>". $mth ."<br>". $pth;
    }

    public function getProfile()
    {
        return 'Route Profile';
    }

    //
}
