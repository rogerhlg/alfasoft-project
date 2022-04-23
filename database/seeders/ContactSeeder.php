<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('contacts')->insert([
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'contact' => $faker->phoneNumber
        ]);

        // Contact::factory()
        //     ->name($faker->name)
        //     ->email($faker->unique()->safeEmail)
        //     ->contact($faker->phoneNumber);
    }
}
