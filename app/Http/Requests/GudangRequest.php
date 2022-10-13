<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GudangRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'gudang_nama' => 'required|max:255',
            'gudang_alamat' => 'required',
            'gudang_kota' => 'required|max:255',
            'gudang_propinsi' => 'required|max:255',
        ];
    }
}
