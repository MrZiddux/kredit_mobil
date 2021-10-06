<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PembeliLamaRequest extends FormRequest
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
            'ktp_pembeli' => ['required', 'unique:pembelis', 'numeric', 'min:16'],
            'nama_pembeli' => ['required'],
            'alamat_pembeli' => ['required'],
            'telp_pembeli' => ['required', 'numeric'],
        ];
    }
}
