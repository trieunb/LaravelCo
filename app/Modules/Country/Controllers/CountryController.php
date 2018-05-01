<?php

namespace App\Modules\Country\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Country::index");
    }
}