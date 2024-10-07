<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();
        return view('admin.conferences.index', compact('conferences'));
    }

    public function create()
    {
        return view('admin.conferences.create'); // Atvaizduoti kūrimo formą
    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {
        $conference = Conference::findOrFail($id);
        return view('admin.conferences.edit', compact('conference')); // Atvaizduoti redagavimo formą
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}

