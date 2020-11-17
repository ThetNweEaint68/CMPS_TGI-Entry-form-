@section('title', 'Create a new account')

<div>
    {{--<div class="sm:mx-auto sm:w-full sm:max-w-md">--}}
        <a href="{{ route('home') }}">
            <x-logo class="w-auto h-16 mx-left text-indigo-600" />
        </a>

        <h2 class="mt-6 text-3xl font-extrabold text-left text-gray-900 leading-9">
            Entry form
        </h2><br>
<div class="p-5">
    <div class="mt-2">
        <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
    <form class="w-full max-w-lg">
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
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="gender">
                Gender
            </label>
            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model.lazy="gender" class="form-check-input" type="radio" name="gender" value="male">
                <label class="form-check-label" for="gender">Male</label>
                        
                <input wire:model.lazy="gender" class="form-check-input" type="radio" name="gender" value="female">
                <label class="form-check-label" for="gender">Female</label>
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
            <input wire:model.lazy="confirm_email" class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="confirm_email" type="emailail">
        </div>
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone">
                Phone Number
            </label>
            <input class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="v" type="tel">
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="blood_type">
                Blood Type
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="blood_type">
                    <option>Select</option>
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                    <option>O+</option>
                    <option>O-</option>
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
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="fovrite_subject">
                Favorite Subject
            </label>
            <input wire:model.lazy="hobby" class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="fovrite_subject" type="text">
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="favorite_language">
                Favorite Language
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="favorite_language">
                    <option>Select</option>
                    <option>PHP</option>
                    <option>C#</option>
                    <option>JAVA</option>
                    <option>HTML</option>
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
                        
                <input wire:model.lazy="cooking" class="form-check-input" type="radio" name="gender" value="no">
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
                        
                <input wire:model.lazy="group_life_experience" class="form-check-input" type="radio" name="gender" value="no">
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
    </form>
    </div>
</div>
</div>
</div>
    <p class="font-bold text-xl mt-3">University Grade</p>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="gpa">
                GPA
            </label>
            <input wire:model.lazy="name" class="appearance-none block w-full bg-white-200 text-gray-700 border border-black-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="gpa" type="text">
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="roll_number">
                Roll Number
            </label>
            <input wire:model.lazy="name" class="appearance-none block w-full bg-white-200 text-gray-700 border border-black-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="roll_number" type="text">
        </div>
    </div>
    <div class="p-5">
    <div class="mt-2">
        <p class="font-bold text-xl mt-3">Educational Background</p>
        <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
            <div class="w-64 font-bold h-6 mx-5 mt-3 text-gray-800">Junior High School</div>
            <div class="flex-1 flex flex-col md:w-1/3">
                <div class="w-full flex-1 mx-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="roll_number">
                            Period From
                        </label>
                    <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                        <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " type="date"> 
                    </div>
                </div>
                <div class="w-full flex-1 mx-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="roll_number">
                            Period To
                        </label>
                    <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                        <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " type="date"> 
                    </div>
                </div>
                <div class="w-full flex-1 mx-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="roll_number">
                        School Name
                        </label>
                    <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                        <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " type="text"> 
                    </div>
                </div>
                <div class="w-full flex-1 mx-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="roll_number">
                        School Status
                    </label>
                    <select class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <option value="US">Select</option>
                        <option value="Italy">Graduated</option>
                        <option value="Spain">Student</option>
                        <option value="China">Drop Out</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
            <div class="w-64 font-bold h-6 mx-5 mt-3 text-gray-800">High School</div>
            <div class="flex-1 flex flex-col md:w-1/3">
                <div class="w-full flex-1 mx-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="roll_number">
                            Period From
                        </label>
                    <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                        <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " type="date"> 
                    </div>
                </div>
                <div class="w-full flex-1 mx-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="roll_number">
                            Period To
                        </label>
                    <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                        <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " type="date"> 
                    </div>
                </div>
                <div class="w-full flex-1 mx-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="roll_number">
                        School Name
                        </label>
                    <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                        <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " type="text"> 
                    </div>
                </div>
                <div class="w-full flex-1 mx-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="roll_number">
                        Faculty Department
                    </label>
                    <select class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <option value="US">Select</option>
                        <option value="US">Science</option>
                        <option value="Italy">Economic</option>
                    </select>
                </div>
                <div class="w-full flex-1 mx-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="roll_number">
                        School Status
                    </label>
                    <select class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <option value="US">Select</option>
                        <option value="Italy">Graduated</option>
                        <option value="Spain">Student</option>
                        <option value="China">Drop Out</option>
                    </select>
                </div>
                <div class="w-full flex-1 mx-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="roll_number">
                        Maticulation Examination Pass Certicate(*pdf)
                    </label>
                    <div class="fileBox">
                        <input type="hidden" name="hs_document_path" value="{{ old('hs_document_path') }}">
                        <input type="file" data-modalId="file1" id="upload-form-fileselect" name="hs_document" value="" accept="application/pdf" tabindex="1">
                        {{--<label class="fileBox_uploadBtn">Select files
                        <input type="file" data-modalId="file1" id="upload-form-fileselect" name="hs_document" value="" accept="application/pdf" tabindex="1"></label>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
            <div class="w-64 font-bold h-6 mx-5 mt-3 text-gray-800">University</div>
            <div class="flex-1 flex flex-col md:w-1/3">
                <div class="w-full flex-1 mx-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="roll_number">
                            Period From
                        </label>
                    <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                        <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " type="date"> 
                    </div>
                </div>
                <div class="w-full flex-1 mx-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="roll_number">
                            Period To
                        </label>
                    <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                        <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " type="date"> 
                    </div>
                </div>
                <div class="w-full flex-1 mx-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="roll_number">
                        School Name
                        </label>
                    <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                        <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " type="text"> 
                    </div>
                </div>
                <div class="w-full flex-1 mx-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="roll_number">
                        School Status
                    </label>
                    <select class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <option value="US">Select</option>
                        <option value="Italy">Graduated</option>
                        <option value="Spain">Student</option>
                        <option value="China">Drop Out</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="w-64 mx-2 font-bold h-6 mt-3 text-gray-800"></div>
            <div class="flex-1 flex flex-col md:flex-row">
                <button class="shadow bg-gray-400 hover:bg-black-400 focus:shadow-outline focus:outline-none text-black font-bold py-2 px-4 rounded" type="button">Submit</button>
            </div>
        </div>
    </div>
</div>
</div>