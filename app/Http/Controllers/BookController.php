<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        return view('book.index');
    }

    public function show()
    {
        // キャッシュにデータが存在しない場合、クエリを発行する
        // $books = Cache::get('books', function () {
        //     return Book::get();
        // });

        if (!Cache::has('books')) {
            // キャッシュにデータが存在しない場合、クエリを発行して、キャッシュに追加する
            $books = Cache::remember('books', 10, function () {
                return Book::get();
            });
        } else {
            $books = Cache::get('books');
        }

        return view('book.show')
            ->with([
                'books' => $books,
            ]);
    }
}
