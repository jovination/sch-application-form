@php
    $toasts = [
        'success' => ['type' => 'success', 'title' => 'Success'],
        'error' => ['type' => 'error', 'title' => 'Error'],
        'info' => ['type' => 'info', 'title' => 'Info'],
    ];
@endphp

@foreach ($toasts as $key => $toast)
    @if (session($key))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                toastr.{{ $toast['type'] }}(
                    "{{ session($key) }}",
                    "{{ $toast['title'] }}", {
                        timeOut: 5000,
                        closeButton: true,
                        debug: false,
                        newestOnTop: true,
                        progressBar: true,
                        positionClass: "toast-top-right",
                        preventDuplicates: true,
                        onclick: null,
                        showDuration: "300",
                        hideDuration: "1000",
                        extendedTimeOut: "1000",
                        showEasing: "swing",
                        hideEasing: "linear",
                        showMethod: "fadeIn",
                        hideMethod: "fadeOut",
                        tapToDismiss: false
                    }
                );
            });
        </script>
        @break
    @endif
@endforeach


@if ($errors->any())
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}", "Validation Error", {
                    positionClass: "toast-top-right",
                    timeOut: 5000,
                    closeButton: true,
                    progressBar: true
                });
            @endforeach
        });
    </script>
@endif


@if (session('toast'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let messages = {!! json_encode(session('toast')) !!};
            let delay = 500;

            messages.forEach((msg, i) => {
                setTimeout(() => {
                    Toastify({
                        text: msg,
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "#4f46e5", // Indigo
                    }).showToast();
                }, i * delay);
            });
        });
    </script>
@endif

@if (session('success'))
    <script>
        Toastify({
            text: "{{ session('success') }}",
            duration: 3000,
            gravity: "top",
            position: "right",
            backgroundColor: "#10b981", // Green
        }).showToast();
    </script>
@endif
