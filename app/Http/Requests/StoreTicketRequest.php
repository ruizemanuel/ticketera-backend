<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreTicketRequest extends FormRequest
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
            //
            'title' => ['required'],
            'description' => ['required'],
            'difficultyLevel' => ['required', Rule::in(['easy','medium','hard'])],
            'gifUrl' => ['required', 'url'],
            'isDone' => ['required', 'boolean'],
        ];
    }
    protected function prepareForValidation(){
        $this->merge([
            'difficulty_level' => $this->difficultyLevel,
            'gif_url' => $this->gifUrl,
            'is_done' => $this->isDone
        ]);
    }

}
