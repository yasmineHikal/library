<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //

    public function store()
    {

        $book = Book::create([
            'title' => \request('title'),
            'author' => \request('author')
        ]);
    }
}
