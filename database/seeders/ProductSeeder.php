<?php

namespace Database\Seeders;

use App\Models\MasterProduct;
use App\Models\Organization;
use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $faker = Factory::create('id_ID');

        // Ambil organisasi yang sudah ada dan punya type
        $organizations = Organization::whereIn('id', [1, 2, 3])->get();

        foreach ($organizations as $org) {
            // Ambil hanya MasterProduct yang typenya sama dengan organization
            $masterProducts = MasterProduct::where('organization_id', $org->id)
                ->where('type', $org->type)
                ->get();

            // Kalau tidak ada master product yang cocok, skip
            if ($masterProducts->isEmpty()) {
                continue;
            }

            // Ambil 10 MasterProduct acak dari organisasi ini
            $randomMasters = $masterProducts->random(min(10, $masterProducts->count()));

            foreach ($randomMasters as $master) {
                Product::create([
                    'organization_id' => $org->id,
                    'master_product_id' => $master->id,
                    'name' => static::generateExampleProductName($master->name, $faker),
                    'active' => 1,
                    'price' => static::generateExamplePrice($master->name, $faker),
                    'created_by' => 1,
                    'updated_by' => 1,
                ]);
            }
        }
    }

    private static function generateExampleProductName(string $masterName, $faker): string
    {
        return match ($masterName) {
            'Makanan' => $faker->randomElement(['Nasi Goreng Spesial', 'Ayam Geprek', 'Bakso Sapi', 'Rendang Padang']),
            'Minuman' => $faker->randomElement(['Es Teh Manis', 'Kopi Tubruk', 'Jus Alpukat', 'Teh Tarik']),
            'Laundry' => $faker->randomElement(['Laundry Kiloan Bersih Wangi', 'Express Laundry Service']),
            'Fotokopi / Percetakan' => $faker->randomElement(['Print & Fotocopy Sinar Abadi', 'Percetakan Undangan Murah']),
            'Service AC' => $faker->randomElement(['Service AC Cepat & Hemat', 'Bersih AC Elektronik']),
            'Terapi Refleksi' => $faker->randomElement(['Refleksi Sehat Ibu Ana', 'Pijat Tradisional Jawa']),
            'Konveksi' => $faker->randomElement(['Konveksi Seragam Sekolah', 'Konveksi Kaos Polos Murah']),
            'Toko Pakaian / Distro' => $faker->randomElement(['Distro Fashion Bandung', 'Pakaian Muslimah Modern']),
            'Jasa penjahit / Permak' => $faker->randomElement(['Permak Levis Kang Dedi', 'Penjahit Khusus Jas Pria']),
            'Gadget' => $faker->randomElement(['HP Android Samsung', 'iPhone Bekas Mulus']),
            'Jasa Desain Grafis' => $faker->randomElement(['Desain Logo UMKM', 'Jasa Desain Feed Instagram']),
            'Jasa Fotografi' => $faker->randomElement(['Fotografer Wedding Murah', 'Foto Studio Keluarga']),
            'Make Up' => $faker->randomElement(['MUA Pernikahan Jakarta', 'Makeup Wisuda & Lamaran']),
            'Skincare' => $faker->randomElement(['Toner Herbal Organik', 'Cream Wajah Halal']),
            'Organik' => $faker->randomElement(['Sayur Organik Segar', 'Beras Merah Organik']),
            'Hidroponik' => $faker->randomElement(['Selada Hidroponik', 'Kangkung Hidroponik']),
            'Pupuk' => $faker->randomElement(['Pupuk Organik Cair', 'Kompos Alami Petani']),
            'Bibit tanaman' => $faker->randomElement(['Bibit Cabai Rawit', 'Bibit Tomat Unggul']),
            'Kursus' => $faker->randomElement(['Kursus Komputer Dasar', 'Les Bahasa Inggris']),
            'Pelatihan Kerja' => $faker->randomElement(['Pelatihan Barista', 'Pelatihan Operator Mesin']),
            'Rental Mobil / Motor' => $faker->randomElement(['Sewa Motor Harian', 'Rental Mobil + Supir']),
            'Aksesoris Mobil / Motor' => $faker->randomElement(['Lampu LED Motor', 'Sarung Jok Mobil']),
            default => $faker->word(),
        };
    }

    private static function generateExamplePrice(string $masterName, $faker): int
    {
        return match ($masterName) {
            'Makanan', 'Minuman' => $faker->numberBetween(10000, 50000),
            'Laundry', 'Service AC', 'Terapi Refleksi', 'Fotokopi / Percetakan' => $faker->numberBetween(20000, 100000),
            'Konveksi', 'Jasa Penjahit / Permak' => $faker->numberBetween(30000, 150000),
            'Toko Pakaian / Distro' => $faker->numberBetween(75000, 300000),
            'Gadget' => $faker->numberBetween(500000, 3000000),
            'Skincare' => $faker->numberBetween(25000, 150000),
            'Organik', 'Hidroponik', 'Pupuk', 'Bibit tanaman' => $faker->numberBetween(10000, 100000),
            'Jasa Desain Grafis', 'Jasa Fotografi', 'Make Up' => $faker->numberBetween(150000, 1000000),
            'Kursus', 'Pelatihan Kerja' => $faker->numberBetween(200000, 1000000),
            'Rental Mobil / Motor' => $faker->numberBetween(100000, 500000),
            'Aksesoris Mobil / Motor' => $faker->numberBetween(50000, 300000),
            default => $faker->numberBetween(20000, 150000),
        };
    }


}
