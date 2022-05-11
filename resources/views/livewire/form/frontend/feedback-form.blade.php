<div>
    <form wire:submit.prevent="submit">
        <div class="mb-6">
            <label class="block text-xs text-dark">Type of Appointment<span class="text-red-600 ml-2">*</span></label>
            <div class="flex py-4">
                <div class="form-check form-check-inline mr-4">
                    <input wire:model="type"
                        class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                        type="radio" name="inlineRadioOptions" id="OP" value="OP">
                    <label class="form-check-label inline-block text-gray-800" for="OP">OP</label>
                </div>
                <div class="form-check form-check-inline">
                    <input wire:model="type"
                        class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                        type="radio" name="inlineRadioOptions" id="IP" value="IP">
                    <label class="form-check-label inline-block text-gray-800" for="IP">IP</label>
                </div>
            </div>
            @error('type')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="name" class="block text-xs text-dark">Name<span class="text-red-600 ml-2">*</span></label>
            <input type="text" id="name" placeholder="Adam Gelius" wire:model="name"
                class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4" />
            @error('name')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="admission_number" class="block text-xs text-dark">Admission Number<span
                    class="text-red-600 ml-2">*</span></label>
            <input type="text" id="admission_number" placeholder="123ABC123" wire:model="admission_number"
                class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4" />
            @error('admission_number')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="phone" class="block text-xs text-dark">Phone<span class="text-red-600 ml-2">*</span></label>
            <input type="text" id="phone" placeholder="+885 1254 5211 552" wire:model="phone"
                class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4" />
            @error('phone')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="email" class="block text-xs text-dark">Email</label>
            <input type="email" id="email" placeholder="example@yourmail.com" wire:model="email"
                class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4" />
            @error('email')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="how" class="block text-xs text-dark">How do you came to know about Us?<span
                    class="text-red-600 ml-2">*</span></label>
            <textarea id="how" rows="1" placeholder="type your review here" wire:model="how"
                class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4  resize-none"></textarea>
            @error('how')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="initial_response_text" class="block text-xs text-dark">How was your initial response, receiving
                and explaining your treatment/emergency?<span class="text-red-600 ml-2">*</span></label>

            <x-frontend.rating>
                <x-slot name="rating">
                    initial_response_rating
                </x-slot>
            </x-frontend.rating>

            <textarea id="initial_response_text" rows="1" placeholder="type your review here" wire:model="initial_response_text"
                class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4  resize-none"></textarea>
            @error('initial_response_text')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="explanation_of_treatment_text" class="block text-xs text-dark">How well are you explained about
                your disease and treatment?<span class="text-red-600 ml-2">*</span></label>

            <x-frontend.rating>
                <x-slot name="rating">
                    explanation_of_treatment_rating
                </x-slot>
            </x-frontend.rating>

            <textarea id="explanation_of_treatment_text" rows="1" placeholder="type your review here"
                wire:model="explanation_of_treatment_text"
                class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4  resize-none"></textarea>
            @error('explanation_of_treatment_text')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="cost_of_treatment_text" class="block text-xs text-dark">How well are you explained about the
                cost involved in your treatment?<span class="text-red-600 ml-2">*</span></label>

            <x-frontend.rating>
                <x-slot name="rating">
                    cost_of_treatment_rating
                </x-slot>
            </x-frontend.rating>

            <textarea id="cost_of_treatment_text" rows="1" placeholder="type your review here" wire:model="cost_of_treatment_text"
                class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4  resize-none"></textarea>
            @error('cost_of_treatment_text')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="reception_text" class="block text-xs text-dark">How do you rate the reception?<span
                    class="text-red-600 ml-2">*</span></label>

            <x-frontend.rating>
                <x-slot name="rating">
                    reception_rating
                </x-slot>
            </x-frontend.rating>

            <textarea id="reception_text" rows="1" placeholder="type your review here" wire:model="reception_text"
                class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4  resize-none"></textarea>
            @error('reception_text')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="dmo_text" class="block text-xs text-dark">Please rate DMO's (Duty Medical Officer) at the time
                of admission/stay?<span class="text-red-600 ml-2">*</span></label>

            <x-frontend.rating>
                <x-slot name="rating">
                    dmo_rating
                </x-slot>
            </x-frontend.rating>

            <textarea id="dmo_text" rows="1" placeholder="type your review here" wire:model="dmo_text"
                class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4  resize-none"></textarea>
            @error('dmo_text')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="nurse_text" class="block text-xs text-dark">Please rate for nursing staff?<span
                    class="text-red-600 ml-2">*</span></label>

            <x-frontend.rating>
                <x-slot name="rating">
                    nurse_rating
                </x-slot>
            </x-frontend.rating>

            <textarea id="nurse_text" rows="1" placeholder="type your review here" wire:model="nurse_text"
                class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4  resize-none"></textarea>
            @error('nurse_text')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="house_keeping_text" class="block text-xs text-dark">Please rate our House keeping?<span
                    class="text-red-600 ml-2">*</span></label>

            <x-frontend.rating>
                <x-slot name="rating">
                    house_keeping_rating
                </x-slot>
            </x-frontend.rating>

            <textarea id="house_keeping_text" rows="1" placeholder="type your review here" wire:model="house_keeping_text"
                class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4  resize-none"></textarea>
            @error('house_keeping_text')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="satisfaction_of_treatment_text" class="block text-xs text-dark">Are you satisfied with the
                treatment?<span class="text-red-600 ml-2">*</span></label>

            <x-frontend.rating>
                <x-slot name="rating">
                    satisfaction_of_treatment_rating
                </x-slot>
            </x-frontend.rating>

            <textarea id="satisfaction_of_treatment_text" rows="1" placeholder="type your review here"
                wire:model="satisfaction_of_treatment_text"
                class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4  resize-none"></textarea>
            @error('satisfaction_of_treatment_text')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="any_other_feedback" class="block text-xs text-dark">Any Other feedback!</label>
            <textarea id="any_other_feedback" rows="1" placeholder="type your review here" wire:model="any_other_feedback"
                class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4  resize-none"></textarea>
            @error('any_other_feedback')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
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
        <div class="mb-0 mt-4 text-center">
            <button type="submit"
                class="inline-flex items-center justify-center py-4 px-6 rounded text-white bg-primary text-base font-medium hover:bg-dark transition duration-300 ease-in-out">
                Submit
            </button>
        </div>
    </form>
</div>
