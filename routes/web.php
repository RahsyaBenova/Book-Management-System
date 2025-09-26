<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Livewire\Books\BookList;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


use App\Livewire\Books\BookList;
use Illuminate\Support\Facades\Route;

// Route::get('/books', \App\Livewire\Books\BookList::class);
Route::get('/books', BookList::class)->name('books.index');
use App\Models\Book;

Route::get('/', function () {
    return view('welcome', [
        'book' => Book::count(), // total buku
        'newBooks' => Book::whereDate('created_at', '>=', now()->subDays(30))->count(), // buku 30 hari terakhir
    ]);
})->name('welcome');

