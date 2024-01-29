<div class="btn-group" role="group" aria-label="Permission Actions">
    @if (!preg_match('/dashboard|master-data\.|master-data/', $permission->name))
    <a href="{{ $url_edit }}" class="btn btn-sm btn-warning me-1" data-bs-toggle="tooltip" title="Edit">
        <i class="fas fa-edit"></i>
    </a>

    <button data-url="{{ $url_destroy }}" class="btn btn-sm btn-danger delete-permission" data-bs-toggle="tooltip" title="Delete">
        <i class="fas fa-trash"></i>
    </button>
    @endif
</div>
