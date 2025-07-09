<?php

namespace Database\Seeders;

use App\Models\MasterProduct;
use App\Models\Organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $organization = Organization::pluck('id');

        $master = ['Makanan','Minuman','Jasa','Fashion','Elektronik','Rumah Tangga','Digital','Kerajinan Tangan'];

        foreach ($organization as $org){
            foreach ($master as $m){
                MasterProduct::create([
                    'name' => $m,
                    'organization_id' => $org,
                    'created_by' => 1,
                    'updated_by' => 1,
                ]);
            }
        }
    }
}
