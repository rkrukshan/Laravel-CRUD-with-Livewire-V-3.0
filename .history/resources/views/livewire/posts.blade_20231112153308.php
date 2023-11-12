<div>
    @if(session()->has('alertmessage'))
    <div class="alert alert-success"><h3 style="color: rgb(81, 79, 79)"><center>{{ session('alertmessage') }}
        <hr> <h5 class="alert-heading">Your Information Successfully Saved in Our System</h5></center></h3></div>
    @endif
  @include("livewire.create")
  @include("livewire.create")

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
    <td><button type="button" class="btn btn-outline-info">Edit</button></td>
    <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
   </tr>
   @endforeach
</table>

</div>

