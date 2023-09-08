<div class="form-group">
    <label for="type">Type</label>
    <select name="type" id="type" class="form-control">
        <option value="page" @selected(($type ?? '')=='page')>Page</option>
        <option value="menu" @selected(($type ?? '')=='menu')>Menu</option>
        <option value="general" @selected(($type ?? '')=='general')>General</option>
    </select>
</div>
