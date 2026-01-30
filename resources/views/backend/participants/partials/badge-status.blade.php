@php
    $label = $status ?: '-';

    $class = match (strtolower($label)) {
        'completed' => 'badge-success',
        'approved' => 'badge-success',
        'pending' => 'badge-warning',
        'rejected' => 'badge-danger',
        '-' => 'badge-secondary',
        default => 'badge-info',
    };
@endphp

<span class="badge badge-custom {{ $class }}">
    {{ ucfirst($label) }}
</span>
