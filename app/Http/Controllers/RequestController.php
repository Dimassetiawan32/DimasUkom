<?php

namespace App\Http\Controllers;
use App\Riquest;
use App\Stock;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        $stockbarangs = Stock::all();
        $requests = Riquest::all();
        return view('request.index',compact('stockbarangs', 'requests'));
    }

    public function accept()
    {
        $stockbarangs = Stock::all();
        $requests = Riquest::all();
        return view('request.accept',compact('stockbarangs', 'requests'));
    }

    public function reject()
    {
        $stockbarangs = Stock::all();
        $requests = Riquest::all();
        return view('request.reject',compact('stockbarangs', 'requests'));
    }

   
}
