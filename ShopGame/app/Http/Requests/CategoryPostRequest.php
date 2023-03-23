<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryPostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_name' => 'required',
            'password' => 'required',
            'sever' => 'required',
            'status' => 'required',
            'rank' => 'required',
            'class' => 'required',
            'level' => 'required',
            'product_id' => 'required',
            'weapon' => 'required',
            'price' => 'required',
            'detail' => 'required',
            'image' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'user_name.required' => 'Tên tài khoản không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
            'sever.required' => 'Sever không được để trống',
            'status.required' => 'Trạng thái không được để trống',
            'rank.required' => 'Rank không được để trống',
            'class.required' => 'Class không được để trống',
            'level.required' => 'Level không được để trống',
            'product_id.required' => 'Loại game không được để trống',
            'weapon.required' => 'Vũ khí không được để trống',
            'price.required' => 'Giá không được để trống',
            'detail.required' => 'Chi tiết không được để trống',
            'image.required' => 'Ảnh không được để trống',
        ];
    }
}
