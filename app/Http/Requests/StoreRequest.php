<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    //protected $redirect = '/';

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
            
                'name'=> 'required|numeric',
               
               'phone'=> 'required|numeric',
                'email'=> 'required',
                'mount'=> 'required|numeric',
                

          
        ];
    }
}
