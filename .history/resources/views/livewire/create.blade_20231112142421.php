<form>

    <div class="form-group">
        <label for="title" class="form-label">Title</label>
        <input wire:model='title' type="text" class="form-control" id="title" name="title">
        <br>
        @error('title')
        <span class=" alert alert-danger">{{ $message }}</span>
        @enderror
        <br>
        <br>
    </div>

    <div class="form-group">
        <label for="body" class="form-label">Body</label>
        <textarea wire:model='body' type="text" name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
        <br>
        @error('body')
        <span class=" alert alert-danger">{{ $message }}</span>
        @enderror
    </div>
    <br>
        <br>
    <center>
        <button wire:click.prevent="store()" type="submit" class="btn btn-success">Save</button>
    </center>
</form>
