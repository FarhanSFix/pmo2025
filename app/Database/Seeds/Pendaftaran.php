<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pendaftaran extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Nandang',
                'email' => 'nandang@gmail.com',
                'no_telpon' => '08961',
                'jenis_kelamin' => 'Pria',
                'bahasa' => 'Indonesia,Inggris,Arab,Sunda,Jawa',
                'agama' => 'Islam',
                'tanggal_daftar' => '2024-01-01',
                'jam_daftar' => '08:30:45',
            ],
            [
                'nama' => 'Hernanto',
                'email' => 'hernanto@gmail.com',
                'no_telpon' => '08962',
                'jenis_kelamin' => 'Pria',
                'bahasa' => 'Indonesia,Inggris,Arab',
                'agama' => 'Islam',
                'tanggal_daftar' => '2024-02-21',
                'jam_daftar' => '09:30:45',
            ],
            [
                'nama' => 'Nandang Hernanto',
                'email' => 'nandanghernanto@gmail.com',
                'no_telpon' => '08963',
                'jenis_kelamin' => 'Pria',
                'bahasa' => 'Indonesia,Inggris,Arab,Sunda',
                'agama' => 'Islam',
                'tanggal_daftar' => '2024-03-04',
                'jam_daftar' => '10:35:45',
            ],
        ];

        $this->db->table('pendaftaran')->insertBatch($data);
    }

}
