<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        return view('request.index');
    }

    public function accept()
    {
        return view('request.accept');
    }

    public function reject()
    {
        return view('request.reject');
    }
}
