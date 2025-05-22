<?php

use App\Course;
use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Course = [
            [
                'id' => 1,
                'name' => 'Agama',
                'SKS' => 2
            ],
            [
                'id' => 2,
                'name' => 'Algoritma Struktur Data',
                'SKS' => 3
            ],
            [
                'id' => 3,
                'name' => 'Sistem Operasi',
                'SKS' => 3
            ],
            [
                'id' => 4,
                'name' => 'Pancasila',
                'SKS' => 2
            ],
             [
                'id' => 5,
                'name' => 'Aljabar Linier',
                'SKS' => 3
            ],
            [
                'id' => 6,
                'name' => 'Kewarganegaraan',
                'SKS' => 2
            ],
             [
                'id' => 7,
                'name' => 'Bahasa Indonesia',
                'SKS' => 2
            ],
            [
                'id' => 8,
                'name' => 'Pembangunan Aplikasi Platform Khusus',
                'SKS' => 3
            ],
             [
                'id' => 9,
                'name' => 'Pengantar Rekayasa dan Desain',
                'SKS' => 2
            ],
            [
                'id' => 10,
                'name' => 'Keteknowiraan',
                'SKS' => 3
            ],
            [
                'id' => 11,
                'name' => 'Bahasa Inggris II',
                'SKS' => 2
            ],
            [
                'id' => 12,
                'name' => 'Fisika Dasar IIB',
                'SKS' => 3
            ],
            [
                'id' => 13,
                'name' => 'Desain Pengalaman Pengguna',
                'SKS' => 3
            ],
            [
                'id' => 14,
                'name' => 'Proyek Akhir Tahun I',
                'SKS' => 3
            ],
             [
                'id' => 15,
                'name' => 'Matematika Diskrit',
                'SKS' => 3
            ],
            [
                'id' => 16,
                'name' => 'Pengujian dan Kualitas Perangkat Lunak',
                'SKS' => 3
            ],
             [
                'id' => 17,
                'name' => 'Aplikasi Terdistribusi & Layanan Virtual',
                'SKS' => 3
            ],
            [
                'id' => 18,
                'name' => 'Keamanan Perangkat Lunak',
                'SKS' => 3
            ],
             [
                'id' => 19,
                'name' => 'Sistem Komputasi Awan',
                'SKS' => 2
            ],
            [
                'id' => 20,
                'name' => 'Proyek Akhir Tahun II',
                'SKS' => 3
            ],
            [
                'id' => 21,
                'name' => 'Kecerdasan Buatan',
                'SKS' => 3
            ],
             [
                'id' => 22,
                'name' => 'Tata Kelola Teknologi Informasi',
                'SKS' => 3
            ],
            [
                'id' => 23,
                'name' => 'Socio - Informatika dan Profesionalisme',
                'SKS' => 2
            ],
             [
                'id' => 24,
                'name' => 'Tugas Akhir',
                'SKS' => 6
            ],
            [
                'id' => 25,
                'name' => 'Antar Jaringan',
                'SKS' => 3
            ],
             [
                'id' => 26,
                'name' => 'Pemrograman Sistem',
                'SKS' => 3
            ],
            [
                'id' => 27,
                'name' => 'Perangkat Lunak Sistem Jaringan',
                'SKS' => 3
            ],
             [
                'id' => 28,
                'name' => 'Sistem Terdistribusi',
                'SKS' => 3
            ],
            [
                'id' => 29,
                'name' => 'Tugas Akhir II',
                'SKS' => 1
            ],
            [
                'id' => 30,
                'name' => 'Analisis Kebutuhan Perangkat Lunak',
                'SKS' => 3
            ],
            [
                'id' => 31,
                'name' => 'Pengembangan Situs Web II',
                'SKS' => 3
            ],
            [
                'id' => 32,
                'name' => 'Pengenalan Basis Data',
                'SKS' => 3
            ],
            [
                'id' => 33,
                'name' => 'Proyek Akhir Tahun I',
                'SKS' => 3
            ],
            [
                'id' => 34,
                'name' => 'Pengembangan Aplikasi Terdistribusi',
                'SKS' => 3
            ],
            [
                'id' => 35,
                'name' => 'Pengembangan Aplikasi Mobile',
                'SKS' => 3
            ],
            [
                'id' => 36,
                'name' => 'Proyek Akhir Tahun II',
                'SKS' => 3
            ],
            [
                'id' => 37,
                'name' => 'Pengujian Perangkat Lunak',
                'SKS' => 3
            ],
            [
                'id' => 38,
                'name' => 'Probabilitas dan Statistik',
                'SKS' => 3
            ],
            [
                'id' => 39,
                'name' => 'Keteknowiraan',
                'SKS' => 3
            ],
            [
                'id' => 40,
                'name' => 'Matematika Dasar II',
                'SKS' => 4
            ],
            [
                'id' => 41,
                'name' => 'Pemodelan dan Simulasi (+P)',
                'SKS' => 3
            ],
            [
                'id' => 42,
                'name' => 'Bahasa Inggris II',
                'SKS' => 2
            ],
            [
                'id' => 43,
                'name' => 'Pemograman Prosedural (+P)',
                'SKS' => 3
            ],
            [
                'id' => 44,
                'name' => 'Algoritma dan Struktur Data (+P)',
                'SKS' => 4
            ],
            [
                'id' => 45,
                'name' => 'Logika Informatika',
                'SKS' => 3
            ],
            [
                'id' => 46,
                'name' => 'Interaksi Manusia Komputer',
                'SKS' => 3
            ],
            [
                'id' => 47,
                'name' => 'Pengembangan Aplikasi Mobile (+P)',
                'SKS' => 4
            ],
            [
                'id' => 48,
                'name' => 'Pembelajaran Mesin (+P)',
                'SKS' => 3
            ],
            [
                'id' => 49,
                'name' => 'Proyek Perangkat Lunak (+P)',
                'SKS' => 4
            ],
            [
                'id' => 50,
                'name' => 'Sistem Paralel dan Terdistribusi',
                'SKS' => 3
            ],
            [
                'id' => 51,
                'name' => 'Pembangunan Aplikasi Platform Khusus',
                'SKS' => 3
            ],
            [
                'id' => 52,
                'name' => 'Keamanan Jaringan Siber',
                'SKS' => 3
            ],
            [
                'id' => 53,
                'name' => 'Visi Komputer',
                'SKS' => 3
            ],
            [
                'id' => 54,
                'name' => 'Arsitektur dan Organisasi Komputer',
                'SKS' => 3
            ],
            [
                'id' => 55,
                'name' => 'Basis Data (+P)',
                'SKS' => 3
            ],
            [
                'id' => 56,
                'name' => 'Analisis dan Perancangan Sistem',
                'SKS' => 4
            ],
            [
                'id' => 57,
                'name' => 'Pemrograman Berorientasi Objek',
                'SKS' => 3
            ],
            [
                'id' => 58,
                'name' => 'Gudang Data dan Kecerdasan Bisnis',
                'SKS' => 4
            ],
            [
                'id' => 59,
                'name' => 'Proyek Sistem Informasi',
                'SKS' => 4
            ],
            [
                'id' => 60,
                'name' => 'Metodologi Penelitian dan Penulisan Ilmiah',
                'SKS' => 2
            ],
            [
                'id' => 61,
                'name' => 'Penambangan Data',
                'SKS' => 4
            ],
            [
                'id' => 62,
                'name' => 'Sertifikasi Profesi',
                'SKS' => 3
            ],
            [
                'id' => 63,
                'name' => 'Sistem Temu Balik Informasi',
                'SKS' => 3
            ],
            [
                'id' => 64,
                'name' => 'Fisika Dasar IIA',
                'SKS' => 4
            ],
            [
                'id' => 65,
                'name' => 'Pengantar Analisis Rangkaian',
                'SKS' => 2
            ],
            [
                'id' => 66,
                'name' => 'Praktikum Sistem Instumentasi',
                'SKS' => 1
            ],
            [
                'id' => 67,
                'name' => 'Elektronika I',
                'SKS' => 3
            ],
            [
                'id' => 68,
                'name' => 'Praktikum Elektronika I',
                'SKS' => 3
            ],
            [
                'id' => 69,
                'name' => 'Matematika Teknik II',
                'SKS' => 3
            ],
            [
                'id' => 70,
                'name' => 'Elektromagnetik',
                'SKS' => 2
            ],
            [
                'id' => 71,
                'name' => 'Teknik Visualisasi Interaktif',
                'SKS' => 3
            ],
            [
                'id' => 72,
                'name' => 'Pengolahan Sinyal Digital',
                'SKS' => 3
            ],
            [
                'id' => 73,
                'name' => 'Praktikum Pengolahan Sinyal Digital',
                'SKS' => 1
            ],
            [
                'id' => 74,
                'name' => 'Sistem Mikrokontroler',
                'SKS' => 3
            ],
            [
                'id' => 75,
                'name' => 'Praktikum Sistem Mikrokontroler',
                'SKS' => 1
            ],
            [
                'id' => 76,
                'name' => 'Sistem Kendali',
                'SKS' => 3
            ],
            [
                'id' => 77,
                'name' => 'Praktikum Sistem Kendali',
                'SKS' => 1
            ],
            [
                'id' => 78,
                'name' => 'Komputasi Awan',
                'SKS' => 3
            ],
            [
                'id' => 79,
                'name' => 'Praktikum Komputasi Awan',
                'SKS' => 1
            ],
            [
                'id' => 80,
                'name' => 'Kecerdasan Buatan (+P)',
                'SKS' => 3
            ],
            [
                'id' => 81,
                'name' => 'Etika Profesional',
                'SKS' => 2
            ],
            [
                'id' => 82,
                'name' => 'Analisis Dampak Lingkungan',
                'SKS' => 2
            ],
            [
                'id' => 83,
                'name' => 'Pengolahan Citra Digital',
                'SKS' => 3
            ],
            [
                'id' => 84,
                'name' => 'Energi Terbarukan',
                'SKS' => 3
            ],
            [
                'id' => 85,
                'name' => 'Kristalografi dan Mineralogi',
                'SKS' => 2
            ],
            [
                'id' => 86,
                'name' => 'Menggambar Teknik',
                'SKS' => 2
            ],
            [
                'id' => 87,
                'name' => 'Fisika Dasar IIB',
                'SKS' => 3
            ],
            [
                'id' => 88,
                'name' => 'Pengantar Kimia Lanjut',
                'SKS' => 3
            ],
            [
                'id' => 89,
                'name' => 'Pengolahan Mineral dan Batubara',
                'SKS' => 4
            ],
            [
                'id' => 90,
                'name' => 'Perhitungan Metalurgi Proses',
                'SKS' => 3
            ],
            [
                'id' => 91,
                'name' => 'Kinetika Metalurgi',
                'SKS' => 2
            ],
            [
                'id' => 92,
                'name' => 'Fenomena Transport Metalurgi',
                'SKS' => 3
            ],
            [
                'id' => 93,
                'name' => 'Transformasi Fasa & Perlakuan Panas',
                'SKS' => 3
            ],
            [
                'id' => 94,
                'name' => 'Teknik Tenaga Listrik',
                'SKS' => 3
            ],
            [
                'id' => 95,
                'name' => 'Kekuatan material',
                'SKS' => 2
            ],
            [
                'id' => 96,
                'name' => 'Kimia Dasar B',
                'SKS' => 3
            ],
            [
                'id' => 97,
                'name' => 'Fisika Dasar IIB',
                'SKS' => 3
            ],
            [
                'id' => 98,
                'name' => 'Visualisasi dan Gambar Teknik',
                'SKS' => 3
            ],
            [
                'id' => 99,
                'name' => 'Matematika Lanjut',
                'SKS' => 3
            ],
            [
                'id' => 100,
                'name' => 'Statistika Inferensi',
                'SKS' => 3
            ],
            [
                'id' => 101,
                'name' => 'Penelitian Operasional 1',
                'SKS' => 3
            ],
            [
                'id' => 102,
                'name' => 'Praktikum Sistem Produksi 2',
                'SKS' => 1
            ],
            [
                'id' => 103,
                'name' => 'Ekonomi Manajerial',
                'SKS' => 3
            ],
            [
                'id' => 104,
                'name' => 'Dasar-Dasar Rekayasa Faktor Manusia',
                'SKS' => 3
            ],
            [
                'id' => 105,
                'name' => 'Pengenalan Sistem Informasi dan Basis Data',
                'SKS' => 3
            ],
            [
                'id' => 106,
                'name' => 'Rekayasa Mutu',
                'SKS' => 3
            ],
            [
                'id' => 107,
                'name' => 'Metodologi Penelitian',
                'SKS' => 3
            ],
            [
                'id' => 108,
                'name' => 'Analisis dan Visualisasi Data',
                'SKS' => 3
            ],
            [
                'id' => 109,
                'name' => 'Kimia Organik',
                'SKS' => 3
            ],
            [
                'id' => 110,
                'name' => 'Praktikum Kimia Organik',
                'SKS' => 1
            ],
            [
                'id' => 111,
                'name' => 'Mikrobiologi Umum',
                'SKS' => 2
            ],
            [
                'id' => 112,
                'name' => 'Termodinamika Kimiawi',
                'SKS' => 3
            ],
            [
                'id' => 113,
                'name' => 'Analisis Instrumental',
                'SKS' => 2
            ],
            [
                'id' => 114,
                'name' => 'Operasi Fisik Pendukung I',
                'SKS' => 3
            ],
            [
                'id' => 115,
                'name' => 'Fenomena Transpor',
                'SKS' => 3
            ],
            [
                'id' => 116,
                'name' => 'Metabolisme Mikroba',
                'SKS' => 3
            ],
            [
                'id' => 117,
                'name' => 'Utilitas dan Pengolahan Limbah',
                'SKS' => 3
            ],
            [
                'id' => 118,
                'name' => 'Teknologi Enzim',
                'SKS' => 3
            ],
            [
                'id' => 119,
                'name' => 'Genetika dan Biologi Molekuler',
                'SKS' => 2
            ],
            [
                'id' => 120,
                'name' => 'Pengenalan Basis Data dan Sistem Informasi',
                'SKS' => 2
            ],
            [
                'id' => 121,
                'name' => 'Laboratorium Teknik Bioproses',
                'SKS' => 3
            ],
            [
                'id' => 122,
                'name' => 'Teknik Reaktor Bioproses',
                'SKS' => 3
            ],
            [
                'id' => 123,
                'name' => 'Analisis Keekonomian Proyek Bioproses',
                'SKS' => 3
            ],
            [
                'id' => 124,
                'name' => 'Perancangan Alat',
                'SKS' => 2
            ],
            [
                'id' => 125,
                'name' => 'Operasi Fisik Pendukung III',
                'SKS' => 3
            ],
            [
                'id' => 126,
                'name' => 'Bioteknologi Lingkungan',
                'SKS' => 2
            ],
            [
                'id' => 127,
                'name' => 'Perancangan Pabrik',
                'SKS' => 3
            ],
            [
                'id' => 128,
                'name' => 'Sistem Biologi',
                'SKS' => 2
            ],
            [
                'id' => 129,
                'name' => 'Sidang Sarjana',
                'SKS' => 1
            ],
            [
                'id' => 130,
                'name' => 'Pengantar Bahan Lunak',
                'SKS' => 3
            ],
            

        ];

        Course::insert($Course);
    }
}
