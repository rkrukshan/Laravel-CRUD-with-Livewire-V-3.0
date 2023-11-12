<form>

    <div class="form-group">
        <label for="title" class="form-label">Title</label>
        <input wire:model='title' type="text" class="form-control" id="title" name="title">
        @error('title')
        
        <span class="text-danger alert alert-danger">{{ $message }}</span>

        @enderror
    </div>

    <div class="form-group">
        <label for="body" class="form-label">Body</label>
        <textarea wire:model='body' type="text" name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
        @error('body')
        
        <span class="text-danger alert alert-danger">{{ $message }}</span>
        @enderror
    </div>
    <center>
        <button wire:click.prevent="store()" type="submit" class="btn btn-success">Save</button>
    </center>
</form>
