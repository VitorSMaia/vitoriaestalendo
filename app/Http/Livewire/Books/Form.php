<?php

namespace App\Http\Livewire\Books;

use App\Models\RecommendedBooks;
use App\Trait\showModal;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use showModal, WithFileUploads;

    public $state;

    public function convertSlug($str)
    {
            $str = strtolower(trim($str));
            $str = preg_replace('/[^a-z0-9-]/', '-', $str);
            $str = preg_replace('/-+/', "_", $str);
            return $str;
    }

    public function saveImage($photo)
    {
        return $photo->store('livros');
    }

    public function save()
    {
        // dd($this->state);

        $request = $this->state;
        // $request['slug'] = $this->convertSlug($request['title']);
        $request['image'] = $this->saveImage($request['photo']);

        $recommendedBooks = new RecommendedBooks;
        $recommendedBooks->create($request);
        // $this->closeModal();
        // $this->dispatchBrowserEvent('name-updated', ['modal' => 'false']);
    }

    public function render()
    {
        return view('livewire.books.form');
    }
}
