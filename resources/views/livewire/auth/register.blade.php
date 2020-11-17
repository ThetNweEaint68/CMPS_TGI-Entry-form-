@section('title', 'Create a new account')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
        </a>

        <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
            Entry form
        </h2>

        {{--<p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
            Or
            <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                sign in to your account
            </a>
        </p>--}}
    </div>

    <div>
            <form wire:submit.prevent="register" class="col-md-12">
                <div class="col-md-12 role-choice-wrapper">
                    <label for="name" class="block text-sm font-medium text-gray-700 leading-5">
                        Name
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="name" id="name" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                    </div>

                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

            <div class="col-md-12 form-fields-container">
                <div class="row">
                    <label for="gender" class="block text-sm font-medium text-gray-700 leading-5">
                        Gender
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input class="form-check-input" type="radio" name="gender" value="male">
                        <label class="form-check-label" for="male">Male</label>
                        
                        <input class="form-check-input" type="radio" name="gender" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>

                    @error('gender')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="row">
                    <label for="birthday" class="block text-sm font-medium text-gray-700 leading-5">
                        Birthday
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="birthday" id="birthday" type="date" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('birthday') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                    </div>

                    @error('birthday')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="row">
                    <label for="address" class="block text-sm font-medium text-gray-700 leading-5">
                        Address
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="address" id="address" type="address" required class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 appearance-none rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('birthday') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                    </div>

                    @error('address')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="row">
                    <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                        Email
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="email" id="email" type="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                    </div>

                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="row">
                    <label for="confirmEmail" class="block text-sm font-medium text-gray-700 leading-5">
                        Confirm Email
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="confirmEmail" id="confirmEmail" type="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('confirmEmail') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                    </div>

                    @error('confirmEmail')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="row">
                    <label for="phNo" class="block text-sm font-medium text-gray-700 leading-5">
                        Phone Number
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="phNo" id="phNo" type="phNo" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('phNo') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                    </div>

                    @error('phNo')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="row">
                    <label for="bloodType" class="block text-sm font-medium text-gray-700 leading-5">
                        Blood Type
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <select name="bloodType" class="select" tabindex="1">
                            <option>Please Select</option>
                            <option value="1">A+</option>
                            <option value="2">A-</option>
                            <option value="1">B+</option>
                            <option value="2">B-</option>
                            <option value="3">AB+</option>
                            <option value="4">AB-</option>
                            <option value="3">O+</option>
                            <option value="4">O-</option>
                        </select>
                    </div>

                    @error('bloodType')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="row">
                    <label for="hobby" class="block text-sm font-medium text-gray-700 leading-5">
                        Hobby
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="hobby" id="hobby" type="hobby" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('hobby') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                    </div>

                    @error('hobby')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="row">
                    <label for="favorite_subject" class="block text-sm font-medium text-gray-700 leading-5">
                        Favorite Subject
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="favorite_subject" id="favorite_subject" type="favorite_subject" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('favorite_subject') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                    </div>

                    @error('favorite_subject')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="row">
                    <label for="favorite_language" class="block text-sm font-medium text-gray-700 leading-5">
                        Favorite Programming Language
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <select name="favorite_language" class="select" tabindex="1">
                            <option>Please Select</option>
                            <option value="1">PHP</option>
                            <option value="2">JAVA</option>
                            <option value="1">C#</option>
                            <option value="2">HTML</option>
                            <option value="3">CSS</option>
                        </select>
                    </div>

                    @error('favorite_language')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="row">
                    <label for="cooking" class="block text-sm font-medium text-gray-700 leading-5">
                        Cooking
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input class="form-check-input" type="radio" name="cooking" value="yes">
                        <label class="form-check-label" for="yes">Yes</label>
                        
                        <input class="form-check-input" type="radio" name="cooking" value="no">
                        <label class="form-check-label" for="no">No</label>
                    </div>
                </div>

                <div class="row">
                    <label for="group_life_experience" class="block text-sm font-medium text-gray-700 leading-5">
                        Group Life Experience
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input class="form-check-input" type="radio" name="group_life_experience" value="yes">
                        <label class="form-check-label" for="yes">Yes</label>
                        
                        <input class="form-check-input" type="radio" name="group_life_experience" value="no">
                        <label class="form-check-label" for="no">No</label>
                    </div>
                </div>

                <div class="row">
                    <label for="eye_sight" class="block text-sm font-medium text-gray-700 leading-5">
                        Eye Sight
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        Left : <input wire:model.lazy="eye_sight" type="text" name="eye_sight_left" value="{{ old('eye_sight_left') }}" maxlength="4" class="js-decimal input input-size3half" tabindex="1">
                        Right : <input wire:model.lazy="eye_sight" type="text" name="eye_sight_right" value="{{ old('eye_sight_right') }}" maxlength="4" class="js-decimal input input-size3half" tabindex="1">
                    </div>
                </div>

                <div class="row">
                    <label for="color_blindness" class="block text-sm font-medium text-gray-700 leading-5">
                        Color Blindness
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input class="form-check-input" type="radio" name="color_blindness" value="yes">
                        <label class="form-check-label" for="yes">Yes</label>
                        
                        <input class="form-check-input" type="radio" name="color_blindness" value="no">
                        <label class="form-check-label" for="no">No</label>
                    </div>
                </div>

                <div class="row">
                    <label for="tattoo" class="block text-sm font-medium text-gray-700 leading-5">
                        Tattoo
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input class="form-check-input" type="radio" name="tattoo" value="yes">
                        <label class="form-check-label" for="yes">Yes</label>
                        
                        <input class="form-check-input" type="radio" name="tattoo" value="no">
                        <label class="form-check-label" for="no">No</label>
                    </div>
                </div>

                <div class="row">
                    <label for="drinking" class="block text-sm font-medium text-gray-700 leading-5">
                        Drinking
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input class="form-check-input" type="radio" name="drinking" value="yes">
                        <label class="form-check-label" for="yes">Yes</label>
                        
                        <input class="form-check-input" type="radio" name="drinking" value="no">
                        <label class="form-check-label" for="no">No</label>
                    </div>
                </div>

                <div class="row">
                    <label for="smoking" class="block text-sm font-medium text-gray-700 leading-5">
                        Smoking
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input class="form-check-input" type="radio" name="smoking" value="yes">
                        <label class="form-check-label" for="yes">Yes</label>
                        
                        <input class="form-check-input" type="radio" name="smoking" value="no">
                        <label class="form-check-label" for="no">No</label>
                    </div>
                </div>

                <div class="row">
                    <label for="medical_history" class="block text-sm font-medium text-gray-700 leading-5">
                        Medical History
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input class="form-check-input" type="radio" name="medical_history" value="yes">
                        <label class="form-check-label" for="yes">Yes</label>
                        
                        <input class="form-check-input" type="radio" name="medical_history" value="no">
                        <label class="form-check-label" for="no">No</label>
                        <input type="text" name="medical_history_text" value="{{ old('medical_history_text') }}" class="js-medicalHistory input input-size6half" tabindex="1">
                    </div>
                </div>
            </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Register
                        </button>
                    </span>
                </div>
            </form>
    </div>
</div>
