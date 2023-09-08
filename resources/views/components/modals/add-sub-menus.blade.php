<div class="modal fade" id="addSubMenus" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <x-forms.post action="{{ route('menus.addSubMenus') }}">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="delete_title">Add Sub Menus</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="delete_text">Add Sub Menus?</p>
                    <input type="text" id="blockId" name="menu_id" hidden>
                    <input type="text" id="templateId" name="template_id" hidden>
                    <div class="form-group">
                        <label for="">Menus number</label>
                        <input class="form-control" name="number" type="number" value="1">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </div>
        </x-forms.post>
    </div>
</div>
