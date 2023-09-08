<div class="modal fade" id="modal-restore" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <x-forms.post action="{{ route('backups.restore', ['backup' => $model]) }}">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Restore backup?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Restore backup?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Restore</button>
                </div>
            </div>
        </x-forms.post>
    </div>
</div>
