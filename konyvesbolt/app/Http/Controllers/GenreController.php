<?php

namespace App\Http\Controllers;

use App\Models\genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        return view('genre.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            ['mufaj' => 'required|string'],
        );

        genre::create($request->all());
        return redirect()->back()->with('success', 'Genre stored');
    }
}
