<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;
use App\Models\Post;



class PostForm extends Form
{
    public ?Post $post;


    #[Rule('nullable|image|max:5024')] // 1MB Max
    public $image;

    #[Rule('required|min:5')]
    public $title = "";

    
    public $content = "";

    #[Rule('required')]
    public $slug = "";

    public $thumbnail = "thumbnails/download.png";


   
    public function setPost(Post $post)
    {
        $this->post = $post;
 
        $this->title = $post->title;
 
        $this->content = $post->content;
        $this->slug = $post->slug;
        $this->thumbnail = $post->thumbnail;
    }
 

    public function store()
    {
        if($this->image){
            $this->thumbnail = $this->image->store("thumbnails");
        }
        Post::create($this->all());
    }

    public function update()
    {
        if($this->image){
            $this->thumbnail = $this->image->store("thumbnails");
        }
        $this->post->update($this->all());
    }
}
