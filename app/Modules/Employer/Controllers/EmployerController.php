<?php

namespace App\Modules\Employer\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Employer::index");
    }
}