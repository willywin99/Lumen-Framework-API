<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function generateKey()
    {
        return Str::random(32);
    }

    public function fooExample()
    {
        return 'Example Controller from POST Request';
    }

    public function getUser($id)
    {
        return 'User id = ' . $id;
    }

    public function getPost($cat1, $cat2)
    {
        return 'Category 1 = ' . $cat1 . ' Category 2 = ' . $cat2;
    }
}
