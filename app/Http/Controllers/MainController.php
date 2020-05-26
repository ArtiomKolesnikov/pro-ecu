<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __construct()
    {
        // Можно вот так
        $this->middleware('auth');
    }

    public function index()
    {
        return view('welcome');
    }


    // или вот так
    public function store(Request $request)
    {
        if ($request->user()->can('create-tasks')) {
            //Code goes here
        }
    }

    public function destroy(Request $request, $id)
    {
        if ($request->user()->can('delete-tasks')) {
            //Code goes here
        }

    }
}
