<?php

namespace App\Http\Requests;

use App\Model\Admin\Category;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class EditCategoryRequest extends FormRequest
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
    {   $id = session('id');
        $category = Category::find($id);
        return [
            'name'=>['required',Rule::unique('categories')->ignore($category->id,'id')]
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Bạn phải nhập tên danh mục',
            'name.unique'=>'Tên danh mục đã tồn tại'
        ];
    }
}
