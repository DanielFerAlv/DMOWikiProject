<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDigimon extends FormRequest
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
            'nombre' => 'required|max:150',
            'descripcion' => 'required|max:1000',
            'rango' => 'required',
            'nivel' => 'required',
            'utilidad' => 'required|max:50',
            'atributo' => 'required',
            'tipo' => 'required',
            'health_points' => 'required|numeric|max:99999',
            'digisoul_points' => 'required|numeric|max:9999',
            'attack' => 'required|numeric|max:9999',
            'attack_speed' => 'required|numeric|min:1|max:3',
            'critical_chance' => 'required|numeric|min:10|max:35',
            'hitrate' => 'required|numeric|max:1100|min:300',
            'defense' => 'required|numeric|max:9999',
            'evasion' => 'required|numeric|max:99|min:10',
            'skill1' => 'required|max:200',
            'skill1_base' => 'required|numeric|max:99999',
            'skill1_increment' => 'required|numeric|max:9999',
            'skill1_special' => 'max:1000',
            'skill2' => 'required|max:200',
            'skill2_base' => 'required|numeric|max:99999',
            'skill2_increment' => 'required|numeric|max:9999',
            'skill2_special' => 'max:1000',
            'skill3' => 'max:200',
            'skill3_base' => 'max:999999',
            'skill3_increment' => 'max:9999',
            'skill3_special' => 'max:1000',
            'skill4' => 'max:200',
            'skill4_base' => 'max:99999',
            'skill4_increment' => 'max:9999',
            'skill4_special' => 'max:1000',
            'foto' => 'mimes:png,jpg,jpeg|max:2048|image',
            'icono' => 'mimes:png,jpg,jpeg|max:2048|image',
        ];
    }
}
