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
        $organizations = Organization::all();

        $master = [
            ['name' => 'Makanan', 'type' => 'dagang'],
            ['name' => 'Minuman', 'type' => 'dagang'],
            ['name' => 'Laundry', 'type' => 'jasa'],
            ['name' => 'Fotokopi / Percetakan', 'type' => 'jasa'],
            ['name' => 'Service AC', 'type' => 'jasa'],
            ['name' => 'Terapi Refleksi', 'type' => 'jasa'],
            ['name' => 'Konveksi', 'type' => 'jasa'],
            ['name' => 'Toko Pakaian / Distro', 'type' => 'dagang'],
            ['name' => 'Jasa Penjahit / Permak', 'type' => 'jasa'],
            ['name' => 'Gadget', 'type' => 'dagang'],
            ['name' => 'Jasa Desain Grafis', 'type' => 'jasa'],
            ['name' => 'Jasa Fotografi', 'type' => 'jasa'],
            ['name' => 'Make Up', 'type' => 'jasa'],
            ['name' => 'Skincare', 'type' => 'dagang'],
            ['name' => 'Organik', 'type' => 'dagang'],
            ['name' => 'Hidroponik', 'type' => 'dagang'],
            ['name' => 'Pupuk', 'type' => 'dagang'],
            ['name' => 'Bibit tanaman', 'type' => 'dagang'],
            ['name' => 'Kursus', 'type' => 'jasa'],
            ['name' => 'Pelatihan Kerja', 'type' => 'jasa'],
            ['name' => 'Rental Mobil / Motor', 'type' => 'jasa'],
            ['name' => 'Aksesoris Mobil / Motor', 'type' => 'dagang'],
        ];

        foreach ($organizations as $org) {
            // Filter hanya master yang tipenya sesuai dengan organisasi
            $matchedMaster = array_filter($master, fn ($m) => $m['type'] === $org->type);

            foreach ($matchedMaster as $m) {
                MasterProduct::create([
                    'name' => $m['name'],
                    'type' => $m['type'],
                    'organization_id' => $org->id,
                    'created_by' => 1,
                    'updated_by' => 1,
                ]);
            }
        }
    }

}
