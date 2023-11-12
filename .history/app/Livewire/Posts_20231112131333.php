<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public $title,$body;
    public function store()
    {
        $validated_data=$this->validate([
            'title'=>"required",
            'body'=>"required"
        ]);
        Post::create($validated_data);
    }
    print function 
    public function render()
    {
        return view('livewire.posts');
    }
}