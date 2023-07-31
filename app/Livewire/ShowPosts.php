<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Reactive;
use Illuminate\Support\Facades\Storage;

class ShowPosts extends Component
{
    #[Reactive]
    public Post $post;

    public function render()
    {
        return view('livewire.show-posts');
    }

    public function deletePost($id)
    {
        $post = Post::findOrFail($id);
        if($post){
            if($post->thumbnail && $post->thumbnail !== "thumbnails/download.png"){
                Storage::delete($post->thumbnail);
            }
            $post->delete();
        }
        return redirect(route('posts'));
    }
}
