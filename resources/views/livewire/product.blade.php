<div class="mt-4 container">
    {{ $dataTable->table() }}
</div>

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush