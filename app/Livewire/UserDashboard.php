<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;

class UserDashboard extends Component
{
    public $book;
    public $newBooks;

    public function mount()
    {
        $this->book = Book::count();
        $this->newBooks = Book::whereDate('created_at', '>=', now()->subDays(30))->count();
    }

    public function render()
    {
        return view('livewire.user-dashboard');
    }
}
