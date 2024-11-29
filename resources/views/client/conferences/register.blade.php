<?php
public function register(Request $request)
{
    return redirect('/')->with('status', 'Sveikinu prisijungus!');
}
