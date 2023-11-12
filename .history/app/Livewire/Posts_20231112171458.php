<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public $title,$body;
    public$posts;
    public
    public function store()
    {
        $validated_data=$this->validate([
            'title'=>"required",
            'body'=>"required"
        ]);
        Post::create($validated_data);
        session()->flash('alertmessage','Saved Successfully');
        $this->resetInputFields();
    }

    private function resetInputFields()
    {
        $this->title='';
        $this->body='';
    }

    public function render()
    {
        $this->posts=Post::all();
        return view('livewire.posts');
    }
}