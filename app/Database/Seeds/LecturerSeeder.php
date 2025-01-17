<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class LecturerSeeder extends Seeder
{
    public function run()
    {
        // Inisialisasi Faker
        $faker = Factory::create();

        // Array untuk menyimpan data faker
        $data = [];
        
        // Menghasilkan 100 data dosen palsu
        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'name'      => $faker->name,                           // Nama dosen acak
                'email'     => $faker->unique()->email,                // Email acak, unik
                'department'=> $faker->word,                            // Department acak
                'created_at'=> $faker->dateTimeThisYear->format('Y-m-d H:i:s'), // Waktu pembuatan acak
                'updated_at'=> $faker->dateTimeThisYear->format('Y-m-d H:i:s'), // Waktu pembaruan acak
            ];
        }

        // Memasukkan data ke tabel lecturers
        $this->db->table('lecturers')->insertBatch($data);
    }
}