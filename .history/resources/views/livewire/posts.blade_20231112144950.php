<div>
    @if(session()->has('alertmessage'))
    <div class="alert alert-success"><h3 style="color: rgb(81, 79, 79)"><center>{{ session('alertmessage') }}</center></h3></div>
    @endif
  @include("livewire.create")
</div>

<hr>
<table class="table-responsive">
   <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Body</th>
    <th>Action</th>
   </tr>
   <tr></tr>
</table>
