<?php

namespace App\Http\Controllers\Adminas;

use App\Models\Conference;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();
        return view('admin.conferences.index', compact('conferences'));
    }

    public function create()
    {
        return view('admin.conferences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'location' => 'required',
        ]);

        Conference::create($request->all());
        return redirect()->route('admin.conferences')->with('success', 'Konferencija sukurta!');
    }

    public function edit($id)
    {
        $conference = Conference::findOrFail($id);
        return view('admin.conferences.edit', compact('conference'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'location' => 'required',
        ]);

        $conference = Conference::findOrFail($id);
        $conference->update($request->all());

        return redirect()->route('admin.conferences')->with('success', 'Konferencija atnaujinta!');
    }

    public function destroy($id)
    {
        $conference = Conference::findOrFail($id);
        if (strtotime($conference->date) < time()) {
            return redirect()->route('admin.conferences')->with('error', 'Negalite ištrinti, nes konferencija jau ivyko!');
        }

        $conference->delete();
        return redirect()->route('admin.conferences')->with('success', 'Konferencija ištrinta!');
    }
}
