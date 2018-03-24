<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AddClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->sanitize();

        return [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'company_name' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'county' => 'required|string',
            'state' => 'required',
            'zip' => 'required|digits:5',
            'phone1' => 'required|string',
            'phone2' => 'nullable|string',
            'email' => 'required|email|unique:clients',
            'web' => 'nullable|url',
        ];
    }

    private function sanitize()
    {
        $input = $this->all();

        if ($input['web'] && preg_match("#https?://#", $input['web']) === 0) {
            $input['web'] = 'http://'.$input['web'];
        }

        foreach ($input as $field_key => $field_value) {
            switch ($field_key) {
                case 'zip':
                    $input['zip'] = filter_var($input['zip'], FILTER_SANITIZE_NUMBER_INT);
                    break;

                case 'email':
                    $input['email'] = filter_var($input['email'], FILTER_SANITIZE_EMAIL);
                    break;

                case 'web':
                    $input['web'] = filter_var($input['web'], FILTER_SANITIZE_URL);
                    break;

                default:
                    $input[$field_key] = filter_var($input[$field_key], FILTER_SANITIZE_STRING);
                    break;
            }
        }

        $this->replace($input);
    }
}
