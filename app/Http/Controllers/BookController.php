<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(\Illuminate\Http\Request $req)
    {
        Book::create([
            'title'=> $req->title,
            'author' => $req->author,
            'publisher'=> $req->publisher,
            'year'=> $req->year,
        ]);
        return back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $books = DB::select('select * from books');
        return view('list', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('update', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, \Illuminate\Http\Request $req)
    {
        Book::findOrFail($id)->update([
            'title'=> $req->title,
            'author' => $req->author,
            'publisher'=> $req->publisher,
            'year'=> $req->year, 
        ]);

        $books = Book::all();
        return view('list', compact('books'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
