<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('books.index', ['books' => Book::with('user')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('create', Book::class); // Ensure the user can create a book

        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|min:5',
            'description' => 'required',
            'BookCover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $attributes['user_id'] = Auth::id();

        if ($request->hasFile('BookCover')) {
            $imagePath = $request->file('BookCover')->store('BookCovers', 'public');
            $attributes['BookCover'] = Storage::url($imagePath);
        }

        Book::create($attributes);

        return redirect()->route(Auth::user()->is_admin ? 'admin' : 'books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        Gate::authorize('update', $book); // Ensure the user can edit the book

        return view('books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $attributes = $request->validate([
            'name' => 'required|min:5',
            'description' => 'required',
            'BookCover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('BookCover')) {
            // Delete the old cover if it exists
            if ($book->BookCover) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $book->BookCover));
            }
            $imagePath = $request->file('BookCover')->store('BookCovers', 'public');
            $attributes['BookCover'] = Storage::url($imagePath);
        } else {
            // Retain old cover if no new file is uploaded
            $attributes['BookCover'] = $book->BookCover; 
        }

        $book->update($attributes);

        return redirect()->route(Auth::user()->is_admin ? 'admin' : 'books.show', ['book' => $book]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        if ($book->BookCover) {
            Storage::disk('public')->delete(str_replace('/storage/', '', $book->BookCover));
        }
        $book->delete();

        return redirect()->route(Auth::user()->is_admin ? 'admin' : 'books.index');
    }
}
