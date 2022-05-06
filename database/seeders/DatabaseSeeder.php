<?php

namespace Database\Seeders;

use App\Models\ContactUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ContactUsSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(FeatureSeeder::class);
        $this->call(InsuranceSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(BookAppointmentSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(TeamServiceSeeder::class);
    }
}
