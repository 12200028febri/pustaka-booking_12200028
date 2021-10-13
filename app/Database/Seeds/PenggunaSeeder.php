<?php

namespace App\Database\Seeds;

use App\Models\Pengguna;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'febri alviansyah',
                'password'  => md5('12200028')
            ],
            [
                'nama'      => 'admin',
                'password'  => md5('12345')
            ],
            [
                'nama'      => '12200028',
                'password'  => md5('febri_alviansyah')
            ]
        ];

        $p = new Pengguna();
        $p->insertBatch($data);
    }
}