<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTamer extends FormRequest
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
            "nombre" => 'required|max:150',
            "descripcion" => 'required|max:1000',
            "utilidad" => 'required|max:50',
            "health_points" => 'required|numeric|max:999',
            "digisoul_points" => 'required|numeric|max:999',
            "attack" => 'required|numeric|max:99',
            "defense" => 'required|numeric|max:99',
            "active_skill_name" => 'required|max:200',
            "active_skill_effect" => 'required|max:1000',
            "active_skill_cooldown" => 'required|max:50',
            "passive_skill_name" => 'required|max:200',
            "passive_skill_effect1" => 'required|max:1000',
            "passive_skill_effect2" => 'required|max:1000',
            "active_skill_icon" => 'mimes:png,jpg,jpeg|max:2048|image',
            "passive_skill_icon" => 'mimes:png,jpg,jpeg|max:2048|image',
            "tamer_icon" => 'mimes:png,jpg,jpeg|max:2048|image',
            "tamer_model" => 'mimes:png,jpg,jpeg|max:2048|image',
        ];
    }
}
