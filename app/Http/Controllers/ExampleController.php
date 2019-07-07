<?php

namespace App\Http\Controllers;

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

    public function generateKey()
    {
        return str_random(32);
    }

    public function getProfile()
    {
        return 'Route Profile';
    }

    //
}
