<div class="text-lg text-gray-600 dark:text-gray-400">
    <!-- Contact form -->
    <form class="max-w-xl mx-auto" wire:submit.prevent="submit">
        <div class="flex flex-wrap mb-5 -mx-3">
            <div class="w-full px-3">
                <label class="block mb-1 text-sm font-medium text-gray-800 dark:text-gray-300">Patient Name
                    <span class="text-red-600">*</span>
                    <input type="text" class="w-full form-input" placeholder="Enter Patient name" required
                        wire:model="name" />
                </label>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap mb-5 -mx-3">
            <div class="w-full px-3">
                <label class="block mb-1 text-sm font-medium text-gray-800 dark:text-gray-300">Phone Number
                    <span class="text-red-600">*</span>
                    <input type="tel" class="w-full form-input" placeholder="Enter your phone number" required
                        wire:model="phone" />
                </label>
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap mb-5 -mx-3">
            <div class="w-full px-3">
                <label class="block mb-1 text-sm font-medium text-gray-800 dark:text-gray-300">Email
                    <input type="email" class="w-full form-input" placeholder="Enter Email" required
                        wire:model="email" />
                </label>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap mb-5 -mx-3">
            <div class="w-full px-3 mb-4 md:w-1/2 md:mb-0">
                <label class="block mb-1 text-sm font-medium text-gray-800 dark:text-gray-300">Gender
                    <span class="text-red-600">*</span>
                    <select class="w-full form-select" required wire:model='gender'>
                        <option>Male</option>
                        <option>FeMale</option>
                        <option>Trans</option>
                    </select>
                </label>
                @error('gender')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full px-3 mb-4 md:w-1/2 md:mb-0">
                <label class="block mb-1 text-sm font-medium text-gray-800 dark:text-gray-300">Patient Age
                    <span class="text-red-600">*</span>
                    <input type="number" class="w-full form-input" placeholder="Enter Patient Age" required
                        wire:model="age" />
                </label>
                @error('age')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap mb-5 -mx-3">
            <div class="w-full px-3">
                <div class="block mb-3 text-sm font-medium text-gray-800 dark:text-gray-300">Have you previously
                    attended our facility?
                </div>
                <label class="flex items-center mb-2">
                    <input type="radio" class="form-radio" name="yes" value="1" wire:model='previous_record' />
                    <span class="ml-3 text-sm text-gray-600 dark:text-gray-400">Yes</span>
                </label>
                <label class="flex items-center mb-2">
                    <input type="radio" class="form-radio" name="no" value="0" wire:model='previous_record' />
                    <span class="ml-3 text-sm text-gray-600 dark:text-gray-400">No</span>
                </label>
                @error('previous_record')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        @if ($previous_record == '1')
            <div class="flex flex-wrap mb-5 -mx-3">
                <div class="w-full px-3">
                    <label class="block mb-1 text-sm font-medium text-gray-800 dark:text-gray-300">If Yes, state on
                        which
                        condition and when? <span class="text-red-600">*</span>
                        <textarea type="text" class="w-full form-input" placeholder="Enter your Address" required
                            wire:model="previous_record_description"></textarea>
                    </label>
                    @error('previous_record_description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        @endif
        <div class="flex flex-wrap mb-5 -mx-3">
            <div class="w-full px-3 mb-4 md:w-1/2 md:mb-0">
                <label class="block mb-1 text-sm font-medium text-gray-800 dark:text-gray-300">Appointment Date
                    <span class="text-red-600">*</span>
                    <input type="date" class="w-full form-input" placeholder="Enter your Age" required
                        wire:model="appointment_date" />
                </label>
                @error('appointment_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full px-3 mb-4 md:w-1/2 md:mb-0">
                <label class="block mb-1 text-sm font-medium text-gray-800 dark:text-gray-300">Appointment Time
                    <span class="text-red-600">*</span>
                    <input type="time" class="w-full form-input" placeholder="Enter your phone number" required
                        wire:model="appointment_time" />
                </label>
                @error('appointment_time')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        @if ($success)
            <div class="px-4 py-3 text-teal-900 bg-teal-100 border-t-4 border-teal-500 rounded-b shadow-md"
                role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="w-6 h-6 mr-4 text-teal-500 fill-current"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                        </svg></div>
                    <div>
                        <p class="font-bold">{{ $success }}</p>
                    </div>
                </div>
            </div>
        @endif
        <div class="flex flex-wrap mt-6 -mx-3">
            <div class="w-full px-3">
                <button class="flex items-center w-full text-white bg-teal-500 btn hover:bg-teal-400" type="submit">
                    <span>Book</span>
                    <svg class="w-3 h-3 mt-px ml-2 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-current"
                            d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z" />
                    </svg>
                </button>
            </div>
        </div>
    </form>
</div>
