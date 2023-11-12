<form>

    <div class="form-group">
        <label for="title" class="form-label">Title</label>
        <input wire:model='title' type="text" class="form-control" id="title" name="title">
        <br>
        @error('title')
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
              
            </div>
        @enderror
        <br>
        <br>
    </div>

    <div class="form-group">
        <label for="body" class="form-label">Body</label>
        <textarea wire:model='body' type="text" name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
        <br>
        @error('body')
        <h5><span class="text-danger alert alert-danger d-flex align-items-center">{{ $message }}</span></h5>
        @enderror
    </div>
    <br>
        <br>
    <center>
        <button wire:click.prevent="store()" type="submit" class="btn btn-success">Save</button>
    </center>
</form>
