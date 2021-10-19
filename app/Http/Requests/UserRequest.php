<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'fullname' => 'required|min:3|regex:/^[a-zA-Z\s]*$/',
            'email' => 'required|email',
            'password' => 'required|min:6|required_with:password_confirmation|same:password_confirmation|alpha_num',
            'password_confirmation' => 'min:6',
            'gender' => 'required',
            'dob' => 'required|date',
            'accept' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Nama Lengkap wajib diisi.',
            'fullname.min' => 'Isi Minimal 3 huruf.',
            'fullname.regex' => 'Nama hanya boleh diisi dengan huruf.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Inputan harus berformat email',
            'password.required' => 'Password Wajib Diisi',
            'password.alpha_num' => 'Password harus terdapat angka dan huruf',
            'password.string' => 'Password harus berupa angka dan huruf',
            'password.min' => 'Password minimal 6 karakter',
            'password.same' => 'Password tidak sama',
            'password.required_with' => 'Harap Isi Konfirmasi Password',
            'password_confirmation.min' => 'Konfirmasi Password minimal 6 karakter',
            'gender.required' => 'Pilih salah satu jenis kelamin',
            'dob.required' => 'Tanggal lahir harus diisi.',
            'dob.date' => 'Inputan harus berupa tanggal.',
            'accept.required' => 'Mohon centang check kebijakan / privasy police !'
        ];
    }
}
