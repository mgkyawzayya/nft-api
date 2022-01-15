<?php

namespace App\Http\Controllers;

use App\Category;
use App\Crypto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $nfts = Crypto::count();
        $attributes = Category::count();
        return view('index', compact(['nfts', 'attributes']));
    }

    /**
     *
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $nfts = Crypto::count();
        $attributes = Category::count();
        return view('index', compact(['nfts', 'attributes']));
    }
}
