<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class UserController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function About(Request $request)
    {
        return view('about');
    }

    public function faq(Request $request)
    {
        return view('faq');
    }


    public function contact(Request $request)
    {
        return view('contact');
    }

    public function home(Request $request)
    {
        return view('home');
    }

    public function investmentplans(Request $request)
    {
        return view('investmentplans');
    }

    public function register(Request $request)
    {
        return view('register');
    }
    public function services(Request $request)
    {
        return view('services');
    }
    public function login(Request $request)
    {
        return view('login');
    }
    
    public function stocks(Request $request)
    {
        return view('stocks');
    }
    public function cryptocurrencies(Request $request)
    {
        return view('cryptocurrencies');
    }
    public function forex(Request $request)
    {
        return view('forex');
    }
    public function realestate(Request $request)
    {
        return view('realestate');
    }
    public function escrowservices(Request $request)
    {
        return view('escrowservices');
    }
    public function personalloans(Request $request)
    {
        return view('personalloans');
    }
    public function nonfarmpayroll(Request $request)
    {
        return view('nonfarmpayroll');
    }
}
