<form>
<h3 class="head"><center>Update Your Data</center></h3>
    <div class="form-group">
        <label for="title" class="form-label">Title</label>
        <input wire:model='title' type="text" class="form-control" id="title" name="title">
        <br>
        @error('title')
        <h5><span class="text-danger alert alert-danger d-flex align-items-center">{{ $message }}</span></h5>
        @enderror
        <br>
        <br>
    </div>

    <div class="form-group">
        <label for="body" class="form-label">Body</label>
        <input type="text" wire:model='body' type="text" name="body" id="body" class="form-control" cols="30" rows="10">
        <br>
        @error('body')
        <h5><span class="text-danger alert alert-danger d-flex align-items-center">{{ $message }}</span></h5>
        @enderror
    </div>
    <br>
        <br>
    <center>
        <button wire:click.prevent="update()" type="submit" class="btn btn-success">Update</button>
        <button wire:click.prevent="cancel()" type="submit" class="btn btn-danger">Cancel</button>
    </center>
</form>
