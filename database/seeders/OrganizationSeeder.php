<?php

namespace Database\Seeders;

use App\Models\Organization;
use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $latitude = fake()->randomFloat(6, -0.1, 0.1); // Sekitar Pontianak (lat)
        $longitude = fake()->randomFloat(6, 109.2, 109.5); // Sekitar Pontianak (lng)
        $province_id = Region::where('name','KALIMANTAN BARAT')->first()?->id;
        $regency_id = Region::where('name','KAB. SANGGAU')->where('parent_id',$province_id)->first()?->id;
        $district_id = Region::where('name','Kapuas')->where('parent_id',$regency_id)->first()?->id;

        Organization::create(
            [
              'name'    => 'PT YBRevolution Indonesia',
              'brand'   => 'YBRevolution',
              'email'   => 'bisnis@ybrevolution.com',
              'phone_number'   => '02139516692',
              'province_id' => $province_id,
              'regency_id' => $regency_id,
              'district_id' => $district_id,
              'address' => 'Pontianak, Kalimantan Barat',
              'type'    => 'jasa',
              'active'  => 1,
              'lat'  => $latitude,
              'lng'  => $longitude,
              'logo'    => 'dummy/organization/logo/logo-1.png',
              'offers_delivery' => 0,
              'has_storefront' => 1,
              'open_start' => "07:00",
              'open_end' => "20:00",
              'expired_at' => now()->addYear(),
            ]
          );

          Organization::create(
            [
              'name'    => 'PT YBR Store',
              'brand'   => 'YBR Store',
              'phone_number'   => '0894931234523',
              'email'   => 'bisnis@ybrstore.com',
              'province_id' => $province_id,
              'regency_id' => $regency_id,
              'district_id' => $district_id,
              'address' => 'Pontianak, Kalimantan Barat',
              'type'    => 'dagang',
              'active'  => 1,
              'logo'    => 'dummy/organization/logo/logo-2.png',
              'lat'  => $latitude,
              'lng'  => $longitude,
              'offers_delivery' => 1,
              'delivery_start' => "07:00",
              'delivery_end' => "17:00",
              'has_storefront' => 1,
              'open_start' => "07:00",
              'open_end' => "20:00",
              'expired_at' => now()->addYear(),
            ]
          );

        //   Organization::create(
        //     [
        //       'type'    => 'Jasa',
        //       'name'    => 'Catatanku',
        //       'phone_number'   => '0892832382823',
        //       'email'   => 'info@catatanku.com',
        //       'address' => 'Pontianak, Kalimantan Barat',
        //       'active'  => 1,
        //       'logo'    => 'dummy/organization/logo/logo-3.png',
        //     ]
        //   );
    
       
    
    
         
    }
}
