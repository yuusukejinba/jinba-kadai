<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactRequest extends FormRequest
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
            'first_name'=> 'required' ,
            'last_name' => 'required' ,
            'gender' => 'required -> 1:男性、2:女性、3:その他' ,
            'email' => 'required' , 'email' ,
            'tel' => 'required' , 'numeric' , 'digits_between:11',
            'address' => 'required' , 
            'detail' => 'required' , 
        ];
    }

    public function messages()
     {
         return [
             'first_name.required' => '姓を入力してください',
             'last_name.required' => '名を入力してください',
             'gender.required' => '性別を選択してください',
             'email.required' => 'メールアドレスを入力してください',
             'email.email' => 'メールアドレスはメール形式で入力してください',
             'tel.required' => '電話番号を入力してください',
             'tel.digits_between:5' => '電話番号は5桁までの数字で入力してください',
             'address.required' => '住所を入力してください',
             'detail.required' =>  'お問い合わせの種類を選択してください',
             
         ];
     }
}
