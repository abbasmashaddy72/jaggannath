<x-guest-layout>

    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Book Appointment') }}
        </x-slot>

        <div class="flex flex-col justify-center items-center -mx-4">
            <div class="px-4 w-full lg:w-5/12 xl:w-4/12">
                <div class="shadow-testimonial rounded-lg border-gray-200 border-2 py-10 px-8 md:p-[60px] lg:p-10 2xl:p-[60px] sm:py-12 sm:px-10 lg:py-12 lg:px-10 wow fadeInUp"
                    data-wow-delay=".2s">
                    <form>
                        <div class="mb-6">
                            <label for="fullName" class="block text-xs text-dark">Full Name*</label>
                            <input type="text" name="fullName" placeholder="Adam Gelius"
                                class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4" />
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-xs text-dark">Email*</label>
                            <input type="email" name="email" placeholder="example@yourmail.com"
                                class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4" />
                        </div>
                        <div class="mb-6">
                            <label for="phone" class="block text-xs text-dark">Phone*</label>
                            <input type="text" name="phone" placeholder="+885 1254 5211 552"
                                class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4" />
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-xs text-dark">Message*</label>
                            <textarea name="message" rows="1" placeholder="type your message here"
                                class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4  resize-none"></textarea>
                        </div>
                        <div class="mb-0">
                            <button type="submit"
                                class="inline-flex items-center justify-center py-4 px-6 rounded text-white bg-primary text-base font-medium hover:bg-dark transition duration-300 ease-in-out">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </x-frontend.container>
</x-guest-layout>
