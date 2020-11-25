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