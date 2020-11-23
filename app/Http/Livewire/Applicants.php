<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Applicant;
use Livewire\WithFileUploads;

class Applicants extends Component
{
    use WithFileUploads;

    public $name, $upload_dir, $image, $birthday, $sex, $address, $phone, $email, $confirm_email, $blood_type, $hobby, $favorite_subject, $favorite_language, $cooking, $group_life_experience, $eye_sight_left, $eye_sight_right, $color_blindness, $tattoo, $drinking, $smoking, $medical_history, $medical_history_text, $gpa, $roll_number, $jhs_period_from, $jhs_period_to, $jhs_school_name, $jhs_status, $hs_period_from, $hs_period_to, $hs_school_name, $hs_faculty_department, $hs_status, $hs_document, $univ_period_from, $univ_period_to, $univ_school_name, $univ_school_year, $univ_faculty_department, $univ_status, $univ_document, $question_happiest_event, $question_hardest_event, $question_worked_hard, $question_outside_of_school, $question_future_workplace, $question_poor_person, $question_emphasis, $question_weak, $question_speciality, $question_it_technology;

    public function render()
    {
        $this->applicants = Applicant::all();

        return view('livewire.applicants');
    }

    protected $rules = [
        'name'                       => ['required', 'max:50'],
        'birthday'                   => ['required', 'max:10',],
        'sex'                        => ['required'],
        'address'                    => ['required', 'max:200'],
        'phone'                      => ['required', 'numeric'],
        'email'                      => [ 'unique:applicants', 'required', 'email', 'max:255'],
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
        'jhs_period_from'            => ['required',],
        'jhs_period_to'              => ['required',],
        'jhs_school_name'            => ['required', 'max:255'],
        'jhs_status'                 => ['required', 'int'],
        'hs_period_from'             => ['required',],
        'hs_period_to'               => ['required',],
        'hs_school_name'             => ['required', 'max:255'],
        'hs_faculty_department'      => ['required', 'max:255'],
        'hs_status'                  => ['required', 'int'],
        'univ_period_from'           => ['required',],
        'univ_period_to'             => ['required',],
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

    public function store()
    {
        $validatedData = $this->validate();

        Applicant::create($validatedData);

        $this->image->store('public/upload_dir');
        $this->hs_document->store('public/upload_dir');
        $this->univ_document->store('public/upload_dir');

        session()->flash('message', 'Post successfully updated.');

        return redirect()->to('/entry');
    }
}
