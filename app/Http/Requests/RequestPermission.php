<?php

namespace App\Http\Requests;

use App\Helpers\UnauthorizedIfUserIsNotSuperAdmin;
use Illuminate\Foundation\Http\FormRequest;

class RequestPermission extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return UnauthorizedIfUserIsNotSuperAdmin::forRequest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:permissions,name,' . $this->permission?->id,
        ];
    }

    // attributes

    public function attributes()
    {
        return [
            'name' => 'Permission Name',
        ];
    }
}
