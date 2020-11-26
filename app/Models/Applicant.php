<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    protected $fillable = [
        'name',
        'upload_dir',
        'birthday',
        'sex',
        'address',
        'phone',
        'email',
        'blood_type',
        'hobby',
        'favorite_subject',
        'favorite_language',
        'cooking',
        'group_life_experience',
        'eye_sight_left',
        'eye_sight_right',
        'color_blindness',
        'tattoo',
        'drinking',
        'smoking',
        'medical_history',
        'medical_history_text',
        'gpa',
        'roll_number',
        'jhs_period_from',
        'jhs_period_to',
        'jhs_school_name',
        'jhs_status',
        'hs_period_from',
        'hs_period_to',
        'hs_school_name',
        'hs_faculty_department',
        'hs_status',
        'univ_period_from',
        'univ_period_to',
        'univ_school_name',
        'univ_school_year',
        'univ_faculty_department',
        'univ_status',
        'question_happiest_event',
        'question_hardest_event',
        'question_worked_hard',
        'question_outside_of_school',
        'question_future_workplace',
        'question_poor_person',
        'question_emphasis',
        'question_weak',
        'question_speciality',
        'question_it_technology'
    ];

    public function families()
    {
        return $this->hasMany(Family::class);
    }

    //public function addFamilies($applicantId, $families)
    //{
        //for ($i = 0; $i < count($families['family_name']); $i++) {
            //Family::create([
                //'applicant_id'  => $applicantId,
                //'family_name'   => $families['family_name'][$i], 
                //'relationship'  => $families['relationship'][$i], 
                //'age'           => $families['age'][$i], 
                //'job'           => $families['job'][$i], 
                //'live_together' => $families['live_together'][$i], 
                //'agreement'     => $families['agreement'][$i]
            //]);
        //}

    //}
}
