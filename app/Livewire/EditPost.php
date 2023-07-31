<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\PostForm;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\Post;

class EditPost extends Component
{

    use WithFileUploads;


    public PostForm $form;


    public function mount(Post $post)
    {
        $this->form->setPost($post);
    }
 

    public function submit()
    {
        $this->validate();
        $this->form->update();
        return $this->redirect(route("posts"));
    }

    public function updated($name, $value)
    {
        if($name === "form.title"){
            $this->form->slug = Str::slug($value);
        }
    }

    public function render()
    {
        return view('livewire.edit-post');
    }
}
