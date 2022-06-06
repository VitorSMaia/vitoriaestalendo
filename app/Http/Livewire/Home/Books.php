<?php

namespace App\Http\Livewire\Home;

use App\Models\RecommendedBooks;
use Livewire\Component;
use StdClass;

class Books extends Component
{
    public function getBooks()
    {
        $RecommendedBooks = new RecommendedBooks;
        return $RecommendedBooks->get()->toArray();    
    }

    public function render()
    {
        $response = new StdClass;
        $response->books = $this->getBooks();

        return view('livewire.home.books',['response' => $response]);
    }
}
