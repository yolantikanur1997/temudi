<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        $types = ['province', 'regency', 'sub_district'];

        // Daftar provinsi dan regency-nya
        $provinces = [
            "ACEH" => null,
            "SUMATERA UTARA" => "regions/province/sumatera_utara.png",
            "SUMATERA BARAT" => "regions/province/sumatera_barat.png",
            "RIAU" => null,
            "JAMBI" => null,
            "SUMATERA SELATAN" => null,
            "BENGKULU" => null,
            "LAMPUNG" => null,
            "KEPULAUAN BANGKA BELITUNG" => null,
            "KEPULAUAN RIAU" => null,
            "DKI JAKARTA" => "regions/province/jakarta.png",
            "JAWA BARAT" => "regions/province/jawa_barat.png",
            "JAWA TENGAH" => "regions/province/jawa_tengah.png",
            "DAERAH ISTIMEWA YOGYAKARTA" => null,
            "JAWA TIMUR" => "regions/province/jawa_timur.png",
            "BANTEN" => null,
            "BALI" => null,
            "NUSA TENGGARA BARAT" => null,
            "NUSA TENGGARA TIMUR" => null,
            "KALIMANTAN BARAT" => null,
            "KALIMANTAN TENGAH" => null,
            "KALIMANTAN SELATAN" => null,
            "KALIMANTAN TIMUR" => null,
            "KALIMANTAN UTARA" => null,
            "SULAWESI UTARA" => null,
            "SULAWESI TENGAH" => null,
            "SULAWESI SELATAN" => null,
            "SULAWESI TENGGARA" => null,
            "GORONTALO" => null,
            "SULAWESI BARAT" => null,
            "MALUKU" => null,
            "MALUKU UTARA" => null,
            "PAPUA" => null,
            "PAPUA BARAT" => null,
            "PAPUA SELATAN" => null,
            "PAPUA TENGAH" => null,
            "PAPUA PEGUNUNGAN" => null,
        ];

        $regencys = [
            "ACEH" => [
                "KAB. ACEH SELATAN", "KAB. ACEH TENGGARA", "KAB. ACEH TIMUR", "KAB. ACEH TENGAH",
                "KAB. ACEH BARAT", "KAB. ACEH BESAR", "KAB. PIDIE", "KAB. ACEH UTARA",
                "KAB. SIMEULUE", "KAB. ACEH SINGKIL", "KAB. BIREUEN", "KAB. ACEH BARAT DAYA",
                "KAB. GAYO LUES", "KAB. ACEH JAYA", "KAB. NAGAN RAYA", "KAB. ACEH TAMIANG",
                "KAB. BENER MERIAH", "KAB. PIDIE JAYA", "BANDA ACEH", "SABANG",
                "LHOKSEUMAWE", "LANGSA"
            ],
            "SUMATERA UTARA" => [
                "KAB. TAPANULI TENGAH", "KAB. TAPANULI UTARA", "KAB. TAPANULI SELATAN", "KAB. NIAS",
                "KAB. LANGKAT", "KAB. KARO", "KAB. DELI SERDANG", "KAB. SIMALUNGUN", "KAB. ASAHAN",
                "KAB. LABUHANBATU", "KAB. DAIRI", "KAB. TOBA", "KAB. MANDAILING NATAL", "KAB. NIAS SELATAN",
                "KAB. PAKPAK BHARAT", "KAB. HUMBANG HASUNDUTAN", "KAB. SAMOSIR", "KAB. SERDANG BEDAGAI",
                "KAB. BATU BARA", "KAB. PADANG LAWAS UTARA", "KAB. PADANG LAWAS", "KAB. LABUHANBATU SELATAN",
                "KAB. LABUHANBATU UTARA", "KAB. NIAS UTARA", "KAB. NIAS BARAT", "MEDAN",
                "PEMATANGSIANTAR", "SIBOLGA", "TANJUNG BALAI", "BINJAI",
                "TEBING TINGGI", "PADANGSIDIMPUAN", "GUNUNGSITOLI"
            ],
            "SUMATERA BARAT" => [
                "KAB. PESISIR SELATAN", "KAB. SOLOK", "KAB. SIJUNJUNG", "KAB. TANAH DATAR",
                "KAB. PADANG PARIAMAN", "KAB. AGAM", "KAB. LIMA PULUH KOTA", "KAB. PASAMAN",
                "KAB. KEPULAUAN MENTAWAI", "KAB. DHARMASRAYA", "KAB. SOLOK SELATAN",
                "KAB. PASAMAN BARAT", "PADANG", "SOLOK", "SAWAHLUNTO",
                "PADANG PANJANG", "BUKITTINGGI", "PAYAKUMBUH", "PARIAMAN"
            ],
            "RIAU" => [
                "KAB. KAMPAR", "KAB. INDRAGIRI HULU", "KAB. BENGKALIS", "KAB. INDRAGIRI HILIR",
                "KAB. PELALAWAN", "KAB. ROKAN HULU", "KAB. ROKAN HILIR", "KAB. SIAK",
                "KAB. KUANTAN SINGINGI", "KAB. KEPULAUAN MERANTI", "PEKANBARU", "DUMAI"
            ],
            "JAMBI" => [
                "KAB. KERINCI", "KAB. MERANGIN", "KAB. SAROLANGUN", "KAB. BATANGHARI",
                "KAB. MUARO JAMBI", "KAB. TANJUNG JABUNG BARAT", "KAB. TANJUNG JABUNG TIMUR",
                "KAB. BUNGO", "KAB. TEBO", "JAMBI", "SUNGAI PENUH"
            ],
            "SUMATERA SELATAN" => [
                "KAB. OGAN KOMERING ULU", "KAB. OGAN KOMERING ILIR", "KAB. MUARA ENIM",
                "KAB. LAHAT", "KAB. MUSI RAWAS", "KAB. MUSI BANYUASIN", "KAB. BANYUASIN",
                "KAB. OGAN KOMERING ULU TIMUR", "KAB. OGAN KOMERING ULU SELATAN",
                "KAB. OGAN ILIR", "KAB. EMPAT LAWANG", "KAB. PENUKAL ABAB LEMATANG ILIR",
                "KAB. MUSI RAWAS UTARA", "PALEMBANG", "PAGAR ALAM",
                "LUBUK LINGGAU", "PRABUMULIH"
            ],
            "BENGKULU" => [
                "KAB. BENGKULU SELATAN", "KAB. REJANG LEBONG", "KAB. BENGKULU UTARA",
                "KAB. KAUR", "KAB. SELUMA", "KAB. MUKO MUKO", "KAB. LEBONG",
                "KAB. KEPAHIANG", "KAB. BENGKULU TENGAH", "BENGKULU"
            ],
            "LAMPUNG" => [
                "KAB. LAMPUNG SELATAN", "KAB. LAMPUNG TENGAH", "KAB. LAMPUNG UTARA",
                "KAB. LAMPUNG BARAT", "KAB. TULANG BAWANG", "KAB. TANGGAMUS",
                "KAB. LAMPUNG TIMUR", "KAB. WAY KANAN", "KAB. PESAWARAN",
                "KAB. PRINGSEWU", "KAB. MESUJI", "KAB. TULANG BAWANG BARAT",
                "KAB. PESISIR BARAT", "BANDAR LAMPUNG", "METRO"
            ],
            "KEPULAUAN BANGKA BELITUNG" => [
                "KAB. BANGKA", "KAB. BELITUNG", "KAB. BANGKA SELATAN",
                "KAB. BANGKA TENGAH", "KAB. BANGKA BARAT", "KAB. BELITUNG TIMUR",
                "PANGKAL PINANG"
            ],
            "KEPULAUAN RIAU" => [
                "KAB. BINTAN", "KAB. KARIMUN", "KAB. NATUNA",
                "KAB. LINGGA", "KAB. KEPULAUAN ANAMBAS",
                "BATAM", "TANJUNG PINANG"
            ],
            "DKI JAKARTA" => [
                "KAB. KEP. SERIBU", "JAKARTA PUSAT",
                "JAKARTA UTARA", "JAKARTA BARAT",
                "JAKARTA SELATAN", "JAKARTA TIMUR"
            ],
            "JAWA BARAT" => [
                "KAB. BOGOR", "KAB. SUKABUMI", "KAB. CIANJUR",
                "KAB. BANDUNG", "KAB. GARUT", "KAB. TASIKMALAYA",
                "KAB. CIAMIS", "KAB. KUNINGAN", "KAB. CIREBON",
                "KAB. MAJALENGKA", "KAB. SUMEDANG", "KAB. INDRAMAYU",
                "KAB. SUBANG", "KAB. PURWAKARTA", "KAB. KARAWANG",
                "KAB. BEKASI", "KAB. BANDUNG BARAT", "KAB. PANGANDARAN",
                "BOGOR", "SUKABUMI", "BANDUNG",
                "CIREBON", "BEKASI", "DEPOK",
                "CIMAHI", "TASIKMALAYA","BANJAR"
            ],
            "JAWA TENGAH" => [
                "KAB. CILACAP", "KAB. BANYUMAS", "KAB. PURBALINGGA",
                "KAB. BANJARNEGARA", "KAB. KEBUMEN", "KAB. PURWOREJO",
                "KAB. WONOSOBO", "KAB. MAGELANG", "KAB. BOYOLALI",
                "KAB. KLATEN", "KAB. SUKOHARJO", "KAB. WONOGIRI",
                "KAB. KARANGANYAR", "KAB. SRAGEN", "KAB. GROBOGAN",
                "KAB. BLORA", "KAB. REMBANG", "KAB. PATI",
                "KAB. KUDUS", "KAB. JEPARA", "KAB. DEMAK",
                "KAB. SEMARANG", "KAB. TEMANGGUNG", "KAB. KENDAL",
                "KAB. BATANG", "KAB. PEKALONGAN", "KAB. PEMALANG",
                "KAB. TEGAL", "KAB. BREBES", "MAGELANG",
                "SURAKARTA", "SALATIGA", "SEMARANG",
                "PEKALONGAN", "TEGAL"
            ],
            "DAERAH ISTIMEWA YOGYAKARTA" => [
                "KAB. KULON PROGO", "KAB. BANTUL", "KAB. GUNUNGKIDUL",
                "KAB. SLEMAN", "YOGYAKARTA"
            ],
            "JAWA TIMUR" => [
                "KAB. PACITAN", "KAB. PONOROGO", "KAB. TRENGGALEK",
                "KAB. TULUNGAGUNG", "KAB. BLITAR", "KAB. KEDIRI",
                "KAB. MALANG", "KAB. LUMAJANG", "KAB. JEMBER",
                "KAB. BANYUWANGI", "KAB. BONDOWOSO", "KAB. SITUBONDO",
                "KAB. PROBOLINGGO", "KAB. PASURUAN", "KAB. SIDOARJO",
                "KAB. MOJOKERTO", "KAB. JOMBANG", "KAB. NGANJUK",
                "KAB. MADIUN", "KAB. MAGETAN", "KAB. NGAWI",
                "KAB. BOJONEGORO", "KAB. TUBAN", "KAB. LAMONGAN",
                "KAB. GRESIK", "KAB. BANGKALAN", "KAB. SAMPANG",
                "KAB. PAMEKASAN", "KAB. SUMENEP", "KEDIRI",
                "BLITAR", "MALANG", "PROBOLINGGO",
                "PASURUAN", "MOJOKERTO", "MADIUN",
                "SURABAYA", "BATU"
            ],
            "BANTEN" => [
                "KAB. PANDEGLANG", "KAB. LEBAK", "KAB. TANGERANG",
                "KAB. SERANG", "TANGERANG", "CILEGON",
                "SERANG", "TANGERANG SELATAN"
            ],
            "BALI" => [
                "KAB. JEMBRANA", "KAB. TABANAN", "KAB. BADUNG",
                "KAB. GIANYAR", "KAB. KLUNGKUNG", "KAB. BANGLI",
                "KAB. KARANGASEM", "KAB. BULELENG", "DENPASAR"
            ],
            "NUSA TENGGARA BARAT" => [
                "KAB. LOMBOK BARAT", "KAB. LOMBOK TENGAH", "KAB. LOMBOK TIMUR",
                "KAB. SUMBAWA", "KAB. DOMPU", "KAB. BIMA",
                "KAB. SUMBAWA BARAT", "KAB. LOMBOK UTARA",
                "MATARAM", "BIMA"
            ],
            "NUSA TENGGARA TIMUR" => [
                "KAB. KUPANG", "KAB TIMOR TENGAH SELATAN", "KAB. TIMOR TENGAH UTARA",
                "KAB. BELU", "KAB. ALOR", "KAB. FLORES TIMUR",
                "KAB. SIKKA", "KAB. ENDE", "KAB. NGADA",
                "KAB. MANGGARAI", "KAB. SUMBA TIMUR", "KAB. SUMBA BARAT",
                "KAB. LEMBATA", "KAB. ROTE NDAO", "KAB. MANGGARAI BARAT",
                "KAB. NAGEKEO", "KAB. SUMBA TENGAH", "KAB. SUMBA BARAT DAYA",
                "KAB. MANGGARAI TIMUR", "KAB. SABU RAIJUA", "KAB. MALAKA",
                "KUPANG"
            ],
            "KALIMANTAN BARAT" => [
                "KAB. SAMBAS", "KAB. MEMPAWAH", "KAB. SANGGAU",
                "KAB. KETAPANG", "KAB. SINTANG", "KAB. KAPUAS HULU",
                "KAB. BENGKAYANG", "KAB. LANDAK", "KAB. SEKADAU",
                "KAB. MELAWI", "KAB. KAYONG UTARA", "KAB. KUBU RAYA",
                "PONTIANAK", "SINGKAWANG"
            ],
            "KALIMANTAN TENGAH" => [
                "KAB. KOTAWARINGIN BARAT", "KAB. KOTAWARINGIN TIMUR",
                "KAB. KAPUAS", "KAB. BARITO SELATAN", "KAB. BARITO UTARA",
                "KAB. KATINGAN", "KAB. SERUYAN", "KAB. SUKAMARA",
                "KAB. LAMANDAU", "KAB. GUNUNG MAS", "KAB. PULANG PISAU",
                "KAB. MURUNG RAYA", "KAB. BARITO TIMUR", "PALANGKARAYA"
            ],
            "KALIMANTAN SELATAN" => [
                "KAB. TANAH LAUT", "KAB. KOTABARU", "KAB. BANJAR",
                "KAB. BARITO KUALA", "KAB. TAPIN", "KAB. HULU SUNGAI SELATAN",
                "KAB. HULU SUNGAI TENGAH", "KAB. HULU SUNGAI UTARA",
                "KAB. TABALONG", "KAB. TANAH BUMBU", "KAB. BALANGAN",
                "BANJARMASIN", "BANJARBARU"
            ],
            "KALIMANTAN TIMUR" => [
                "KAB. PASER", "KAB. KUTAI KARTANEGARA", "KAB. BERAU",
                "KAB. KUTAI BARAT", "KAB. KUTAI TIMUR", "KAB. PENAJAM PASER UTARA",
                "KAB. MAHAKAM ULU", "BALIKPAPAN", "SAMARINDA",
                "BONTANG"
            ],
            "KALIMANTAN UTARA" => [
                "KAB. BULUNGAN", "KAB. MALINAU", "KAB. NUNUKAN",
                "KAB. TANA TIDUNG", "TARAKAN"
            ],
            "SULAWESI UTARA" => [
                "KAB. BOLAANG MONGONDOW", "KAB. MINAHASA", "KAB. KEPULAUAN SANGIHE",
                "KAB. KEPULAUAN TALAUD", "KAB. MINAHASA SELATAN", "KAB. MINAHASA UTARA",
                "KAB. MINAHASA TENGGARA", "KAB. BOLAANG MONGONDOW UTARA",
                "KAB. KEP. SIAU TAGULANDANG BIARO", "KAB. BOLAANG MONGONDOW TIMUR",
                "KAB. BOLAANG MONGONDOW SELATAN", "MANADO", "BITUNG",
                "TOMOHON", "KOTAMOBAGU"
            ],
            "SULAWESI TENGAH" => [
                "KAB. BANGGAI", "KAB. POSO", "KAB. DONGGALA", "KAB. TOLI TOLI",
                "KAB. BUOL", "KAB. MOROWALI", "KAB. BANGGAI KEPULAUAN",
                "KAB. PARIGI MOUTONG", "KAB. TOJO UNA UNA", "KAB. SIGI",
                "KAB. BANGGAI LAUT", "KAB. MOROWALI UTARA", "PALU"
            ],
            "SULAWESI SELATAN" => [
                "KAB. KEPULAUAN SELAYAR", "KAB. BULUKUMBA", "KAB. BANTAENG",
                "KAB. JENEPONTO", "KAB. TAKALAR", "KAB. GOWA", "KAB. SINJAI",
                "KAB. BONE", "KAB. MAROS", "KAB. PANGKAJENE KEPULAUAN",
                "KAB. BARRU", "KAB. SOPPENG", "KAB. WAJO",
                "KAB. SIDENRENG RAPPANG", "KAB. PINRANG", "KAB. ENREKANG",
                "KAB. LUWU", "KAB. TANA TORAJA", "KAB. LUWU UTARA",
                "KAB. LUWU TIMUR", "KAB. TORAJA UTARA",
                "MAKASSAR", "PARE PARE", "PALOPO"
            ],
            "SULAWESI TENGGARA" => [
                "KAB. KOLAKA", "KAB. KONAWE", "KAB. MUNA",
                "KAB. BUTON", "KAB. KONAWE SELATAN", "KAB. BOMBANA",
                "KAB. WAKATOBI", "KAB. KOLAKA UTARA", "KAB. KONAWE UTARA",
                "KAB. BUTON UTARA", "KAB. KOLAKA TIMUR", "KAB. KONAWE KEPULAUAN",
                "KAB. MUNA BARAT", "KAB. BUTON TENGAH", "KAB. BUTON SELATAN",
                "KENDARI", "BAU BAU"
            ],
            "GORONTALO" => [
                "KAB. GORONTALO", "KAB. BOALEMO", "KAB. BONE BOLANGO",
                "KAB. POHUWATO", "KAB. GORONTALO UTARA", "GORONTALO"
            ],
            "SULAWESI BARAT" => [
                "KAB. PASANGKAYU", "KAB. MAMUJU", "KAB. MAMASA",
                "KAB. POLEWALI MANDAR", "KAB. MAJENE", "KAB. MAMUJU TENGAH"
            ],
            "MALUKU" => [
                "KAB. MALUKU TENGAH", "KAB. MALUKU TENGGARA", "KAB. KEPULAUAN TANIMBAR",
                "KAB. BURU", "KAB. SERAM BAGIAN TIMUR", "KAB. SERAM BAGIAN BARAT",
                "KAB. KEPULAUAN ARU", "KAB. MALUKU BARAT DAYA", "KAB. BURU SELATAN","AMBON", "TUAL"
            ],
            "MALUKU UTARA" => [
                "KAB. HALMAHERA BARAT", "KAB. HALMAHERA TENGAH", "KAB. HALMAHERA UTARA",
                "KAB. HALMAHERA SELATAN", "KAB. KEPULAUAN SULA", "KAB. HALMAHERA TIMUR",
                "KAB. PULAU MOROTAI", "KAB. PULAU TALIABU","TERNATE", "TIDORE KEPULAUAN"
            ],
            "PAPUA" => [
                "KAB. JAYAPURA", "KAB. KEPULAUAN YAPEN", "KAB. BIAK NUMFOR",
                "KAB. SARMI", "KAB. KEEROM", "KAB. WAROPEN", "KAB. SUPIORI",
                "KAB. MAMBERAMO RAYA","JAYAPURA"
            ],
            "PAPUA BARAT" => [
                "KAB. SORONG", "KAB. MANOKWARI", "KAB. FAK FAK",
                "KAB. SORONG SELATAN", "KAB. RAJA AMPAT", "KAB. TELUK BINTUNI",
                "KAB. TELUK WONDAMA", "KAB. KAIMANA", "KAB. TAMBRAUW",
                "KAB. MAYBRAT", "KAB. MANOKWARI SELATAN", "KAB. PEGUNUNGAN ARFAK",
                "SORONG"
            ],
            "PAPUA SELATAN" => [
                "KAB. MERAUKE", "KAB. BOVEN DIGOEL", "KAB. MAPPI", "KAB. ASMAT"
            ],
            "PAPUA TENGAH" => [
                "KAB. NABIRE", "KAB. PUNCAK JAYA", "KAB. PANIAI", "KAB. MIMIKA",
                "KAB. PUNCAK", "KAB. DOGIYAI", "KAB. INTAN JAYA", "KAB. DEIYAI"
            ],
            "PAPUA PEGUNUNGAN" => [
                "KAB. JAYAWIJAYA", "KAB. PEGUNUNGAN BINTANG", "KAB. YAHUKIMO",
                "KAB. TOLIKARA", "KAB. MAMBERAMO TENGAH", "KAB. YALIMO",
                "KAB. LANNY JAYA", "KAB. NDUGA"
            ]
        ];


        $sub_districts = [
            "KAB. ACEH SELATAN" => [
                'Bakongan', 'Kluet Utara', 'Kluet Selatan', 'Labuhanhaji', 'Meukek',
                'Samadua', 'Sawang', 'Tapaktuan', 'Trumon', 'Pasi Raja',
                'Labuhan Haji Timur', 'Labuhan Haji Barat', 'Kluet Tengah',
                'Kluet Timur', 'Bakongan Timur', 'Trumon Timur', 'Kota Bahagia',
                'Trumon Tengah'
            ],
            "KAB. ACEH TENGGARA" => [
                'Lawe Alas', 'Lawe Sigala-Gala', 'Bambel', 'Babussalam', 'Badar',
                'Babul Makmur', 'Darul Hasanah', 'Lawe Bulan', 'Bukit Tusam',
                'Semadam', 'Babul Rahmah', 'Ketambe', 'Deleng Pokhkisen',
                'Lawe Sumur', 'Tanoh Alas', 'Leuser'
            ],
            "KAB. ACEH TIMUR" => [
                'Darul Aman', 'Julok', 'Idi Rayeuk', 'Birem Bayeun', 'Serbajadi',
                'Nurussalam', 'Peureulak', 'Rantau Selamat', 'Simpang Ulim',
                'Ranto Peureulak', 'Pante Bidari', 'Madat', 'Indra Makmu',
                'Idi Tunong', 'Banda Alam', 'Peudawa', 'Peureulak Timur',
                'Peureulak Barat', 'Sungai Raya', 'Simpang Jernih', 'Darul Ihsan',
                'Darul Falah', 'Idi Timur', 'Peunaron'
            ],
            "KAB. ACEH TENGAH" => [
                'Linge', 'Silih Nara', 'Bebesen', 'Pegasing', 'Bintang',
                'Ketol', 'Kebayakan', 'Kute Panang', 'Celala',
                'Laut Tawar', 'Atu Lintang', 'Jagong Jeget', 'Bies',
                'Rusip Antara'
            ],
            "KAB. ACEH BARAT" => [
                'Johan Pahlawan', 'Kaway XVI', 'Sungai Mas', 'Woyla', 'Samatiga',
                'Bubon', 'Arongan Lambalek', 'Pante Ceureumen', 'Meureubo',
                'Woyla Barat', 'Woyla Timur', 'Panton Reu'
            ],
            "KAB. ACEH BESAR" => [
                'Lhoong', 'Lhoknga', 'Indrapuri', 'Seulimeum', 'Montasik',
                'Sukamakmur', 'Darul Imarah', 'Peukan Bada', 'Mesjid Raya',
                'Ingin Jaya', 'Kuta Baro', 'Darussalam', 'Pulo Aceh',
                'Lembah Seulawah', 'Kota Jantho', 'Kuta Cot Glie', 'Kuta Malaka',
                'Simpang Tiga', 'Darul Kamal', 'Baitussalam', 'Krueng Barona Jaya',
                'Leupung', 'Blang Bintang'
            ],
            "KAB. PIDIE" => [
                'Batee', 'Delima', 'Geumpang', 'Glumpang Tiga', 'Indrajaya',
                'Kembang Tanjong', 'Kota Sigli', 'Mila', 'Muara Tiga', 'Mutiara',
                'Padang Tiji', 'Peukan Baro', 'Pidie', 'Sakti', 'Simpang Tiga',
                'Tangse', 'Tiro/Truseb', 'Keumala', 'Mutiara Timur', 'Grong-grong',
                'Mane', 'Glumpang Baro', 'Titeue'
            ],
            "KAB. ACEH UTARA" => [
                'Baktiya', 'Dewantara', 'Kuta Makmur', 'Lhoksukon', 'Matangkuli',
                'Muara Batu', 'Meurah Mulia', 'Samudera', 'Seunuddon',
                'Syamtalira Aron', 'Syamtalira Bayu', 'Tanah Luas', 'Tanah Pasir',
                'T. Jambo Aye', 'Sawang', 'Nisam', 'Cot Girek', 'Langkahan',
                'Baktiya Barat', 'Paya Bakong', 'Nibong', 'Simpang Kramat',
                'Lapang', 'Pirak Timur', 'Geuredong Pase', 'Banda Baro',
                'Nisam Antara'
            ],
            "KAB. SIMEULUE" => [
                'Simeulue Tengah', 'Salang', 'Teupah Barat', 'Simeulue Timur',
                'Teluk Dalam', 'Simeulue Barat', 'Teupah Selatan', 'Alafan',
                'Teupah Tengah', 'Simeulue Cut'
            ],
            "KAB. ACEH SINGKIL" => [
                'Pulau Banyak', 'Simpang Kanan', 'Singkil', 'Gunung Meriah',
                'Kota Baharu', 'Singkil Utara', 'Danau Paris', 'Suro Makmur',
                'Singkohor', 'Kuala Baru', 'Pulau Banyak Barat'
            ],
            "KAB. BIREUEN" => [
                'Samalanga', 'Jeunieb', 'Peudada', 'Jeumpa', 'Peusangan',
                'Makmur', 'Gandapura', 'Pandrah', 'Juli', 'Jangka',
                'Simpang Mamplam', 'Peulimbang', 'Kota Juang', 'Kuala',
                'Peusangan Siblah Krueng', 'Peusangan Selatan', 'Kuta Blang'
            ],
            "KAB. ACEH BARAT DAYA" => [
                'Blangpidie', 'Tangan-Tangan', 'Manggeng', 'Susoh',
                'Kuala Batee', 'Babah Rot', 'Setia', 'Jeumpa', 'Lembah Sabil'
            ],
            "KAB. GAYO LUES" => [
                'Kutapanjang', 'Rikit Gaib', 'Terangun', 'Pining', 'Blangpegayon',
                'Puteri Betung', 'Dabun Gelang', 'Blangjerango', 'Teripe Jaya',
                'Pantan Cuaca'
            ],
            "KAB. ACEH JAYA" => [
                'Teunom', 'Krueng Sabee', 'Setia Bakti', 'Sampoi Niet',
                'Jaya', 'Panga', 'Indra Jaya', 'Darul Hikmah', 'Pasie Raya'
            ],
            "KAB. NAGAN RAYA" => [
                'Kuala', 'Seunagan', 'Seunagan Timur', 'Beutong',
                'Darul Makmur', 'Suka Makmue', 'Kuala Pesisir',
                'Tadu Raya', 'Tripa Makmur', 'Beutong Ateuh Banggalang'
            ],
            "KAB. ACEH TAMIANG" => [
                'Manyak Payed', 'Bendahara', 'Karang Baru', 'Seruway',
                'Kota Kualasinpang', 'Kejuruan Muda', 'Tamiang Hulu',
                'Rantau', 'Banda Mulia', 'Bandar Pusaka', 'Tenggulun',
                'Sekerak'
            ],
            "KAB. BENER MERIAH" => [
                'Pintu Rime Gayo', 'Permata', 'Syiah Utama', 'Bandar',
                'Bukit', 'Wih Pesam', 'Timang Gajah', 'Bener Kelipah',
                'Mesidah', 'Gajah Putih'
            ],
            "KAB. PIDIE JAYA" => [
                'Meureudu', 'Ulim', 'Jangka Buaya', 'Bandar Dua',
                'Meurah Dua', 'Bandar Baru', 'Panteraja', 'Trienggadeng'
            ],
            "BANDA ACEH" => [
                'Baiturrahman', 'Kuta Alam', 'Meuraxa', 'Syiah Kuala',
                'Lueng Bata', 'Kuta Raja', 'Banda Raya', 'Jaya Baru',
                'Ulee Kareng'
            ],
            "SABANG" => [
                'Sukakarya', 'Sukajaya', 'Sukamakmue'
            ],
            "LHOKSEUMAWE" => [
                'Muara Dua', 'Banda Sakti', 'Blang Mangat', 'Muara Satu'
            ],
            "LANGSA" => [
                'Langsa Timur', 'Langsa Barat', 'Langsa Kota',
                'Langsa Lama', 'Langsa Baro'
            ],
            'SUBULUSSALAM' => [
                'Simpang Kiri', 'Penanggalan', 'Rundeng', 'Sultan Daulat', 'Longkib'
            ],
            'KAB. TAPANULI TENGAH' => [
                'Barus', 'Sorkam', 'Pandan', 'Pinangsori', 'Manduamas', 'Kolang',
                'Tapian Nauli', 'Sibabangun', 'Sosorgadong', 'Sorkam Barat',
                'Sirandorung', 'Andam Dewi', 'Sitahuis', 'Tukka', 'Badiri',
                'Pasaribu Tobing', 'Barus Utara', 'Suka Bangun', 'Lumut', 'Sarudik'
            ],
            'KAB. TAPANULI UTARA' => [
                'Tarutung', 'Siatas Barita', 'Adian Koting', 'Sipoholon', 'Pahae Julu',
                'Pahae Jae', 'Simangumban', 'Purba Tua', 'Siborong-Borong', 'Pagaran',
                'Parmonangan', 'Sipahutar', 'Pangaribuan', 'Garoga', 'Muara'
            ],
            'KAB. TAPANULI SELATAN' => [
                'Angkola Barat', 'Batang Toru', 'Angkola Timur', 'Sipirok', 'Saipar Dolok Hole',
                'Angkola Selatan', 'Batang Angkola', 'Arse', 'Marancar', 'Sayur Matinggi',
                'Aek Bilah', 'Muara Batang Toru', 'Tano Tombangan Angkola', 'Angkola Sangkunur',
                'Angkola Muara Tais'
            ],
            'KAB. NIAS' => [
                'Hiliduho', 'Gido', 'Idanogawo', 'Bawolato', 'Hiliserangkai',
                'Botomuzoi', 'Ulugawo', 'Ma\'u', 'Somolo-molo', 'Sogae\'adu'
            ],
            'KAB. LANGKAT' => [
                'Bahorok', 'Salapian', 'Kuala', 'Sei Bingai', 'Binjai',
                'Selesai', 'Stabat', 'Wampu', 'Secanggang', 'Hinai',
                'Tanjung Pura', 'Padang Tualang', 'Gebang', 'Babalan',
                'Pangkalan Susu', 'Besitang', 'Sei Lepan', 'Berandan Barat',
                'Batang Serangan', 'Sawit Seberang', 'Sirapit', 'Kutambaru',
                'Pematang Jaya'
            ],
            'KAB. KARO' => [
                'Kabanjahe', 'Berastagi', 'Barusjahe', 'Tigapanah', 'Merek',
                'Munte', 'Juhar', 'Tigabinanga', 'Laubaleng', 'Mardingding',
                'Payung', 'Simpang Empat', 'Kutabuluh', 'Dolat Rayat',
                'Merdeka', 'Naman Teran', 'Tiganderket'
            ],
            'KAB. DELI SERDANG' => [
                'Gunung Meriah', 'Tanjung Morawa', 'Sibolangit', 'Kutalimbaru', 'Pancur Batu',
                'Namo Rambe', 'Biru-Biru', 'STM Hilir', 'Bangun Purba', 'Galang',
                'STM Hulu', 'Patumbak', 'Deli Tua', 'Sunggal', 'Hamparan Perak',
                'Labuhan Deli', 'Percut Sei Tuan', 'Batang Kuis', 'Lubuk Pakam', 'Pagar Merbau',
                'Pantai Labu', 'Beringin'
            ],
            'KAB. SIMALUNGUN' => [
                'Siantar', 'Gunung Malela', 'Gunung Maligas', 'Panei', 'Panombeian Panei',
                'Jorlang Hataran', 'Raya Kahean', 'Bosar Maligas', 'Sidamanik', 'Pamatang Sidamanik',
                'Tanah Jawa', 'Hatonduhan', 'Dolok Panribuan', 'Purba', 'Haranggaol Horisan',
                'Girsang Sipangan Bolon', 'Dolok Batu Nanggar', 'Huta Bayu Raja', 'Jawa Maraja Bah Jambi',
                'Dolok Pardamean', 'Pematang Bandar', 'Bandar Huluan', 'Bandar', 'Bandar Masilam',
                'Silimakuta', 'Dolok Silou', 'Silou Kahean', 'Tapian Dolok', 'Raya',
                'Ujung Padang', 'Pamatang Silima Huta', 'Dolog Masagal'
            ],
            'KAB. ASAHAN' => [
                'Meranti', 'Air Joman', 'Tanjung Balai', 'Sei Kepayang', 'Simpang Empat',
                'Air Batu', 'Pulau Rakyat', 'Bandar Pulau', 'Buntu Pane', 'Bandar Pasir Mandoge',
                'Aek Kuasan', 'Kota Kisaran Barat', 'Kota Kisaran Timur', 'Aek Songsongan', 'Rahunig',
                'Sei Dadap', 'Sei Kepayang Barat', 'Sei Kepayang Timur', 'Tinggi Raja', 'Setia Janji',
                'Silau Laut', 'Rawang Panca Arga', 'Pulo Bandring', 'Teluk Dalam', 'Aek Ledong'
            ],
            'KAB. LABUHANBATU' => [
                'Rantau Utara', 'Rantau Selatan', 'Bilah Barat', 'Bilah Hilir', 'Bilah Hulu',
                'Pangkatan', 'Panai Tengah', 'Panai Hilir', 'Panai Hulu'
            ],
            'KAB. DAIRI' => [
                'Sidikalang', 'Sumbul', 'Tigalingga', 'Siempat Nempu', 'Silima Pungga Pungga',
                'Tanah Pinem', 'Siempat Nempu Hulu', 'Siempat Nempu Hilir', 'Pegagan Hilir',
                'Parbuluan', 'Lae Parira', 'Gunung Sitember', 'Berampu', 'Silahisabungan', 'Sitinjo'
            ],
            'KAB. MANDAILING NATAL' => [
                'Panyabungan', 'Panyabungan Utara', 'Panyabungan Timur', 'Panyabungan Selatan',
                'Panyabungan Barat', 'Siabu', 'Bukit Malintang', 'Kotanopan', 'Lembah Sorik Marapi',
                'Tambangan', 'Ulu Pungkut', 'Muara Sipongi', 'Batang Natal', 'Lingga Bayu', 'Batahan',
                'Natal', 'Muara Batang Gadis', 'Ranto Baek', 'Huta Bargot', 'Puncak Sorik Marapi',
                'Pakantan', 'Sinunukan', 'Naga Juang'
            ],
            'KAB. NIAS SELATAN' => [
                'Lolomatua', 'Gomo', 'Lahusa', 'Hibala', 'Pulau-Pulau Batu', 'Teluk Dalam',
                'Amandraya', 'Lolowau', 'Susua', 'Maniamolo', 'Hilimegai', 'Toma', 'Mazino',
                'Umbunasi', 'Aramo', 'Pulau-Pulau Batu Timur', 'Mazo', 'Fanayama', 'Ulunoyo',
                'Huruna', 'O\'o\'u', 'Onohazumba', 'Hilisalawa\'ahe', 'Ulususua', 'Sidua\'ori',
                'Somambawa', 'Boronadu', 'Simuk', 'Pulau-Pulau Batu Barat', 'Pulau-Pulau Batu Utara',
                'Tanah Masa', 'Luahagundre Maniamolo', 'Onolalu', 'Ulu Idanotae', 'Idanotae'
            ],
            'KAB. PAKPAK BHARAT' => [
                'Sitelu Tali Urang Jehe', 'Kerajaan', 'Salak', 'Sitelu Tali Urang Julu',
                'Pergetteng Getteng Sengkut', 'Pagindar', 'Tinada', 'Siempat Rube'
            ],
            'KAB. HUMBANG HASUNDUTAN' => [
                'Parlilitan', 'Pollung', 'Baktiraja', 'Paranginan', 'Lintong Nihuta',
                'Dolok Sanggul', 'Sijamapolang', 'Onan Ganjang', 'Pakkat', 'Tarabintang'
            ],
            'KAB. SAMOSIR' => [
                'Simanindo', 'Onan Runggu', 'Nainggolan', 'Palipi', 'Harian',
                'Sianjar Mula Mula', 'Ronggur Nihuta', 'Pangururan', 'Sitio-tio'
            ],
            'KAB. SERDANG BEDAGAI' => [
                'Pantai Cermin', 'Perbaungan', 'Teluk Mengkudu', 'Sei Rampah', 'Tanjung Beringin',
                'Bandar Khalipah', 'Dolok Merawan', 'Sipispis', 'Dolok Masihul', 'Kotarih',
                'Silinda', 'Serba Jadi', 'Tebing Tinggi', 'Pegajahan', 'Sei Bamban',
                'Tebing Syahbandar', 'Bintang Bayu'
            ],
            'KAB. BATU BARA' => [
                'Medang Deras', 'Sei Suka', 'Air Putih', 'Lima Puluh', 'Talawi',
                'Tanjung Tiram', 'Sei Balai', 'Laut Tador', 'Lima Puluh Pesisir',
                'Datuk Lima Puluh', 'Datuk Tanah Datar', 'Nibung Hangus'
            ],
            'KAB. PADANG LAWAS UTARA' => [
                'Dolok Sigompulon', 'Dolok', 'Halongonan', 'Padang Bolak',
                'Padang Bolak Julu', 'Portibi', 'Batang Onang', 'Simangambat',
                'Hulu Sihapas', 'Padang Bolak Tenggara', 'Halongonan Timur', 'Ujung Batu'
            ],
            'KAB. PADANG LAWAS' => [
                'Sosopan', 'Barumun Tengah', 'Huristak', 'Lubuk Barumun',
                'Huta Raja Tinggi', 'Ulu Barumun', 'Barumun', 'Sosa',
                'Batang Lubu Sutam', 'Barumun Selatan', 'Aek Nabara Barumun',
                'Sihapas Barumun', 'Barumun Baru', 'Ulu Sosa', 'Sosa Julu',
                'Barumun Barat', 'Sosa Timur'
            ],
            'KAB. LABUHANBATU SELATAN' => [
                'Kotapinang', 'Kampung Rakyat', 'Torgamba', 'Sungai Kanan', 'Silangkitang'
            ],
            'KAB. LABUHANBATU UTARA' => [
                'Kualuh Hulu', 'Kualuh Leidong', 'Kualuh Hilir', 'Aek Kuo',
                'Marbau', 'Na IX - X', 'Aek Natas', 'Kualuh Selatan'
            ],
            'KAB. NIAS UTARA' => [
                'Lotu', 'Sawo', 'Tuhemberua', 'Sitolu Ori', 'Namohalu Esiwa',
                'Alasa Talumuzoi', 'Alasa', 'Tugala Oyo', 'Afulu', 'Lahewa',
                'Lahewa Timur'
            ],
            'KAB. NIAS BARAT' => [
                'Lahomi', 'Sirombu', 'Mandrehe Barat', 'Moro\'o', 'Mandrehe',
                'Mandrehe Utara', 'Lolofitu Moi', 'Ulu Moro\'o'
            ],
            'MEDAN' => [
                'Medan Kota', 'Medan Sunggal', 'Medan Helvetia', 'Medan Denai',
                'Medan Barat', 'Medan Deli', 'Medan Tuntungan', 'Medan Belawan',
                'Medan Amplas', 'Medan Area', 'Medan Johor', 'Medan Marelan',
                'Medan Labuhan', 'Medan Tembung', 'Medan Maimun', 'Medan Polonia',
                'Medan Baru', 'Medan Perjuangan', 'Medan Petisah', 'Medan Timur',
                'Medan Selayang'
            ],
            'PEMATANGSIANTAR' => [
                'Siantar Timur', 'Siantar Barat', 'Siantar Utara', 'Siantar Selatan',
                'Siantar Marihat', 'Siantar Martoba', 'Siantar Sitalasari', 'Siantar Marimbun'
            ],
            'SIBOLGA' => [
                'Sibolga Utara', 'Sibolga Kota', 'Sibolga Selatan', 'Sibolga Sambas'
            ],

            'TANJUNG BALAI' => [
                'Tanjungbalai Selatan', 'Tanjungbalai Utara', 'Sei Tualang Raso',
                'Teluk Nibung', 'Datuk Bandar', 'Datuk Bandar Timur'
            ],

            'BINJAI' => [
                'Binjai Utara', 'Binjai Kota', 'Binjai Barat', 'Binjai Timur', 'Binjai Selatan'
            ],

            'TEBING TINGGI' => [
                'Padang Hulu', 'Rambutan', 'Padang Hilir', 'Bajenis', 'Tebing Tinggi Kota'
            ],

            'PADANGSIDIMPUAN' => [
                'Padangsidimpuan Utara', 'Padangsidimpuan Selatan',
                'Padangsidimpuan Batunadua', 'Padangsidimpuan Hutaimbaru',
                'Padangsidimpuan Tenggara', 'Padangsidimpuan Angkola Julu'
            ],

            'GUNUNGSITOLI' => [
                'Gunungsitoli', 'Gunungsitoli Selatan',
                'Gunungsitoli Utara', 'Gunungsitoli Idanoi',
                'Gunungsitoli Alo\'oa', 'Gunungsitoli Barat'
            ],

            'KAB. PESISIR SELATAN' => [
                'Pancung Soal', 'Ranah Pesisir',
                'Lengayang', 'Batang Kapas',
                'IV Jurai', 'Bayang',
                'Koto XI Tarusan', 'Sutera',
                'Linggo Sari Baganti', 'Lunang',
                'Basa Ampek Balai Tapan', 'IV Nagari Bayang Utara',
                'Airpura', 'Ranah Ampek Hulu Tapan',
                'Silaut'
            ],

            'KAB. SOLOK' => [
                'Pantai Cermin', 'Lembah Gumanti',
                'Payung Sekaki', 'Lembang Jaya',
                'Gunung Talang', 'Bukit Sundi',
                'IX Koto Sungai Lasi', 'Kubung',
                'X Koto Singkarak', 'X Koto Diatas',
                'Junjung Sirih', 'Hiliran Gumanti','Tigo Lurah','Danau Kembar'
            ],
            'KAB. SIJUNJUNG' => [
                'Tanjung Gadang', 'Sijunjung', 'IV Nagari', 'Kamang Baru',
                'Lubuak Tarok', 'Koto VII', 'Sumpur Kudus', 'Kupitan'
            ],
            'KAB. TANAH DATAR' => [
                'X Koto', 'Batipuh', 'Rambatan', 'Lima Kaum',
                'Tanjung Emas', 'Lintau Buo', 'Sungayang',
                'Sungai Tarab', 'Pariangan', 'Salimpaung',
                'Padang Ganting', 'Tanjuang Baru', 'Lintau Buo Utara',
                'Batipuah Selatan'
            ],

            'KAB. PADANG PARIAMAN' => [
                'Lubuk Alung', 'Batang Anai', 'Nan Sabaris',
                '2 x 11 Enam Lingkuang', 'VII Koto Sungai Sarik',
                'V Koto Kampung Dalam', 'Sungai Garingging',
                'Sungai Limau', 'IV Koto Aur Malintang',
                'Ulakan Tapakih', 'Sintuak Toboh Gadang',
                'Padang Sago', 'Batang Gasan', 'V Koto Timur',
                '2 x 11 Kayu Tanam', 'Patamuan', 'Enam Lingkung'
            ],

            'KAB. AGAM' => [
                'Tanjung Mutiara', 'Lubuk Basung', 'Tanjung Raya',
                'Matur', 'IV Koto', 'Banuhampu',
                'Ampek Angkek', 'Baso', 'Tilatang Kamang',
                'Palupuh', 'Palembayan', 'Sungai Pua',
                'Ampek Nagari', 'Candung', 'Kamang Magek',
                'Malalak'
            ],
            'KAB. LIMA PULUH KOTA' => [
                'Suliki', 'Guguak', 'Payakumbuh', 'Luak',
                'Harau', 'Pangkalan Koto Baru', 'Kapur IX',
                'Gunuang Omeh', 'Lareh Sago Halaban',
                'Situjuah Limo Nagari', 'Mungka',
                'Bukik Barisan', 'Akabiluru'
            ],

            'KAB. PASAMAN' => [
                'Bonjol', 'Lubuk Sikaping', 'Panti',
                'Mapat Tunggul', 'Duo Koto', 'Tigo Nagari',
                'Rao', 'Mapat Tunggul Selatan',
                'Simpang Alahan Mati', 'Padang Gelugur',
                'Rao Utara', 'Rao Selatan'
            ],

            'KAB. KEPULAUAN MENTAWAI' => [
                'Pagai Utara', 'Sipora Selatan', 'Siberut Selatan',
                'Siberut Utara', 'Siberut Barat',
                'Siberut Barat Daya', 'Siberut Tengah',
                'Sipora Utara', 'Sikakap', 'Pagai Selatan'
            ],

            'KAB. DHARMASRAYA' => [
                'Koto Baru', 'Pulau Punjung', 'Sungai Rumbai',
                'Sitiung', 'Sembilan Koto', 'Timpeh',
                'Koto Salak', 'Tiumang', 'Padang Laweh',
                'Asam Jujuhan', 'Koto Besar'
            ],

            'KAB. SOLOK SELATAN' => [
                'Sangir', 'Sungai Pagu', 'Koto Parik Gadang Diateh',
                'Sangir Jujuan', 'Sangir Batang Hari',
                'Pauh Duo', 'Sangir Balai Janggo'
            ],

            'KAB. PASAMAN BARAT' => [
                'Sungaiberemas', 'Lembah Melintang', 'Pasaman',
                'Talamau', 'Kinali', 'Gunungtuleh',
                'Ranah Batahan', 'Koto Balingka',
                'Sungaiaur', 'Luhak Nan Duo',
                'Sasak Ranah Pesisir'
            ],

            'KAB. LIMA PULUH KOTA' => [
                'Suliki', 'Guguak', 'Payakumbuh', 'Luak',
                'Harau', 'Pangkalan Koto Baru', 'Kapur IX',
                'Gunuang Omeh', 'Lareh Sago Halaban',
                'Situjuah Limo Nagari', 'Mungka', 'Bukik Barisan',
                'Akabiluru'
            ],

            'KAB. PASAMAN' => [
                'Bonjol', 'Lubuk Sikaping', 'Panti',
                'Mapat Tunggul', 'Duo Koto', 'Tigo Nagari',
                'Rao', 'Mapat Tunggul Selatan',
                'Simpang Alahan Mati', 'Padang Gelugur',
                'Rao Utara', 'Rao Selatan'
            ],

            'KAB. KEPULAUAN MENTAWAI' => [
                'Pagai Utara', 'Sipora Selatan',
                'Siberut Selatan', 'Siberut Utara',
                'Siberut Barat', 'Siberut Barat Daya',
                'Siberut Tengah', 'Sipora Utara', 'Sikakap',
                'Pagai Selatan'
            ],

            'PADANG' => [
                'Padang Selatan', 'Padang Timur', 'Padang Barat',
                'Padang Utara', 'Bungus Teluk Kabung', 'Lubuk Begalung',
                'Lubuk Kilangan', 'Pauh', 'Kuranji', 'Nanggalo',
                'Koto Tangah'
            ],

            'SOLOK' => [
                'Lubuk Sikarah', 'Tanjung Harapan'
            ],

            'SAWAHLUNTO' => [
                'Lembah Segar', 'Barangin', 'Silungkang', 'Talawi'
            ],

            'PADANG PANJANG' => [
                'Padang Panjang Timur', 'Padang Panjang Barat'
            ],

            'BUKITTINGGI' => [
                'Guguak Panjang', 'Mandiangin Koto Selayan', 'Aur Birugo Tigo Baleh'
            ],

            'PAYAKUMBUH' => [
                'Payakumbuh Barat', 'Payakumbuh Utara', 'Payakumbuh Timur',
                'Lamposi Tigo Nagori', 'Payakumbuh Selatan'
            ],

            'PARIAMAN' => [
                'Pariaman Tengah', 'Pariaman Utara', 'Pariaman Selatan',
                'Pariaman Timur'
            ],

            'KAB. KAMPAR' => [
                'Bangkinang Kota', 'Kampar', 'Tambang', 'XIII Koto Kampar', 'Kuok',
                'Siak Hulu', 'Kampar Kiri', 'Kampar Kiri Hilir', 'Kampar Kiri Hulu',
                'Tapung', 'Tapung Hilir', 'Tapung Hulu', 'Salo', 'Rumbio Jaya',
                'Bangkinang', 'Perhentian Raja', 'Kampa', 'Kampar Utara',
                'Kampar Kiri Tengah', 'Gunung Sahilan', 'Koto Kampar Hulu'
            ],

            'KAB. INDRAGIRI HULU' => [
                'Rengat', 'Rengat Barat', 'Kelayang', 'Pasir Penyu', 'Peranap',
                'Siberida', 'Batang Cenaku', 'Batang Gangsal', 'Lirik',
                'Kuala Cenaku', 'Sungai Lala', 'Lubuk Batu Jaya',
                'Rakit Kulim', 'Batang Peranap'
            ],

            'KAB. BENGKALIS' => [
                'Bengkalis', 'Bantan', 'Bukit Batu', 'Mandau', 'Rupat',
                'Rupat Utara', 'Siak Kecil', 'Pinggir', 'Bandar Laksamana',
                'Talang Muandau', 'Bathin Solapan'
            ],

            "KAB. INDRAGIRI HILIR" => [ 
                "Reteh", "Enok", "Kuala Indragiri","Tembilahan","Tempuling",
                "Gaung Anak Serka","Mandah","Kateman","Keritang"
            ],

            'KAB. PELALAWAN' => [
                'Ukui', 'Pangkalan Kerinci', 'Pangkalan Kuras', 'Pangkalan Lesung',
                'Langgam', 'Pelalawan', 'Kerumutan', 'Bunut', 'Teluk Meranti',
                'Kuala Kampar', 'Bandar Sei Kijang', 'Bandar Petalangan'
            ],

            'KAB. ROKAN HULU' => [
                'Ujung Batu', 'Rokan IV Koto', 'Rambah', 'Tambusai', 'Kepenuhan',
                'Kunto Darussalam', 'Rambah Samo', 'Rambah Hilir', 'Tambusai Utara',
                'Bangun Purba', 'Tandun', 'Kabun', 'Bonai Darussalam',
                'Pagaran Tapah Darussalam', 'Kepenuhan Hulu', 'Pendalian IV Koto'
            ],

            'KAB. ROKAN HILIR' => [
                'Kubu', 'Bangko', 'Tanah Putih', 'Rimba Melintang', 'Bagan Sinembah',
                'Pasir Limau Kapas', 'Sinaboi', 'Pujud', 'Tanah Putih Tanjung Melawan',
                'Bangko Pusako', 'Simpang Kanan', 'Batu Hampar', 'Rantau Kopar',
                'Pekaitan', 'Kubu Babussalam', 'Tanjung Medan', 'Bagan Sinembah Raya',
                'Balai Jaya'
            ],
            'KAB. SIAK' => [
                'Siak', 'Sungai Apit', 'Minas', 'Tualang', 'Sungai Mandau',
                'Dayun', 'Kerinci Kanan', 'Bunga Raya', 'Koto Gasib', 'Kandis',
                'Lubuk Dalam', 'Sabak Auh', 'Mempura', 'Pusako'
            ],
            'KAB. KUANTAN SINGINGI' => [
                'Kuantan Mudik', 'Kuantan Tengah', 'Singingi', 'Kuantan Hilir', 'Cerenti',
                'Benai', 'Gunungtoar', 'Singingi Hilir', 'Pangean', 'Logas Tanah Darat',
                'Inuman', 'Hulu Kuantan', 'Kuantan Hilir Seberang', 'Sentajo Raya', 'Pucuk Rantau'
            ],
            'KAB. KEPULAUAN MERANTI' => [
                'Tebing Tinggi', 'Rangsang Barat', 'Rangsang', 'Tebing Tinggi Barat',
                'Merbau', 'Pulaumerbau', 'Tebing Tinggi Timur', 'Tasik Putri Puyu', 'Rangsang Pesisir'
            ],
            'PEKANBARU' => [
                'Sukajadi', 'Pekanbaru Kota', 'Sail', 'Lima Puluh', 'Senapelan',
                'Rumbai Barat', 'Bukit Raya', 'Binawidya', 'Marpoyan Damai', 'Tenayan Raya',
                'Payung Sekaki', 'Rumbai', 'Tuahmadani', 'Kulim', 'Rumbai Timur'
            ],
            'DUMAI' => [
                'Dumai Barat', 'Dumai Timur', 'Bukit Kapur', 'Sungai Sembilan',
                'Medang Kampai', 'Dumai Kota', 'Dumai Selatan'
            ],
            'KAB. KERINCI' => [
                'Gunung Raya', 'Danau Kerinci', 'Sitinjau Laut', 'Air Hangat',
                'Gunung Kerinci', 'Batang Merangin', 'Keliling Danau', 'Kayu Aro',
                'Air Hangat Timur', 'Gunung Tujuh', 'Siulak', 'Depati Tujuh',
                'Siulak Mukai', 'Kayu Aro Barat', 'Bukitkerman', 'Air Hangat Barat',
                'Tanah Cogok', 'Danau Kerinci Barat'
            ],
            'KAB. MERANGIN' => [
                'Jangkat', 'Bangko', 'Muara Siau', 'Sungai Manau', 'Tabir', 'Pamenang',
                'Tabir Ulu', 'Tabir Selatan', 'Lembah Masurai', 'Bangko Barat',
                'Nalo Tantan', 'Batang Masumai', 'Pamenang Barat', 'Tabir Ilir',
                'Tabir Timur', 'Renah Pembarap', 'Pangkalan Jambu', 'Jangkat Timur',
                'Renah Pamenang', 'Pamenang Selatan', 'Margo Tabir', 'Tabir Lintas',
                'Tabir Barat', 'Tiang Pumpung'
            ],
            'KAB. SAROLANGUN' => [
                'Batang Asai', 'Limun', 'Sarolangun', 'Pauh', 'Pelawan', 'Mandiangin',
                'Air Hitam', 'Bathin VIII', 'Singkut', 'Cermin Nan Gedang', 'Mandiangin Timur'
            ],
            'KAB. BATANGHARI' => [
                'Mersam', 'Muara Tembesi', 'Muara Bulian', 'Batin XXIV',
                'Pemayung', 'Maro Sebo Ulu', 'Bajubang', 'Maro Sebo Ilir'
            ],
            'KAB. MUARO JAMBI' => [
                'Jambi Luar Kota', 'Sekernan', 'Kumpeh', 'Maro Sebo',
                'Mestong', 'Kumpeh Ulu', 'Sungai Bahar', 'Sungai Gelam',
                'Bahar Utara', 'Bahar Selatan', 'Taman Rajo'
            ],
            'KAB. TANJUNG JABUNG BARAT' => [
                'Tungkal Ulu', 'Tungkal Ilir', 'Pengabuan', 'Betara',
                'Merlung', 'Tebing Tinggi', 'Batang Asam', 'Renah Mendaluh',
                'Muara Papalik', 'Seberang Kota', 'Bram Itam', 'Kuala Betara',
                'Senyerang'
            ],
            'KAB. TANJUNG JABUNG TIMUR' => [
                'Muara Sabak Timur', 'Nipah Panjang', 'Mendahara', 'Rantau Rasau',
                'S a d u', 'Dendang', 'Muara Sabak Barat', 'Kuala Jambi',
                'Mendahara Ulu', 'Geragai', 'Berbak'
            ],
            'KAB. BUNGO' => [
                'Tanah Tumbuh', 'Rantau Pandan', 'Pasar Muaro Bungo', 'Jujuhan',
                'Tanah Sepenggal', 'Pelepat', 'Limbur Lubuk Mengkuang', 'Muko-muko Bathin VII',
                'Pelepat Ilir', 'Batin II Babeko', 'Bathin III', 'Bungo Dani',
                'Rimbo Tengah', 'Bathin III Ulu', 'Bathin II Pelayang', 'Jujuhan Ilir',
                'Tanah Sepenggal Lintas'
            ],
            'KAB. TEBO' => [
                'Tebo Tengah', 'Tebo Ilir', 'Tebo Ulu', 'Rimbo Bujang',
                'Sumay', 'VII Koto', 'Rimbo Ulu', 'Rimbo Ilir',
                'Tengah Ilir', 'Serai Serumpun', 'VII Koto Ilir', 'Muara Tabir'
            ],
            'JAMBI' => [
                'Telanaipura', 'Jambi Selatan', 'Jambi Timur', 'Pasar Jambi',
                'Pelayangan', 'Danau Teluk', 'Kota Baru', 'Jelutung',
                'Alam Barajo', 'Danau Sipin', 'Paal Merah'
            ],
            'SUNGAI PENUH' => [
                'Sungai Penuh', 'Pesisir Bukit', 'Hamparan Rawang', 'Tanah Kampung',
                'Kumun Debai', 'Pondok Tinggi', 'Koto Baru', 'Sungai Bungkal'
            ],
            'KAB. OGAN KOMERING ULU' => [
                'Sosoh Buay Rayap', 'Pengandonan', 'Peninjauan', 'Baturaja Barat',
                'Baturaja Timur', 'Ulu Ogan', 'Semidang Aji', 'Lubuk Batang',
                'Lengkiti', 'Sinar Peninjauan', 'Lubuk Raja', 'Muara Jaya',
                'Kedaton Peninjauan Raya'
            ],
            'KAB. OGAN KOMERING ILIR' => [
                'Tanjung Lubuk', 'Pedamaran', 'Mesuji', 'Kayu Agung',
                'Sirah Pulau Padang', 'Tulung Selapan', 'Pampangan', 'Lempuing',
                'Air Sugihan', 'Sungai Menang', 'Jejawi', 'Cengal',
                'Pangkalan Lampam', 'Mesuji Makmur', 'Mesuji Raya', 'Lempuing Jaya',
                'Teluk Gelam', 'Pedamaran Timur'
            ],
            'KAB. MUARA ENIM' => [
                'Tanjung Agung', 'Muara Enim', 'Rambang Niru', 'Gunung Megang',
                'Gelumbang', 'Lawang Kidul', 'Semende Darat Laut', 'Semende Darat Tengah',
                'Semende Darat Ulu', 'Ujan Mas', 'Lubai', 'Rambang',
                'Sungai Rotan', 'Lembak', 'Benakat', 'Kelekar',
                'Muara Belida', 'Belimbing', 'Belida Darat', 'Lubai Ulu',
                'Empat Petulai Dangku', 'Panang Enim'
            ],
            'KAB. LAHAT' => [
                'Tanjungsakti Pumu', 'Jarai', 'Kota Agung', 'Pulaupinang',
                'Merapi Barat', 'Lahat', 'Pajar Bulan', 'Mulak Ulu',
                'Kikim Selatan', 'Kikim Timur', 'Kikim Tengah', 'Kikim Barat',
                'Pseksu', 'Gumay Talang', 'Pagar Gunung', 'Merapi Timur',
                'Tanjung Sakti Pumi', 'Gumay Ulu', 'Merapi Selatan', 'Tanjungtebat',
                'Muarapayang', 'Sukamerindu', 'Mulak Sebingkai', 'Lahat Selatan'
            ],
            'KAB. MUSI RAWAS' => [
                'Tugumulyo', 'Muara Lakitan', 'Muara Kelingi', 'Jayaloka',
                'Muara Beliti', 'STL Ulu Terawas', 'Selangit', 'Megang Sakti',
                'Purwodadi', 'BTS. Ulu', 'Tiang Pumpung Kepungut', 'Sumber Harta',
                'Tuah Negeri', 'Suka Karya'
            ],
            'KAB. MUSI BANYUASIN' => [
                'Sekayu', 'Lais', 'Sungai Keruh', 'Batang Hari Leko',
                'Sanga Desa', 'Babat Toman', 'Sungai Lilin', 'Keluang',
                'Bayung Lencir', 'Plakat Tinggi', 'Lalan', 'Tungkal Jaya',
                'Lawang Wetan', 'Babat Supat'
            ],
            'KAB. BANYUASIN' => [
                'Banyuasin I', 'Banyuasin II', 'Banyuasin III', 'Pulau Rimau',
                'Betung', 'Rambutan', 'Muara Padang', 'Muara Telang',
                'Makarti Jaya', 'Talang Kelapa', 'Rantau Bayur', 'Tanjung Lago',
                'Muara Sugihan', 'Air Salek', 'Tungkal Ilir', 'Suak Tapeh',
                'Sembawa', 'Sumber Marga Telang', 'Air Kumbang', 'Karangagung Ilir',
                'Selat Panuguan'
            ],
            'KAB. OGAN KOMERING ULU TIMUR' => [
                'Martapura', 'Buay Madang', 'Belitang', 'Cempaka',
                'Buay Pemuka Peliung', 'Madang Suku II', 'Madang Suku I', 'Semendawai Suku III',
                'Belitang II', 'Belitang III', 'Bunga Mayang', 'Buay Madang Timur',
                'Madang Suku III', 'Semendawai Barat', 'Semendawai Timur', 'Jayapura',
                'Belitang Jaya', 'Belitang Madang Raya', 'Belitang Mulya', 'Buay Pemuka Bangsa Raja'
            ],
            'KAB. OGAN KOMERING ULU SELATAN' => [
                'Muara Dua', 'Pulau Beringin', 'Banding Agung', 'Muara Dua Kisam',
                'Simpang', 'Buay Sandang Aji', 'Buay Runjung', 'Mekakau Ilir',
                'Buay Pemaca', 'Kisam Tinggi', 'Kisam Ilir', 'Buay Pematang Ribu Ranau Tengah',
                'Warkuk Ranau Selatan', 'Runjung Agung', 'Sungai Are', 'Sindang Danau',
                'Buana Pemaca', 'Tiga Dihaji', 'Buay Rawan'
            ],
            'KAB. OGAN ILIR' => [
                'Muara Kuang', 'Tanjung Batu', 'Tanjung Raja', 'Indralaya',
                'Pemulutan', 'Rantau Alai', 'Indralaya Utara', 'Indralaya Selatan',
                'Pemulutan Selatan', 'Pemulutan Barat', 'Rantau Panjang', 'Sungai Pinang',
                'Kandis', 'Rambang Kuang', 'Lubuk Keliat', 'Payaraman'
            ],
            'KAB. EMPAT LAWANG' => [
                'Muara Pinang', 'Pendopo', 'Ulu Musi', 'Tebing Tinggi',
                'Lintang Kanan', 'Talang Padang', 'Pasemah Air Keruh', 'Sikap Dalam',
                'Saling', 'Pendopo Barat'
            ],
            'KAB. PENUKAL ABAB LEMATANG ILIR' => [
                'Talang Ubi', 'Penukal Utara', 'Penukal', 'Abab',
                'Tanah Abang'
            ],
            'KAB. MUSI RAWAS UTARA' => [
                'Rupit', 'Rawas Ulu', 'Nibung', 'Rawas Ilir',
                'Karang Dapo', 'Karang Jaya', 'Ulu Rawas'
            ],
            'PALEMBANG' => [
                'Ilir Barat II', 'Seberang Ulu I', 'Seberang Ulu II', 'Ilir Barat I',
                'Ilir Timur I', 'Ilir Timur II', 'Sukarami', 'Sako',
                'Kemuning', 'Kalidoni', 'Bukit Kecil', 'Gandus',
                'Kertapati', 'Plaju', 'Alang-alang Lebar', 'Sematang Borang',
                'Jakabaring', 'Ilir Timur Tiga'
            ],
            'PAGAR ALAM' => [
                'Pagar Alam Utara', 'Pagar Alam Selatan', 'Dempo Utara', 'Dempo Selatan',
                'Dempo Tengah'
            ],
            'LUBUK LINGGAU' => [
                'Lubuk Linggau Timur I', 'Lubuk Linggau Barat I', 'Lubuk Linggau Selatan I',
                'Lubuk Linggau Utara I', 'Lubuk Linggau Timur II', 'Lubuk Linggau Barat II',
                'Lubuk Linggau Selatan II', 'Lubuk Linggau Utara II'
            ],
            'PRABUMULIH' => [
                'Prabumulih Barat', 'Prabumulih Timur', 'Cambai',
                'Rambang Kapak Tengah', 'Prabumulih Utara', 'Prabumulih Selatan'
            ],
            'BENGKULU SELATAN' => [
                'Kedurang', 'Seginim', 'Pino', 'Manna',
                'Kota Manna', 'Pino Raya', 'Kedurang Ilir',
                'Air Nipis', 'Ulu Manna', 'Bunga Mas', 'Pasar Manna'
            ],
            'KAB. REJANG LEBONG' => [
                'Kota Padang', 'Padang Ulak Tanding', 'Sindang Kelingi',
                'Curup', 'Bermani Ulu', 'Selupu Rejang',
                'Curup Utara', 'Curup Timur', 'Curup Selatan',
                'Curup Tengah', 'Binduriang', 'Sindang Beliti Ulu',
                'Sindang Dataran', 'Sindang Beliti Ilir', 'Bermani Ulu Raya'
            ],
            'KAB. BENGKULU UTARA' => [
                'Enggano', 'Kerkap', 'Kota Arga Makmur',
                'Giri Mulya', 'Padang Jaya', 'Lais',
                'Batik Nau', 'Ketahun', 'Napal Putih',
                'Putri Hijau', 'Air Besi', 'Air Napal',
                'Hulu Palik', 'Air Padang', 'Arma Jaya',
                'Tanjung Agung Palik', 'Ulok Kupai', 'Pinang Raya',
                'Marga Sakti Sebelat'
            ],
            'KAB. KAUR' => [
                'Kinal', 'Tanjung Kemuning', 'Kaur Utara',
                'Kaur Tengah', 'Kaur Selatan', 'Maje',
                'Nasal', 'Semidang Gumay', 'Kelam Tengah',
                'Luas', 'Muara Sahung', 'Tetap',
                'Lungkang Kule', 'Padang Guci Hilir', 'Padang Guci Hulu'
            ],
            'KAB. SELUMA' => [
                'Sukaraja', 'Seluma', 'Talo',
                'Semidang Alas', 'Semidang Alas Maras', 'Air Periukan',
                'Lubuk Sandi', 'Seluma Barat', 'Seluma Timur',
                'Seluma Utara', 'Seluma Selatan', 'Talo Kecil',
                'Ulu Talo', 'Ilir Talo'
            ],
            'KAB. MUKO MUKO' => [
                'Lubuk Pinang', 'Kota Mukomuko', 'Teras Terunjam',
                'Pondok Suguh', 'Ipuh', 'Malin Deman',
                'Air Rami', 'Teramang Jaya', 'Selagan Raya',
                'Penarik', 'XIV Koto', 'V Koto',
                'Air Majunto', 'Air Dikit', 'Sungai Rumbai'
            ],
            'KAB. LEBONG' => [
                'Lebong Utara', 'Lebong Atas', 'Lebong Tengah',
                'Lebong Selatan', 'Rimbo Pengadang', 'Topos',
                'Bingin Kuning', 'Lebong Sakti', 'Pelabai',
                'Amen', 'Uram Jaya', 'Pinang Belapis'
            ],
            'KAB. BENGKULU TENGAH' => [
                'Bermani Ilir', 'Ujan Mas', 'Tebat Karai',
                'Kepahiang', 'Merigi', 'Kebawetan',
                'Seberang Musi', 'Muara Kemumu'
            ],
            'BENGKULU' => [
                'Selebar', 'Gading Cempaka', 'Teluk Segara',
                'Muara Bangka Hulu', 'Kampung Melayu', 'Ratu Agung',
                'Ratu Samban', 'Sungai Serut', 'Singaran Pati'
            ],
            'KAB. LAMPUNG SELATAN' => [
                'Natar', 'Tanjung Bintang', 'Kalianda',
                'Sidomulyo', 'Katibung', 'Penengahan',
                'Palas', 'Jati Agung', 'Ketapang',
                'Sragi', 'Raja Basa', 'Candipuro',
                'Merbau Mataram', 'Bakauheni', 'Tanjung Sari',
                'Way Sulan', 'Way Panji'
            ],
            'KAB. LAMPUNG TENGAH' => [
                'Kalirejo', 'Bangun Rejo', 'Padang Ratu',
                'Gunung Sugih', 'Trimurjo', 'Punggur',
                'Terbanggi Besar', 'Seputih Raman', 'Rumbia',
                'Seputih Banyak', 'Seputih Mataram', 'Seputih Surabaya',
                'Terusan Nunyai', 'Bumi Ratu Nuban', 'Bekri',
                'Seputih Agung', 'Way Pangubuan', 'Bandar Mataram',
                'Pubian', 'Selagai Lingga', 'Anak Tuha',
                'Sendang Agung', 'Kota Gajah', 'Bumi Nabung',
                'Way Seputih', 'Bandar Surabaya', 'Anak Ratu Aji',
                'Putra Rumbia'
            ],
            'KAB. LAMPUNG UTARA' => [
                'Bukit Kemuning', 'Kotabumi', 'Sungkai Selatan',
                'Tanjung Raja', 'Abung Timur', 'Abung Barat',
                'Abung Selatan', 'Sungkai Utara', 'Kotabumi Utara',
                'Kotabumi Selatan', 'Abung Tengah', 'Abung Tinggi',
                'Abung Semuli', 'Abung Surakarta', 'Muara Sungkai',
                'Bunga Mayang', 'Hulu Sungkai', 'Sungkai Tengah',
                'Abung Pekurun', 'Sungkai Jaya', 'Sungkai Barat',
                'Abung Kunang', 'Blambangan Pagar'
            ],
            'KAB. LAMPUNG BARAT' => [
                'Balik Bukit', 'Sumber Jaya', 'Belalau',
                'Way Tenong', 'Sekincau', 'Suoh',
                'Batu Brak', 'Sukau', 'Gedung Surian',
                'Kebun Tebu', 'Air Hitam', 'Pagar Dewa',
                'Batu Ketulis', 'Lumbok Seminung', 'Bandar Negeri Suoh'
            ],
            'KAB. TULANG BAWANG' => [
                'Menggala', 'Gedung Aji', 'Banjar Agung',
                'Gedung Meneng', 'Rawa Jitu Selatan', 'Penawar Tama',
                'Rawa Jitu Timur', 'Banjar Margo', 'Rawa Pitu',
                'Penawar Aji', 'Dente Teladas', 'Meraksa Aji',
                'Gedung Aji Baru', 'Banjar Baru', 'Menggala Timur'
            ],
            'KAB. TANGGAMUS' => [
                'Kota Agung', 'Talang Padang', 'Wonosobo',
                'Pulau Panggung', 'Cukuh Balak', 'Pugung',
                'Semaka', 'Sumberejo', 'Ulu Belu',
                'Pematang Sawa', 'Kelumbayan', 'Kota Agung Barat',
                'Kota Agung Timur', 'Gisting', 'Gunung Alip',
                'Limau', 'Bandar Negeri Semuong', 'Air Naningan',
                'Bulok', 'Klumbayan Barat'
            ],
            'KAB. LAMPUNG TIMUR' => [
                'Sukadana', 'Labuhan Maringgai', 'Jabung',
                'Pekalongan', 'Sekampung', 'Batanghari',
                'Way Jepara', 'Purbolinggo', 'Raman Utara',
                'Metro Kibang', 'Marga Tiga', 'Sekampung Udik',
                'Batanghari Nuban', 'Bumi Agung', 'Bandar Sribhawono',
                'Mataram Baru', 'Melinting', 'Gunung Pelindung',
                'Pasir Sakti', 'Waway Karya', 'Labuhan Ratu',
                'Braja Selebah', 'Way Bungur', 'Marga Sekampung'
            ],
            'KAB. WAY KANAN' => [
                'Blambangan Umpu', 'Kasui', 'Banjit',
                'Baradatu', 'Bahuga', 'Pakuan Ratu',
                'Negeri Agung', 'Way Tuba', 'Rebang Tangkas',
                'Gunung Labuhan', 'Negara Batin', 'Negeri Besar',
                'Buay Bahuga', 'Bumi Agung', 'Umpu Semenguk'
            ],
            'KAB. PESAWARAN' => [
                'Gedong Tataan', 'Negeri Katon', 'Tegineneng',
                'Way Lima', 'Padang Cermin', 'Punduh Pidada',
                'Kedondong', 'Marga Punduh', 'Way Khilau',
                'Teluk Pandan', 'Way Ratai'
            ],
            'KAB. PRINGSEWU' => [
                'Pringsewu', 'Gading Rejo', 'Ambarawa',
                'Pardasuka', 'Pagelaran', 'Banyumas',
                'Adiluwih', 'Sukoharjo', 'Pagelaran Utara'
            ],
            'KAB. MESUJI' => [
                'Mesuji', 'Mesuji Timur', 'Rawa Jitu Utara',
                'Way Serdang', 'Simpang Pematang', 'Panca Jaya',
                'Tanjung Raya'
            ],
            'KAB. TULANG BAWANG BARAT' => [
                'Tulang Bawang Tengah', 'Tumijajar', 'Tulang Bawang Udik',
                'Gunung Terang', 'Gunung Agung', 'Way Kenanga',
                'Lambu Kibang', 'Pagar Dewa', 'Batu Putih'
            ],
            'KAB. PESISIR BARAT' => [
                'Pesisir Tengah', 'Pesisir Selatan', 'Lemong',
                'Pesisir Utara', 'Karya Penggawa', 'Pulaupisang',
                'Way Krui', 'Krui Selatan', 'Ngambur',
                'Ngaras', 'Bangkunat'
            ],
            'BANDAR LAMPUNG' => [
                'Kedaton', 'Sukarame', 'Tanjungkarang Barat',
                'Panjang', 'Tanjungkarang Timur', 'Tanjungkarang Pusat',
                'Telukbetung Selatan', 'Telukbetung Barat', 'Telukbetung Utara',
                'Rajabasa', 'Tanjung Senang', 'Sukabumi',
                'Kemiling', 'Labuhan Ratu', 'Way Halim',
                'Langkapura', 'Enggal', 'Kedamaian',
                'Telukbetung Timur', 'Bumi Waras'
            ],
            'METRO' => [
                'Metro Pusat', 'Metro Utara', 'Metro Barat',
                'Metro Timur', 'Metro Selatan'
            ],
            'KAB. BANGKA' => [
                'Sungailiat', 'Belinyu', 'Merawang',
                'Mendo Barat', 'Pemali', 'Bakam',
                'Riau Silip', 'Puding Besar'
            ],
            'KAB. BELITUNG' => [
                'Tanjung Pandan', 'Membalong', 'Selat Nasik',
                'Sijuk', 'Badau'
            ],
            'KAB. BANGKA SELATAN' => [
                'Toboali', 'Lepar', 'Airgegas',
                'Simpang Rimba', 'Payung', 'Tukak Sadai',
                'Pulaubesar', 'Kepulauan Pongok'
            ],
            'KAB. BANGKA TENGAH' => [
                'Koba', 'Pangkalan Baru', 'Sungai Selan',
                'Simpang Katis', 'Namang', 'Lubuk Besar'
            ],
            'KAB. BANGKA BARAT' => [
                'Mentok', 'Simpang Teritip', 'Jebus',
                'Kelapa', 'Tempilang', 'Parittiga'
            ],
            'KAB. BELITUNG TIMUR' => [
                'Manggar', 'Gantung', 'Dendang',
                'Kelapa Kampit', 'Damar', 'Simpang Renggiang',
                'Simpang Pesak'
            ],
            'PANGKAL PINANG' => [
                'Bukit Intan', 'Taman Sari', 'Pangkal Balam',
                'Rangkui', 'Gerunggang', 'Gabek', 'Girimaya'
            ],
            'KAB. BINTAN' => [
                'Gunung Kijang', 'Bintan Timur', 'Bintan Utara',
                'Teluk Bintan', 'Tambelan', 'Telok Sebong',
                'Toapaya', 'Mantang', 'Bintan Pesisir',
                'Seri Kuala Lobam'
            ],
            'KAB. KARIMUN' => [
                'Moro', 'Kundur', 'Karimun', 'Meral',
                'Tebing', 'Buru', 'Kundur Utara',
                'Kundur Barat', 'Durai', 'Meral Barat',
                'Ungar', 'Belat', 'Selat Gelam',
                'Sugie Besar'
            ],
            'KAB. NATUNA' => [
                'Midai', 'Bunguran Barat', 'Serasan',
                'Bunguran Timur', 'Bunguran Utara', 'Subi',
                'Pulau Laut', 'Pulau Tiga', 'Bunguran Timur Laut',
                'Bunguran Tengah', 'Bunguran Selatan', 'Serasan Timur',
                'Bunguran Batubi', 'Pulau Tiga Barat',
                'Suak Midai', 'Pulau Panjang', 'Pulau Seluan'
            ],
            'KAB. LINGGA' => [
                'Singkep', 'Lingga', 'Senayang',
                'Singkep Barat', 'Lingga Utara', 'Singkep Pesisir',
                'Lingga Timur', 'Selayar', 'Singkep Selatan',
                'Kepulauan Posek', 'Katang Bidare', 'Temiang Pesisir',
                'Bakung Serumpun'
            ],
            'KAB. KEPULAUAN ANAMBAS' => [
                'Siantan', 'Palmatak', 'Siantan Timur',
                'Siantan Selatan', 'Jemaja Timur', 'Jemaja',
                'Siantan Tengah', 'Siantan Utara', 'Jemaja Barat',
                'Kute Siantan'
            ],
            'BATAM' => [
                'Belakang Padang', 'Batu Ampar', 'Sekupang',
                'Nongsa', 'Bulang', 'Lubuk Baja',
                'Sei Beduk', 'Galang', 'Bengkong',
                'Batam Kota', 'Sagulung', 'Batu Aji'
            ],
            'TANJUNG PINANG' => [
                'Tanjung Pinang Barat', 'Tanjung Pinang Timur',
                'Tanjung Pinang Kota', 'Bukit Bestari'
            ],
            'KAB. KEP. SERIBU' => [
                'Kepulauan Seribu Utara', 'Kepulauan Seribu Selatan'
            ],
            'JAKARTA PUSAT' => [
                'Gambir', 'Sawah Besar', 'Kemayoran',
                'Senen', 'Cempaka Putih', 'Menteng',
                'Tanah Abang', 'Johar Baru'
            ],
            'JAKARTA UTARA' => [
                'Penjaringan', 'Tanjung Priok', 'Koja',
                'Cilincing', 'Pademangan', 'Kelapa Gading'
            ],
            'JAKARTA BARAT' => [
                'Cengkareng', 'Grogol Petamburan', 'Taman Sari',
                'Tambora', 'Kebon Jeruk', 'Kalideres',
                'Pal Merah', 'Kembangan'
            ],
            'JAKARTA SELATAN' => [
                'Tebet', 'Setiabudi', 'Mampang Prapatan',
                'Pasar Minggu', 'Kebayoran Lama', 'Cilandak',
                'Kebayoran Baru', 'Pancoran', 'Jagakarsa',
                'Pesanggrahan'
            ],
            'JAKARTA TIMUR' => [
                'Matraman', 'Pulogadung', 'Jatinegara',
                'Kramatjati', 'Pasar Rebo', 'Cakung',
                'Duren Sawit', 'Makasar', 'Ciracas',
                'Cipayung'
            ],
            'KAB. BOGOR' => [
                'Cibinong', 'Gunung Putri', 'Citeureup',
                'Sukaraja', 'Babakan Madang', 'Jonggol',
                'Cileungsi', 'Cariu', 'Sukamakmur',
                'Parung', 'Gunung Sindur', 'Kemang',
                'Bojong Gede', 'Leuwiliang', 'Ciampea',
                'Cibungbulang', 'Pamijahan', 'Rumpin',
                'Jasinga', 'Parung Panjang', 'Nanggung',
                'Cigudeg', 'Tenjo', 'Ciawi',
                'Cisarua', 'Megamendung', 'Caringin',
                'Cijeruk', 'Ciomas', 'Dramaga',
                'Tamansari', 'Klapanunggal', 'Ciseeng',
                'Ranca Bungur', 'Sukajaya', 'Tanjungsari',
                'Tajurhalang', 'Cigombong', 'Leuwisadeng',
                'Tenjolaya'
            ],
            'KAB. SUKABUMI' => [
                'Palabuhanratu', 'Simpenan', 'Cikakak',
                'Bantargadung', 'Cisolok', 'Cikidang',
                'Lengkong', 'Jampangtengah', 'Warungkiara',
                'Cikembar', 'Cibadak', 'Nagrak',
                'Parungkuda', 'Bojonggenteng', 'Parakansalak',
                'Cicurug', 'Cidahu', 'Kalapanunggal',
                'Kabandungan', 'Waluran', 'Jampangkulon',
                'Ciemas', 'Kalibunder', 'Surade',
                'Cibitung', 'Ciracap', 'Gunungguruh',
                'Cicantayan', 'Cisaat', 'Kadudampit',
                'Caringin', 'Sukabumi', 'Sukaraja',
                'Kebonpedes', 'Cireunghas', 'Sukalarang',
                'Pabuaran', 'Purabaya', 'Nyalindung',
                'Gegerbitung', 'Sagaranten', 'Curugkembar',
                'Cidolog', 'Cidadap', 'Tegalbuleud',
                'Cimanggu', 'Ciambar'
            ],
            'KAB. CIANJUR' => [
                'Cianjur', 'Warungkondang', 'Cibeber',
                'Cilaku', 'Ciranjang', 'Bojongpicung',
                'Karangtengah', 'Mande', 'Sukaluyu',
                'Pacet', 'Cugenang', 'Cikalongkulon',
                'Sukaresmi', 'Sukanagara', 'Campaka',
                'Takokak', 'Kadupandak', 'Pagelaran',
                'Tanggeung', 'Cibinong', 'Sindangbarang',
                'Agrabinta', 'Cidaun', 'Naringgul',
                'Campakamulya', 'Cikadu', 'Gekbrong',
                'Cipanas', 'Cijati', 'Leles',
                'Haurwangi', 'Pasirkuda'
            ],
            'KAB. BANDUNG' => [
                'Cileunyi', 'Cimenyan', 'Cilengkrang',
                'Bojongsoang', 'Margahayu', 'Margaasih',
                'Katapang', 'Dayeuhkolot', 'Banjaran',
                'Pameungpeuk', 'Pangalengan', 'Arjasari',
                'Cimaung', 'Cicalengka', 'Nagreg',
                'Cikancung', 'Rancaekek', 'Ciparay',
                'Pacet', 'Kertasari', 'Baleendah',
                'Majalaya', 'Solokanjeruk', 'Paseh',
                'Ibun', 'Soreang', 'Pasirjambu',
                'Ciwidey', 'Rancabali', 'Cangkuang',
                'Kutawaringin'
            ],
            'KAB. GARUT' => [
                'Garut Kota', 'Karangpawitan', 'Wanaraja',
                'Tarogong Kaler', 'Tarogong Kidul', 'Banyuresmi',
                'Samarang', 'Pasirwangi', 'Leles',
                'Kadungora', 'Leuwigoong', 'Cibatu',
                'Kersamanah', 'Malangbong', 'Sukawening',
                'Karangtengah', 'Bayongbong', 'Cigedug',
                'Cilawu', 'Cisurupan', 'Sukaresmi',
                'Cikajang', 'Banjarwangi', 'Singajaya',
                'Cihurip', 'Peundeuy', 'Pameungpeuk',
                'Cisompet', 'Cibalong', 'Cikelet',
                'Bungbulang', 'Mekarmukti', 'Pakenjeng',
                'Pamulihan', 'Cisewu', 'Caringin',
                'Talegong', 'Limbangan', 'Selaawi',
                'Cibiuk', 'Pangatikan', 'Sucinaraja'
            ],
            'KAB. TASIKMALAYA' => [
                'Cipatujah', 'Karangnunggal', 'Cikalong',
                'Pancatengah', 'Cikatomas', 'Cibalong',
                'Parungponteng', 'Bantarkalong', 'Bojongasih',
                'Culamega', 'Bojonggambir', 'Sodonghilir',
                'Taraju', 'Salawu', 'Puspahiang',
                'Tanjungjaya', 'Sukaraja', 'Salopa',
                'Jatiwaras', 'Cineam', 'Karangjaya',
                'Manonjaya', 'Gunungtanjung', 'Singaparna',
                'Mangunreja', 'Sukarame', 'Cigalontang',
                'Leuwisari', 'Padakembang', 'Sariwangi',
                'Sukaratu', 'Cisayong', 'Sukahening',
                'Rajapolah', 'Jamanis', 'Ciawi',
                'Kadipaten', 'Pagerageung', 'Sukaresik'
            ],
            'KAB. CIAMIS' => [
                'Ciamis', 'Cikoneng', 'Cijeungjing',
                'Sadananya', 'Cidolog', 'Cihaurbeuti',
                'Panumbangan', 'Panjalu', 'Kawali',
                'Panawangan', 'Cipaku', 'Jatinagara',
                'Rajadesa', 'Sukadana', 'Rancah',
                'Tambaksari', 'Lakbok', 'Banjarsari',
                'Pamarican', 'Cimaragas', 'Cisaga',
                'Sindangkasih', 'Baregbeg', 'Sukamantri',
                'Lumbung', 'Purwadadi', 'Banjaranyar'
            ],
            'KAB. KUNINGAN' => [
                'Kadugede', 'Ciniru', 'Subang',
                'Ciwaru', 'Cibingbin', 'Luragung',
                'Lebakwangi', 'Garawangi', 'Kuningan',
                'Ciawigebang', 'Cidahu', 'Jalaksana',
                'Cilimus', 'Mandirancan', 'Selajambe',
                'Kramatmulya', 'Darma', 'Cigugur',
                'Pasawahan', 'Nusaherang', 'Cipicung',
                'Pancalang', 'Japara', 'Cimahi',
                'Cilebak', 'Hantara', 'Kalimanggis',
                'Cibeureum', 'Karang Kancana', 'Maleber',
                'Sindang Agung', 'Cigandamekar'
            ],
            'KAB. CIREBON' => [
                'Waled', 'Ciledug', 'Losari',
                'Pabedilan', 'Babakan', 'Karangsembung',
                'Lemahabang', 'Susukan Lebak', 'Sedong',
                'Astanajapura', 'Pangenan', 'Mundu',
                'Beber', 'Talun', 'Sumber',
                'Dukupuntang', 'Palimanan', 'Plumbon',
                'Weru', 'Kedawung', 'Gunung Jati',
                'Kapetakan', 'Klangenan', 'Arjawinangun',
                'Panguragan', 'Ciwaringin', 'Susukan',
                'Gegesik', 'Kaliwedi', 'Gebang',
                'Depok', 'Pasaleman', 'Pabuaran',
                'Karangwareng', 'Tengah Tani', 'Plered',
                'Gempol', 'Greged', 'Suranenggala',
                'Jamblang'
            ],
            'KAB. MAJALENGKA' => [
                'Lemahsugih', 'Bantarujeg', 'Cikijing',
                'Talaga', 'Argapura', 'Maja',
                'Majalengka', 'Sukahaji', 'Rajagaluh',
                'Leuwimunding', 'Jatiwangi', 'Dawuan',
                'Kadipaten', 'Kertajati', 'Jatitujuh',
                'Ligung', 'Sumberjaya', 'Panyingkiran',
                'Palasah', 'Cigasong', 'Sindangwangi',
                'Banjaran', 'Cingambul', 'Kasokandel',
                'Sindang', 'Malausma'
            ],
            'KAB. INDRAMAYU' => [
                'Haurgeulis', 'Kroya', 'Gabuswetan',
                'Cikedung', 'Lelea', 'Bangodua',
                'Widasari', 'Kertasemaya', 'Krangkeng',
                'Karangampel', 'Juntinyuat', 'Sliyeg',
                'Jatibarang', 'Balongan', 'Indramayu',
                'Sindang', 'Cantigi', 'Lohbener',
                'Arahan', 'Losarang', 'Kandanghaur',
                'Bongas', 'Anjatan', 'Sukra',
                'Gantar', 'Trisi', 'Sukagumiwang',
                'Kedokan Bunder', 'Pasekan', 'Tukdana',
                'Patrol'
            ],
            'KAB. SUBANG' => [
                'Sagalaherang', 'Cisalak', 'Subang',
                'Kalijati', 'Pabuaran', 'Purwadadi',
                'Pagaden', 'Binong', 'Ciasem',
                'Pusakanagara', 'Pamanukan', 'Jalancagak',
                'Blanakan', 'Tanjungsiang', 'Compreng',
                'Patokbeusi', 'Cibogo', 'Cipunagara',
                'Cijambe', 'Cipeundeuy', 'Legonkulon',
                'Cikaum', 'Serangpanjang', 'Sukasari',
                'Tambakdahan', 'Kasomalang', 'Dawuan',
                'Pagaden Barat', 'Ciater', 'Pusakajaya'
            ],
            'KAB. PURWAKARTA' => [
                'Purwakarta', 'Campaka', 'Jatiluhur',
                'Plered', 'Sukatani', 'Darangdan',
                'Maniis', 'Tegalwaru', 'Wanayasa',
                'Pasawahan', 'Bojong', 'Babakancikao',
                'Bungursari', 'Cibatu', 'Sukasari',
                'Pondoksalam', 'Kiarapedes'
            ],
            'KAB. KARAWANG' => [
                'Karawang Barat', 'Pangkalan', 'Telukjambe Timur',
                'Ciampel', 'Klari', 'Rengasdengklok',
                'Kutawaluya', 'Batujaya', 'Tirtajaya',
                'Pedes', 'Cibuaya', 'Pakisjaya',
                'Cikampek', 'Jatisari', 'Cilamaya Wetan',
                'Tirtamulya', 'Telagasari', 'Rawamerta',
                'Lemahabang', 'Tempuran', 'Majalaya',
                'Jayakerta', 'Cilamaya Kulon', 'Banyusari',
                'Kota Baru', 'Karawang Timur', 'Telukjambe Barat',
                'Tegalwaru', 'Purwasari', 'Cilebar'
            ],
            'KAB. BEKASI' => [
                'Tarumajaya', 'Babelan', 'Sukawangi',
                'Tambelang', 'Tambun Utara', 'Tambun Selatan',
                'Cibitung', 'Cikarang Barat', 'Cikarang Utara',
                'Karang Bahagia', 'Cikarang Timur', 'Kedung Waringin',
                'Pebayuran', 'Sukakarya', 'Sukatani',
                'Cabangbungin', 'Muaragembong', 'Setu',
                'Cikarang Selatan', 'Cikarang Pusat', 'Serang Baru',
                'Cibarusah', 'Bojongmangu'
            ],
            'KAB. BANDUNG BARAT' => [
                'Lembang', 'Parongpong', 'Cisarua',
                'Cikalongwetan', 'Cipeundeuy', 'Ngamprah',
                'Cipatat', 'Padalarang', 'Batujajar',
                'Cihampelas', 'Cililin', 'Cipongkor',
                'Rongga', 'Sindangkerta', 'Gununghalu',
                'Saguling'
            ],
            'KAB. PANGANDARAN' => [
                'Parigi', 'Cijulang', 'Cimerak',
                'Cigugur', 'Langkaplancar', 'Mangunjaya',
                'Padaherang', 'Kalipucang', 'Pangandaran',
                'Sidamulih'
            ],
            'BOGOR' => [
                'Bogor Selatan', 'Bogor Timur', 'Bogor Tengah',
                'Bogor Barat', 'Bogor Utara', 'Tanah Sareal'
            ],
            'SUKABUMI' => [
                'Gunung Puyuh', 'Cikole', 'Citamiang',
                'Warudoyong', 'Baros', 'Lembursitu',
                'Cibeureum'
            ],
            'BANDUNG' => [
                'Sukasari', 'Coblong', 'Babakan Ciparay',
                'Bojongloa Kaler', 'Andir', 'Cicendo',
                'Sukajadi', 'Cidadap', 'Bandung Wetan',
                'Astana Anyar', 'Regol', 'Batununggal',
                'Lengkong', 'Cibeunying Kidul', 'Bandung Kulon',
                'Kiaracondong', 'Bojongloa Kidul', 'Cibeunying Kaler',
                'Sumur Bandung', 'Antapani', 'Bandung Kidul',
                'Buahbatu', 'Rancasari', 'Arcamanik',
                'Cibiru', 'Ujungberung', 'Gedebage',
                'Panyileukan', 'Cinambo', 'Mandalajati'
            ],
            'CIREBON' => [
                'Kejaksan', 'Lemahwungkuk', 'Harjamukti',
                'Pekalipan', 'Kesambi'
            ],
            'BEKASI' => [
                'Bekasi Timur', 'Bekasi Barat', 'Bekasi Utara',
                'Bekasi Selatan', 'Rawalumbu', 'Medansatria',
                'Bantargebang', 'Pondokgede', 'Jatiasih',
                'Jatisampurna', 'Mustikajaya', 'Pondokmelati'
            ],
            'DEPOK' => ['Pancoran Mas', 'Cimanggis', 'Sawangan',
                'Limo', 'Sukmajaya', 'Beji',
                'Cipayung', 'Cilodong', 'Cinere', 'Tapos', 'Bojongsari'
            ],
            'CIMAHI' => ['Cimahi Selatan', 'Cimahi Tengah', 'Cimahi Utara'],
            'TASIKMALAYA' => ['Cihideung', 'Cipedes', 'Tawang', 'Indihiang', 'Kawalu', 'Cibeureum', 'Tamansari', 'Mangkubumi', 'Bungursari', 'Purbaratu'],
            'BANJAR' => ['Banjar', 'Pataruman', 'Purwaharja', 'Langensari'],
            'KAB. CILACAP' => [
                'Kedungreja', 'Kesugihan', 'Adipala', 'Binangun', 'Nusawungu',
                'Kroya', 'Maos', 'Jeruklegi', 'Kawunganten', 'Gandrungmangu',
                'Sidareja', 'Karangpucung', 'Cimanggu', 'Majenang', 'Wanareja',
                'Dayeuhluhur', 'Sampang', 'Cipari', 'Patimuan', 'Bantarsari',
                'Cilacap Selatan', 'Cilacap Tengah', 'Cilacap Utara', 'Kampung Laut'
            ],
            'KAB. BANYUMAS' => [
                'Lumbir', 'Wangon', 'Jatilawang', 'Rawalo', 'Kebasen',
                'Kemranjen', 'Sumpiuh', 'Tambak', 'Somagede', 'Kalibagor',
                'Banyumas', 'Patikraja', 'Purwojati', 'Ajibarang', 'Gumelar',
                'Pekuncen', 'Cilongok', 'Karanglewas', 'Sokaraja', 'Kembaran',
                'Sumbang', 'Baturraden', 'Kedungbanteng', 'Purwokerto Selatan',
                'Purwokerto Barat', 'Purwokerto Timur', 'Purwokerto Utara'
            ],
            'KAB. PURBALINGGA' => [
                'Kemangkon', 'Bukateja', 'Kejobong', 'Kaligondang', 'Purbalingga',
                'Kalimanah', 'Kutasari', 'Mrebet', 'Bobotsari', 'Karangreja',
                'Karanganyar', 'Karangmoncol', 'Rembang', 'Bojongsari', 'Padamara',
                'Pengadegan', 'Karangjambu', 'Kertanegara'
            ],
            'KAB. BANJARNEGARA' => [
                'Susukan', 'Purworeja Klampok', 'Mandiraja', 'Purwanegara',
                'Bawang', 'Banjarnegara', 'Sigaluh', 'Madukara', 'Banjarmangu',
                'Wanadadi', 'Rakit', 'Punggelan', 'Karangkobar', 'Pagentan',
                'Pejawaran', 'Batur', 'Wanayasa', 'Kalibening', 'Pandanarum',
                'Pagedongan'
            ],
            'KAB. KEBUMEN' => [
                'Ayah', 'Buayan', 'Puring', 'Petanahan', 'Klirong',
                'Buluspesantren', 'Ambal', 'Mirit', 'Prembun',
                'Kutowinangun', 'Alian', 'Kebumen', 'Pejagoan',
                'Sruweng', 'Adimulyo', 'Kuwarasan', 'Rowokele',
                'Sempor', 'Gombong', 'Karanganyar', 'Karanggayam',
                'Sadang', 'Bonorowo', 'Padureso', 'Poncowarno',
                'Karangsambung'
            ],
            'KAB. PURWOREJO' => [
                'Grabag', 'Ngombol', 'Purwodadi', 'Bagelen',
                'Kaligesing', 'Purworejo', 'Banyuurip', 'Bayan',
                'Kutoarjo', 'Butuh', 'Pituruh', 'Kemiri',
                'Bruno', 'Gebang', 'Loano', 'Bener'
            ],
            'KAB. WONOSOBO' => [
                'Wadaslintang', 'Kepil', 'Sapuran', 'Kaliwiro',
                'Leksono', 'Selomerto', 'Kalikajar', 'Kertek',
                'Wonosobo', 'Watumalang', 'Mojotengah', 'Garung',
                'Kejajar', 'Sukoharjo','Kalibawang'
            ],
            'KAB. MAGELANG' => [
                'Salaman', 'Borobudur', 'Ngluwar', 'Salam', 'Srumbung',
                'Dukun', 'Sawangan', 'Muntilan', 'Mungkid', 'Mertoyudan',
                'Tempuran', 'Kajoran', 'Kaliangkrik', 'Bandongan',
                'Candimulyo', 'Pakis', 'Ngablak', 'Grabag', 'Tegalrejo',
                'Secang', 'Windusari'
            ],
            'KAB. BOYOLALI' => [
                'Selo', 'Ampel', 'Cepogo', 'Musuk', 'Boyolali',
                'Mojosongo', 'Teras', 'Sawit', 'Banyudono', 'Sambi',
                'Ngemplak', 'Nogosari', 'Simo', 'Karanggede', 'Klego',
                'Andong', 'Kemusu', 'Wonosegoro', 'Juwangi', 'Gladagsari',
                'Tamansari', 'Wonosamodro'
            ],
            'KAB. KLATEN' => [
                'Prambanan', 'Gantiwarno', 'Wedi', 'Bayat', 'Cawas',
                'Trucuk', 'Kebonarum', 'Jogonalan', 'Manisrenggo',
                'Karangnongko', 'Ceper', 'Pedan', 'Karangdowo',
                'Juwiring', 'Wonosari', 'Delanggu', 'Polanharjo',
                'Karanganom', 'Tulung', 'Jatinom', 'Kemalang',
                'Ngawen', 'Kalikotes', 'Klaten Utara', 'Klaten Tengah',
                'Klaten Selatan'
            ],
            'KAB. SUKOHARJO' => [
                'Weru', 'Bulu', 'Tawangsari', 'Sukoharjo', 'Nguter',
                'Bendosari', 'Polokarto', 'Mojolaban', 'Grogol',
                'Baki', 'Gatak', 'Kartasura'
            ],
            'KAB. WONOGIRI' => [
                'Pracimantoro', 'Giritontro', 'Giriwoyo', 'Batuwarno',
                'Tirtomoyo', 'Nguntoronadi', 'Baturetno', 'Eromoko',
                'Wuryantoro', 'Manyaran', 'Selogiri', 'Wonogiri',
                'Ngadirojo', 'Sidoharjo', 'Jatiroto', 'Kismantoro',
                'Purwantoro', 'Bulukerto', 'Slogohimo', 'Jatisrono',
                'Jatipurno', 'Girimarto', 'Karangtengah', 'Paranggupito',
                'Puhpelem'
            ],
            'KAB. KARANGANYAR' => [
                'Jatipuro', 'Jatiyoso', 'Jumapolo', 'Jumantono',
                'Matesih', 'Tawangmangu', 'Ngargoyoso', 'Karangpandan',
                'Karanganyar', 'Tasikmadu', 'Jaten', 'Colomadu',
                'Gondangrejo', 'Kebakkramat', 'Mojogedang', 'Kerjo',
                'Jenawi'
            ],
            'KAB. SRAGEN' => [
                'Kalijambe', 'Plupuh', 'Masaran', 'Kedawung',
                'Sambirejo', 'Gondang', 'Sambungmacan', 'Ngrampal',
                'Karangmalang', 'Sragen', 'Sidoharjo', 'Tanon',
                'Gemolong', 'Miri', 'Sumberlawang', 'Mondokan',
                'Sukodono', 'Gesi', 'Tangen', 'Jenar'
            ],
            'KAB. GROBOGAN' => [
                'Kedungjati', 'Karangrayung', 'Penawangan', 'Toroh',
                'Geyer', 'Pulokulon', 'Kradenan', 'Gabus',
                'Ngaringan', 'Wirosari', 'Tawangharjo', 'Grobogan',
                'Purwodadi', 'Brati', 'Klambu', 'Godong',
                'Gubug', 'Tegowanu', 'Tanggungharjo'
            ],
            'KAB. BLORA' => [
                'Jati', 'Randublatung', 'Kradenan', 'Kedungtuban',
                'Cepu', 'Sambong', 'Jiken', 'Jepon',
                'Blora', 'Tunjungan', 'Banjarejo', 'Ngawen',
                'Kunduran', 'Todanan', 'Bogorejo', 'Japah'
            ],
            'KAB. REMBANG' => [
                'Sumber', 'Bulu', 'Gunem', 'Sale',
                'Sarang', 'Sedan', 'Pamotan', 'Sulang',
                'Kaliori', 'Rembang', 'Pancur', 'Kragan',
                'Sluke', 'Lasem'
            ],
            'KAB. PATI' => [
                'Sukolilo', 'Kayen', 'Tambakromo', 'Winong',
                'Pucakwangi', 'Jaken', 'Batangan', 'Juwana',
                'Jakenan', 'Pati', 'Gabus', 'Margorejo',
                'Gembong', 'Tlogowungu', 'Wedarijaksa', 'Margoyoso',
                'Gunungwungkal', 'Cluwak', 'Tayu', 'Dukuhseti',
                'Trangkil'
            ],
            'KAB. KUDUS' => [
                'Kaliwungu', 'Kota Kudus', 'Jati', 'Undaan',
                'Mejobo', 'Jekulo', 'Bae', 'Gebog',
                'Dawe'
            ],
            'KAB. JEPARA' => [
                'Kedung', 'Pecangaan', 'Welahan', 'Mayong',
                'Batealit', 'Jepara', 'Mlonggo', 'Bangsri',
                'Keling', 'Karimunjawa', 'Tahunan', 'Nalumsari',
                'Kalinyamatan', 'Kembang', 'Pakis Aji', 'Donorojo'
            ],
            'KAB. DEMAK' => [
                'Mranggen', 'Karangawen', 'Guntur', 'Sayung',
                'Karangtengah', 'Wonosalam', 'Dempet', 'Gajah',
                'Karanganyar', 'Mijen', 'Demak', 'Bonang',
                'Wedung', 'Kebonagung'
            ],
            'KAB. SEMARANG' => [
                'Getasan', 'Tengaran', 'Susukan', 'Suruh',
                'Pabelan', 'Tuntang', 'Banyubiru', 'Jambu',
                'Sumowono', 'Ambarawa', 'Bawen', 'Bringin',
                'Bergas', 'Pringapus', 'Bancak', 'Kaliwungu',
                'Ungaran Barat', 'Ungaran Timur', 'Bandungan'
            ],
            'KAB. TEMANGGUNG' => [
                'Bulu', 'Tembarak', 'Temanggung', 'Pringsurat',
                'Kaloran', 'Kandangan', 'Kedu', 'Parakan',
                'Ngadirejo', 'Jumo', 'Tretep', 'Candiroto',
                'Kranggan', 'Tlogomulyo', 'Selopampang', 'Bansari',
                'Kledung', 'Bejen', 'Wonoboyo', 'Gemawang'
            ],
            'KAB. KENDAL' => [
                'Plantungan', 'Pageruyung', 'Sukorejo', 'Patean',
                'Singorojo', 'Limbangan', 'Boja', 'Kaliwungu',
                'Brangsong', 'Pegandon', 'Gemuh', 'Weleri',
                'Cepiring', 'Patebon', 'Kendal', 'Rowosari',
                'Kangkung', 'Ringinarum', 'Ngampel', 'Kaliwungu Selatan'
            ],
            'KAB. BATANG' => [
                'Wonotunggal', 'Bandar', 'Blado', 'Reban',
                'Bawang', 'Tersono', 'Gringsing', 'Limpung',
                'Subah', 'Tulis', 'Batang', 'Warungasem',
                'Kandeman', 'Pecalungan', 'Banyuputih'
            ],
            'KAB. PEKALONGAN' => [
                'Kandangserang', 'Paninggaran', 'Lebakbarang', 'Petungkriyono',
                'Talun', 'Doro', 'Karanganyar', 'Kajen',
                'Kesesi', 'Sragi', 'Bojong', 'Wonopringgo',
                'Kedungwuni', 'Buaran', 'Tirto', 'Wiradesa',
                'Siwalan', 'Karangdadap', 'Wonokerto'
            ],
            'KAB. PEMALANG' => [
                'Moga', 'Pulosari', 'Belik', 'Watukumpul',
                'Bodeh', 'Bantarbolang', 'Randudongkal', 'Pemalang',
                'Taman', 'Petarukan', 'Ampelgading', 'Comal',
                'Ulujami', 'Warungpring'
            ],
            'KAB. TEGAL' => [
                'Margasari', 'Bumijawa', 'Bojong', 'Balapulang',
                'Pagerbarang', 'Lebaksiu', 'Jatinegara', 'Kedungbanteng',
                'Pangkah', 'Slawi', 'Adiwerna', 'Talang',
                'Dukuhturi', 'Tarub', 'Kramat', 'Suradadi',
                'Warureja', 'Dukuhwaru'
            ],
            'KAB. BREBES' => [
                'Salem', 'Bantarkawung', 'Bumiayu', 'Paguyangan',
                'Sirampog', 'Tonjong', 'Jatibarang', 'Wanasari',
                'Brebes', 'Songgom', 'Kersana', 'Losari',
                'Tanjung', 'Bulakamba', 'Larangan', 'Ketanggungan',
                'Banjarharjo'
            ],
            'MAGELANG' => [
                'Magelang Selatan', 'Magelang Utara', 'Magelang Tengah'
            ],
            'SURAKARTA' => [
                'Laweyan', 'Serengan', 'Pasar Kliwon', 'Jebres',
                'Banjarsari'
            ],
            'SALATIGA' => [
                'Sidorejo', 'Tingkir', 'Argomulyo', 'Sidomukti'
            ],
            'SEMARANG' => [
                'Semarang Tengah', 'Semarang Utara', 'Semarang Timur', 'Gayamsari',
                'Genuk', 'Pedurungan', 'Semarang Selatan', 'Candisari',
                'Gajahmungkur', 'Tembalang', 'Banyumanik', 'Gunungpati',
                'Semarang Barat', 'Mijen', 'Ngaliyan', 'Tugu'
            ],
            'PEKALONGAN' => [
                'Pekalongan Barat', 'Pekalongan Timur', 'Pekalongan Utara', 'Pekalongan Selatan'
            ],
            'TEGAL' => [
                'Tegal Barat', 'Tegal Timur', 'Tegal Selatan', 'Margadana'
            ],
            'KAB. KULON PROGO' => [
                'Temon', 'Wates', 'Panjatan', 'Galur',
                'Lendah', 'Sentolo', 'Pengasih', 'Kokap',
                'Girimulyo', 'Nanggulan', 'Samigaluh', 'Kalibawang'
            ],
            'KAB. BANTUL' => [
                'Srandakan', 'Sanden', 'Kretek', 'Pundong',
                'Bambanglipuro', 'Pandak', 'Pajangan', 'Bantul',
                'Jetis', 'Imogiri', 'Dlingo', 'Banguntapan',
                'Pleret', 'Piyungan', 'Sewon', 'Kasihan',
                'Sedayu'
            ],
            'KAB. GUNUNGKIDUL' => [
                'Wonosari', 'Nglipar', 'Playen', 'Patuk',
                'Paliyan', 'Panggang', 'Tepus', 'Semanu',
                'Karangmojo', 'Ponjong', 'Rongkop', 'Semin',
                'Ngawen', 'Gedangsari', 'Saptosari', 'Girisubo',
                'Tanjungsari', 'Purwosari'
            ],
            'KAB. SLEMAN' => [
                'Gamping', 'Godean', 'Moyudan', 'Minggir',
                'Seyegan', 'Mlati', 'Depok', 'Berbah',
                'Prambanan', 'Kalasan', 'Ngemplak', 'Ngaglik',
                'Sleman', 'Tempel', 'Turi', 'Pakem',
                'Cangkringan'
            ],
            'YOGYAKARTA' => [
                'Tegalrejo', 'Jetis', 'Gondokusuman', 'Danurejan',
                'Gedongtengen', 'Ngampilan', 'Wirobrajan', 'Mantrijeron',
                'Kraton', 'Gondomanan', 'Pakualaman', 'Mergangsan',
                'Umbulharjo', 'Kotagede'
            ],
            'KAB. PACITAN' => [
                'Donorojo', 'Pringkuku', 'Punung', 'Pacitan',
                'Kebonagung', 'Arjosari', 'Nawangan', 'Bandar',
                'Tegalombo', 'Tulakan', 'Ngadirojo', 'Sudimoro'
            ],
            'KAB. PONOROGO' => [
                'Slahung', 'Ngrayun', 'Bungkal', 'Sambit',
                'Sawoo', 'Sooko', 'Pulung', 'Mlarak',
                'Jetis', 'Siman', 'Balong', 'Kauman',
                'Badegan', 'Sampung', 'Sukorejo', 'Babadan',
                'Ponorogo', 'Jenangan', 'Ngebel', 'Jambon',
                'Pudak'
            ],
            'KAB. TRENGGALEK' => [
                'Panggul', 'Munjungan', 'Pule', 'Dongko',
                'Tugu', 'Karangan', 'Kampak', 'Watulimo',
                'Bendungan', 'Gandusari', 'Trenggalek', 'Pogalan',
                'Durenan', 'Suruh'
            ],
            'KAB. TULUNGAGUNG' => [
                'Tulungagung', 'Boyolangu', 'Kedungwaru', 'Ngantru',
                'Kauman', 'Pagerwojo', 'Sendang', 'Karangrejo',
                'Gondang', 'Sumbergempol', 'Ngunut', 'Pucanglaban',
                'Rejotangan', 'Kalidawir', 'Besuki', 'Campurdarat',
                'Bandung', 'Pakel', 'Tanggunggunung'
            ],
            'KAB. BLITAR' => [
                'Wonodadi', 'Udanawu', 'Srengat', 'Kademangan',
                'Bakung', 'Ponggok', 'Sanankulon', 'Wonotirto',
                'Nglegok', 'Kanigoro', 'Garum', 'Sutojayan',
                'Panggungrejo', 'Talun', 'Gandusari', 'Binangun',
                'Wlingi', 'Doko', 'Kesamben', 'Wates', 'Selorejo',
                'Selopuro'
            ],
            'KAB. KEDIRI' => [
                'Semen', 'Mojo', 'Kras', 'Ngadiluwih',
                'Kandat', 'Wates', 'Ngancar', 'Puncu',
                'Plosoklaten', 'Gurah', 'Pagu', 'Gampengrejo',
                'Grogol', 'Papar', 'Purwoasri', 'Plemahan',
                'Pare', 'Kepung', 'Kandangan', 'Tarokan',
                'Kunjang', 'Banyakan', 'Ringinrejo', 'Kayen Kidul',
                'Ngasem', 'Badas'
            ],
            'KAB. MALANG' => [
                'Donomulyo', 'Pagak', 'Bantur', 'Sumbermanjing Wetan',
                'Dampit', 'Ampelgading', 'Poncokusumo', 'Wajak',
                'Turen', 'Gondanglegi', 'Kalipare', 'Sumberpucung',
                'Kepanjen', 'Bululawang', 'Tajinan', 'Tumpang',
                'Jabung', 'Pakis', 'Pakisaji', 'Ngajum',
                'Wagir', 'Dau', 'Karang Ploso', 'Singosari',
                'Lawang', 'Pujon', 'Ngantang', 'Kasembon',
                'Gedangan', 'Tirtoyudo', 'Kromengan', 'Wonosari',
                'Pagelaran'
            ],
            'KAB. LUMAJANG' => [
                'Tempursari', 'Pronojiwo', 'Candipuro', 'Pasirian',
                'Tempeh', 'Kunir', 'Yosowilangun', 'Rowokangkung',
                'Tekung', 'Lumajang', 'Pasrujambe', 'Senduro',
                'Gucialit', 'Padang', 'Sukodono', 'Kedungjajang',
                'Jatiroto', 'Randuagung', 'Klakah', 'Ranuyoso',
                'Sumbersuko'
            ],
            'KAB. BANYUWANGI' => [
                'Tempursari', 'Pronojiwo', 'Candipuro', 'Pasirian',
                'Tempeh', 'Kunir', 'Yosowilangun', 'Rowokangkung',
                'Tekung', 'Lumajang', 'Pasrujambe', 'Senduro',
                'Gucialit', 'Padang', 'Sukodono', 'Kedungjajang',
                'Jatiroto', 'Randuagung', 'Klakah', 'Ranuyoso',
                'Sumbersuko'
            ],
            'KAB. BONDOWOSO' => [
                'Maesan', 'Tamanan', 'Tlogosari', 'Sukosari',
                'Pujer', 'Grujugan', 'Curahdami', 'Tenggarang',
                'Wonosari', 'Tapen', 'Bondowoso', 'Wringin',
                'Tegalampel', 'Klabang', 'Cermee', 'Prajekan',
                'Pakem', 'Sumberwringin', 'Sempol', 'Binakal',
                'Taman Krocok', 'Botolinggo', 'Jambesari Darus Sholah'
            ],
            'KAB. SITUBONDO' => [
                'Jatibanteng', 'Besuki', 'Suboh', 'Mlandingan',
                'Kendit', 'Panarukan', 'Situbondo', 'Panji',
                'Mangaran', 'Kapongan', 'Arjasa', 'Jangkar',
                'Asembagus', 'Banyuputih', 'Sumbermalang',
                'Banyuglugur', 'Bungatan'
            ],
            'KAB. PROBOLINGGO' => [
                'Sukapura', 'Sumber', 'Kuripan', 'Bantaran',
                'Leces', 'Banyuanyar', 'Tiris', 'Krucil',
                'Gading', 'Pakuniran', 'Kotaanyar', 'Paiton',
                'Besuk', 'Kraksaan', 'Krejengan', 'Pejarakan',
                'Maron', 'Gending', 'Dringu', 'Tegalsiwalan',
                'Sumberasih', 'Wonomerto', 'Tongas', 'Lumbang'
            ],
            'KAB. PASURUAN' => [
                'Purwodadi', 'Tutur', 'Puspo', 'Lumbang',
                'Pasrepan', 'Kejayan', 'Wonorejo', 'Purwosari',
                'Sukorejo', 'Prigen', 'Pandaan', 'Gempol',
                'Beji', 'Bangil', 'Rembang', 'Kraton',
                'Pohjentrek', 'Gondangwetan', 'Winongan', 'Grati',
                'Nguling', 'Lekok', 'Rejoso', 'Tosari'
            ],
            'KAB. SIDOARJO' => [
                'Tarik', 'Prambon', 'Krembung', 'Porong',
                'Jabon', 'Tanggulangin', 'Candi', 'Sidoarjo',
                'Tulangan', 'Wonoayu', 'Krian', 'Balongbendo',
                'Taman', 'Sukodono', 'Buduran', 'Gedangan',
                'Sedati', 'Waru'
            ],
            'KAB. MOJOKERTO' => [
                'Jatirejo', 'Gondang', 'Pacet', 'Trawas',
                'Ngoro', 'Pungging', 'Kutorejo', 'Mojosari',
                'Dlanggu', 'Bangsal', 'Puri', 'Trowulan',
                'Sooko', 'Gedeg', 'Kemlagi', 'Jetis',
                'Dawarblandong', 'Mojoanyar'
            ],
            'KAB. JOMBANG' => [
                'Perak', 'Gudo', 'Ngoro', 'Bareng',
                'Wonosalam', 'Mojoagung', 'Mojowarno', 'Diwek',
                'Jombang', 'Peterongan', 'Sumobito', 'Kesamben',
                'Tembelang', 'Ploso', 'Plandaan', 'Kabuh',
                'Kudu', 'Bandarkedungmulyo', 'Jogoroto', 'Megaluh',
                'Ngusikan'
            ],
            'KAB. NGANJUK' => [
                'Sawahan', 'Ngetos', 'Berbek', 'Loceret',
                'Pace', 'Prambon', 'Ngronggot', 'Kertosono',
                'Patianrowo', 'Baron', 'Tanjunganom', 'Sukomoro',
                'Nganjuk', 'Bagor', 'Wilangan', 'Rejoso',
                'Gondang', 'Ngluyu', 'Lengkong', 'Jatikalen'
            ],
            'KAB. MADIUN' => [
                'Kebonsari', 'Dolopo', 'Geger', 'Dagangan',
                'Kare', 'Gemarang', 'Wungu', 'Madiun',
                'Jiwan', 'Balerejo', 'Mejayan', 'Saradan',
                'Pilangkenceng', 'Sawahan', 'Wonoasri'
            ],
            'KAB. MAGETAN' => [
                'Poncol', 'Parang', 'Lembeyan', 'Takeran',
                'Kawedanan', 'Magetan', 'Plaosan', 'Panekan',
                'Sukomoro', 'Bendo', 'Maospati', 'Barat',
                'Karangrejo', 'Karas', 'Kartoharjo', 'Ngariboyo',
                'Nguntoronadi', 'Sidorejo'
            ],
            'KAB. NGAWI' => [
                'Sine', 'Ngrambe', 'Jogorogo', 'Kendal',
                'Geneng', 'Kwadungan', 'Karangjati', 'Padas',
                'Ngawi', 'Paron', 'Kedunggalar', 'Widodaren',
                'Mantingan', 'Pangkur', 'Bringin', 'Pitu',
                'Karanganyar', 'Gerih', 'Kasreman'
            ],
            'KAB. BOJONEGORO' => [
                'Ngraho', 'Tambakrejo', 'Ngambon', 'Ngasem',
                'Bubulan', 'Dander', 'Sugihwaras', 'Kedungadem',
                'Kepohbaru', 'Baureno', 'Kanor', 'Sumberejo',
                'Balen', 'Kapas', 'Bojonegoro', 'Kalitidu',
                'Malo', 'Purwosari', 'Padangan', 'Kasiman',
                'Temayang', 'Margomulyo', 'Trucuk', 'Sukosewu',
                'Kedewan', 'Gondang', 'Sekar', 'Gayam'
            ],
            'KAB. TUBAN' => [
                'Kenduruan', 'Jatirogo', 'Bangilan', 'Bancar',
                'Senori', 'Tambakboyo', 'Singgahan', 'Kerek',
                'Parengan', 'Montong', 'Soko', 'Jenu',
                'Merakurak', 'Rengel', 'Semanding', 'Tuban',
                'Plumpang', 'Palang', 'Widang', 'Grabagan'
            ],
            'KAB. LAMONGAN' => [
                'Sukorame', 'Bluluk', 'Modo', 'Ngimbang',
                'Babat', 'Kedungpring', 'Brondong', 'Laren',
                'Sekaran', 'Maduran', 'Sambeng', 'Sugio',
                'Pucuk', 'Paciran', 'Solokuro', 'Mantup',
                'Sukodadi', 'Karanggeneng', 'Kembangbahu', 'Kalitengah',
                'Turi', 'Lamongan', 'Tikung', 'Karangbinangun',
                'Deket', 'Glagah', 'Sarirejo'
            ],
            'KAB. GRESIK' => [
                'Dukun', 'Balongpanggang', 'Panceng', 'Benjeng',
                'Duduksampeyan', 'Wringinanom', 'Ujungpangkah', 'Kedamean',
                'Sidayu', 'Manyar', 'Cerme', 'Bungah',
                'Menganti', 'Kebomas', 'Driyorejo', 'Gresik',
                'Sangkapura', 'Tambak'
            ],
            'KAB. BANGKALAN' => [
                'Bangkalan', 'Socah', 'Burneh', 'Kamal',
                'Arosbaya', 'Geger', 'Klampis', 'Sepulu',
                'Tanjung Bumi', 'Kokop', 'Kwanyar', 'Labang',
                'Tanah Merah', 'Tragah', 'Blega', 'Modung',
                'Konang', 'Galis'
            ],
            'KAB. SAMPANG' => [
                'Sreseh', 'Torjun', 'Sampang', 'Camplong',
                'Omben', 'Kedungdung', 'Jrengik', 'Tambelangan',
                'Banyuates', 'Robatal', 'Sokobanah', 'Ketapang',
                'Pangarengan', 'Karangpenang'
            ],
            'KAB. PAMEKASAN' => [
                'Tlanakan', 'Pademawu', 'Galis', 'Pamekasan',
                'Proppo', 'Palenggaan', 'Pegantenan', 'Larangan',
                'Pakong', 'Waru', 'Batumarmar', 'Kadur',
                'Pasean'
            ],
            'KAB. SUMENEP' => [
                'Kota Sumenep', 'Kalianget', 'Manding', 'Talango',
                'Bluto', 'Saronggi', 'Lenteng', 'Giliginting',
                'Guluk-Guluk', 'Ganding', 'Pragaan', 'Ambunten',
                'Pasongsongan', 'Dasuk', 'Rubaru', 'Batang Batang',
                'Batuputih', 'Dungkek', 'Gapura', 'Gayam',
                'Nonggunong', 'Raas', 'Masalembu', 'Arjasa',
                'Sapeken', 'Batuan', 'Kangayan'
            ],
            'KEDIRI' => [
                'Mojoroto', 'Kota', 'Pesantren'
            ],
            'BLITAR' => [
                'Kepanjenkidul', 'Sukorejo', 'Sananwetan'
            ],
            'MALANG' => [
                'Blimbing', 'Klojen', 'Kedungkandang',
                'Sukun', 'Lowokwaru'
            ],
            'PROBOLINGGO' => [
                'Kademangan', 'Wonoasih', 'Mayangan',
                'Kanigaran', 'Kedopok'
            ],
            'PASURUAN' => [
                'Gadingrejo', 'Purworejo', 'Bugul Kidul',
                'Panggungrejo'
            ],
            'MOJOKERTO' => [
                'Prajuritkulon', 'Magersari', 'Kranggan'
            ],
            'MADIUN' => [
                'Kartoharjo', 'Manguharjo', 'Taman'
            ],
            'SURABAYA' => [
                'Karang Pilang', 'Wonocolo', 'Rungkut', 'Wonokromo', 'Tegalsari',
                'Sawahan', 'Genteng', 'Gubeng', 'Sukolilo', 'Tambaksari',
                'Simokerto', 'Pabean Cantian', 'Bubutan', 'Tandes', 'Krembangan',
                'Semampir', 'Kenjeran', 'Lakarsantri', 'Benowo', 'Wiyung',
                'Dukuh Pakis', 'Gayungan', 'Jambangan', 'Tenggilis Mejoyo',
                'Gunung Anyar', 'Mulyorejo', 'Sukomanunggal', 'Asem Rowo',
                'Bulak', 'Pakal', 'Sambikerep'
            ],
            'BATU' => [
                'Batu', 'Bumiaji', 'Junrejo'
            ],
            'KAB. PANDEGLANG' => [
                'Sumur', 'Cimanggu', 'Cibaliung', 'Cikeusik', 'Cigeulis',
                'Panimbang', 'Angsana', 'Munjul', 'Pagelaran', 'Bojong',
                'Picung', 'Labuan', 'Menes', 'Saketi', 'Cipeucang',
                'Jiput', 'Mandalawangi', 'Cimanuk', 'Kaduhejo', 'Banjar',
                'Pandeglang', 'Cadasari', 'Cisata', 'Patia', 'Karang Tanjung',
                'Cikedal', 'Cibitung', 'Carita', 'Sukaresmi', 'Mekarjaya',
                'Sindangresmi', 'Pulosari', 'Koroncong', 'Majasari', 'Sobang'
            ],
            'KAB. LEBAK' => [
                'Malingping', 'Panggarangan', 'Bayah', 'Cipanas', 'Muncang',
                'Leuwidamar', 'Bojongmanik', 'Gunungkencana', 'Banjarsari', 'Cileles',
                'Cimarga', 'Sajira', 'Maja', 'Rangkasbitung', 'Warunggunung',
                'Cijaku', 'Cikulur', 'Cibadak', 'Cibeber', 'Cilograng',
                'Wanasalam', 'Sobang', 'Curug bitung', 'Kalanganyar', 'Lebakgedong',
                'Cihara', 'Cirinten', 'Cigemlong'
            ],
            'KAB. TANGERANG' => [
                'Balaraja', 'Jayanti', 'Tigaraksa', 'Jambe', 'Cisoka',
                'Kresek', 'Kronjo', 'Mauk', 'Kemiri', 'Sukadiri',
                'Rajeg', 'Pasar Kemis', 'Teluknaga', 'Kosambi', 'Pakuhaji',
                'Sepatan', 'Curug', 'Cikupa', 'Panongan', 'Legok',
                'Pagedangan', 'Cisauk', 'Sukamulya', 'Kelapa Dua',
                'Sindang Jaya', 'Sepatan Timur', 'Solear', 'Gunung Kaler',
                'Mekar Baru'
            ],
            'KAB. SERANG' => [
                'Kramatwatu', 'Waringinkurung', 'Bojonegara', 'Pulo Ampel',
                'Ciruas', 'Kragilan', 'Pontang', 'Tirtayasa', 'Tanara',
                'Cikande', 'Kibin', 'Carenang', 'Binuang', 'Petir',
                'Tunjung Teja', 'Baros', 'Cikeusal', 'Pamarayan', 'Kopo',
                'Jawilan', 'Ciomas', 'Pabuaran', 'Padarincang', 'Anyar',
                'Cinangka', 'Mancak', 'Gunungsari', 'Bandung', 'Lebak Wangi'
            ],
            'TANGERANG' => [
                'Tangerang', 'Jatiuwung', 'Batuceper', 'Benda', 'Cipondoh',
                'Ciledug', 'Karawaci', 'Periuk', 'Cibodas', 'Neglasari',
                'Pinang', 'Karang Tengah', 'Larangan'
            ],
            'CILEGON' => [
                'Cibeber', 'Cilegon', 'Pulomerak', 'Ciwandan', 'Jombang',
                'Gerogol', 'Purwakarta', 'Citangkil'
            ],
            'SERANG' => [
                'Serang', 'Kasemen', 'Walantaka', 'Curug', 'Cipocok Jaya', 'Taktakan'
            ],
            'TANGERANG SELATAN' => [
                'Serpong', 'Serpong Utara', 'Pondok Aren', 'Ciputat', 'Ciputat Timur', 'Pamulang', 'Setu'
            ],
            'KAB. JEMBRANA' => [
                'Negara', 'Mendoyo', 'Pekutatan', 'Melaya', 'Jembrana'
            ],
            'KAB. TABANAN' => [
                'Selemadeg', 'Selemadeg Timur', 'Selemadeg Barat', 'Kerambitan', 'Tabanan', 'Kediri', 'Marga', 'Penebel', 'Baturiti', 'Pupuan'
            ],
            'KAB. BADUNG' => [
                'Kuta', 'Mengwi', 'Abiansemal', 'Petang', 'Kuta Selatan', 'Kuta Utara'
            ],
            'KAB. GIANYAR' => [
                'Sukawati', 'Blahbatuh', 'Gianyar', 'Tampaksiring', 'Ubud', 'Tegallalang', 'Payangan'
            ],
            'KAB. KLUNGKUNG' => [
                'Nusa Penida', 'Banjarangkan', 'Klungkung', 'Dawan'
            ],
            'KAB. BANGLI' => [
                'Susut', 'Bangli', 'Tembuku', 'Kintamani'
            ],
            'KAB. KARANGASEM' => [
                'Rendang', 'Sidemen', 'Manggis', 'Karangasem', 'Abang', 'Bebandem', 'Selat', 'Kubu'
            ],
            'KAB. BULELENG' => [
                'Gerokgak', 'Seririt', 'Busungbiu', 'Banjar', 'Sukasada', 'Buleleng', 'Sawan', 'Kubutambahan', 'Tejakula'
            ],
            'DENPASAR' => [
                'Denpasar Selatan', 'Denpasar Timur', 'Denpasar Barat', 'Denpasar Utara'
            ],
            'KAB. LOMBOK BARAT' => [
                'Gerung', 'Kediri', 'Narmada', 'Sekotong', 'Labuapi', 'Gunungsari', 'Lingsar', 'Lembar', 'Batu Layar', 'Kuripan'
            ],
            'KAB. LOMBOK TENGAH' => [
                'Praya', 'Jonggat', 'Batukliang', 'Pujut', 'Praya Barat', 'Praya Timur', 'Janapria', 'Pringgarata', 'Kopang', 'Praya Tengah', 'Praya Barat Daya', 'Batukliang Utara'
            ],
            'KAB. LOMBOK TIMUR' => [
                'Keruak', 'Sakra', 'Terara', 'Sikur', 'Masbagik', 'Sukamulia', 'Selong', 'Pringgabaya', 'Aikmel', 'Sambelia',
                'Montong Gading', 'Pringgasela', 'Suralaga', 'Wanasaba', 'Sembalun', 'Suwela', 'Labuhan Haji', 'Sakra Timur', 'Sakra Barat', 'Jerowaru', 'Lenek'
            ],
            'KAB. SUMBAWA' => [
                'Lunyuk', 'Alas', 'Utan', 'Batu Lanteh', 'Sumbawa', 'Moyo Hilir', 'Moyo Hulu', 'Ropang', 'Lape', 'Plampang',
                'Empang', 'Alas Barat', 'Labuhan Badas', 'Labangka', 'Buer', 'Rhee', 'Unter Iwes', 'Moyo Utara', 'Maronge', 'Tarano', 'Lopok', 'Lenangguar', 'Orong Telu', 'Lantung'
            ],
            'KAB. DOMPU' => [
                'Dompu', 'Kempo', 'Hu\'u', 'Kilo', 'Woja', 'Pekat', 'Manggalewa', 'Pajo'
            ],
            'KAB. BIMA' => [
                'Monta', 'Bolo', 'Woha', 'Belo', 'Wawo', 'Sape', 'Wera', 'Donggo', 'Sanggar', 'Ambalawi', 'Langgudu', 'Lambu', 'Madapangga', 'Tambora', 'Soromandi', 'Parado', 'Lambitu', 'Palibelo'
            ],
            'KAB. SUMBAWA BARAT' => [
                'Jereweh', 'Taliwang', 'Seteluk', 'Sekongkang', 'Brang Rea', 'Poto Tano', 'Brang Ene', 'Maluk'
            ],
            'KAB. LOMBOK UTARA' => [
                'Tanjung', 'Gangga', 'Kayangan', 'Bayan', 'Pemenang'
            ],
            'MATARAM' => [
                'Ampenan', 'Mataram', 'Cakranegara', 'Sekarbela', 'Selaprang', 'Sandubaya'
            ],
            'BIMA' => [
                'RasanaE Barat', 'RasanaE Timur', 'Asakota', 'Raba', 'Mpunda'
            ],
            'KAB. KUPANG' => [
                'Semau', 'Kupang Barat', 'Kupang Timur', 'Sulamu', 'Kupang Tengah',
                'Amarasi', 'Fatuleu', 'Takari', 'Amfoang Selatan', 'Amfoang Utara',
                'Nekamese', 'Amarasi Barat', 'Amarasi Selatan', 'Amarasi Timur',
                'Amabi Oefeto Timur', 'Amfoang Barat Daya', 'Amfoang Barat Laut',
                'Semau Selatan', 'Taebenu', 'Amabi Oefeto', 'Amfoang Timur',
                'Fatuleu Barat', 'Fatuleu Tengah', 'Amfoang Tengah'
            ],
            'KAB TIMOR TENGAH SELATAN' => [
                'Kota Soe', 'Mollo Selatan', 'Mollo Utara', 'Amanuban Timur',
                'Amanuban Tengah', 'Amanuban Selatan', 'Amanuban Barat',
                'Amanatun Selatan', 'Amanatun Utara', 'KI\'E', 'Kuanfatu',
                'Fatumnasi', 'Polen', 'Batu Putih', 'Boking', 'Toianas',
                'Nunkolo', 'Oenino', 'Kolbano', 'Kot olin', 'Kualin',
                'Mollo Barat', 'Kok Baun', 'Noebana', 'Santian', 'Noebeba',
                'Kuatnana', 'Fautmolo', 'Fatukopa', 'Mollo Tengah', 'Tobu',
                'Nunbena'
            ],
            'KAB. TIMOR TENGAH UTARA' => [
                'Miomaffo Timur', 'Miomaffo Barat', 'Biboki Selatan', 'Noemuti',
                'Kota Kefamenanu', 'Biboki Utara', 'Biboki Anleu', 'Insana',
                'Insana Utara', 'Noemuti Timur', 'Miomaffo Tengah', 'Musi',
                'Mutis', 'Bikomi Selatan', 'Bikomi Tengah', 'Bikomi Nilulat',
                'Bikomi Utara', 'Naibenu', 'Insana Fafinesu', 'Insana Barat',
                'Insana Tengah', 'Biboki Tan Pah', 'Biboki Moenleu', 'Biboki Feotleu'
            ],
            'KAB. BELU' => [
                'Lamaknen', 'TasifetoTimur', 'Raihat', 'Tasifeto Barat',
                'Kakuluk Mesak', 'Kota Atambua', 'Raimanuk', 'Lasiolat',
                'Lamaknen Selatan', 'Atambua Barat', 'Atambua Selatan',
                'Nanaet Duabesi'
            ],
            'KAB. ALOR' => [
                'Teluk Mutiara', 'Alor Barat Laut', 'Alor Barat Daya',
                'Alor Selatan', 'Alor Timur', 'Pantar', 'Alor Tengah Utara',
                'Alor Timur Laut', 'Pantar Barat', 'Kabola', 'Pulau Pura',
                'Mataru', 'Pureman', 'Pantar Timur', 'Lembur', 'Pantar Tengah',
                'Pantar Baru Laut', 'Abad Selatan'
            ],
            'KAB. FLORES TIMUR' => [
                'Wulanggitang', 'Titehena', 'Larantuka', 'Ile Mandiri',
                'Tanjung Bunga', 'Solor Barat', 'Solor Timur', 'Adonara Barat',
                'Wotan Ulumando', 'Adonara Timur', 'Kelubagolit', 'Witihama',
                'Ile Boleng', 'Demon Pagong', 'Lewolema', 'Ile Bura',
                'Adonara', 'Adonara Tengah', 'Solor Selatan'
            ],
            'KAB. SIKKA' => [
                'Paga', 'Mego', 'Lela', 'Nita', 'Alok', 'Palue', 'Nelle',
                'Talibura', 'Waigete', 'Kewapante', 'Bola', 'Magepanda',
                'Waiblama', 'Alok Barat', 'Alok Timur', 'Koting', 'Tana Wawo',
                'Hewokloang', 'Kangae', 'Doreng', 'Mapitara'
            ],
            'KAB. ENDE' => [
                'Nangapanda', 'Pulau Ende', 'Ende', 'Ende Selatan', 'Ndona',
                'Detusoko', 'Wewaria', 'Wolowaru', 'Wolojita', 'Maurole',
                'Maukaro', 'Lio Timur', 'Kota Baru', 'Kelimutu', 'Detukeli',
                'Ndona Timur', 'Ndori', 'Ende Utara', 'Ende Tengah', 'Ende Timur',
                'Lepembusu Kelisoke'
            ],
            'KAB. NGADA' => [
                'Aimere', 'Golewa', 'Bajawa', 'Soa', 'Riung', 'Jerebuu',
                'Riung Barat', 'Bajawa Utara', 'Wolomeze', 'Golewa Selatan',
                'Golewa Barat', 'Inerie'
            ],
            'KAB. MANGGARAI' => [
                'Wae Rii', 'Ruteng', 'Satar Mese', 'Cibal', 'Reok',
                'Langke Rembong', 'Satar Mese Barat', 'Rahong Utara',
                'Lelak', 'Reok Barat', 'Cibal barat', 'Satar Mese Utara'
            ],

            'KAB. SUMBA TIMUR' => [
                'Kota Waingapu', 'Haharu', 'Lewa', 'Nggaha Ori Angu',
                'Tabundung', 'Pinu Pahar', 'Pandawai', 'Umalulu', 'Rindi',
                'Pahunga Lodu', 'Wulla Waijelu', 'Paberiwai', 'Karera',
                'Kahaungu Eti', 'Matawai La Pawu', 'Kambera',
                'Kambata Mapambuhang', 'Lewa Tidahu', 'Katala Hamu Lingu',
                'Kanatang', 'Ngadu Ngala', 'Mahu'
            ],
            'KAB. SUMBA BARAT' => [
                'Tana Righu', 'Loli', 'Wanokaka', 'Lamboya',
                'Kota Waikabubak', 'Laboya Barat'
            ],
            'KAB. LEMBATA' => [
                'Naga Wutung', 'Atadei', 'Ile Ape', 'Lebatukan',
                'Nubatukan', 'Omesuri', 'Buyasuri', 'Wulandoni',
                'Ile Ape Timur'
            ],
            'KAB. ROTE NDAO' => [
                'Rote Barat Daya', 'Rote Barat Laut', 'Lobalain',
                'Rote Tengah', 'Pantai Baru', 'Rote Timur',
                'Rote Barat', 'Rote Selatan', 'Ndao Nuse',
                'Landu Leko', 'Loaholu'
            ],
            'KAB. MANGGARAI BARAT' => [
                'Macang Pacar', 'Kuwus', 'Lembor', 'Sano Nggoang',
                'Komodo', 'Boleng', 'Welak', 'Ndoso',
                'Lembor Selatan', 'Mbeliling', 'Pacar', 'Kuwus Barat'
            ],
            'KAB. NAGEKEO' => [
                'Aesesa', 'Nangaroro', 'Boawae', 'Mauponggo',
                'Wolowae', 'Keo Tengah', 'Aesesa Selatan'
            ],
            'KAB. SUMBA TENGAH' => [
                'Katiku Tana', 'Umbu Ratu Nggay Barat', 'Mamboro',
                'Umbu Ratu Nggay', 'Katiku Tana Selatan',
                'Umbu Ratu Nggay Tengah'
            ],
            'KAB. SUMBA BARAT DAYA' => [
                'Loura', 'Wewewa Utara', 'Wewewa Timur',
                'Wewewa Barat', 'Wewewa Selatan', 'Kodi Bangedo',
                'Kodi', 'Kodi Utara', 'Kota Tambolaka',
                'Wewewa Tengah', 'Kodi Balaghar'
            ],
            'KAB. MANGGARAI BARAT' => [
                'Macang Pacar', 'Kuwus', 'Lembor', 'Sano Nggoang',
                'Komodo', 'Boleng', 'Welak', 'Ndoso',
                'Lembor Selatan', 'Mbeliling', 'Pacar', 'Kuwus Barat'
            ],
            'KAB. NAGEKEO' => [
                'Aesesa', 'Nangaroro', 'Boawae', 'Mauponggo',
                'Wolowae', 'Keo Tengah', 'Aesesa Selatan'
            ],
            'KAB. SUMBA TENGAH' => [
                'Katiku Tana', 'Umbu Ratu Nggay Barat', 'Mamboro',
                'Umbu Ratu Nggay', 'Katiku Tana Selatan',
                'Umbu Ratu Nggay Tengah'
            ],
            'KAB. SUMBA BARAT DAYA' => [
                'Loura', 'Wewewa Utara', 'Wewewa Timur',
                'Wewewa Barat', 'Wewewa Selatan', 'Kodi Bangedo',
                'Kodi', 'Kodi Utara', 'Kota Tambolaka',
                'Wewewa Tengah', 'Kodi Balaghar'
            ],
            'KAB. MANGGARAI TIMUR' => [
                'Borong', 'Lamba Leda Selatan', 'Lamba Leda',
                'Sambi Rampas', 'Elar', 'Kota Komba',
                'Rana Mese', 'Lamba Leda Timur', 'Elar Selatan',
                'Kota Komba Utara', 'Lamba Leda Utara', 'Congkar'
            ],
            'KAB. SABU RAIJUA' => [
                'Sabu Barat', 'Sabu Tengah', 'Sabu Timur',
                'Sabu Liae', 'Hawu Mehara', 'Raijua'
            ],
            'KAB. MALAKA' => [
                'Malaka Tengah', 'Malaka Barat', 'Wewiku',
                'Weliman', 'Rinhat', 'Io Kufeu',
                'Sasitamean', 'Laenmanen', 'Malaka Timur',
                'Kobalima Timur', 'Kobalima', 'Botin Leobele'
            ],
            'KUPANG' => [
                'Alak', 'Maulafa', 'Kelapa Lima',
                'Oebobo', 'Kota Raja', 'Kota Lama'
            ],
            'KAB. SAMBAS' => [
                'Sambas', 'Teluk Keramat', 'Jawai',
                'Tebas', 'Pemangkat', 'Sejangkung',
                'Selakau', 'Paloh', 'Sajingan Besar',
                'Subah', 'Galing', 'Tekarang',
                'Semparuk', 'Sajad', 'Sebawi',
                'Jawai Selatan', 'Tangaran', 'Salatiga',
                'Selakau Timur'
            ],

            'KAB. MEMPAWAH' => [
                'Mempawah Hilir', 'Toho', 'Sungai Pinyuh',
                'Jongkat', 'Sungai Kunyit', 'Segedong',
                'Anjongan', 'Sadaniang', 'Mempawah Timur'
            ],
            'KAB. SANGGAU' => [
                'Kapuas', 'Mukok', 'Noyan',
                'Jangkang', 'Bonti', 'Beduai',
                'Sekayam', 'Kembayan', 'Parindu',
                'Tayan Hulu', 'Tayan Hilir', 'Balai',
                'Toba', 'Meliau', 'Entikong'
            ],
            'KAB. KETAPANG' => [
                'Matan Hilir Utara', 'Marau', 'Manis Mata',
                'Kendawangan', 'Sandai', 'Sungai Laur',
                'Simpang Hulu', 'Nanga Tayap', 'Matan Hilir Selatan',
                'Tumbang Titi', 'Jelai Hulu', 'Delta Pawan',
                'Muara Pawan', 'Benua Kayong', 'Hulu Sungai',
                'Simpang Dua', 'Air Upas', 'Singkup',
                'Pemahan', 'Sungai Melayu Rayak'
            ],
            'KAB. SINTANG' => [
                'Sintang', 'Tempunak', 'Sepauk',
                'Ketungau Hilir', 'Ketungau Tengah', 'Ketungau Hulu',
                'Dedai', 'Kayan Hilir', 'Kayan Hulu',
                'Serawai', 'Ambalau', 'Kelam Permai',
                'Sungai Tebelian', 'Binjai Hulu'
            ],
            'KAB. KAPUAS HULU' => [
                'Putussibau Utara', 'Bika', 'Embaloh Hilir',
                'Embaloh Hulu', 'Bunut Hilir', 'Bunut Hulu',
                'Jongkong', 'Hulu Gurung', 'Selimbau',
                'Semitau', 'Seberuang', 'Batang Lupar',
                'Empanang', 'Badau', 'Silat Hilir',
                'Silat Hulu', 'Putussibau Selatan', 'Kalis',
                'Boyan Tanjung', 'Mentebah', 'Pengkadan',
                'Suhaid', 'Puring Kencana'
            ],
            'KAB. BENGKAYANG' => [
                'Sungai Raya', 'Samalantan', 'Ledo',
                'Bengkayang', 'Seluas', 'Sanggau Ledo',
                'Jagoi Babang', 'Monterado', 'Teriak',
                'Suti Semarang', 'Capkala', 'Siding',
                'Lumar', 'Sungai Betung', 'Sungai Raya Kepulauan',
                'Lembah Bawang', 'Tujuh Belas'
            ],
            'KAB. LANDAK' => [
                'Ngabang', 'Mempawah Hulu', 'Menjalin',
                'Mandor', 'Air Besar', 'Menyuke',
                'Sengah Temila', 'Meranti', 'Kuala Behe',
                'Sebangki', 'Jelimpo', 'Banyuke Hulu',
                'Sompak'
            ],
            'KAB. SEKADAU' => [
                'Sekadau Hilir', 'Sekadau Hulu', 'Nanga Taman',
                'Nanga Mahap', 'Belitang Hilir', 'Belitang Hulu',
                'Belitang'
            ],
            'KAB. MELAWI' => [
                'Belimbing', 'Nanga Pinoh', 'Ella Hilir',
                'Menukung', 'Sayan', 'Tanah Pinoh',
                'Sokan', 'Pinoh Utara', 'Pinoh Selatan',
                'Belimbing Hulu', 'Tanah Pinoh Barat'
            ],
            'KAB. KAYONG UTARA' => [
                'Sukadana', 'Simpang Hilir', 'Teluk Batang',
                'Pulau Maya', 'Seponti', 'Kepulauan Karimata'
            ],
            'KAB. KUBU RAYA' => [
                'Sungai Raya', 'Kuala Mandor B', 'Sungai Ambawang',
                'Terentang', 'Batu Ampar', 'Kubu',
                'Rasau Jaya', 'Teluk Pakedai', 'Sungai Kakap'
            ],
            'PONTIANAK' => [
                'Pontianak Selatan', 'Pontianak Timur',
                'Pontianak Barat', 'Pontianak Utara',
                'Pontianak Kota', 'Pontianak Tenggara'
            ],
            'SINGKAWANG' => [
                'Singkawang Tengah', 'Singkawang Barat',
                'Singkawang Timur', 'Singkawang Utara',
                'Singkawang Selatan'
            ],
            'KAB. KOTAWARINGIN BARAT' => [
                'Kumai', 'Arut Selatan', 'Kotawaringin Lama',
                'Arut Utara', 'Pangkalan Lada', 'Pangkalan Banteng'
            ],
            'KAB. KOTAWARINGIN TIMUR' => [
                'Kota Besi', 'Cempaga', 'Mentaya Hulu',
                'Parenggean', 'Baamang', 'Mentawa Baru Ketapang',
                'Mentaya Hilir Utara', 'Mentaya Hilir Selatan',
                'Pulau Hanaut', 'Antang Kalang', 'Teluk Sampit',
                'Seranau', 'Cempaga Hulu', 'Telawang',
                'Bukit Santuai', 'Tualan Hulu', 'Telaga Antang'
            ],
            'KAB. KAPUAS' => [
                'Selat', 'Kapuas Hilir', 'Kapuas Timur',
                'Kapuas Kuala', 'Kapuas Barat', 'Pulau Petak',
                'Kapuas Murung', 'Basarang', 'Mantangai',
                'Timpah', 'Kapuas Tengah', 'Kapuas Hulu',
                'Tamban Catur', 'Pasak Talawang', 'Mandau Talawang',
                'Dadahup', 'Bataguh'
            ],
            'KAB. BARITO SELATAN' => [
                'Jenamas', 'Dusun Hilir', 'Karau Kuala',
                'Dusun Utara', 'Gn. Bintang Awai', 'Dusun Selatan'
            ],
            'KAB. BARITO UTARA' => [
                'Montallat', 'Gunung Timang', 'Gunung Purei',
                'Teweh Timur', 'Teweh Tengah', 'Lahei',
                'Teweh Baru', 'Teweh Selatan', 'Lahei Barat'
            ],
            'KAB. KATINGAN' => [
                'Kamipang', 'Katingan Hilir', 'Tewang Sangalang Garing',
                'Pulau Malan', 'Katingan Tengah', 'Sanaman Mantikei',
                'Marikit', 'Katingan Hulu', 'Mendawai',
                'Katingan Kuala', 'Tasik Payawan', 'Petak Malai',
                'Bukit Raya'
            ],
            'KAB. SERUYAN' => [
                'Seruyan Hilir', 'Seruyan Tengah', 'Danau Sembuluh',
                'Hanau', 'Seruyan Hulu', 'Seruyan Hilir Timur',
                'Seruyan Raya', 'Danau Seluluk', 'Batu Ampar',
                'Suling Tambun'
            ],
            'KAB. SUKAMARA' => [
                'Sukamara', 'Jelai', 'Balai Riam',
                'Pantai Lunci', 'Permata Kecubung'
            ],
            'KAB. LAMANDAU' => [
                'Lamandau', 'Delang', 'Bulik',
                'Bulik Timur', 'Menthobi Raya', 'Sematu Jaya',
                'Belantikan Raya', 'Batang Kawa'
            ],
            'KAB. GUNUNG MAS' => [
                'Sepang', 'Kurun', 'Tewah',
                'Kahayan Hulu Utara', 'Rungan', 'Manuhing',
                'Mihing Raya', 'Damang Batu', 'Miri Manasa',
                'Rungan Hulu', 'Manuhing Raya', 'Rungan Barat'
            ],
            'KAB. PULANG PISAU' => [
                'Pandih Batu', 'Kahayan Kuala', 'Kahayan Tengah',
                'Banama Tingang', 'Kahayan Hilir', 'Maliku',
                'Jabiren Raya', 'Sebangau Kuala'
            ],
            'KAB. MURUNG RAYA' => [
                'Murung', 'Tanah Siang', 'Laung Tuhup',
                'Permata Intan', 'Sumber Barito', 'Barito Tuhup Raya',
                'Tanah Siang Selatan', 'Sungai Babuat',
                'Seribu Riam', 'Uut Murung'
            ],
            'KAB. BARITO TIMUR' => [
                'Dusun Timur', 'Banua Lima', 'Patangkep Tutui',
                'Awang', 'Dusun Tengah', 'Pematang Karau',
                'Paju Epat', 'Raren Batuah', 'Paku',
                'Karusen Janang'
            ],
            'KAB. BARITO UTARA' => [
                'Montallat', 'Gunung Timang', 'Gunung Purei',
                'Teweh Timur', 'Teweh Tengah', 'Lahei',
                'Teweh Baru', 'Teweh Selatan', 'Lahei Barat'
            ],
            'KAB. KATINGAN' => [
                'Kamipang', 'Katingan Hilir', 'Tewang Sangalang Garing',
                'Pulau Malan', 'Katingan Tengah', 'Sanaman Mantikei',
                'Marikit', 'Katingan Hulu', 'Mendawai',
                'Katingan Kuala', 'Tasik Payawan', 'Petak Malai',
                'Bukit Raya'
            ],
            'KAB. SERUYAN' => [
                'Seruyan Hilir', 'Seruyan Tengah', 'Danau Sembuluh',
                'Hanau', 'Seruyan Hulu', 'Seruyan Hilir Timur',
                'Seruyan Raya', 'Danau Seluluk', 'Batu Ampar',
                'Suling Tambun'
            ],
            'KAB. SUKAMARA' => [
                'Sukamara', 'Jelai', 'Balai Riam',
                'Pantai Lunci', 'Permata Kecubung'
            ],
            'KAB. LAMANDAU' => [
                'Lamandau', 'Delang', 'Bulik',
                'Bulik Timur', 'Menthobi Raya', 'Sematu Jaya',
                'Belantikan Raya', 'Batang Kawa'
            ],
            'KAB. GUNUNG MAS' => [
                'Sepang', 'Kurun', 'Tewah',
                'Kahayan Hulu Utara', 'Rungan', 'Manuhing',
                'Mihing Raya', 'Damang Batu', 'Miri Manasa',
                'Rungan Hulu', 'Manuhing Raya', 'Rungan Barat'
            ],
            'KAB. PULANG PISAU' => [
                'Pandih Batu', 'Kahayan Kuala', 'Kahayan Tengah',
                'Banama Tingang', 'Kahayan Hilir', 'Maliku',
                'Jabiren Raya', 'Sebangau Kuala'
            ],
            'KAB. MURUNG RAYA' => [
                'Murung', 'Tanah Siang', 'Laung Tuhup',
                'Permata Intan', 'Sumber Barito', 'Barito Tuhup Raya',
                'Tanah Siang Selatan', 'Sungai Babuat', 'Seribu Riam',
                'Uut Murung'
            ],
            'KAB. BARITO TIMUR' => [
                'Dusun Timur', 'Banua Lima', 'Patangkep Tutui',
                'Awang', 'Dusun Tengah', 'Pematang Karau',
                'Paju Epat', 'Raren Batuah', 'Paku',
                'Karusen Janang'
            ],
            'PALANGKARAYA' => [
                'Pahandut', 'Bukit Batu', 'Jekan Raya',
                'Sabangau', 'Rakumpit'
            ],
            'KAB. TANAH LAUT' => [
                'Takisung', 'Jorong', 'Pelaihari',
                'Kurau', 'Bati Bati', 'Panyipatan',
                'Kintap', 'Tambang Ulang', 'Batu Ampar',
                'Bajuin', 'Bumi Makmur'
            ],
            'KAB. KOTABARU' => [
                'Pulau Sembilan', 'Pulau Laut Barat', 'Pulau Laut Selatan',
                'Pulau Laut Timur', 'Pulau Sebuku', 'Pulaulaut Utara',
                'Kelumpang Selatan', 'Kelumpang Hulu', 'Kelumpang Tengah',
                'Kelumpang Utara', 'Pamukan Selatan', 'Sampanahan',
                'Pamukan Utara', 'Hampang', 'Sungai Durian',
                'Pulau Laut Tengah', 'Kelumpang Hilir', 'Kelumpang Barat',
                'Pamukan Barat', 'Pulau Laut Kepulauan', 'Pulau Laut Tanjung Selayar',
                'Pulaulaut Sigam'
            ],
            'KAB. BANJAR' => [
                'Aluh Aluh', 'Kertak Hanyar', 'Gambut',
                'Sungai Tabuk', 'Martapura', 'Karang Intan',
                'Astambul', 'Simpang Empat', 'Pengaron',
                'Sungai Pinang', 'Aranio', 'Mataraman',
                'Beruntung Baru', 'Martapura Barat', 'Martapura Timur',
                'Sambung Makmur', 'Paramasan', 'Telaga Bauntung',
                'Tatah Makmur', 'Cintapuri Darussalam'
            ],
            'KAB. BARITO KUALA' => [
                'Tabunganen', 'Tamban', 'Anjir Pasar',
                'Anjir Muara', 'Alalak', 'Mandastana',
                'Rantau Badauh', 'Belawang', 'Cerbon',
                'Bakumpai', 'Kuripan', 'Tabukan',
                'Mekarsari', 'Barambai', 'Marabahan',
                'Wanaraya', 'Jejangkit'
            ],
            'KAB. TAPIN' => [
                'Binuang', 'Tapin Selatan', 'Tapin Tengah',
                'Tapin Utara', 'Candi Laras Selatan', 'Candi Laras Utara',
                'Bakarangan', 'Piani', 'Bungur',
                'Lokpaikat', 'Salam Babaris', 'Hatungun'
            ],
            'KAB. HULU SUNGAI SELATAN' => [
                'Sungai Raya', 'Padang Batung', 'Telaga Langsat',
                'Angkinang', 'Kandangan', 'Simpur',
                'Daha Selatan', 'Daha Utara', 'Kalumpang',
                'Loksado', 'Daha Barat'
            ],
            'KAB. HULU SUNGAI TENGAH' => [
                'Haruyan', 'Batu Benawa', 'Labuan Amas Selatan',
                'Labuan Amas Utara', 'Pandawan', 'Barabai',
                'Batang Alai Selatan', 'Batang Alai Utara', 'Hantakan',
                'Batang Alai Timur', 'Limpasu'
            ],
            'KAB. HULU SUNGAI UTARA' => [
                'Danau Panggang', 'Babirik', 'Sungai Pandan',
                'Amuntai Selatan', 'Amuntai Tengah', 'Amuntai Utara',
                'Banjang', 'Haur Gading', 'Paminggir',
                'Sungai Tabukan'
            ],
            'KAB. TABALONG' => [
                'Banua Lawas', 'Kelua', 'Tanta',
                'Tanjung', 'Haruai', 'Murung Pudak',
                'Muara Uya', 'Muara Harus', 'Pugaan',
                'Upau', 'Jaro', 'Bintang Ara'
            ],
            'KAB. TANAH BUMBU' => [
                'Batu Licin', 'Kusan Hilir', 'Sungai Loban',
                'Satui', 'Kusan Hulu', 'Simpang Empat',
                'Karang Bintang', 'Mantewe', 'Angsana',
                'Kuranji', 'Kusan Tengah', 'Teluk Kepayang'
            ],
            'KAB. BALANGAN' => [
                'Juai', 'Halong', 'Awayan',
                'Batu Mandi', 'Lampihong', 'Paringin',
                'Paringin Selatan', 'Tebing Tinggi'
            ],
            'BANJARMASIN' => [
                'Banjarmasin Selatan', 'Banjarmasin Timur', 'Banjarmasin Barat',
                'Banjarmasin Utara', 'Banjarmasin Tengah'
            ],
            'BANJARBARU' => [
                'Landasan Ulin', 'Cempaka', 'Banjarbaru Utara',
                'Banjarbaru Selatan', 'Liang Anggang'
            ],
            'KAB. PASER' => [
                'Batu Sopang', 'Tanjung Harapan', 'Paser Belengkong',
                'Tanah Grogot', 'Kuaro', 'Long Ikis',
                'Muara Komam', 'Long Kali', 'Batu Engau',
                'Muara Samu'
            ],
            'KAB. KUTAI KARTANEGARA' => [
                'Muara Muntai', 'Loa Kulu', 'Loa Janan',
                'Anggana', 'Muara Badak', 'Tenggarong',
                'Sebulu', 'Kota Bangun', 'Kenohan',
                'Kembang Janggut', 'Muara Kaman', 'Tabang',
                'Samboja', 'Muara Jawa', 'Sanga Sanga',
                'Tenggarong Seberang', 'Marang Kayu', 'Muara Wis',
                'Kota Bangun Darat', 'Semboja Barat'
            ],
            'KAB. BERAU' => [
                'Kelay', 'Talisayan', 'Sambaliung',
                'Segah', 'Tanjung Redeb', 'Gunung Tabur',
                'Pulau Derawan', 'Biduk-Biduk', 'Teluk Bayur',
                'Tabalar', 'Maratua', 'Batu Putih',
                'Biatan'
            ],
            'KAB. KUTAI BARAT' => [
                'Long Iram', 'Melak', 'Barong Tongkok',
                'Damai', 'Muara Lawa', 'Muara Pahu',
                'Jempang', 'Bongan', 'Penyinggahan',
                'Bentian Besar', 'Linggang Bigung', 'Nyuatan',
                'Siluq Ngurai', 'Mook Manaar Bulatn', 'Tering',
                'Sekolaq Darat'
            ],
            'KAB. KUTAI TIMUR' => [
                'Muara Ancalong', 'Muara Wahau', 'Muara Bengkal',
                'Sangatta Utara', 'Sangkulirang', 'Busang',
                'Telen', 'Kombeng', 'Bengalon',
                'Kaliorang', 'Sandaran', 'Sangatta Selatan',
                'Teluk Pandan', 'Rantau Pulung', 'Kaubun',
                'Karangan', 'Batu Ampar', 'Long Mesangat'
            ],
            'KAB. PENAJAM PASER UTARA' => [
                'Penajam', 'Waru', 'Babulu', 'Sepaku'
            ],
            'KAB. MAHAKAM ULU' => [
                'Long Bagun', 'Long Hubung', 'Laham',
                'Long Apari', 'Long Pahangai'
            ],
            'BALIKPAPAN' => [
                'Balikpapan Timur', 'Balikpapan Barat',
                'Balikpapan Utara', 'Balikpapan Tengah',
                'Balikpapan Selatan', 'Balikpapan Kota'
            ],
            'SAMARINDA' => [
                'Palaran', 'Samarinda Seberang', 'Samarinda Ulu',
                'Samarinda Ilir', 'Samarinda Utara', 'Sungai Kunjang',
                'Sambutan', 'Sungai Pinang', 'Samarinda Kota',
                'Loa Janan Ilir'
            ],
            'BONTANG' => [
                'Bontang Utara', 'Bontang Selatan', 'Bontang Barat'
            ],
            'KAB. BULUNGAN' => [
                'Tanjung Palas', 'Tanjung Palas Barat', 'Tanjung Palas Utara',
                'Tanjung Palas Timur', 'Tanjung Selor', 'Tanjung Palas Tengah',
                'Peso', 'Peso Hilir', 'Sekatak', 'Bunyu'
            ],
            'KAB. MALINAU' => [
                'Mentarang', 'Malinau Kota', 'Pujungan', 'Kayan Hilir',
                'Kayan Hulu', 'Malinau Selatan', 'Malinau Utara',
                'Malinau Barat', 'Sungai Boh', 'Kayan Selatan',
                'Bahau Hulu', 'Mentarang Hulu', 'Malinau Selatan Hilir',
                'Malinau Selatan Hulu', 'Sungai Tubu'
            ],
            'KAB. NUNUKAN' => [
                'Sebatik', 'Nunukan', 'Sembakung', 'Lumbis',
                'Krayan', 'Sebuku', 'Krayan Selatan', 'Sebatik Barat',
                'Nunukan Selatan', 'Sebatik Timur', 'Sebatik Utara',
                'Sebatik Tengah', 'Sei Menggaris', 'Tulin Onsoi',
                'Lumbis Ogong', 'Sembakung Atulai', 'Krayan Tengah',
                'Krayan Timur', 'Krayan Barat', 'Lumbis Pansiangan',
                'Lumbis Hulu'
            ],
            'KAB. TANA TIDUNG' => [
                'Sesayap', 'Sesayap Hilir', 'Tana Lia',
                'Betayau', 'Muruk Rian'
            ],
            'TARAKAN' => [
                'Tarakan Barat', 'Tarakan Tengah', 'Tarakan Timur',
                'Tarakan Utara'
            ],
            'KAB. BOLAANG MONGONDOW' => [
                'Sang Tombolang', 'Dumoga Barat', 'Dumoga Timur',
                'Dumoga Utara', 'Lolak', 'Bolaang', 'Lolayan',
                'Passi Barat', 'Poigar', 'Passi Timur', 'Bolaang Timur',
                'Bilalang', 'Dumoga', 'Dumoga Tenggara', 'Dumoga Tengah'
            ],
            'KAB. MINAHASA' => [
                'Tondano Barat', 'Tondano Timur', 'Eris', 'Kombi',
                'Lembean Timur', 'Kakas', 'Tompaso', 'Remboken',
                'Langowan Timur', 'Langowan Barat', 'Sonder', 'Kawangkoan',
                'Pineleng', 'Tombulu', 'Tombariri', 'Tondano Utara',
                'Langowan Selatan', 'Tondano Selatan', 'Langowan Utara',
                'Kakas Barat', 'Kawangkoan Utara', 'Kawangkoan Barat',
                'Mandolang', 'Tombariri Timur', 'Tompaso Barat'
            ],
            'KAB. KEPULAUAN SANGIHE' => [
                'Tabukan Utara', 'Nusa Tabukan', 'Manganitu Selatan',
                'Tatoareng', 'Tamako', 'Manganitu', 'Tabukan Tengah',
                'Tabukan Selatan', 'Kendahe', 'Tahuna',
                'Tabukan Selatan Tengah', 'Tabukan Selatan Tenggara',
                'Tahuna Barat', 'Tahuna Timur', 'Kepulauan Marore'
            ],
            'KAB. KEPULAUAN TALAUD' => [
                'Lirung', 'Beo', 'Rainis', 'Essang', 'Nanusa',
                'Kabaruan', 'Melonguane', 'Gemeh', 'Damau',
                'Tampan\' Amma', 'Salibabu', 'Kalongan', 'Miangas',
                'Beo Utara', 'Pulutan', 'Melonguane Timur', 'Moronge',
                'Beo Selatan', 'Essang Selatan'
            ],
            'KAB. MINAHASA SELATAN' => [
                'Modoinding', 'Tompaso Baru', 'Ranoyapo', 'Motoling',
                'Sinonsayang', 'Tenga', 'Amurang', 'Tumpaan',
                'Tareran', 'Kumelembuai', 'Maesaan', 'Amurang Barat',
                'Amurang Timur', 'Tatapaan', 'Motoling Barat',
                'Motoling Timur', 'Suluun Tareran'
            ],
            'KAB. MINAHASA UTARA' => [
                'Kema', 'Kauditan', 'Airmadidi', 'Wori',
                'Dimembe', 'Likupang Barat', 'Likupang Timur',
                'Kalawat', 'Talawaan', 'Likupang Selatan'
            ],
            'KAB. MINAHASA TENGGARA' => [
                'Ratahan', 'Pusomaen', 'Belang', 'Ratatotok',
                'Tombatu', 'Touluaan', 'Touluaan Selatan',
                'Silian Raya', 'Tombatu Timur', 'Tombatu Utara',
                'Pasan', 'Ratahan Timur'
            ],
            'KAB. BOLAANG MONGONDOW UTARA' => [
                'Sangkub', 'Bintauna', 'Bolangitang Timur',
                'Bolangitang Barat', 'Kaidipang', 'Pinogaluman'
            ],
            'KAB. KEP. SIAU TAGULANDANG BIARO' => [
                'Siau Timur', 'Siau Barat', 'Tagulandang',
                'Siau Timur Selatan', 'Siau Barat Selatan',
                'Tagulandang Utara', 'Biaro', 'Siau Barat Utara',
                'Siau Tengah', 'Tagulandang Selatan'
            ],
            'KAB. BOLAANG MONGONDOW TIMUR' => [
                'Tutuyan', 'Kotabunan', 'Nuangan', 'Modayag',
                'Modayag Barat', 'Motongkad', 'Mooat'
            ],
            'KAB. BOLAANG MONGONDOW SELATAN' => [
                'Bolaang Uki', 'Posigadan', 'Pinolosian',
                'Pinolosian Tengah', 'Pinolosian Timur',
                'Helumo', 'Tomini'
            ],
            'MANADO' => [
                'Bunaken', 'Tuminting', 'Singkil', 'Wenang',
                'Tikala', 'Sario', 'Wanea', 'Mapanget',
                'Malalayang', 'Bunaken Kepulauan', 'Paal Dua'
            ],
            'BITUNG' => [
                'Lembeh Selatan', 'Madidir', 'Ranowulu',
                'Aertembaga', 'Matuari', 'Girian',
                'Maesa', 'Lembeh Utara'
            ],
            'TOMOHON' => [
                'Tomohon Selatan', 'Tomohon Tengah', 'Tomohon Utara',
                'Tomohon Barat', 'Tomohon Timur'
            ],
            'KOTAMOBAGU' => [
                'Kotamobagu Utara', 'Kotamobagu Timur',
                'Kotamobagu Selatan', 'Kotamobagu Barat'
            ],
            'KAB. BANGGAI' => [
                'Batui', 'Bunta', 'Kintom', 'Luwuk',
                'Lamala', 'Balantak', 'Pagimana',
                'Bualemo', 'Toili', 'Masama',
                'Luwuk Timur', 'Toili Barat', 'Nuhon',
                'Moilong', 'Batui Selatan', 'Lobu',
                'Simpang Raya', 'Balantak Selatan',
                'Balantak Utara', 'Luwuk Selatan',
                'Luwuk Utara', 'Mantoh', 'Nambo'
            ],
            'KAB. POSO' => [
                'Poso Kota', 'Poso Pesisir', 'Lage',
                'Pamona Puselemba', 'Pamona Timur',
                'Pamona Selatan', 'Lore Utara',
                'Lore Tengah', 'Lore Selatan',
                'Poso Pesisir Utara', 'Poso Pesisir Selatan',
                'Pamona Barat', 'Poso Kota Selatan',
                'Poso Kota Utara', 'Lore Barat',
                'Lore Timur', 'Lore Piore',
                'Pamona Tenggara', 'Pamona Utara'
            ],
            'KAB. DONGGALA' => [
                'Rio Pakava', 'Dampelas', 'Banawa', 'Labuan',
                'Sindue', 'Sirenja', 'Balaesang', 'Sojol',
                'Banawa Selatan', 'Tanantovea', 'Pinembani',
                'Sindue Tombusabora', 'Sindue Tobata',
                'Banawa Tengah', 'Sojol Utara', 'Balaesang Tanjung'
            ],
            'KAB. TOLI TOLI' => [
                'Dampal Selatan', 'Dampal Utara', 'Dondo',
                'Basidondo', 'Ogodeide', 'Lampasio', 'Baolan',
                'Galang', 'Toli-Toli Utara', 'Dako Pemean'
            ],
            'KAB. BUOL' => [
                'Momunu', 'Lakea', 'Bokat', 'Bunobogu',
                'Paleleh', 'Biau', 'Tiloan', 'Bukal',
                'Gadung', 'Karamat', 'Paleleh Barat'
            ],
            'KAB. MOROWALI' => [
                'Bungku Tengah', 'Bungku Selatan', 'Menui Kepulauan',
                'Bungku Barat', 'Bumi Raya', 'Bahodopi',
                'Wita Ponda', 'Bungku Pesisir', 'Bungku Timur'
            ],
            'KAB. BANGGAI KEPULAUAN' => [
                'Totikum', 'Tinangkung', 'Liang', 'Bulagi',
                'Buko', 'Bulagi Selatan', 'Tinangkung Selatan',
                'Totikum Selatan', 'Peling Tengah', 'Bulagi Utara',
                'Buko Selatan', 'Tinangkung Utara'
            ],
            'KAB. PARIGI MOUTONG' => [
                'Parigi', 'Ampibabo', 'Tinombo', 'Moutong',
                'Tomini', 'Sausu', 'Bolano Lambunu', 'Kasimbar',
                'Torue', 'Tinombo Selatan', 'Parigi Selatan',
                'Mepanga', 'Toribulu', 'Taopa', 'Balinggi',
                'Parigi Barat', 'Siniu', 'Palasa',
                'Parigi Utara', 'Parigi Tengah', 'Bolano',
                'Ongka Malino', 'Sidoan'
            ],
            'KAB. TOJO UNA UNA' => [
                'Una Una', 'Togean', 'Walea Kepulauan', 'Ampana Tete',
                'Ampana Kota', 'Ulubongka', 'Tojo Barat', 'Tojo',
                'Walea Besar', 'Ratolindo', 'Batudaka', 'Talatako'
            ],
            'KAB. SIGI' => [
                'Sigi Biromaru', 'Palolo', 'Nokilalaki', 'Lindu',
                'Kulawi', 'Kulawi Selatan', 'Pipikoro', 'Gumbasa',
                'Dolo Selatan', 'Tanambulava', 'Dolo Barat',
                'Dolo', 'Kinovaro', 'Marawola', 'Marawola Barat'
            ],
            'KAB. BANGGAI LAUT' => [
                'Banggai', 'Banggai Utara', 'Bokan Kepulauan',
                'Bangkurung', 'Labobo', 'Banggai Selatan',
                'Banggai Tengah'
            ],
            'KAB. MOROWALI UTARA' => [
                'Petasia', 'Petasia Timur', 'Lembo Raya', 'Lembo',
                'Mori Atas', 'Mori Utara', 'Soyo Jaya',
                'Bungku Utara', 'Mamosalato', 'Petasia Barat'
            ],
            'PALU' => [
                'Palu Timur', 'Palu Barat', 'Palu Selatan',
                'Palu Utara', 'Ulujadi', 'Tatanga', 'Tawaeli',
                'Mantikulore'
            ],
            'KAB. KEPULAUAN SELAYAR' => [
                'Benteng', 'Bontoharu', 'Bontomatene', 'Bontomanai',
                'Bontosikuyu', 'Pasimasunggu', 'Pasimarannu',
                'Taka Bonerate', 'Pasilambena', 'Pasimasunggu Timur',
                'Buki'
            ],
            'KAB. BULUKUMBA' => [
                'Gantarang', 'Ujung Bulu', 'Bonto Bahari',
                'Bonto Tiro', 'Herlang', 'Kajang', 'Bulukumpa',
                'Kindang', 'Ujungloe', 'Rilauale'
            ],
            'KAB. BANTAENG' => [
                'Bissappu', 'Bantaeng', 'Eremerasa', 'Tompo Bulu',
                'Pajukukang', 'Uluere', 'Gantarang Keke', 'Sinoa'
            ],
            'KAB. JENEPONTO' => [
                'Bangkala', 'Tamalatea', 'Binamu', 'Batang',
                'Kelara', 'Bangkala Barat', 'Bontoramba',
                'Turatea', 'Arungkeke', 'Rumbia', 'Tarowang'
            ],
            'KAB. TAKALAR' => [
                'Mappakasunggu', 'Mangarabombang', 'Polongbangkeng Selatan',
                'Polongbangkeng Utara', 'Galesong Selatan', 'Galesong Utara',
                'Pattallassang', 'Sanrobone', 'Galesong',
                'Kepulauan Tanakeke', 'Polongbangkeng Timur', 'Laikang'
            ],
            'KAB. GOWA' => [
                'Bontonompo', 'Bajeng', 'Tompobulu', 'Tinggimoncong',
                'Parangloe', 'Bontomarannu', 'Pallangga', 'Somba Opu',
                'Bungaya', 'Tombolopao', 'Biringbulu', 'Barombong',
                'Pattallasang', 'Manuju', 'Bontolempangang',
                'Bontonompo Selatan', 'Parigi', 'Bajeng Barat'
            ],
            'KAB. SINJAI' => [
                'Sinjai Barat', 'Sinjai Selatan', 'Sinjai Timur',
                'Sinjai Tengah', 'Sinjai Utara', 'Bulupoddo',
                'Sinjai Borong', 'Tellu Limpoe', 'Pulau Sembilan'
            ],
            'KAB. BONE' => [
                'Bontocani', 'Kahu', 'Kajuara', 'Salomekko',
                'Tonra', 'Libureng', 'Mare', 'Sibulue',
                'Barebbo', 'Cina', 'Ponre', 'Lappariaja',
                'Lamuru', 'Ulaweng', 'Palakka', 'Awangpone',
                'Tellu Siattinge', 'Ajangale', 'Dua Boccoe',
                'Cenrana', 'Tanete Riattang', 'Tanete Riattang Barat',
                'Tanete Riattang Timur', 'Amali', 'Tellulimpoe',
                'Bengo', 'Patimpeng'
            ],
            'KAB. MAROS' => [
                'Mandai', 'Camba', 'Bantimurung', 'Maros Baru',
                'Bontoa', 'Malllawa', 'Tanralili', 'Marusu',
                'Simbang', 'Cenrana', 'Tompobulu', 'Lau',
                'Moncongloe', 'Turikale'
            ],

            'KAB. PANGKAJENE KEPULAUAN' => [
                'Liukang Tangaya', 'Liukang Kalmas', 'Liukang Tupabbiring',
                'Pangkajene', 'Balocci', 'Bungoro', 'Labakkang',
                'Marang', 'Segeri', 'Minasa Tene', 'Mandalle',
                'Tondong Tallasa', 'Liukang Tupabbiring Utara'
            ],
            'KAB. BARRU' => [
                'Tanete Riaja', 'Tanete Rilau', 'Barru',
                'Soppeng Riaja', 'Mallusetasi', 'Pujananting',
                'Balusu'
            ],
            'KAB. SOPPENG' => [
                'Marioriwawo', 'Liliraja', 'Lilirilau', 'Lalabata',
                'Marioriawa', 'Donri Donri', 'Ganra', 'Citta'
            ],
            'KAB. WAJO' => [
                'Sabangparu', 'Pammana', 'Takkalalla', 'Sajoanging',
                'Majauleng', 'Tempe', 'Belawa', 'Tanasitolo',
                'Maniangpajo', 'Pitumpanua', 'Bola', 'Penrang',
                'Gilireng', 'Keera'
            ],
            'KAB. SIDENRENG RAPPANG' => [
                'Panca Lautang', 'Tellu Limpoe', 'Watang Pulu',
                'Baranti', 'Panca Rijang', 'Kulo', 'Maritengngae',
                'Watang Sidenreng', 'Dua Pitue', 'Pitu Riawa',
                'Pitu Riase'
            ],
            'KAB. PINRANG' => [
                'Mattiro Sompe', 'Suppa', 'Mattiro Bulu',
                'Watang Sawitto', 'Patampanua', 'Duampanua',
                'Lembang', 'Cempa', 'Tiroang', 'Lanrisang',
                'Paleteang', 'Batulappa'
            ],
            'KAB. ENREKANG' => [
                'Maiwa', 'Enrekang', 'Baraka', 'Anggeraja',
                'Alla', 'Bungin', 'Cendana', 'Curio',
                'Malua', 'Buntu Batu', 'Masalle', 'Baroko'
            ],

            'KAB. LUWU' => [
                'Basse Sangtempe', 'Larompong', 'Suli', 'Bajo',
                'Bua Ponrang', 'Walenrang', 'Belopa', 'Bua',
                'Lamasi', 'Larompong Selatan', 'Ponrang',
                'Latimojong', 'Kamanre', 'Belopa Utara',
                'Walenrang Barat', 'Walenrang Utara',
                'Walenrang Timur', 'Lamasi Timur',
                'Suli Barat', 'Bajo Barat', 'Ponrang Selatan',
                'Basse Sangtempe Utara'
            ],
            'KAB. TANA TORAJA' => [
                'Saluputi', 'Bittuang', 'Bonggakaradeng',
                'Makale', 'Simbuang', 'Rantetayo',
                'Mengkendek', 'Sangalla', 'Gandangbatu Sillanan',
                'Rembon', 'Makale Utara', 'Mappak',
                'Makale Selatan', 'Masanda',
                'Sangalla Selatan', 'Sangalla Utara',
                'Malimbong Balepe', 'Rano', 'Kurra'
            ],
            'KAB. LUWU UTARA' => [
                'Malangke', 'Bone Bone', 'Masamba', 'Sabbang',
                'Rongkong', 'Sukamaju', 'Seko', 'Malangke Barat',
                'Rampi', 'Mappedeceng', 'Baebunta', 'Tana Lili',
                'Sukamaju Selatan', 'Baebunta Selatan', 'Sabbang Selatan'
            ],
            'KAB. LUWU TIMUR' => [
                'Mangkutana', 'Nuha', 'Towuti', 'Malili',
                'Angkona', 'Wotu', 'Burau', 'Tomoni',
                'Tomoni Timur', 'Kalaena', 'Wasuponda'
            ],
            'KAB. TORAJA UTARA' => [
                'Rantepao', 'Sesean', 'Nanggala', 'Rindingallo',
                'Buntao', 'Sa\'dan', 'Sanggalangi', 'Sopai',
                'Tikala', 'Balusu', 'Tallunglipu', 'Dende\' Piongan Napo',
                'Buntu Pepasan', 'Baruppu', 'Kesu', 'Tondon',
                'Bangkelekila', 'Rantebua', 'Sesean Suloara',
                'Kapala Pitu', 'Awan Rante Karua'
            ],
            'MAKASSAR' => [
                'Mariso', 'Mamajang', 'Makassar', 'Ujung Pandang',
                'Wajo', 'Bontoala', 'Tallo', 'Ujung Tanah',
                'Panakkukang', 'Tamalate', 'Biringkanaya',
                'Manggala', 'Rappocini', 'Tamalanrea',
                'Kepulauan Sangkarrang'
            ],
            'PARE PARE' => [
                'Bacukiki', 'Ujung', 'Soreang', 'Bacukiki Barat'
            ],
            'PALOPO' => [
                'Wara', 'Wara Utara', 'Wara Selatan', 'Telluwanua',
                'Wara Timur', 'Wara Barat', 'Sendana',
                'Mungkajang', 'Bara'
            ],
            'KAB. KOLAKA' => [
                'Wundulako', 'Kolaka', 'Pomalaa', 'Watubangga',
                'Wolo', 'Baula', 'Latambaga', 'Tanggetada',
                'Samaturu', 'Toari', 'Polinggona',
                'Iwoimendaa'
            ],
            'KAB. KONAWE' => [
                'Lambuya', 'Unaaha', 'Wawotobi', 'Pondidaha',
                'Sampara', 'Abuki', 'Soropia', 'Tongauna',
                'Latoma', 'Puriala', 'Uepai', 'Wonggeduku',
                'Besulutu', 'Bondoala', 'Routa', 'Anggaberi',
                'Meluhu', 'Amonggedo', 'Asinua', 'Konawe',
                'Kapoiala', 'Lalonggasumeeto', 'Onembute',
                'Padangguni', 'Morosi', 'Anggalomoare',
                'Wonggeduku Barat', 'Tongauna Utara'
            ],
            'KAB. MUNA' => [
                'Napabalano', 'Maligano', 'Wakorumba Selatan',
                'Lasalepa', 'Batalaiworu', 'Katobu', 'Duruka',
                'Lohia', 'Watopute', 'Kontunaga', 'Kabangka',
                'Kabawo', 'Parigi', 'Bone', 'Tongkuno',
                'Pasir Putih', 'Kontu Kowuna', 'Marobo',
                'Tongkuno Selatan', 'Pasi Kolaga',
                'Batukara', 'Towea'
            ],
            'KAB. BUTON' => [
                'Pasarwajo', 'Kapontori', 'Lasalimu',
                'Lasalimu Selatan', 'Siotapina', 'Wolowa', 'Wabula'
            ],
            'KAB. KONAWE SELATAN' => [
                'Tinanggea', 'Angata', 'Andoolo', 'Palangga',
                'Landono', 'Lainea', 'Konda', 'Ranomeeto',
                'Kolono', 'Moramo', 'Laonti', 'Lalembuu',
                'Benua', 'Palangga Selatan', 'Mowila',
                'Moramo Utara', 'Buke', 'Wolasi', 'Laeya',
                'Baito', 'Basala', 'Ranomeeto Barat',
                'Kolono Timur', 'Sabulakoa', 'Andoolo Barat'
            ],
            'KAB. BOMBANA' => [
                'Poleang', 'Poleang Timur', 'Rarowatu',
                'Rumbia', 'Kabaena', 'Kabaena Timur',
                'Poleang Barat', 'Mata Oleo', 'Rarowatu Utara',
                'Poleang Utara', 'Poleang Selatan',
                'Poleang Tenggara', 'Kabaena Selatan',
                'Kabaena Barat', 'Kabaena Utara',
                'Kabaena Tengah', 'Kep. Masaloka Raya',
                'Rumbia Tengah', 'Poleang Tengah',
                'Tontonunu', 'Lantari Jaya', 'Mata Usu'
            ],
            'KAB. WAKATOBI' => [
                'Wangi-Wangi', 'Kaledupa', 'Tomia',
                'Binongko', 'Wangi Wangi Selatan',
                'Kaledupa Selatan', 'Tomia Timur', 'Togo Binongko'
            ],
            'KAB. KOLAKA UTARA' => [
                'Lasusua', 'Pakue', 'Batu Putih', 'Rante Angin',
                'Kodeoha', 'Ngapa', 'Wawo', 'Lambai',
                'Watunohu', 'Pakue Tengah', 'Pakue Utara',
                'Porehu', 'Katoi', 'Tiwu', 'Tolala'
            ],
            'KAB. KONAWE UTARA' => [
                'Asera', 'Wiwirano', 'Langgikima', 'Molawe',
                'Lasolo', 'Lembo', 'Sawa', 'Oheo',
                'Andowia', 'Motui', 'Wawolesea',
                'Lasolo Kepulauan', 'Landawe'
            ],
            'KAB. BUTON UTARA' => [
                'Kulisusu', 'Kambowa', 'Bonegunu',
                'Kulisusu Barat', 'Kulisusu Utara',
                'Wakorumba Utara'
            ],
            'KAB. KOLAKA TIMUR' => [
                'Tirawuta', 'Loea', 'Ladongi', 'Poli Polia',
                'Lambandia', 'Lalolae', 'Mowewe',
                'Uluiwoi', 'Tinondo', 'Aere',
                'Ueesi', 'Dangia'
            ],
            'KAB. KONAWE KEPULAUAN' => [
                'Wawonii Barat', 'Wawonii Utara',
                'Wawonii Timur Laut', 'Wawonii Timur',
                'Wawonii Tenggara', 'Wawonii Selatan',
                'Wawonii Tengah'
            ],
            'KAB. MUNA BARAT' => [
                'Sawerigadi', 'Barangka', 'Lawa',
                'Wadaga', 'Tiworo Selatan', 'Maginti',
                'Tiworo Tengah', 'Tiworo Utara',
                'Tiworo Kepulauan', 'Kusambi',
                'Napano Kusambi'
            ],
            'KAB. BUTON TENGAH' => [
                'Lakudo', 'Mawasangka Timur', 'Mawasangka Tengah',
                'Mawasangka', 'Talaga Raya', 'Gu',
                'Sangia Wambulu'
            ],
            'KAB. BUTON SELATAN' => [
                'Batauga', 'Sampolawa', 'Lapandewa',
                'Batu Atas', 'Siompu Barat', 'Siompu', 'Kadatua'
            ],

            'KENDARI' => [
                'Mandonga', 'Kendari', 'Baruga', 'Poasia',
                'Kendari Barat', 'Abeli', 'Wua-Wua', 'Kadia',
                'Puuwatu', 'Kambu', 'Nambo'
            ],

            'BAU BAU' => [
                'Betoambari', 'Wolio', 'Sorawolio', 'Bungi',
                'Kokalukuna', 'Murhum', 'Lea-Lea', 'Batupoaro'
            ],

            'KAB. GORONTALO' => [
                'Limboto', 'Telaga', 'Batudaa', 'Tibawa',
                'Batudaa Pantai', 'Boliyohuto', 'Telaga Biru',
                'Bongomeme', 'Tolangohula', 'Mootilango',
                'Pulubala', 'Limboto Barat', 'Tilango',
                'Tabongo', 'Biluhu', 'Asparaga', 'Talaga Jaya',
                'Bilato', 'Dungaliyo'
            ],

            'KAB. BOALEMO' => [
                'Paguyaman', 'Wonosari', 'Dulupi', 'Tilamuta',
                'Mananggu', 'Botumoito', 'Paguyaman Pantai'
            ],

            'KAB. BONE BOLANGO' => [
                'Tapa', 'Kabila', 'Suwawa', 'Bonepantai',
                'Bulango Utara', 'Tilongkabila', 'Botupingge',
                'Kabila Bone', 'Bone', 'Bone Raya',
                'Suwawa Timur', 'Suwawa Selatan',
                'Suwawa Tengah', 'Bulango Ulu',
                'Bulango Selatan', 'Bulango Timur',
                'Bulawa', 'Pinogu'
            ],

            'KAB. POHUWATO' => [
                'Popayato', 'Lemito', 'Randangan', 'Marisa',
                'Paguat', 'Patilanggio', 'Taluditi', 'Dengilo',
                'Buntulia', 'Duhiadaa', 'Wanggarasi',
                'Popayato Timur', 'Popayato Barat'
            ],

            'KAB. GORONTALO UTARA' => [
                'Atinggola', 'Kwandang', 'Anggrek', 'Sumalata',
                'Tolinggula', 'Gentuma Raya', 'Tomolito',
                'Ponelo Kepulauan', 'Monano', 'Biau',
                'Sumalata Timur'
            ],

            'GORONTALO' => [
                'Kota Barat', 'Kota Selatan', 'Kota Utara',
                'Dungingi', 'Kota Timur', 'Kota Tengah',
                'Sipatana', 'Dumbo Raya', 'Hulonthalangi'
            ],

            'KAB. PASANGKAYU' => [
                'Bambalamotu', 'Pasangkayu', 'Baras',
                'Sarudu', 'Dapurang', 'Duripoku',
                'Bulu Taba', 'Tikke Raya', 'Pedongga',
                'Bambaira', 'Sarjo', 'Lariang'
            ],

            'KAB. MAMUJU' => [
                'Mamuju', 'Tapalang', 'Kalukku', 'Kalumpang',
                'Papalang', 'Sampaga', 'Tommo',
                'Simboro dan Kepulauan', 'Tapalang Barat',
                'Bonehau', 'Kep. Bala Balakang'
            ],

            'KAB. MAMASA' => [
                'Mambi', 'Aralle', 'Mamasa', 'Pana',
                'Tabulahan', 'Sumarorong', 'Messawa',
                'Sesenapadang', 'Tanduk Kalua',
                'Tabang', 'Bambang', 'Balla',
                'Nosu', 'Tawalian', 'Rantebulahan Timur',
                'Buntumalangka', 'Mehalaan'
            ],

            'KAB. POLEWALI MANDAR' => [
                'Tinambung', 'Campalagian', 'Wonomulyo',
                'Polewali', 'Tutar', 'Binuang', 'Tapango',
                'Mapilli', 'Matangnga', 'Luyo', 'Limboro',
                'Balanipa', 'Anreapi', 'Matakali', 'Allu', 'Bulo'
            ],

            'KAB. MAJENE' => [
                'Banggae', 'Pamboang', 'Sendana', 'Malunda',
                'Ulumanda', 'Tammerodo Sendana', 'Tubo Sendana',
                'Banggae Timur'
            ],

            'KAB. MAMUJU TENGAH' => [
                'Tobadak', 'Pangale', 'Budong-Budong', 'Topoyo',
                'Karossa'
            ],

            'KAB. MALUKU TENGAH' => [
                'Amahai', 'Teon Nila Serua', 'Seram Utara',
                'Banda', 'Tehoru', 'Saparua', 'Pulau Haruku',
                'Salahutu', 'Leihitu', 'Nusa Laut', 'Kota Masohi',
                'Seram Utara Barat', 'Teluk Elpaputih', 'Leihitu Barat',
                'Telutih', 'Seram Utara Timur Seti',
                'Seram Utara Timur Kobi', 'Saparua Timur'
            ],

            'KAB. MALUKU TENGGARA' => [
                'Kei Kecil', 'Kei Besar', 'Kei Besar Selatan',
                'Kei Besar Utara Timur', 'Kei Kecil Timur',
                'Kei Kecil Barat', 'Manyeuw', 'Hoat Sorbay',
                'Kei Besar Utara Barat', 'Kei Besar Selatan Barat',
                'Kei Kecil Timur Selatan'
            ],

            'KAB. KEPULAUAN TANIMBAR' => [
                'Tanimbar Selatan', 'Selaru', 'Wertamrian',
                'Wermaktian', 'Tanimbar Utara', 'Fordata',
                'Wuar Labobar', 'Kormomolin', 'Nirunmas',
                'Molu Maru'
            ],

            'KAB. BURU' => [
                'Namlea', 'Air Buaya', 'Waeapo', 'Waplau',
                'Batabual', 'Lolong Guba', 'Waelata',
                'Fena Leisela', 'Teluk Kaiely', 'Lilialy'
            ],

            'KAB. SERAM BAGIAN TIMUR' => [
                'Bula', 'Seram Timur', 'Werinama',
                'Pulau Gorom', 'Wakate', 'Tutuk Tolu',
                'Siwalalat', 'Kilmury', 'Pulau Panjang',
                'Teor', 'Gorom Timur', 'Bula Barat',
                'Kian Darat', 'Siritaun Wida Timur', 'Teluk Waru'
            ],

            'KAB. SERAM BAGIAN BARAT' => [
                'Kairatu', 'Seram Barat', 'Taniwel',
                'Huamual Belakang', 'Amalatu', 'Inamosol',
                'Kairatu Barat', 'Huamual', 'Kepulauan Manipa',
                'Taniwel Timur', 'Elpaputih'
            ],

            'KAB. KEPULAUAN ARU' => [
                'Pulau-Pulau Aru', 'Aru Selatan', 'Aru Tengah',
                'Aru Utara', 'Aru Utara Timur Batuley',
                'Sir-Sir', 'Aru Tengah Timur', 'Aru Tengah Selatan',
                'Aru Selatan Timur', 'Aru Selatan Utara'
            ],

            'KAB. MALUKU BARAT DAYA' => [
                'Moa Lakor', 'Damer', 'Mndona Hiera',
                'Pulau-Pulau Babar', 'Pulau-pulau Babar Timur',
                'Wetar', 'Pulau-pulau Terselatan', 'Pulau Leti',
                'Pulau Masela', 'Dawelor Dawera',
                'Pulau Wetang', 'Pulau Lakor',
                'Wetar Utara', 'Wetar Barat',
                'Wetar Timur', 'Kepulauan Romang',
                'Kisar Utara'
            ],

            'KAB. BURU SELATAN' => [
                'Namrole', 'Waesama', 'Ambalau',
                'Kepala Madan', 'Leksula', 'Fena Fafan'
            ],

            'AMBON' => [
                'Nusaniwe', 'Sirimau', 'Baguala',
                'Teluk Ambon', 'Leitimur Selatan'
            ],

            'TUAL' => [
                'Pulau Dullah Utara', 'Pulau Dullah Selatan',
                'Tayando Tam', 'Pulau-Pulau Kur',
                'Kur Selatan'
            ],

            'KAB. HALMAHERA BARAT' => [
                'Jailolo', 'Loloda', 'Ibu',
                'Sahu', 'Jailolo Selatan', 'Ibu Utara',
                'Ibu Selatan', 'Sahu Timur',
                'Loloda Tengah'
            ],

            'KAB. HALMAHERA TENGAH' => [
                'Weda', 'Patani', 'Pulau Gebe',
                'Weda Utara', 'Weda Selatan',
                'Patani Utara', 'Weda Tengah',
                'Patani Barat', 'Weda Timur',
                'Patani Timur'
            ],

            'KAB. HALMAHERA UTARA' => [
                'Galela', 'Tobelo', 'Tobelo Selatan',
                'Kao', 'Malifut', 'Loloda Utara',
                'Tobelo Utara', 'Tobelo Tengah',
                'Tobelo Timur', 'Tobelo Barat',
                'Galela Barat', 'Galela Utara',
                'Galela Selatan', 'Loloda Kepulauan',
                'Kao Utara', 'Kao Barat', 'Kao Teluk'
            ],

            'KAB. HALMAHERA SELATAN' => [
                'Pulau Makian', 'Kayoa', 'Gane Timur',
                'Gane Barat', 'Obi Selatan',
                'Obi', 'Bacan Timur', 'Bacan',
                'Bacan Barat', 'Makian Barat',
                'Kayoa Barat', 'Kayoa Selatan',
                'Kayoa Utara', 'Bacan Barat Utara',
                'Kasiruta Barat', 'Kasiruta Timur',
                'Bacan Selatan', 'Kepulauan Botanglomang',
                'Mandioli Selatan', 'Mandioli Utara',
                'Bacan Timur Selatan', 'Bacan Timur Tengah',
                'Gane Barat Selatan', 'Gane Barat Utara',
                'Kepulauan Joronga', 'Gane Timur Selatan',
                'Gane Timur Tengah', 'Obi Barat',
                'Obi Timur', 'Obi Utara'
            ],

            'KAB. KEPULAUAN SULA' => [
                'Mangoli Timur', 'Sanana', 'Sulabesi Barat',
                'Mangoli Barat', 'Sulabesi Tengah',
                'Sulabesi Timur', 'Sulabesi Selatan',
                'Mangoli Utara Timur', 'Mangoli Tengah',
                'Mangoli Selatan', 'Mangoli Utara',
                'Sanana Utara'
            ],

            'KAB. HALMAHERA TIMUR' => [
                'Wasile', 'Maba', 'Maba Selatan',
                'Wasile Selatan', 'Wasile Tengah',
                'Wasile Utara', 'Wasile Timur',
                'Maba Tengah', 'Maba Utara',
                'Kota Maba'
            ],

            'KAB. PULAU MOROTAI' => [
                'Morotai Selatan', 'Morotai Selatan Barat',
                'Morotai Jaya', 'Morotai Utara',
                'Morotai Timur', 'Pulau Rao'
            ],

            'KAB. PULAU TALIABU' => [
                'Taliabu Barat', 'Taliabu Barat Laut',
                'Lede', 'Taliabu Utara',
                'Taliabu Timur', 'Taliabu Timur Selatan',
                'Taliabu Selatan', 'Tabona'
            ],

            'TERNATE' => [
                'Pulau Ternate', 'Kota Ternate Selatan',
                'Kota Ternate Utara', 'Moti',
                'Pulau Batang Dua', 'Kota Ternate Tengah',
                'Pulau Hiri', 'Ternate Barat'
            ],

            'TIDORE KEPULAUAN' => [
                'Tidore', 'Oba Utara', 'Oba',
                'Tidore Selatan', 'Tidore Utara',
                'Oba Tengah', 'Oba Selatan',
                'Tidore Timur'
            ],

            'KAB. JAYAPURA' => [
                'Sentani', 'Sentani Timur', 'Depapre',
                'Sentani Barat', 'Kemtuk',
                'Kemtuk Gresi', 'Nimboran',
                'Nimbokrang', 'Unurum Guay',
                'Demta', 'Kaureh', 'Ebungfao',
                'Waibu', 'Nambluong', 'Yapsi',
                'Airu', 'Raveni Rara', 'Gresi Selatan',
                'Yokari'
            ],

            'KAB. KEPULAUAN YAPEN' => [
                'Yapen Selatan', 'Yapen Barat',
                'Yapen Timur', 'Angkaisera',
                'Poom', 'Kosiwo', 'Yapen Utara',
                'Raimbawi', 'Teluk Ampimoi',
                'Kepulauan Ambai', 'Wonawa',
                'Windesi', 'Pulau Kurudu',
                'Pulau Yerui', 'Anotaurei',
                'Yawakukat', 'Nusawani'
            ],
            'KAB. BIAK NUMFOR' => [
                'Biak Kota', 'Biak Utara', 'Biak Timur',
                'Numfor Barat', 'Numfor Timur', 'Biak Barat',
                'Warsa', 'Padaido', 'Yendidori', 'Samofa',
                'Yawosi', 'Andey', 'Swandiwe', 'Bruyadori',
                'Orkeri', 'Poiru', 'Aimando Padaido', 'Oridek',
                'Bondifuar'
            ],
            'KAB. SARMI' => [
                'Sarmi', 'Tor Atas', 'Pantai Barat',
                'Pantai Timur', 'Bonggo', 'Apawer Hulu',
                'Sarmi Selatan', 'Sarmi Timur', 'Pantai Timur Bagian Barat',
                'Bonggo Timur'
            ],
            'KAB. KEEROM' => [
                'Waris', 'Arso', 'Senggi', 'Web',
                'Skanto', 'Arso Timur', 'Towe', 'Arso Barat',
                'Mannem', 'Yaffi', 'Kaisenar'
            ],
            'KAB. WAROPEN' => [
                'Waropen Bawah', 'Masirei', 'Risei Sayati',
                'Urei Faisei', 'Inggerus', 'Kirihi',
                'Oudate', 'Wapoga', 'Demba', 'Wonti',
                'Soyoi Mambai'
            ],
            'KAB. SUPIORI' => [
                'Supiori Selatan', 'Supiori Utara', 'Supiori Timur',
                'Kepulauan Aruri', 'Supiori Barat'
            ],
            'KAB. MAMBERAMO RAYA' => [
                'Mamberamo Tengah', 'Mamberamo Hulu', 'Rufaer',
                'Mamberamo Tengah Timur', 'Mamberamo Hilir',
                'Waropen Atas', 'Benuki', 'Sawai'
            ],
            'JAYAPURA' => [
                'Jayapura Utara', 'Jayapura Selatan', 'Abepura',
                'Muara Tami', 'Heram'
            ],
            'KAB. SORONG' => [
                'Makbon', 'Beraur', 'Salawati', 'Seget',
                'Aimas', 'Klamono', 'Sayosa', 'Segun',
                'Mayamuk', 'Salawati Selatan', 'Klabot',
                'Klawak', 'Maudus', 'Mariat', 'Klayili',
                'Klaso', 'Moisegen', 'Sorong', 'Bagun',
                'Wemak', 'Sunook', 'Buk', 'Saengkeduk',
                'Malabotom', 'Konhir', 'Klasafet', 'Hobard',
                'Salawati Tengah', 'Botain', 'Sayosa Timur'
            ],
            'KAB. MANOKWARI' => [
                'Warmare', 'Prafi', 'Masni', 'Manokwari Barat',
                'Manokwari Timur', 'Manokwari Utara', 'Manokwari Selatan',
                'Tanah Rubuh', 'Sidey'
            ],
            'KAB. FAK FAK' => [
                'Fak-Fak', 'Fak-Fak Barat', 'Fak-Fak Timur',
                'Kokas', 'Fak-Fak Tengah', 'Karas',
                'Bomberay', 'Kramongmongga', 'Teluk Patipi',
                'Pariwari', 'Wartutin', 'Fakfak Timur Tengah',
                'Arguni', 'Mbahamdandara', 'Kayauni',
                'Furwagi', 'Tomage'
            ],
            'KAB. SORONG SELATAN' => [
                'Teminabuan', 'Inanwatan', 'Sawiat',
                'Kokoda', 'Moswaren', 'Seremuk', 'Wayer',
                'Kais', 'Konda', 'Matemani', 'Kokoda Utara',
                'Saifi', 'Fokour', 'Salkma', 'Kais Darat'
            ],
            'KAB. RAJA AMPAT' => [
                'Misool (Misool Utara)', 'Waigeo Utara', 'Waigeo Selatan',
                'Salawati Utara', 'Kepulauan Ayau', 'Misool Timur',
                'Waigeo Barat', 'Waigeo Timur', 'Teluk Mayalibit',
                'Kofiau', 'Meos Mansar', 'Misool Selatan',
                'Warwarbomi', 'Waigeo Barat Kepulauan', 'Misool Barat',
                'Kepulauan Sembilan', 'Kota Waisai', 'Tiplol Mayalibit',
                'Batanta Utara', 'Salawati Barat', 'Salawati Tengah',
                'Supnin', 'Ayau', 'Batanta Selatan'
            ],
            'KAB. TELUK BINTUNI' => [
                'Bintuni', 'Merdey', 'Babo', 'Aranday',
                'Moskona Selatan', 'Moskona Utara', 'Wamesa',
                'Fafurwar', 'Tembuni', 'Kuri', 'Manimeri',
                'Tuhiba', 'Dataran Beimes', 'Sumuri',
                'Kaitaro', 'Aroba', 'Masyeta', 'Biscoop',
                'Tomu', 'Kamundan', 'Weriagar', 'Moskona Barat',
                'Meyado', 'Moskona Timur'
            ],
            'KAB. TELUK WONDAMA' => [
                'Wasior', 'Windesi', 'Teluk Duairi',
                'Wondiboy', 'Wamesa', 'Rumberpon',
                'Naikere', 'Rasiei', 'Kuri Wamesa',
                'Roon', 'Roswar', 'Nikiwar', 'Soug Jaya'
            ],
            'KAB. KAIMANA' => [
                'Kaimana', 'Buruway', 'Teluk Arguni Atas',
                'Teluk Etna', 'Kambrau', 'Teluk Arguni Bawah',
                'Yamor'
            ],
            'KAB. TAMBRAUW' => [
                'Fef', 'Miyah', 'Yembun', 'Kwoor',
                'Sausapor', 'Abun', 'Syujak', 'Moraid',
                'Kebar', 'Amberbaken', 'Senopi', 'Mubrani',
                'Bikar', 'Bamusbama', 'Ases', 'Miyah Selatan',
                'Ireres', 'Tobouw', 'Wilhem Roumbouts',
                'Tinggouw', 'Kwesefo', 'Mawabuan',
                'Kebar Timur', 'Kebar Selatan', 'Manekar',
                'Mpur', 'Amberbaken Barat', 'Kasi',
                'Selemkai'
            ],
            'KAB. MAYBRAT' => [
                'Aifat', 'Aifat Utara', 'Aifat Timur',
                'Aifat Selatan', 'Aitinyo Barat', 'Aitinyo',
                'Aitinyo Utara', 'Ayamaru', 'Ayamaru Utara',
                'Ayamaru Timur', 'Mare', 'Aifat Timur Tengah',
                'Aifat Timur Jauh', 'Aifat Timur Selatan',
                'Ayamaru Selatan', 'Ayamaru Jaya',
                'Ayamaru Selatan Jaya', 'Ayamaru Timur Selatan',
                'Ayamaru Utara Timur', 'Ayamaru Tengah',
                'Ayamaru Barat', 'Aitinyo Tengah',
                'Aitinyo Raya', 'Mare Selatan'
            ],
            'KAB. MANOKWARI SELATAN' => [
                'Ransiki', 'Oransbari', 'Neney',
                'Dataran Isim', 'Momi Waren', 'Tahota'
            ],
            'KAB. PEGUNUNGAN ARFAK' => [
                'Anggi', 'Anggi Gida', 'Membey',
                'Sururey', 'Didohu', 'Taige',
                'Catubouw', 'Testega', 'Minyambaouw',
                'Hingk'
            ],
            'SORONG' => [
                'Sorong', 'Sorong Timur', 'Sorong Barat',
                'Sorong Kepulauan', 'Sorong Utara',
                'Sorong Manoi', 'Sorong Kota',
                'Klaurung', 'Malaimsimsa', 'Maladum Mes'
            ],
            'KAB. MERAUKE' => [
                'Merauke', 'Muting', 'Okaba',
                'Kimaam', 'Semangga', 'Tanah Miring',
                'Jagebob', 'Sota', 'Ulilin',
                'Elikobal', 'Kurik', 'Naukenjerai',
                'Animha', 'Malind', 'Tubang',
                'Ngguti', 'Kaptel', 'Tabonji',
                'Waan', 'Ilwayab', 'Padua',
                'Kontuar'
            ],
            'KAB. BOVEN DIGOEL' => [
                'Mandobo', 'Mindiptana', 'Waropko',
                'Kouh', 'Jair', 'Bomakia',
                'Kombut', 'Iniyandit', 'Arimop',
                'Fofi', 'Ambatkwi', 'Manggelum',
                'Firiwage', 'Yaniruma', 'Subur',
                'Kombay', 'Ninati', 'Sesnuk',
                'Ki', 'Kawagit'
            ],
            'KAB. MAPPI' => [
                'Obaa', 'Mambioman Bapai', 'Citak-Mitak',
                'Edera', 'Haju', 'Assue',
                'Kaibar', 'Passue', 'Minyamur',
                'Venaha', 'Syahcame', 'Yakomi',
                'Bamgi', 'Passue Bawah', 'Ti Zain'
            ],
            'KAB. ASMAT' => [
                'Agats', 'Atsj', 'Sawa Erma',
                'Akat', 'Fayit', 'Pantai Kasuari',
                'Suator', 'Suru-suru', 'Kolf Braza',
                'Unir Sirau', 'Joerat', 'Pulau Tiga',
                'Jetsy', 'Der Koumur', 'Kopay',
                'Safan', 'Sirets', 'Ayip',
                'Betcbamu', 'Joutu', 'Aswi',
                'Awyu', 'Koroway Buluanop', 'Tomor Birip',
                'Sor Ep'
            ],
            'KAB. NABIRE' => [
                'Nabire', 'Napan', 'Yaur',
                'Uwapa', 'Wanggar', 'Siriwo',
                'Makimi', 'Teluk Umar', 'Teluk Kimi',
                'Yaro', 'Wapoga', 'Nabire Barat',
                'Moora', 'Dipa', 'Menou'
            ],
            'KAB. PUNCAK JAYA' => [
                'Mulia', 'Ilu', 'Fawi',
                'Mewoluk', 'Yamo', 'Nume',
                'Torere', 'Tingginambut', 'Pagaleme',
                'Gurage', 'Irimuli', 'Muara',
                'Ilamburawi', 'Yambi', 'Lumo',
                'Molanikime', 'Dokome', 'Kalome',
                'Wanwi', 'Yamoneri', 'Waegi',
                'Nioga', 'Gubume', 'Taganombak',
                'Dagai', 'Kiyage'
            ],
            'KAB. PANIAI' => [
                'Paniai Timur', 'Paniai Barat', 'Aradide',
                'Bogabaida', 'Bibida', 'Dumadama',
                'Siriwo', 'Kebo', 'Yatamo',
                'Ekadide', 'Wegee Muka', 'Wegee Bino',
                'Pugo Dagi', 'Muye', 'Nakama',
                'Teluk Deya', 'Yagai', 'Youtadi',
                'Baya Biru', 'Deiyai Miyo', 'Dogomo',
                'Aweida', 'Topiyai', 'Fajar Timur'
            ],
            'KAB. MIMIKA' => [
                'Mimika Baru', 'Agimuga', 'Mimika Timur',
                'Mimika Barat', 'Jita', 'Jila',
                'Mimika Timur Jauh', 'Mimika Tengah',
                'Kuala Kencana', 'Tembagapura',
                'Mimika Barat Jauh', 'Mimika Barat Tengah',
                'Kwamki Narama', 'Hoya', 'Iwaka',
                'Wania', 'Amar', 'Alama'
            ],
            'KAB. PUNCAK' => [
                'Ilaga', 'Wangbe', 'Beoga', 'Doufo', 'Pogoma', 'Sinak',
                'Agandugume', 'Gome', 'Dervos', 'Beoga Barat', 'Beoga Timur',
                'Ogamanim', 'Kembru', 'Bina', 'Sinak Barat', 'Mage\'abume',
                'Yugumuak', 'Ilaga Utara', 'Mabugi', 'Omukia', 'Lambewi',
                'Oneri', 'Amungkalpia', 'Gome Utara', 'Erelmakawia'
            ],
            'KAB. DOGIYAI' => [
                'Kamu', 'Mapia', 'Piyaiye', 'Kamu Utara', 'Sukikai Selatan',
                'Mapia Barat', 'Kamu Selatan', 'Kamu Timur', 'Mapia Tengah',
                'Dogiyai'
            ],
            'KAB. INTAN JAYA' => [
                'Sugapa', 'Homeyo', 'Wandai', 'Biandoga', 'Agisiga',
                'Hitadipa', 'Ugimba', 'Tomosiga'
            ],
            'KAB. DEIYAI' => [
                'Tigi', 'Tigi Timur', 'Bowobado', 'Tigi Barat', 'Kapiraya'
            ],
            'KAB. JAYAWIJAYA' => [
                'Wamena', 'Kurulu', 'Asologaima', 'Hubikosi', 'Bolakme',
                'Walelagama', 'Musatfak', 'Wolo', 'Asolokobal', 'Pelebaga',
                'Yalengga', 'Trikora', 'Napua', 'Walaik', 'Wouma',
                'Hubikiak', 'Ibele', 'Taelarek', 'Itlay Hisage', 'Siepkosi',
                'Usilimo', 'Wita Waya', 'Libarek', 'Wadangku', 'Pisugi',
                'Koragi', 'Tagime', 'Molagalome', 'Tagineri', 'Silo Karno Doga',
                'Piramid', 'Muliama', 'Bugi', 'Bpiri', 'Welesi', 'Asotipo',
                'Maima', 'Popugoba', 'Wame', 'Wesaput'
            ],
            'KAB. PEGUNUNGAN BINTANG' => [
                'Oksibil', 'Kiwirok', 'Okbibab', 'Iwur', 'Batom', 'Borme',
                'Kiwirok Timur', 'Aboy', 'Pepera', 'Bime', 'Alemsom',
                'Okbape', 'Kalomdol', 'Oksop', 'Serambakon', 'Ok Aom',
                'Kawor', 'Awinbon', 'Tarup', 'Okhika', 'Oksamol',
                'Oklip', 'Okbemtau', 'Oksebang', 'Okbab', 'Batani',
                'Weime', 'Murkim', 'Mofinop', 'Jetfa', 'Teiraplu',
                'Eipumek', 'Pamek', 'Nongme'
            ],
            'KAB. YAHUKIMO' => [
                'Kurima', 'Anggruk', 'Ninia', 'Silimo', 'Samenage',
                'Nalca', 'Dekai', 'Obio', 'Suru Suru', 'Wusama',
                'Amuma', 'Musaik', 'Pasema', 'Hogio', 'Mugi',
                'Soba', 'Werima', 'Tangma', 'Ukha', 'Panggema',
                'Kosarek', 'Nipsan', 'Ubahak', 'Pronggoli', 'Walma',
                'Yahuliambut', 'Hereapini', 'Ubalihi', 'Talambo',
                'Puldama', 'Endomen', 'Kona', 'Dirwemna', 'Holuon',
                'Lolat', 'Soloikma', 'Sela', 'Korupun', 'Langda',
                'Bomela', 'Suntamon', 'Seradala', 'Sobaham', 'Kabianggama',
                'Kwelamdua', 'Kwikma', 'Hilipuk', 'Duram', 'Yogosem',
                'Kayo', 'Sumo'
            ],
            'KAB. TOLIKARA' => [
                'Karubaga', 'Bokondini', 'Kanggime', 'Kembu', 'Goyage',
                'Wunim', 'Wina', 'Umagi', 'Panaga', 'Woniki',
                'Kubu', 'Konda/ Kondaga', 'Nelawi', 'Kuari', 'Bokoneri',
                'Bewani', 'Nabunage', 'Gilubandu', 'Nunggawi', 'Gundagi',
                'Numba', 'Timori', 'Dundu', 'Geya', 'Egiam',
                'Poganeri', 'Kamboneri', 'Airgaram', 'Wari/Taiyeve II',
                'Dow', 'Tagineri', 'Yuneri', 'Wakuwo', 'Gika',
                'Telenggeme', 'Anawi', 'Wenam', 'Wugi', 'Danime',
                'Tagime', 'Kai', 'Aweku', 'Bogonuk', 'Li Anogomma',
                'Biuk', 'Yuko'
            ],
            'KAB. MAMBERAMO TENGAH' => [
                'Kobakma', 'Kelila', 'Eragayam', 'Megambilis', 'Ilugwa'
            ],
            'KAB. YALIMO' => [
                'Elelim', 'Apalapsili', 'Abenaho', 'Benawa', 'Welarek'
            ],
            'KAB. LANNY JAYA' => [
                'Tiom', 'Pirime', 'Makki', 'Gamelia', 'Dimba',
                'Melagineri', 'Balingga', 'Tiomneri', 'Kuyawage', 'Poga',
                'Niname', 'Nogi', 'Yiginua', 'Tiom Ollo', 'Yugungwi',
                'Mokoni', 'Wereka', 'Milimbo', 'Wiringgambut', 'Gollo',
                'Awina', 'Ayumnati', 'Wano Barat', 'Goa Balim', 'Bruwa',
                'Balingga Barat', 'Gupura', 'Kolawa', 'Gelok Beam',
                'Kuly Lanny', 'Lannyna', 'Karu', 'Yiluk', 'Guna',
                'Kelulome', 'Nikogwe', 'Muara', 'Buguk Gona', 'Melagi'
            ],
            'KAB. NDUGA' => [
                'Kenyam', 'Mapenduma', 'Yigi', 'Wosak', 'Geselma',
                'Mugi', 'Mbuwa', 'Gearek', 'Koroptak', 'Kegayem',
                'Paro', 'Mebarok', 'Yenggelo', 'Kilmid', 'Alama',
                'Yal', 'Mam', 'Dal', 'Nirkuri', 'Inikgal',
                'Iniye', 'Mbulmu Yalma', 'Mbua Tengah', 'Embetpen',
                'Kora', 'Wusi', 'Pija', 'Moba', 'Wutpaga',
                'Nenggeagin', 'Krepkuri', 'Pasir Putih'
            ],
            'KAB. TOBA' => [
                'Balige', 'Laguboti', 'Lumban Julu', 'Silaen', 'Habinsaran', 
                'Tampahan', 'Nassau', 'Paringgonan'
            ],
            'KAB. BENGKULU SELATAN' => [
                'Manna', 'Pasar Manna', 'Kota Manna', 'Pino', 'Bunga Mas', 
                'Tanjung Alam', 'Sumber Urip'
            ],
            'KAB. KEPAHIANG' => [
                'Kepahiang', 'Ujan Mas', 'Tebat Karai', 'Seberang Musi', 
                'Tebat Monok', 'Lembak', 'Gunung Sugih'
            ],
            'KAB. SUMEDANG' => [
                'Sumedang Selatan', 'Sumedang Utara', 'Cisarua', 'Jatinangor', 
                'Darmaraja', 'Cibugel', 'Tanjung Sari'
            ],
            'KAB. JEMBER' => [
                'Jember', 'Ajung', 'Kaliwates', 'Pakusari', 'Sumberjambe', 
                'Puger', 'Silo', 'Ambulu'
            ]

        ];


        //Provinsi
        $province_ids = [];
        foreach ($provinces as $province => $image) {
            $existing_province = Region::where('name', $province)->first();
            if ($existing_province) {
                    $existing_province->update([
                        'image' => $image
                    ]);
                    $province_ids[$province] = $existing_province->id;
                }else{
                    $province_create = Region::create([
                        'parent_id' => 0,
                        'type' => 'province',
                        'name' => $province,
                        'image' => $image,
                    ]);
                    $province_ids[$province] = $province_create->id;
            }
        }

        // Regency
        $regency_ids = [];
        foreach ($provinces as $province => $image) {
            if (isset($regencys[$province])) {                
                foreach ($regencys[$province] as $regency) {
                    $existing_regency = Region::where('name', $regency)->where('parent_id', $province_ids[$province])->first();
                    if(!$existing_regency){
                        $regency_create = Region::create([
                            'parent_id' => $province_ids[$province],
                            'type' => 'regencys',
                            'name' => $regency,
                        ]);
                        $regency_ids[$regency] = $regency_create->id;
                    }else{
                        $regency_ids[$regency] = $existing_regency->id;

                    }


                }
            }
        }

            // District
          foreach ($regencys as $province => $regency_list) {
            foreach ($regency_list as $regency) {
                if (!isset($regency_ids[$regency])) {
                    continue;
                }                        
                if (isset($sub_districts[$regency])) {
                    foreach ($sub_districts[$regency] as $sub_district) {
                        $existing_sub_district = Region::where('name', $sub_district)->where('parent_id', $regency_ids[$regency])->first();
                        if(!$existing_sub_district){
                            Region::create([
                                'parent_id' => $regency_ids[$regency],
                                'type' => 'sub_district',
                                'name' => $sub_district,
                            ]);
                        }
                    }
                }
            }
        }

    }
}
