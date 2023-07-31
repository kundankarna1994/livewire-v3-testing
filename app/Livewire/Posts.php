<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;

    public $selected;


    public function selectPost(Post $post)
    {
        $this->selected = $post;
    }

    public function deSelectPost()
    {
        $this->selected = null;
    }


    public function mount()
    {
        $this->selected = Post::latest()->first();
    }

    public function render()
    {
        return view('livewire.posts')->with([
            'posts' => Post::latest()->paginate(10),
        ]);
    }
}
