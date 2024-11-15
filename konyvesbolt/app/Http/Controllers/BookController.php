<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create()
    {
        $genres = Genre::all();
        return view('books.create', compact('genres'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'cime' => 'required|string|max:255',
            'mufaj' => 'required|string|max:255',
            'szerzo' => 'required|string|max:255',
            'kiadas' => 'required|integer|min:1900|max:' . date('Y'),
            'genre_id' => 'required|exists:genres,id', 
        ]);

        Book::create($request->all());

        return redirect()->back()->with('success', 'Book added successfully.');
    }
}


