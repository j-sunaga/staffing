<?php

namespace App\Http\Requests;

use App\Enums\CheckPriority;
use App\Enums\CheckStatus;

use Illuminate\Foundation\Http\FormRequest;

class StorePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:50',
            'detail' => 'required|max:255',
            'deadline' => 'required|after:yesterday',
            'status' => 'required | integer | between:0,2',
            'priority' => 'required | integer | between:0,2',
        ];
    }
}
