<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicantRequest extends FormRequest
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
            'name'                       => ['required', 'max:50'],
            'birthday'                   => ['required', 'max:10', 'date_format:d/m/Y'],
            'sex'                        => ['required'],
            'address'                    => ['required', 'max:200'],
            'phone'                      => ['required', 'numeric'],
            'email'                      => [ 'unique:applicants', 'required', 'email', 'confirmed', 'max:255'],
            'blood_type'                 => ['required', 'int'],
            'hobby'                      => ['required', 'max:255'],
            'favorite_subject'           => ['required'],
            'favorite_language'          => ['required'],
            'cooking'                    => ['required'],
            'group_life_experience'      => ['required'],
            'color_blindness'            => ['required'],
            'tattoo'                     => ['required'],
            'drinking'                   => ['required'],
            'smoking'                    => ['required'],
            'medical_history'            => ['required'],
            'gpa'                        => ['required', 'max:10'],
            'roll_number'                => ['required', 'max:10'],
            'jhs_period_from'            => ['required', 'date_format:m/Y'],
            'jhs_period_to'              => ['required', 'date_format:m/Y'],
            'jhs_school_name'            => ['required', 'max:255'],
            'jhs_status'                 => ['required', 'int'],
            'hs_period_from'             => ['required', 'date_format:m/Y'],
            'hs_period_to'               => ['required', 'date_format:m/Y'],
            'hs_school_name'             => ['required', 'max:255'],
            'hs_faculty_department'      => ['required', 'max:255'],
            'hs_status'                  => ['required', 'int'],
            'univ_period_from'           => ['required', 'date_format:m/Y'],
            'univ_period_to'             => ['required', 'date_format:m/Y'],
            'univ_school_name'           => ['required', 'max:255'],
            'univ_faculty_department'    => ['required', 'max:255'],
            'univ_school_year'           => ['required', 'int'],
            'univ_status'                => ['required', 'int'],
            'question_happiest_event'    => ['required'],
            'question_hardest_event'     => ['required'],
            'question_worked_hard'       => ['required'],
            'question_outside_of_school' => ['required'],
            'question_future_workplace'  => ['required'],
            'question_poor_person'       => ['required'],
            'question_emphasis'          => ['required'],
            'question_weak'              => ['required'],
            'question_speciality'        => ['required'],
            'question_it_technology'     => ['required']
        ];
    }  
}
