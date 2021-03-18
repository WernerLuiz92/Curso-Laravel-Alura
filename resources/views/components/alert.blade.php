<div class="position-relative top-0 mt-3 me-3">
    <div class="position-absolute top-0 end-0" style="z-index: 5">
        <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
        @if ($errors->any())
            <script language="javascript">
                var autoClose = false;
            </script>
            <div class="d-flex alert-danger">
                <div class="toast-body p-3">
                    <p><strong>Erro: </strong><?php echo $autoClose; ?></p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <button type="button" class="btn-close btn-close-grey me-3 mt-3 position-absolute top-0 end-0" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        @else
            <script language="javascript">
                var autoClose = <?php echo $autoClose; ?>;
            </script>
            <div class="d-flex alert-{{ $type ?? 'info' }}">
                <div class="toast-body p-3">
                    <strong>{{ $strongMessage }}</strong> {{ $message ?? '' }}
                </div>
                <button type="button" class="btn-close btn-close-grey me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        @endif
        </div>
    </div>
</div>

@section('alert')
{{-- Toast Initialize --}}
<script>
    var option = {
        animation : true,
        delay : 5000,
        autohide : autoClose,
    }
    var toastElList = [].slice.call(document.querySelectorAll(".toast"));
    var toastList = toastElList.map(function (toastEl) {
        return new bootstrap.Toast(toastEl, option);
    });

    $(window).on("load", function(){
        toastList.forEach(toast => {
            toast.show();
        });
    })
</script>
@endsection