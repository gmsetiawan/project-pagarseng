<?php

namespace App\Http\Requests;

use App\Models\Support;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SupportUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nik'               => ['required', Rule::unique(Support::class)->ignore($this->support->id)],
            'nama'              => ['required', 'max:128'],
            'alamat'            => ['required', 'max:128'],
            'rt'                => ['required', 'max:4'],
            'kelurahan'         => ['required'],
            'kecamatan'         => ['required'],
            'scanktp'           => ['image', 'mimes:jpeg,png,jpg', 'max:1024'],
            'nohp'              => ['required', 'max:16'],
            'keterangan'        => ['max:128'],
            'rating'            => ['required'],
            'location'          => ['required'],
            'participant'       => ['required'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nik.required' => 'NIK Tidak Boleh Kosong',
            'nik.unique' => 'NIK yang anda input sudah dimiliki oleh identitas lain',
        ];
    }
}
