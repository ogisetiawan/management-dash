<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker; //? call class faker

class ms_UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID'); //? initial data menggunakan fake indonesia
        for ($i=1; $i < 5; $i++) { 
            DB::table('ms_User')->insert([
                'chUsername' => $faker->name,
                'chPassword' => Str::random(5),
                // 'chPassword' => Hash::make('password'),
                'chEmail' => Str::random(10).'@mail.com',
                'chFirstName' => $faker->name(),
                'chMiddleName' => Str::random(5),
                'chLastName' => $faker->lastName(),
                // 'vbAvatar' => $faker->imageUrl(360, 360, 'animals', true),
                'loActive' => $faker->randomDigitNotNull,
                'AIDX' => Str::random(3),
            ]);
        }
    }
}
