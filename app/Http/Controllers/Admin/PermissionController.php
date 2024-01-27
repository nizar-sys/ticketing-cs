<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\PermissionsDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(PermissionsDataTable $dataTable)
    {
        return $dataTable->render('admin.master_data.permissions.index');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Permission deleted successfully!'
        ]);
    }
}
