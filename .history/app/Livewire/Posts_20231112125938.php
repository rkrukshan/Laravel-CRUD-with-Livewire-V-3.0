<?php

namespace App\Livewire;

use Livewire\Component;

class Posts extends Component
{
    public $title,$body;
    $validated_data
    public function render()
    {
        return view('livewire.posts');
    }
}
