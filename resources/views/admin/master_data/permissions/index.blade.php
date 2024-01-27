@extends('layouts.app')

@section('title', 'Permissions')

@section('content')
    <div class="content">
        <h2 class="content-heading">Permission Management</h2>

        <div class="block block-rounded">
            <div class="block-content block-content-full">
                {{ $dataTable->table(['class' => 'table table-bordered table-striped table-vcenter js-dataTable-full-pagination']) }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
    <script src="{{ mix('/js/admin/master_data/permissions/script.js') }}"></script>
@endpush
