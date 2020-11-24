<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Applicant;
use Livewire\WithFileUploads;

class Applicants extends Component
{
    use WithFileUploads;

    public $name;
    public $upload_dir;
    public $image;
    public $birthday;
    public $sex;
    public $address;
    public $phone;
    public $email;
    public $confirm_email;
    public $blood_type;
    public $hobby;
    public $favorite_subject;
    public $favorite_language;
    public $cooking;
    public $group_life_experience;
    public $eye_sight_left;
    public $eye_sight_right;
    public $color_blindness;
    public $tattoo;
    public $drinking;
    public $smoking;
    public $medical_history;
    public $medical_history_text;
    public $gpa;
    public $roll_number;
    public $jhs_period_from;
    public $jhs_period_to;
    public $jhs_school_name;
    public $jhs_status;
    public $hs_period_from;
    public $hs_period_to;
    public $hs_school_name;
    public $hs_faculty_department;
    public $hs_status;
    public $hs_document;
    public $univ_period_from;
    public $univ_period_to;
    public $univ_school_name;
    public $univ_school_year;
    public $univ_faculty_department;
    public $univ_status;
    public $univ_document;
    public $question_happiest_event;
    public $question_hardest_event;
    public $question_worked_hard;
    public $question_outside_of_school;
    public $question_future_workplace;
    public $question_poor_person;
    public $question_emphasis;
    public $question_weak;
    public $question_speciality;
    public $question_it_technology;


    public function render()
    {
        return view('livewire.applicants');
    }

    protected $rules = [
        'name'                       => ['required', 'max:50'],
        'birthday'                   => ['required', 'max:10'],
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
        'eye_sight_left'             => ['required'],
        'eye_sight_right'            => ['required'],
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
        $this->validate();

        $folder = uniqid(now()->format('Ymd').'_');

        $profileImg = $this->image;
        $profileImgName = 'profile_img.' . $profileImg->getClientOriginalExtension();


        $hsDocument = $this->hs_document;
        $hsDocName = 'hs_document.' . $hsDocument->getClientOriginalExtension();

        $univDocument = $this->univ_document;
        $univDocName = 'univ_document.' . $univDocument->getClientOriginalExtension();

        $this->image->storeAs('ApplicantDocuments/' .$folder, $profileImgName, 'public');
        $this->hs_document->storeAs('ApplicantDocuments/' .$folder, $hsDocName, 'public');
        $this->univ_document->storeAs('ApplicantDocuments/' .$folder, $univDocName, 'public');

        $user = new Applicant();

        $user->name = $this->name;
        $user->upload_dir = $folder;
        $user->birthday = $this->birthday;
        $user->sex = $this->sex;
        $user->address = $this->address;
        $user->phone = $this->phone;
        $user->email = $this->email;
        $user->blood_type = $this->blood_type;
        $user->hobby = $this->hobby;
        $user->favorite_subject = $this->favorite_subject;
        $user->favorite_language = $this->favorite_language;
        $user->cooking = $this->cooking;
        $user->group_life_experience = $this->group_life_experience;
        $user->eye_sight_left = $this->eye_sight_left;
        $user->eye_sight_right = $this->eye_sight_right;
        $user->color_blindness = $this->color_blindness;
        $user->tattoo = $this->tattoo;
        $user->drinking = $this->drinking;
        $user->smoking = $this->smoking;
        $user->medical_history = $this->medical_history;
        $user->medical_history_text = $this->medical_history_text;
        $user->gpa = $this->gpa;
        $user->roll_number = $this->roll_number;
        $user->jhs_period_from = $this->jhs_period_from;
        $user->jhs_period_to = $this->jhs_period_to;
        $user->jhs_school_name = $this->jhs_school_name;
        $user->jhs_status = $this->jhs_status;
        $user->hs_period_from = $this->hs_period_from;
        $user->hs_period_to = $this->hs_period_to;
        $user->hs_school_name = $this->hs_school_name;
        $user->hs_status = $this->hs_status;
        $user->hs_document = $this->hs_document;
        $user->hs_faculty_department = $this->hs_faculty_department;
        $user->univ_period_from = $this->univ_period_from;
        $user->univ_period_to = $this->univ_period_to;
        $user->univ_school_name = $this->univ_school_name;
        $user->univ_faculty_department = $this->univ_faculty_department;
        $user->univ_status = $this->univ_status;
        $user->univ_document = $this->univ_document;
        $user->univ_school_year = $this->univ_school_year;
        $user->question_happiest_event = $this->question_happiest_event;
        $user->question_hardest_event = $this->question_hardest_event;
        $user->question_worked_hard = $this->question_worked_hard;
        $user->question_outside_of_school = $this->question_outside_of_school;
        $user->question_future_workplace = $this->question_future_workplace;
        $user->question_poor_person = $this->question_poor_person;
        $user->question_emphasis = $this->question_emphasis;
        $user->question_weak = $this->question_weak;
        $user->question_speciality = $this->question_speciality;
        $user->question_it_technology = $this->question_it_technology;


        $user->save();

        session()->flash('message', 'Post successfully updated.');

        return redirect()->to('/entry');
    }
}
