<?php

namespace App\Http\Requests\Offer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOfferRequest extends FormRequest
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
            'description' => 'required|string|max:200',
            'delivery_date' => 'required|date:m/d/Y',
            'quality' => 'required|integer|min:1|max:10',
            'price' => 'required|integer',
            'tender_id' => 'required|integer',
            'supplier_id' => 'required|integer',
        ];
    }
}
