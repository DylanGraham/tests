<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Sample;

class SamplesController extends Controller
{
    public function index()
    {
        $samples = Sample::all();
        return view('samples')->with('samples', $samples);
    }
    public function create()
    {
        return view('samples.create');
    }
    public function store()
    {
        $input = Request::all();

        // Check input here and then store to database if correct

        Sample::create($input);
        return redirect('samples');
    }
}
