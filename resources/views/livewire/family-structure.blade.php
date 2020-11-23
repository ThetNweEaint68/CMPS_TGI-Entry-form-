<div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
    <div class="w-64 font-bold h-6 mx-5 mt-3 text-gray-800">Family Structure</div>
        <div class="flex-1 flex flex-col md:w-1/3">
            <div class="w-full flex-1 mx-5">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    Name
                </label>
                <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                    <input wire:model.lazy="name" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " id="name" type="text"> 
                </div>
            </div>
            <div class="w-full flex-1 mx-5">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="relationship">
                    Relationship
                </label>
                <select wire:model.lazy="relationship" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
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
                    <input wire:model.lazy="age" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " id="age" type="text"> 
                </div>
            </div>
            <div class="w-full flex-1 mx-5">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="job">
                    Place of Employment/School
                </label>
                <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                    <input wire:model.lazy="job" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 " id="job" type="text"> 
                </div>
            </div>
            <div class="w-full flex-1 mx-5">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="live_together">
                    Residing with applicant
                </label>
                <select wire:model.lazy="live_together" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option>Select</option>
                    <option value="1">Yes</option>
                    <option value="2">NO</option>
                </select>
            </div>
            <div class="w-full flex-1 mx-5">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="agreement">
                    Consents for overseas work
                </label>
                <select wire:model.lazy="agreement" class="block appearance-none w-full bg-white-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option>Select</option>
                    <option value="1">Yes</option>
                    <option value="2">NO</option>
                </select>
            </div>
        </div>
</div>
