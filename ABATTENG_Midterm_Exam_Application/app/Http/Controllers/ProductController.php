<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            [
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'year_published' => 1925,
                'price' => 15.99
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'year_published' => 1949,
                'price' => 12.50
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'year_published' => 1960,
                'price' => 14.25
            ],
            [
                'title' => 'The Catcher in the Rye',
                'author' => 'J.D. Salinger',
                'year_published' => 1951,
                'price' => 10.99
            ],
            [
                'title' => 'The Hobbit',
                'author' => 'J.R.R. Tolkien',
                'year_published' => 1937,
                'price' => 22.00
            ],
            [
                'title' => 'Brave New World',
                'author' => 'Aldous Huxley',
                'year_published' => 1932,
                'price' => 13.75
            ],
            [
                'title' => 'The Alchemist',
                'author' => 'Paulo Coelho',
                'year_published' => 1988,
                'price' => 16.50
            ],
            [
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'year_published' => 1813,
                'price' => 9.99
            ],
            [
                'title' => 'The Road',
                'author' => 'Cormac McCarthy',
                'year_published' => 2006,
                'price' => 18.00
            ],
            [
                'title' => 'Dune',
                'author' => 'Frank Herbert',
                'year_published' => 1965,
                'price' => 25.00
            ],
        ];
        return view('books', compact('data'));

    }
}
