<div>
    @if(session()->has('alertmessage'))
    <div class="alert alert-success"><h3 style="color: rgb(81, 79, 79)"><center>{{ session('alertmessage') }}</center></h3></div>
    @endif
  @include("livewire.create")

<hr>
<table class=" table table-responsive">

   <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Body</th>
    <th>Action</th>
   </tr>
   <tr>
    <td>id</td>
    <td>title</td>
    <td>body</td>
    <td><button type="button" class="btn btn-outline-info">Edit</button></td>
    <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
   </tr>
   @endforeach

</table>

</div>

