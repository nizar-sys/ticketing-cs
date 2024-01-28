<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\PermissionsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\RequestPermission;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(PermissionsDataTable $dataTable)
    {
        return $dataTable->render('admin.master_data.permissions.index');
    }

    public function create()
    {
        return view('admin.master_data.permissions.create');
    }

    public function store(RequestPermission $request)
    {
        Permission::create($request->validated());

        return redirect()->route('permission.index')->with('success', 'Permission created successfully!');
    }

    public function edit(Permission $permission)
    {
        return view('admin.master_data.permissions.edit', compact('permission'));
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
