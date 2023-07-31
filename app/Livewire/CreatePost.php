<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\PostForm;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class CreatePost extends Component
{

    use WithFileUploads;


    public PostForm $form;


    public function submit()
    {
        $this->validate();
        $this->form->store();
        return $this->redirect(route("posts"));
    }

//    public function rendered($view,$html)
//    {
//        dd($view);
//        $this->js("
//        alert('aaa');
//            console.log(ClassicEditor);
//        ");
//    }

    public function updated($name, $value)
    {
        if($name === "form.title"){
            $this->form->slug = Str::slug($value);
        }
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
