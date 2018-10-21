<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return 'Here are the books...';
    }

    public function show($title)
    {
        return 'Results for the book: '.$title;
    }
}
