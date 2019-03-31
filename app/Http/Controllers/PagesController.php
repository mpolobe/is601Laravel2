<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home()
    {
        return view('pages.index');
    }

    function about()
    {
        return view('pages.about');
    }

    function contact()
    {
        return view('pages.contact');

    }

    function store(Request $request)
    {
        $name = $request ->name;
        return redirect()->route( 'thanks' , ['name' => $name ]);
    }
    function thanks(Request $request)
    {
        $name = $request ->name;

        return view('pages.thankyou')->with(compact('name'));

    }

    function login()
    {
        return view('pages.login');
    }

    function register()
    {
        return view('pages.register');
    }
}

