<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use CodeZero\UniqueTranslation\UniqueTranslationRule;


class servicesCategoriesRequest extends FormRequest
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

        return
        [
            // 'translations.%name%' => ['required_with:translations.%name%', 'string'],
            // 'translations.en.name' => ['required_with:translations.en.name', 'string'],

            // 'name.*' => 'unique_translation:service_categories',
            'name_ar'           => 'required|unique:service_categories,name,'.$this->id,
            'name_fr'           => 'required|unique:service_categories,name,'.$this->id,
            'name_en'           => 'required|unique:service_categories,name,'.$this->id,
            'photo'            => 'required_without:id|image|mimes:jpeg,png,jpg,gif,svg',
         ];
    }

    public function messages()
    {
        return
        [

            'name_ar.required'     => 'يجب ادخال اسم القسم بالعربي',
            'name_ar.unique'       => 'هذا الاسم مستخدم من قبل',
            'name_fr.required'     => 'يجب ادخال اسم القسم الفرنسي',
            'name_fr.unique'       => 'هذا الاسم مستخدم من قبل',
            'name_en.required'     => 'يجب ادخال اسم القسم بالانجليزية',
            'name_en.unique'       => 'هذا الاسم مستخدم من قبل',
            'photo.required'                => 'صورة القسم مطلوبة'
        ];
    }

   

}
