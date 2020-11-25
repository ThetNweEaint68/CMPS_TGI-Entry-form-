<div>
    <div>
        <a href="{{ route('home') }}">
            <x-logo class="w-auto h-16 mx-left text-indigo-600" />
        </a>
        <h2 class="mt-6 text-3xl font-extrabold text-left text-gray-900 leading-9">
            Entry form
        </h2>
            <div class="p-5">
                <div class="mt-2">
                    <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form wire:submit.prevent="submit" class="w-full">
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <div class="mt-4">
                                @if ($image)
                                    <img src="{{ $image->temporaryUrl() }}" width="150" alt="temp">
                                @else
                                    <img src="{{ asset('img/intern/demo_img03.png') }}" class="js-profile_img profile_img">
                                    <input type="hidden" name="profile_img_check" value="">
                                @endif
                                <br>
                                <input type="file" wire:model="image">
                                @error('image') <span class="error">{{ $message }}</span> @enderror
                            </div><br>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                                        Name
                                    </label>
                                    <input wire:model.lazy="name" class="appearance-none block w-full bg-white-200 text-gray-700 border border-black-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" type="text">
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="sex">
                                        Gender
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input wire:model.lazy="sex" class="form-check-input" type="radio" name="sex" value="male">
                                        <label class="form-check-label" for="sex">Male</label>
                        
                                        <input wire:model.lazy="sex" class="form-check-input" type="radio" name="sex" value="female">
                                        <label class="form-check-label" for="sex">Female</label>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="birthday">
                                        Birthday
                                    </label>
                                    <input wire:model.lazy="birthday" class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="birthday" type="date">
                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="address">
                                        Address
                                    </label>
                                    <input wire:model.lazy="address" class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="address" type="text">
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                                        Email
                                    </label>
                                    <input wire:model.lazy="email" class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email">
                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="confirm_email">
                                        Confirm Email
                                    </label>
                                    <input wire:model.lazy="confirm_email" class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="confirm_email" type="email">
                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone">
                                        Phone Number
                                    </label>
                                    <input wire:model.lazy="phone" class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="phone" type="tel">
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="blood_type">
                                        Blood Type
                                    </label>
                                    <div class="relative">
                                        <select wire:model.lazy="blood_type" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="blood_type">
                                            <option>Select</option>
                                            <option value="1">A+</option>
                                            <option value="2">A-</option>
                                            <option value="3">B+</option>
                                            <option value="4">B-</option>
                                            <option value="5">AB+</option>
                                            <option value="6">AB-</option>
                                            <option value="7">O+</option>
                                            <option value="8">O-</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="hobby">
                                        Hobby
                                    </label>
                                    <input wire:model.lazy="hobby" class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="hobby" type="text">
                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="favorite_subject">
                                        Favorite Subject
                                    </label>
                                    <input wire:model.lazy="favorite_subject" class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="favorite_subject" type="text">
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="favorite_language">
                                        Favorite Language
                                    </label>
                                    <div class="relative">
                                        <select wire:model.lazy="favorite_language" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="favorite_language">
                                            <option>Select</option>
                                            <option value="1">PHP</option>
                                            <option value="2">C#</option>
                                            <option value="3">JAVA</option>
                                            <option value="4">HTML</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="cooking">
                                        Cooking
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                       <input wire:model.lazy="cooking" class="form-check-input" type="radio" name="cooking" value="yes">
                                       <label class="form-check-label" for="cooking">Yes</label>
                        
                                       <input wire:model.lazy="cooking" class="form-check-input" type="radio" name="cooking" value="no">
                                       <label class="form-check-label" for="cooking">No</label>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="group_life_experience">
                                        Group Experience
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input wire:model.lazy="group_life_experience" class="form-check-input" type="radio" name="group_life_experience" value="yes">
                                        <label class="form-check-label" for="group_life_experience">Yes</label>
                        
                                        <input wire:model.lazy="group_life_experience" class="form-check-input" type="radio" name="group_life_experience" value="no">
                                        <label class="form-check-label" for="group_life_experience">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="eye_sight_left">
                                        Eye Sight Left
                                    </label>
                                    <input wire:model.lazy="eye_sight_left" class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="eye_sight_left" type="text">
                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="eye_sight_right">
                                        Eye Sight Right
                                    </label>
                                    <input wire:model.lazy="eye_sight_right" class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="eye_sight_right" type="text">
                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="color_blindness">
                                        Color Blindness
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input wire:model.lazy="color_blindness" class="form-check-input" type="radio" name="color_blindness" value="yes">
                                        <label class="form-check-label" for="color_blindness">Yes</label>
                        
                                        <input wire:model.lazy="color_blindness" class="form-check-input" type="radio" name="color_blindness" value="no">
                                        <label class="form-check-label" for="color_blindness">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="tattoo">
                                        Tattoo
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input wire:model.lazy="tattoo" class="form-check-input" type="radio" name="tattoo" value="yes">
                                        <label class="form-check-label" for="tattoo">Yes</label>
                        
                                         <input wire:model.lazy="tattoo" class="form-check-input" type="radio" name="tattoo" value="no">
                                        <label class="form-check-label" for="tattoo">No</label>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="drinking">
                                        Drinking
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input wire:model.lazy="drinking" class="form-check-input" type="radio" name="drinking" value="yes">
                                        <label class="form-check-label" for="drinking">Yes</label>
                        
                                        <input wire:model.lazy="drinking" class="form-check-input" type="radio" name="drinking" value="no">
                                        <label class="form-check-label" for="drinking">No</label>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="smoking">
                                        Smoking
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input wire:model.lazy="smoking" class="form-check-input" type="radio" name="smoking" value="yes">
                                        <label class="form-check-label" for="smoking">Yes</label>
                        
                                        <input wire:model.lazy="smoking" class="form-check-input" type="radio" name="smoking" value="no">
                                        <label class="form-check-label" for="smoking">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-2 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="medical_history">
                                        Medical History
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input wire:model.lazy="medical_history" class="form-check-input" type="radio" name="medical_history" value="yes">
                                         <label class="form-check-label" for="medical_history">Yes</label>
                        
                                        <input wire:model.lazy="medical_history" class="form-check-input" type="radio" name="medical_history" value="no">
                                        <label class="form-check-label" for="medical_history">No</label>

                                        <input type="text" name="medical_history_text" value="" class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    </div>
                                </div>
                            </div>
                            <p class="font-bold text-xl mt-3">University Grade</p>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="gpa">
                                        GPA
                                    </label>
                                    <input wire:model.lazy="gpa" class="appearance-none block w-full bg-white-200 text-gray-700 border border-black-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="gpa" type="text">
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="roll_number">
                                        Roll Number
                                    </label>
                                    <input wire:model.lazy="roll_number" class="appearance-none block w-full bg-white-200 text-gray-700 border border-black-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="roll_number" type="text">
                                </div>
                            </div>
                            <p class="font-bold text-xl mt-3">Educational Background</p>
                            <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                                <div class="w-64 font-bold h-6 mx-5 mt-3 text-gray-800">Junior High School</div>
                                    <div class="flex-1 flex flex-col md:w-1/3">
                                        <div class="w-full flex-1 mx-5">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="jhs_period_from">
                                                Period From
                                            </label>
                                            <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                                <input wire:model.lazy="jhs_period_from" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " id="jhs_period_from" type="date"> 
                                            </div>
                                        </div>
                                        <div class="w-full flex-1 mx-5">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="jhs_period_to">
                                                Period To
                                            </label>
                                            <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                                <input wire:model.lazy="jhs_period_to" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " id="jhs_period_to" type="date"> 
                                            </div>
                                        </div>
                                        <div class="w-full flex-1 mx-5">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="jhs_school_name">
                                                School Name
                                            </label>
                                            <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                                <input wire:model.lazy="jhs_school_name" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " id="jhs_school_name" type="text"> 
                                            </div>
                                        </div>
                                        <div class="w-full flex-1 mx-5">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="jhs_status">
                                                School Status
                                            </label>
                                                <select wire:model.lazy="jhs_status" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                    <option >Select</option>
                                                    <option value="1">Graduated</option>
                                                    <option value="2">Student</option>
                                                    <option value="3">Drop Out</option>
                                                </select>
                                        </div>
                                    </div>
                            </div>
                            <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                                <div class="w-64 font-bold h-6 mx-5 mt-3 text-gray-800">High School</div>
                                    <div class="flex-1 flex flex-col md:w-1/3">
                                        <div class="w-full flex-1 mx-5">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="hs_period_from">
                                                Period From
                                            </label>
                                            <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                                <input wire:model.lazy="hs_period_from" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " id="hs_period_from" type="date"> 
                                            </div>
                                        </div>
                                        <div class="w-full flex-1 mx-5">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="hs_period_to">
                                                Period To
                                            </label>
                                            <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                                <input wire:model.lazy="hs_period_to" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " id="hs_period_to" type="date"> 
                                            </div>
                                        </div>
                                        <div class="w-full flex-1 mx-5">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="hs_school_name">
                                                School Name
                                            </label>
                                            <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                                <input wire:model.lazy="hs_school_name" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " id="hs_school_name" type="text"> 
                                            </div>
                                        </div>
                                        <div class="w-full flex-1 mx-5">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="hs_faculty_department">
                                                 Faculty Department
                                            </label>
                                                <select wire:model.lazy="hs_faculty_department" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                    <option>Select</option>
                                                    <option value="1">Science</option>
                                                    <option value="2">Economic</option>
                                                </select>
                                        </div>
                                        <div class="w-full flex-1 mx-5">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="hs_status">
                                                School Status
                                            </label>
                                                <select wire:model.lazy="hs_status" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                    <option>Select</option>
                                                    <option value="1">Graduated</option>
                                                    <option value="2">Student</option>
                                                    <option value="3">Drop Out</option>
                                                </select>
                                        </div>
                                        <div class="w-full flex-1 mx-5">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="hs_document">
                                                Maticulation Examination Pass Certicate(*pdf)
                                            </label>
                                            <div class="fileBox">
                                                <input wire:model="hs_document" type="file" name="hs_document" value="">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                                <div class="w-64 font-bold h-6 mx-5 mt-3 text-gray-800">University</div>
                                    <div class="flex-1 flex flex-col md:w-1/3">
                                        <div class="w-full flex-1 mx-5">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="univ_period_from">
                                                Period From
                                            </label>
                                            <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                                <input wire:model.lazy="univ_period_from" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " id="univ_period_from" type="date"> 
                                            </div>
                                        </div>
                                        <div class="w-full flex-1 mx-5">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="univ_period_to">
                                                Period To
                                            </label>
                                            <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                                <input wire:model.lazy="univ_period_to" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " id="univ_period_to" type="date"> 
                                            </div>
                                        </div>
                                        <div class="w-full flex-1 mx-5">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="univ_school_name">
                                                School Name
                                            </label>
                                            <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                                <input wire:model.lazy="univ_school_name" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " id="univ_school_name" type="text"> 
                                            </div>
                                        </div>
                                        <div class="w-full flex-1 mx-5">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="univ_school_year">
                                                University School Year
                                            </label>
                                                <select wire:model.lazy="univ_school_year" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                    <option>Select</option>
                                                    <option value="1">4th</option>
                                                    <option value="2">5th</option>
                                                </select>
                                        </div>
                                        <div class="w-full flex-1 mx-5">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="univ_faculty_department">
                                               Faculty Department
                                            </label>
                                            <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                                <input wire:model.lazy="univ_faculty_department" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " id="univ_faculty_department" type="text"> 
                                            </div>
                                        </div>
                                        <div class="w-full flex-1 mx-5">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="univ_status">
                                                School Status
                                            </label>
                                                <select wire:model.lazy="univ_status" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                    <option>Select</option>
                                                    <option value="1">Graduated</option>
                                                    <option value="2">Student</option>
                                                    <option value="3">Drop Out</option>
                                                </select>
                                        </div>
                                        <div class="w-full flex-1 mx-5">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="univ_document">
                                                Latest Report Card(*pdf)
                                            </label>
                                            <div class="fileBox">
                                                <input wire:model="univ_document" type="file" name="univ_document" value="">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                                <div class="w-64 font-bold h-6 mx-5 mt-3 text-gray-800">Family Structure</div>
                                   <div class="flex flex-wrap -mx-3 mb-2">
                                        <div class="flex-1 flex flex-col md:w-1/3">
                                            <div class="w-full flex-1 mx-5">
                                                <button class="shadow bg-green-400 hover:bg-black-400 focus:shadow-outline focus:outline-none text-black font-bold py-2 px-4 rounded btn-sm" wire:click.prevent="add({{$i}})">Add</button>
                                            </div><br>
                                            <div class="w-full flex-1 mx-5">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="family_name">
                                                    Name
                                                </label>
                                                <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                                    <input wire:model.lazy="family_name.0" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " id="family_name" type="text"> 
                                                </div>
                                            </div>
                                            <div class="w-full flex-1 mx-5">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="relationship">
                                                    Relationship
                                                </label>
                                                <select wire:model.lazy="relationship.0" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                    <option>Select</option>
                                                    <option value="1">Grandfather</option>
                                                    <option value="2">Grandmother</option>
                                                    <option value="1">Father</option>
                                                    <option value="2">Mother</option>
                                                    <option value="1">Brother</option>
                                                    <option value="2">Sister</option>
                                                    <option value="1">Younger Brother</option>
                                                    <option value="2">Younger Sister</option>
                                                </select>
                                            </div>
                                            <div class="w-full flex-1 mx-5">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="age">
                                                    Age
                                                </label>
                                                <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                                    <input wire:model.lazy="age.0" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " id="age" type="text"> 
                                                </div>
                                            </div>
                                            <div class="w-full flex-1 mx-5">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="job">
                                                    Place of Employment/School
                                                </label>
                                                <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                                    <input wire:model.lazy="job.0" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " id="job" type="text"> 
                                                </div>
                                            </div>
                                            <div class="w-full flex-1 mx-5">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="live_together">
                                                    Residing with applicant
                                                </label>
                                                <select wire:model.lazy="live_together.0" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                    <option>Select</option>
                                                    <option value="1">Yes</option>
                                                    <option value="2">NO</option>
                                                </select>
                                            </div>
                                            <div class="w-full flex-1 mx-5">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="agreement">
                                                    Consents for overseas work
                                                </label>
                                                <select wire:model.lazy="agreement.0" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                    <option>Select</option>
                                                    <option value="1">Yes</option>
                                                    <option value="2">NO</option>
                                                </select>
                                            </div>
                                        </div>
                                        @foreach($families as $key => $value)
                                            <div class="flex-1 flex flex-col md:w-1/3">
                                                <div class="w-full flex-1 mx-5">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="family_name">
                                                        Name
                                                    </label>
                                                    <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                                        <input wire:model.lazy="family_name.{{ $value }}" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " id="family_name" type="text"> 
                                                    </div>
                                                </div>
                                                <div class="w-full flex-1 mx-5">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="relationship">
                                                        Relationship
                                                    </label>
                                                    <select wire:model.lazy="relationship.{{ $value }}" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                        <option>Select</option>
                                                        <option value="1">Grandfather</option>
                                                        <option value="2">Grandmother</option>
                                                        <option value="1">Father</option>
                                                        <option value="2">Mother</option>
                                                        <option value="1">Brother</option>
                                                        <option value="2">Sister</option>
                                                        <option value="1">Younger Brother</option>
                                                        <option value="2">Younger Sister</option>
                                                    </select>
                                                </div>
                                                <div class="w-full flex-1 mx-5">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="age">
                                                        Age
                                                    </label>
                                                    <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                                        <input wire:model.lazy="age.{{ $value }}" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " id="age" type="text"> 
                                                    </div>
                                                </div>
                                                <div class="w-full flex-1 mx-5">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="job">
                                                        Place of Employment/School
                                                    </label>
                                                    <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                                        <input wire:model.lazy="job.{{ $value }}" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " id="job" type="text"> 
                                                    </div>
                                                </div>
                                                <div class="w-full flex-1 mx-5">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="live_together">
                                                        Residing with applicant
                                                    </label>
                                                    <select wire:model.lazy="live_together.{{ $value }}" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                        <option>Select</option>
                                                        <option value="1">Yes</option>
                                                        <option value="2">NO</option>
                                                    </select>
                                                </div>
                                                <div class="w-full flex-1 mx-5">
                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="agreement">
                                                        Consents for overseas work
                                                    </label>
                                                    <select wire:model.lazy="agreement.{{ $value }}" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                        <option>Select</option>
                                                        <option value="1">Yes</option>
                                                        <option value="2">NO</option>
                                                    </select>
                                                </div><br>
                                                <div class="w-full flex-1 mx-5">
                                                    <button class="shadow bg-red-400 hover:bg-black-400 focus:shadow-outline focus:outline-none text-black font-bold py-2 px-4 rounded btn-sm" wire:click.prevent="remove({{$key}})">remove</button>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label for="question_happiest_event" class="block text-sm leading-5 font-medium text-gray-700">
                                        What was the happiest thing that happened in your life?
                                    </label>
                                    <div class="rounded-md shadow-sm">
                                        <textarea wire:model.lazy="question_happiest_event" id="question_happiest_event" rows="3" class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label for="question_hardest_event" class="block text-sm leading-5 font-medium text-gray-700">
                                        What was the hardest thing that happened in your life?
                                    </label>
                                    <div class="rounded-md shadow-sm">
                                        <textarea wire:model.lazy="question_hardest_event" id="question_hardest_event" rows="3" class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label for="question_worked_hard" class="block text-sm leading-5 font-medium text-gray-700">
                                        What was the happiest thing that happened in your life?
                                    </label>
                                    <div class="rounded-md shadow-sm">
                                        <textarea wire:model.lazy="question_worked_hard" id="question_worked_hard" rows="3" class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label for="question_outside_of_school" class="block text-sm leading-5 font-medium text-gray-700">
                                        What was the hardest thing that happened in your life?
                                    </label>
                                    <div class="rounded-md shadow-sm">
                                        <textarea wire:model.lazy="question_outside_of_school" id="question_outside_of_school" rows="3" class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label for="question_future_workplace" class="block text-sm leading-5 font-medium text-gray-700">
                                        What was the happiest thing that happened in your life?
                                    </label>
                                    <div class="rounded-md shadow-sm">
                                        <textarea wire:model.lazy="question_future_workplace" id="question_future_workplace" rows="3" class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label for="question_poor_person" class="block text-sm leading-5 font-medium text-gray-700">
                                        What was the hardest thing that happened in your life?
                                    </label>
                                    <div class="rounded-md shadow-sm">
                                        <textarea wire:model.lazy="question_poor_person" id="question_poor_person" rows="3" class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label for="question_emphasis" class="block text-sm leading-5 font-medium text-gray-700">
                                        What was the happiest thing that happened in your life?
                                    </label>
                                    <div class="rounded-md shadow-sm">
                                        <textarea wire:model.lazy="question_emphasis" id="question_emphasis" rows="3" class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label for="question_weak" class="block text-sm leading-5 font-medium text-gray-700">
                                        What was the hardest thing that happened in your life?
                                    </label>
                                    <div class="rounded-md shadow-sm">
                                        <textarea wire:model.lazy="question_weak" id="question_weak" rows="3" class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label for="question_speciality" class="block text-sm leading-5 font-medium text-gray-700">
                                        What was the happiest thing that happened in your life?
                                    </label>
                                    <div class="rounded-md shadow-sm">
                                        <textarea wire:model.lazy="question_speciality" id="question_speciality" rows="3" class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label for="question_it_technology" class="block text-sm leading-5 font-medium text-gray-700">
                                        What was the hardest thing that happened in your life?
                                    </label>
                                    <div class="rounded-md shadow-sm">
                                        <textarea wire:model.lazy="question_it_technology" id="question_it_technology" rows="3" class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col md:flex-row">
                                <div class="w-64 mx-2 font-bold h-6 mt-3 text-gray-800"></div>
                                    <div class="flex-1 flex flex-col md:flex-row">
                                        <button wire:click.prevent="store()" class="shadow bg-gray-400 hover:bg-black-400 focus:shadow-outline focus:outline-none text-black font-bold py-2 px-4 rounded" type="submit">Register</button>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
