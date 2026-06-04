<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PraktijkmanagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // View
        return view('Praktijkmanagement.index', [
            'title' => 'Praktijkmanagement Home',
        ]);
    }
}
