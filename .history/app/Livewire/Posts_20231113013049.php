<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use WithPagination;


class Posts extends Component
{

    public $title,$body;
    public$posts;
    public $edit_mode=false;
    public $post_id;
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
    public function edit($id)

    {
        $this->edit_mode=true;
        $post=Post::find($id);
        $this->title=$post->title;
        $this->body=$post->body;
        $this->post_id=$id;
    }
    public function update()
    {
        $validated_data=$this->validate([
            'title'=>'required',
            'body'=>'required'
        ]);
        $post=Post::find($this->post_id);
        $post->update($validated_data);
        session()->flash('alertmessageupdate','Updated Successfully');
    }
    public function cancelUpdate()
    {
        $this->edit_mode=false;
        $this->resetInputFields();
    }
    public function delete($id)
    {
        $post=Post::find($id);
        $post->delete();
        session()->flash('alertmessagedelete','Deleted Successfully');
    }
    public function render()
    {
        $this->posts=Post::paginate();
        return view('livewire.posts');
    }
}
