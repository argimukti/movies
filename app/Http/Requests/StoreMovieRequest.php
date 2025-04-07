<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
            'title' => 'required',
            'description' => 'required|min:5',
            'release_date' => 'required',
            'cast' => 'required',
            'genres' => 'required',
            'image' => 'required',
        ];
    }

    public function messages():array
    {
        return [
            'title.required' => 'Silahkan isi judul',
            'description.required' => 'Sinopsis gak boleh kosong',
            'description.min' => 'Sinopsis harus lebih dari 5 karakter',
            'release_date.required' => 'Tanggal rilis gak boleh kosong',
            'cast.required' => 'Cast gak boleh kosong',
            'genres.required' => 'Genre gak boleh kosong',
            'image.required' => 'Image gak boleh kosong',
            
        ];
    }
}
