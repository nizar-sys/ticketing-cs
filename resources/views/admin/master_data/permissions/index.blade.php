@extends('layouts.app')

@section('title', 'Permissions')

@section('content')
    <div class="content">
        <h2 class="content-heading">Permission Management</h2>
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Permissions List</h3>
                <div class="block-options">
                  <div class="block-options-item">
                    <div class="row">
                        <div class="mb-2 col-sm-12 ml-auto">
                            <a href="{{ route('permission.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus fa-sm mr-2"></i>
                                Add Permission
                            </a>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="block-content block-content-full">
                <div class="table-responsive">
                    {{ $dataTable->table(['class' => 'table table-bordered table-striped table-vcenter js-dataTable-full-pagination']) }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
    <script src="{{ mix('/js/admin/master_data/permissions/script.js') }}"></script>
@endpush
