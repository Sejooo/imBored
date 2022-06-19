<?php

namespace App\Http\Controllers;




class BoredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = json_decode(file_get_contents('http://www.boredapi.com/api/activity/'));
        return view('index', compact('response'));
    }
}
