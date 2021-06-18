<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostLists extends Component
{
    use WithPagination;

    protected $listeners = ['create_post' => 'render'];

    public function render()
    {
        $posts = Post::latest()->paginate(10);
        return view('livewire.post-lists', compact('posts'));
    }

    public function delete($postID)
    {
        $post = Post::findOrFail($postID);
        $post->delete();

        $this->emit('posts');
    }
}
