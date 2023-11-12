<form>

    <div class="form-group">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title">
        @error('title')
        <span class="text_danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="body" class="form-label">Body</label>
        <textarea type="text" name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
        @error('body')
        <span class="text-danger"> }}</span>
        @enderror
    </div>
    <center>
        <button type="submit" class="btn btn-success">Save</button>
    </center>
</form>
