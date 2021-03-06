<?php

namespace App\Http\Controllers;
use App\Stock;
use App\Suplier;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stockbarangs = Stock::paginate(1);
        $stockbarangss = Stock::all();
        $supliers = Suplier::all();
        return view('dashboard.index', compact('supliers', 'stockbarangs', 'stockbarangss'));
    }
}
