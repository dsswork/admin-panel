<div class="modal fade" id="modal-delete-item" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <x-forms.delete action="{{ route('admin.destroy') }}">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="delete_title">Delete Item</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" name="model" id="delete_model" hidden>
                    <input type="text" name="id" id="delete_id" hidden>
                    <p id="delete_text">Delete Item?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </x-forms.delete>
    </div>
</div>
