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
    public function indexProvince()
    {
        return view("Country::country.index_province");
    }

    public function indexDistrict()
    {
        return view("Country::country.index_district");
    }

    public function indexWard()
    {
        return view("Country::country.index_ward");
    }
}