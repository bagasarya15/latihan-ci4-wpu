<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class PenjualanSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'nama'          => 'Yupi',
        //         'harga'         => '1000,-',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now(),
        //     ],
        //     $data = [
        //         'nama'          => 'Coki-Coki',
        //         'harga'         => '1000,-',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now(),
        //     ],
        //     $data = [
        //         'nama'          => 'Calpico',
        //         'harga'         => '2000,-',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now(),
        //     ]
        // ];
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 40; $i++) {
            $data = [
                'customer'      => $faker->name,
                'nama_produk'   => $faker->text,
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ];
            $this->db->table('penjualan')->insert($data);
        }
        // Simple Queries
        // $this->db->query("INSERT INTO penjualan (nama, harga, created_at, updated_at) VALUES(:nama:, :harga:, :created_at:, :updated_at:)", $data);

        // Using Query Builder
        // $this->db->table('penjualan')->insertBatch($data);
    }
}
