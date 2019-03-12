<?php
namespace OrlandoLibardi\NewsletterCms\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;


class ContactRequest extends FormRequest
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
            'name'      => 'required|string|max:255',
            'email'     => 'required|email',
            'phone'     => 'nullable|string|max:255',
            'subject'   => 'required|string|max:255',
            'message'   => 'required|string|max:255'
        ];   

    }
    

}
