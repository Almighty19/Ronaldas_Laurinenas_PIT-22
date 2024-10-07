<?php
namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class KlientasController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();
        return view('client.conferences.index', compact('conferences'));
    }



    public function show($id)
    {
        $conference = Conference::findOrFail($id);
        return view('client.conferences.show', compact('conference'));
    }

    public function register(Request $request)
    {
    }
}


