<?php

namespace App\Livewire;

use Livewire\Component;

class Posts extends Component
{
    public $title,$body;
    public function store()
    {
        $validated_data=$this->validate([
            'title'="re"
        ])
    }
    public function render()
    {
        return view('livewire.posts');
    }
}
