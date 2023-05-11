<?php

namespace App\Http\Controllers;

use App\Imports\DataImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DataController extends Controller
{

    public function muestrapagina()
    {


        return view('welcome');
    }


    public function importar(Request $request)
    {
        Excel::import(new DataImport, $request->file('file'));
        return redirect('/')->with('success', 'All good!');
        ;
    }

}
