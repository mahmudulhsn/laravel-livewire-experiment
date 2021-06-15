<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostLists extends Component
{
    use WithPagination;

    public function render()
    {
        $posts = Post::paginate(10);
        return view('livewire.post-lists', compact('posts'));
    }
}
