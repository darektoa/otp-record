<?php

namespace App\Http\Controllers;

use App\Models\OtpNumber;
use Illuminate\Http\Request;

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


    public function index()
    {
        $otpNumbers = OtpNumber::latest()->paginate(20);

        return view('home', compact('otpNumbers'));
    }
}
