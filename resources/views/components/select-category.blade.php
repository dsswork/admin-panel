<div class="form-group">
    <label for="category">Category</label>
    <select name="category_id" id="category" class="form-control">
        @foreach($categories as $category)
        <option
            @selected($category->id===$categoryId)
            value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>
