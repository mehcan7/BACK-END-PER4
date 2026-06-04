<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // View
        return view('Patient.index', [
            'title' => 'Patient Home',
        ]);
    }
}
