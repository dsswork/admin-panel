<div class="modal fade" id="modal-download" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div>
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Download backup?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Download backup?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="{{ route('backups.download', compact(['backup'])) }}"
                       class="btn btn-primary">Download</a>
                </div>
            </div>
        </div>
    </div>
</div>
