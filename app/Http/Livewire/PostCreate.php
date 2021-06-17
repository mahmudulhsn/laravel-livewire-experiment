<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostCreate extends Component
{
    public $title;
    public $description;

    protected $rules = [
        'title' => 'required|min:6',
        'description' => 'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.post-create');
    }

    public function store()
    {
        $validatedData = $this->validate();
        Post::create($validatedData);

        $this->reset();

        $this->emit('create_post');
        $this->dispatchBrowserEvent('post-added');
    }
}
