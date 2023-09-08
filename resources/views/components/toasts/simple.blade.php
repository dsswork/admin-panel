@if ($message = session('message'))
<div id="toastsContainer" class="toasts-top-right fixed">
    <div class="toast bg-{{ session('type') }} fade show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="mr-auto">{{ session('type')=='dark' ? 'Failed' : 'Success' }}</strong>
            <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close" onclick="removeToast()">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="toast-body">{!!  $message !!}</div>
    </div>
</div>
@endif

<script>
    function removeToast() {
        let toast = document.querySelector('#toastsContainer')
        if (toast) {
            toast.remove()
        }

    }

    setTimeout(removeToast, 5000);
</script>
