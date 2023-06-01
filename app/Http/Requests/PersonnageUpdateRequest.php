<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PersonnageUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'use_firstname' => ['string', 'max:255'],
            'use_lastname' => ['string', 'max:255'],
            'use_description' => ['string', 'max:255','nullable'],
            'use_tank' => ['int','max:255'],
            'use_DPS' => ['int','max:255'],
            'use_heal' => ['int','max:255'],
        ];
    }
}
