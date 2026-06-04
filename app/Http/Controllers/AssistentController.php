<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssistentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // View
        return view('Assistent.index', [
            'title' => 'Assistent Home',
        ]);
    }
}
