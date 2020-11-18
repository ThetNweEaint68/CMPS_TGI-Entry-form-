<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Applicant;
use App\Http\Requests\ApplicantRequest;


class Applicants extends Component
{
    public $name, $upload_dir, $birthday, $sex, $address, $phone, $email, $confirm_email, $blood_type, $hobby, $favorite_subject, $favorite_language, $cooking, $group_life_experience, $eye_sight_left, $eye_sight_right, $color_blindness, $tattoo, $drinking, $smoking, $medical_history, $medical_history_text, $gpa, $roll_number, $jhs_period_from, $jhs_period_to, $jhs_school_name, $jhs_status, $hs_period_from, $hs_period_to, $hs_school_name, $hs_faculty_department, $hs_status, $univ_period_from, $univ_period_to, $univ_school_name, $univ_school_year, $univ_faculty_department, $univ_status, $question_happiest_event, $question_hardest_event, $question_worked_hard, $question_outside_of_school, $question_future_workplace, $question_poor_person, $question_emphasis, $question_weak, $question_speciality, $question_it_technology;

    public function render()
    {
        $this->applicants = Applicant::all();
        return view('livewire.applicants');
    }

    public function create()
    {
        $this->resetInputFields();
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->upload_dir = '';
        $this->birthday = '';
        $this->sex = '';
        $this->address = '';
        $this->phone = '';
        $this->email = '';
        $this->confirm_email = '';
        $this->blood_type = '';
        $this->hobby = '';
        $this->favorite_subject = '';
        $this->favorite_language = '';
        $this->cooking = '';
        $this->group_life_experience = '';
        $this->eye_sight_left = '';
        $this->eye_sight_right = '';
        $this->color_blindness = '';
        $this->tattoo = '';
        $this->drinking = '';
        $this->smoking = '';
        $this->medical_history = '';
        $this->medical_history_text = '';
        $this->gpa = '';
        $this->roll_number = '';
        $this->jhs_period_from = '';
        $this->jhs_period_to = '';
        $this->jhs_school_name = '';
        $this->jhs_status = '';
        $this->hs_period_from = '';
        $this->hs_period_to = '';
        $this->hs_school_name = '';
        $this->hs_faculty_department = '';
        $this->hs_status = '';
        $this->univ_period_from = '';
        $this->univ_period_to = '';
        $this->univ_school_name = '';
        $this->univ_school_year = '';
        $this->univ_faculty_department = '';
        $this->univ_status = '';
        $this->question_happiest_event = '';
        $this->question_hardest_event = '';
        $this->question_worked_hard = '';
        $this->question_outside_of_school = '';
        $this->question_future_workplace = '';
        $this->question_poor_person = '';
        $this->question_emphasis = '';
        $this->question_weak = '';
        $this->question_speciality = '';
        $this->question_it_technology = '';
    }

    public function store()
    {
        $user = Applicant::create([
            'email' => $this->email,
            'name' => $this->name,
            'sex' => $this->sex,
        ]);

        $this->resetInputFields();

        return redirect();
    }
}
