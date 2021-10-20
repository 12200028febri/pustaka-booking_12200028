<?php

namespace App\Database\Seeds;

use App\Models\Pengguna12200028;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder12200028 extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'febri',
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

        $p = new Pengguna12200028();
        $p->insertBatch($data);
    }
}