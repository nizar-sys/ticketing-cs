<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['parent_id', 'order', 'label', 'heading_label', 'link', 'permission'];

    public function childs()
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id', 'id');
    }

    public function scopeForAdministrator($query)
    {
        $allowedPermissions = Auth::user()->permissions;

        $menus = $query
            ->whereIn('permission', $allowedPermissions)
            ->whereNull('parent_id')
            ->with(['childs' => function ($query) use ($allowedPermissions) {
                $query->whereIn('permission', $allowedPermissions)
                    ->orderBy('order');
            }])
            ->orderBy('order')
            ->get()
            ->map(function ($menu) {
                $menuData = [
                    'label' => $menu->label,
                    'link' => $menu->link,
                    'permission' => $menu->permission,
                    'have_heading' => (bool)$menu->heading_label,
                    'heading_label' => $menu->heading_label,
                    'childs' => []
                ];

                if ($menu->childs && $menu->childs->isNotEmpty()) {
                    $menuData['childs'] = $menu->childs->map(function ($child) {
                        return [
                            'label' => $child->label,
                            'link' => $child->link,
                            'permission' => $child->permission,
                            'have_heading' => false,
                            'heading_label' => false,
                            'childs' => []
                        ];
                    })->toArray();
                }
                return $menuData;
            })->toArray();

        return $menus;
    }
}