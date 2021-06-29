<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Nahid\Talk\Live\Broadcast;

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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $users = User::where('id', '!=', auth()->id())->latest()->paginate(User::PAGINATE_COUNT);

        return view('home', compact('users'));
    }
}
