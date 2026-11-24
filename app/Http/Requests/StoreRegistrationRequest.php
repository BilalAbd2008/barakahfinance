<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRegistrationRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => ['required', 'string', 'max:150'],
            'kontak' => ['required', 'string', 'max:150'],
            'topik' => ['required', 'string', Rule::in(self::availableTopics())],
            'setuju' => ['accepted'],
        ];
    }

    /**
     * Get custom validation messages in Indonesian.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nama.required' => 'Mohon lengkapi nama Anda.',
            'kontak.required' => 'Mohon lengkapi nomor WhatsApp atau email Anda.',
            'topik.required' => 'Mohon pilih topik yang ingin dipelajari.',
            'topik.in' => 'Pilihan topik tidak valid.',
            'setuju.accepted' => 'Mohon centang persetujuan privasi terlebih dahulu.',
        ];
    }

    /**
     * Get the URL to redirect to on a validation error.
     */
    protected function getRedirectUrl(): string
    {
        return route('home').'#daftar';
    }

    /**
     * List of available registration topics.
     *
     * @return list<string>
     */
    public static function availableTopics(): array
    {
        return [
            'Worksheet Cek Kesehatan Keuangan Keluarga',
            'Webinar: Single dan Sandwich Generation',
            'Webinar: Keuangan Pra-Nikah',
            'Webinar: Pensiun dan Waris',
            'Kelas CIMM (daftar minat)',
            'Program RFS untuk sekolah atau lembaga',
            'Produk digital (daftar minat)',
        ];
    }
}
