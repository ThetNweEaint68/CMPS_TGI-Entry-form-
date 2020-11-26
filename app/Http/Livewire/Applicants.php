<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Applicant;
use App\Models\Family;
use DB;
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
    public $family_name;
    public $relationship;
    public $age; 
    public $job; 
    public $live_together; 
    public $agreement;
    public $families = [];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->families ,$i);
    }
 
    public function remove($i)
    {
        unset($this->families[$i]);
    }

    public function render()
    {
        return view('livewire.applicants');
    }

    protected $rules = [
        'name'                       => ['required', 'max:50'],
        'image'                      => ['required', 'image', 'max:2048'],
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
        'jhs_period_from'            => ['required'],
        'jhs_period_to'              => ['required'],
        'jhs_school_name'            => ['required', 'max:255'],
        'jhs_status'                 => ['required', 'int'],
        'hs_period_from'             => ['required'],
        'hs_period_to'               => ['required'],
        'hs_school_name'             => ['required', 'max:255'],
        'hs_faculty_department'      => ['required', 'max:255'],
        'hs_status'                  => ['required', 'int'],
        'hs_document'                => ['required'],
        'univ_period_from'           => ['required'],
        'univ_period_to'             => ['required'],
        'univ_school_name'           => ['required', 'max:255'],
        'univ_faculty_department'    => ['required', 'max:255'],
        'univ_school_year'           => ['required', 'int'],
        'univ_status'                => ['required', 'int'],
        'univ_document'              => ['required'],
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

    protected $messages = [
        'image.required'                   => 'The profile image is required.',
        'name.required'                    => 'The :attribute is required.',
        'birthday.required'                => 'The :attribute is required.',
        'birthday.date_format'             => 'The :attribute must filled in correct form.',
        'sex.required'                     => 'The :attribute is required.',
        'address.required'                 => 'The :attribute is required.',
        'phone.required'                   => 'The phone number is required.',
        'phone.integer'                    => 'The phone number must be number.',
        'email.required'                   => 'The :attribute is required.',
        'email.max'                        => 'The :attribute may not be greater than 255 characters.',
        'blood_type.required'              => 'The :attribute is required.',
        'blood_type.integer'               => 'The :attribute must be selected.',
        'hobby.required'                   => 'The :attribute is required.',
        'favorite_subject.required'        => 'The :attribute is required.',
        'favorite_language.required'       => 'The :attribute is required.',
        'cooking.required'                 => 'The :attribute is required.',
        'group_life_experience.required'   => 'The :attribute is required.',
        'eye_sight_left.required'          => 'The :attribute is required.',
        'eye_sight_right.required'         => 'The :attribute is required.',
        'color_blindness.required'         => 'The :attribute is required.',
        'tattoo.required'                  => 'The :attribute is required.',
        'drinking.required'                => 'The :attribute is required.',
        'smoking.required'                 => 'The :attribute is required.',
        'medical_history.required'         => 'The :attribute is required.',
        'madical_history_text.required'    => 'The :attribute is required.',
        'gpa.required'                     => 'The :attribute is required.',
        'roll_number.required'             => 'The :attribute is required.',
        'jhs_period_from.required'         => 'The junior high school period(from) is required.',
        'jhs_period_to.required'           => 'The junior high school priod(to) is required.',
        'jhs_school_name.required'         => 'The junior high school name is required.',
        'jhs_status.required'              => 'The junior high school final education status is required.',
        'jhs_status.integer'               => 'The junior high school final education status must be selected.',
        'hs_period_from.required'          => 'The high school period(from) is required.',
        'hs_period_to.required'            => 'The high school period(to) is required.',
        'hs_school_name.required'          => 'The high school name is required.',
        'hs_faculty_department.required'   => 'The high school faculty department is required.',
        'hs_status.required'               => 'The high school final education status is required.',
        'hs_status.integer'                => 'The high school final education status must be selected.',
        'univ_period_from.required'        => 'The university period(from) is required.',
        'univ_period_to.required'          => 'The university period(to) is required.',
        'univ_school_name.required'        => 'The university name is required.',
        'univ_faculty_department.required' => 'The university faculty department is required.',
        'univ_status.required'             => 'The university final education status is required.',
        'univ_status.integer'              => 'The university final education status must be selected.',
        'univ_document.required'           => 'The university latest report card is required.',
        'family_name.*.required'           => 'The family name Address cannot be empty.',
        'relationship.*.required'          => 'The relationship cannot be empty.',
        'age.*.required'                   => 'The age cannot be empty.',
        'job.*.required'                   => 'The job cannot be empty.',
        'live_together.*.required'         => 'The live_together cannot be empty.',
        'agreement.*.required'             => 'The agreement cannot be empty.',
    ];

    public function store()
    {
        DB::transaction(function () {
            $this->validate();

            $folder = uniqid(now()->format('Ymd').'_');

            $profileImg     = $this->image;
            $profileImgName = 'image.' . $profileImg->getClientOriginalExtension();

            $hsDocument = $this->hs_document;
            $hsDocName  = 'hs_document.' . $hsDocument->getClientOriginalExtension();

            $univDocument = $this->univ_document;
            $univDocName  = 'univ_document.' . $univDocument->getClientOriginalExtension();

            $this->image        ->storeAs('ApplicantDocuments/' .$folder, $profileImgName, 'public');
            $this->hs_document  ->storeAs('ApplicantDocuments/' .$folder, $hsDocName, 'public');
            $this->univ_document->storeAs('ApplicantDocuments/' .$folder, $univDocName, 'public');

            $applicant = new Applicant();
            $applicant->name                       = $this->name;
            $applicant->upload_dir                 = $folder;
            $applicant->birthday                   = $this->birthday;
            $applicant->sex                        = $this->sex;
            $applicant->address                    = $this->address;
            $applicant->phone                      = $this->phone;
            $applicant->email                      = $this->email;
            $applicant->blood_type                 = $this->blood_type;
            $applicant->hobby                      = $this->hobby;
            $applicant->favorite_subject           = $this->favorite_subject;
            $applicant->favorite_language          = $this->favorite_language;
            $applicant->cooking                    = $this->cooking;
            $applicant->group_life_experience      = $this->group_life_experience;
            $applicant->eye_sight_left             = $this->eye_sight_left;
            $applicant->eye_sight_right            = $this->eye_sight_right;
            $applicant->color_blindness            = $this->color_blindness;
            $applicant->tattoo                     = $this->tattoo;
            $applicant->drinking                   = $this->drinking;
            $applicant->smoking                    = $this->smoking;
            $applicant->medical_history            = $this->medical_history;
            $applicant->medical_history_text       = $this->medical_history_text;
            $applicant->gpa                        = $this->gpa;
            $applicant->roll_number                = $this->roll_number;
            $applicant->jhs_period_from            = $this->jhs_period_from;
            $applicant->jhs_period_to              = $this->jhs_period_to;
            $applicant->jhs_school_name            = $this->jhs_school_name;
            $applicant->jhs_status                 = $this->jhs_status;
            $applicant->hs_period_from             = $this->hs_period_from;
            $applicant->hs_period_to               = $this->hs_period_to;
            $applicant->hs_school_name             = $this->hs_school_name;
            $applicant->hs_status                  = $this->hs_status;
            $applicant->hs_document                = $this->hs_document;
            $applicant->hs_faculty_department      = $this->hs_faculty_department;
            $applicant->univ_period_from           = $this->univ_period_from;
            $applicant->univ_period_to             = $this->univ_period_to;
            $applicant->univ_school_name           = $this->univ_school_name;
            $applicant->univ_faculty_department    = $this->univ_faculty_department;
            $applicant->univ_status                = $this->univ_status;
            $applicant->univ_document              = $this->univ_document;
            $applicant->univ_school_year           = $this->univ_school_year;
            $applicant->question_happiest_event    = $this->question_happiest_event;
            $applicant->question_hardest_event     = $this->question_hardest_event;
            $applicant->question_worked_hard       = $this->question_worked_hard;
            $applicant->question_outside_of_school = $this->question_outside_of_school;
            $applicant->question_future_workplace  = $this->question_future_workplace;
            $applicant->question_poor_person       = $this->question_poor_person;
            $applicant->question_emphasis          = $this->question_emphasis;
            $applicant->question_weak              = $this->question_weak;
            $applicant->question_speciality        = $this->question_speciality;
            $applicant->question_it_technology     = $this->question_it_technology;

            $applicant->save();

            if ($this->family_name != null) {
                $validatedData = $this->validate([
                    'family_name.0'   => 'required',
                    'relationship.0'  => 'required',
                    'age.0'           => 'required',
                    'job.0'           => 'required',
                    'live_together.0' => 'required',
                    'agreement.0'     => 'required',
                    'family_name.*'   => 'required',
                    'relationship.*'  => 'required',
                    'age.*'           => 'required',
                    'job.*'           => 'required',
                    'live_together.*' => 'required',
                    'agreement.*'     => 'required',
                ]);

                foreach ($this->family_name as $key => $value) {
                    Family::create([
                        'applicant_id'  => $applicant->id,
                        'family_name'   => $this->family_name[$key], 
                        'relationship'  => $this->relationship[$key], 
                        'age'           => $this->age[$key], 
                        'job'           => $this->job[$key], 
                        'live_together' => $this->live_together[$key], 
                        'agreement'     => $this->agreement[$key]
                    ]);
                }
            }
        });
        
        session()->flash('message', 'Post successfully updated.');

        return redirect()->to('/entry');
    }
}
