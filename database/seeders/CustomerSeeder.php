<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Organization;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organization = Organization::where('id',[1,2,3])->pluck('id');

        $faker = Factory::create('id_ID');

        if($organization){
           foreach ($organization as $org){
            for ($i = 0; $i < 5; $i++) {
               Customer::create([
                   'organization_id' => $org,
                   'name' => $faker->name(),
                   'email' => $faker->email(),
                    'phone_number' => $faker->numerify('08###########'),
                   'active' => 1,
                   'created_by' => 1,
                   'updated_by' => 1,
               ]);
            }
           }
        }
    }
}
