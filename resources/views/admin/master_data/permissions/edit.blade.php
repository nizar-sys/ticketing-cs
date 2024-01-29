@extends('layouts.app')

@section('title', 'Change Permission')

@section('content')
    <div class="content">
        <h2 class="content-heading">Permission Management</h2>
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Change Permission</h3>
                <div class="block-options">
                    <div class="block-options-item">
                        <div class="row">
                            <div class="mb-2 col-sm-12 ml-auto">
                                <a href="{{ route('permission.index') }}" class="btn btn-danger">
                                    <i class="fas fa-arrow-left fa-sm mr-2"></i>
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col-lg-8 col-xl-5 mx-auto">
                        <form class="mb-5 form-permission" action="{{ route('permission.update', $permission->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label class="form-label" for="name">Permission Name</label>
                                <input type="name" class="form-control @error('name')
                                    is-invalid
                                @enderror" id="name" name="name"
                                    placeholder="Input Permission Name" value="{{ old('name', $permission->name) }}">
                                @error('name')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="btn btn-warning">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ url('/js/admin/master_data/permissions/validation_form_permssion_script.js', []) }}"></script>
@endpush
