<?php

namespace App\Modules\Candidate\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CandidateController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Candidate::index");
    }
}