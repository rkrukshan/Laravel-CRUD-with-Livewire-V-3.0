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
        $this->rese
    }

    private function resetInputFields()
    {
        $this->title='';
        $this->body='';
    }

    public function render()
    {
        return view('livewire.posts');
    }
}
