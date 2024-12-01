<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\Participant;
use Illuminate\Http\Request;

class DarbuotojasController extends Controller
{
    public function index()
    {

        $conferences = Conference::all();
        return view('employee.conferences.index', compact('conferences'));
    }

    public function show($id)
    {
        $conference = Conference::with('participants')->findOrFail($id);

        return view('employee.conferences.show', compact('conference'));
    }
}


