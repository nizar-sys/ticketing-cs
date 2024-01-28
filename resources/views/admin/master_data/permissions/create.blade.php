@extends('layouts.app')

@section('title', 'Add Permission')

@section('content')
    <div class="content">
        <h2 class="content-heading">Permission Management</h2>
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Add Permission</h3>
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
                        <form class="mb-5 create-permission" action="{{ route('permission.store') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label class="form-label" for="name">Permission Name</label>
                                <input type="name" class="form-control @error('name')
                                    is-invalid
                                @enderror" id="name" name="name"
                                    placeholder="Input Permission Name">
                                @error('name')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        class Validation {
            static initSignIn() {
                Codebase.helpers("jq-validation");
                $(".create-permission").validate({
                    rules: {
                        "name": {
                            required: true,
                            minlength: 3,
                        },
                    },
                    messages: {
                        "name": {
                            required: "Please enter an permission name",
                            minlength: "Permission name must consist of at least 3 characters",
                        },
                    },
                });
            }
        }

        Codebase.onLoad(() => Validation.initSignIn());
    </script>
@endpush
