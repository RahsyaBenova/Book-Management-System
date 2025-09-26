<?php

namespace App\Livewire\Books;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Book;

class BookList extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
{
    $books = Book::query()
        ->where('title', 'like', '%'.$this->search.'%')
        ->orWhere('author', 'like', '%'.$this->search.'%')
        ->paginate(10);

    return view('livewire.books.book-list', [
        'books' => $books,
    ])->layout('layouts.app');
}

}
