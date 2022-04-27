<div class="text-lg text-gray-600 dark:text-gray-400">
    <form class="max-w-xl mx-auto" wire:submit.prevent="submit">
        <div class="flex flex-wrap mb-5 -mx-3">
            <div class="w-full px-3">
                <label class="block mb-1 text-sm font-medium text-gray-800 dark:text-gray-300">Your Name
                    <span class="text-red-600">*</span>
                    <input type="text" class="w-full form-input" placeholder="Enter your name" required
                        wire:model="name" />
                </label>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap mb-5 -mx-3">
            <div class="w-full px-3">
                <label class="block mb-1 text-sm font-medium text-gray-800 dark:text-gray-300">Your Email
                    <span class="text-red-600">*</span>
                    <input type="email" class="w-full form-input" placeholder="Enter your Email" required
                        wire:model="email" />
                </label>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap mb-5 -mx-3">
            <div class="w-full px-3">
                <label class="block mb-1 text-sm font-medium text-gray-800 dark:text-gray-300">Phone Number
                    <span class="text-red-600">*</span>
                    <input type="tel" class="w-full form-input" placeholder="Enter your phone number" required
                        wire:model="contact_number" />
                </label>
                @error('contact_number')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap mb-5 -mx-3">
            <div class="w-full px-3">
                <label class="block mb-1 text-sm font-medium text-gray-800 dark:text-gray-300">Address <span
                        class="text-red-600">*</span>
                    <textarea type="text" class="w-full form-input" placeholder="Enter your Address" required
                        wire:model="address"></textarea>
                </label>
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap mb-5 -mx-3">
            <div class="w-full px-3">
                <div class="flex items-center justify-between mb-1">
                    <label class="block text-sm font-medium text-gray-800 dark:text-gray-300"
                        for="message">Question's</label>
                    <span class="text-sm text-gray-500">Optional</span>
                </div>
                <textarea id="message" rows="4" class="w-full form-textarea"
                    placeholder="What is that you are looking for?" wire:model="questions"></textarea>
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
                    <span>Submit</span>
                    <svg class="w-3 h-3 mt-px ml-2 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-current"
                            d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z" />
                    </svg>
                </button>
            </div>
        </div>
    </form>
</div>
