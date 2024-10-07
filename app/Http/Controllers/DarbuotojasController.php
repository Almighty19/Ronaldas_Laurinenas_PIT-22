<?php

namespace App\Http\Controllers;

use App\Models\Conference;

class DarbuotojasController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();
        return view('employee.conferences.index', compact('conferences'));
    }

    public function show($id)
    {
        $conference = Conference::with('registrations')->findOrFail($id); // Gauti su registraca
        return view('employee.conferences.show', compact('conference'));
    }
}

