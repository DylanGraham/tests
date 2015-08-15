<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SamplesController extends Controller
{
    public function index()
    {
        return view('samples');
    }
    public function create()
    {
        return view('samples.create');
    }
    public function store()
    {
        $input = Request::all();
        /* Check input here and then store to database if correct
           Batch::create($input) Maybe, if fields match..    */
        return redirect('samples');
    }
}
