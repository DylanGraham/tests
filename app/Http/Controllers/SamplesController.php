<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
