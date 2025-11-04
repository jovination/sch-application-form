@props([
    'label' => 'Submit',
    'type' => 'submit',
    'variant' => 'primary', // default to btn-primary
    'id' => 'submitBtn',
])

@php
    $classes = 'btn btn-' . $variant . ' ' . ($attributes->get('class') ?? '');
@endphp

<button type="{{ $type }}" id="{{ $id }}" class="{{ $classes }}" {{ $attributes->except('class') }}>
    <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true"></span>
    <span class="btn-label">{{ $label }}</span>
</button>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const forms = document.querySelectorAll('form');

        forms.forEach(form => {
            form.addEventListener('submit', function() {
                const submitBtn = form.querySelector('button[type="submit"]');
                const spinner = submitBtn?.querySelector('.spinner-border');
                const label = submitBtn?.querySelector('.btn-label');

                if (submitBtn && spinner && label) {
                    spinner.classList.remove('d-none');
                    submitBtn.setAttribute('disabled', 'true');

                    const originalText = label.textContent.trim().toLowerCase();
                    switch (originalText) {
                        case 'save':
                            label.textContent = 'Saving...';
                            break;
                        case 'update':
                            label.textContent = 'Updating...';
                            break;
                        case 'delete':
                            label.textContent = 'Deleting...';
                            break;
                        case 'confirm':
                            label.textContent = 'Confirming...';
                            break;
                        case 'submit':
                            label.textContent = 'Submitting...';
                            break;
                        case 'save changes':
                            label.textContent = 'Saving Changes...';
                            break;
                        case 'add':
                            label.textContent = 'Adding...';
                            break;
                        case 'create':
                            label.textContent = 'Creating...';
                            break;

                        default:
                            label.textContent = 'Processing...';
                    }
                }
            });
        });
    });
</script>
