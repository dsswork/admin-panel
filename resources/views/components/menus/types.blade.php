<div class="form-group">
    <label for="type">Type</label>
    <select name="type" id="type" class="form-control">
        <option value="header" @selected(($type ?? '')=='header')>Header</option>
        <option value="footer" @selected(($type ?? '')=='footer')>Footer</option>
    </select>
</div>
