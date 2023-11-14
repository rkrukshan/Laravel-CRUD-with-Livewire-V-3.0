<div>
    @if(session()->has('alertmessage'))
    <div class="alert alert-success"><h3 style="color: rgb(131, 129, 129)"><center>{{ session('alertmessage') }}
        <hr>
        <h5 class="alert-heading">Your Information Successfully Saved in Our System</h5></center></h3></div>
        @elseif(session()->has('alertmessageupdate'))
        <div class="alert alert-info"><h3 style="color: rgb(131, 129, 129)"><center>{{ session('alertmessageupdate') }}
            <hr>
            <h5 class="alert-heading">Your Information Successfully updated in Our System</h5></center></h3></div>
        @elseif(session()->has('alertmessagedelete'))
    <div class="alert alert-danger"><h3 style="color: rgb(131, 129, 129)"><center>{{ session('alertmessagedelete') }}
        <hr>
        <h5 class="alert-heading">Your Information Successfully deleted from Our System</h5></center></h3></div>
    @endif
    @if($edit_mode)
    @include("livewire.edit")
    @else
    @include("livewire.create")
    @endif

    <hr>
    <table class=" table table-responsive">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Action</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
            <td><button wire:click="edit({{ $post->id }})" type="button" class="btn btn-outline-info">Edit</button></td>
            <td><button wire: wire:click="delete({{ $post->id }})" type="button" class="btn btn-outline-danger">Delete</button></td>
        </tr>
        @endforeach
    </table>

</div>
