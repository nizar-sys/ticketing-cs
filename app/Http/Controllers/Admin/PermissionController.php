<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\PermissionsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\RequestPermission;
use App\Services\Permission\PermissionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function __construct(protected PermissionService $permissionService)
    {
    }

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
        try {
            $this->permissionService->create($request->validated());
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()->route('permission.index')->with('error', $e->getMessage());
        }

        return redirect()->route('permission.index')->with('success', 'Permission created successfully!');
    }

    public function edit(Permission $permission)
    {
        return view('admin.master_data.permissions.edit', compact('permission'));
    }

    public function update(RequestPermission $request, Permission $permission)
    {
        try {
            $this->permissionService->update($permission->id, $request->validated());
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()->route('permission.index')->with('error', $e->getMessage());
        }

        return redirect()->route('permission.index')->with('success', 'Permission updated successfully!');
    }

    public function destroy(Permission $permission)
    {
        try {
            $this->permissionService->delete($permission->id);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Permission deleted successfully!'
        ]);
    }
}
