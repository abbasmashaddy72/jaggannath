<section class="bg-white md:mt-10">

    <div class="container max-w-screen-2xl mx-auto px-4">
        <!-- ====== Banner Section Start -->
        <x-frontend.banner>
            {{ $banner_name }}
        </x-frontend.banner>
        <!-- ====== Banner Section End -->

        <!-- ====== About Section Start -->
        <section class="pt-20 lg:pt-[120px] pb-20 lg:pb-[120px]">
            <div class="container">
                {{ $slot }}
            </div>
        </section>
    </div>

</section>
