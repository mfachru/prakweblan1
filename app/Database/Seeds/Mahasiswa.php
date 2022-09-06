<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
        [ 
            'npm' => '2057051002',   
            'nama'    => 'M. Thoriq Al Fajri',
            'alamat' => 'Kota Jambi',
            'created_at' => Time::now()
        ],
        [ 
            'npm' => '2017051075',   
            'nama'    => 'Riyo Pratama Juliyansa',
            'alamat' => 'Krui',
            'created_at' => Time::now()
        ],        
        [ 
            'npm' => '2017051087',   
            'nama'    => 'Muhammad Fachru Syahputra',
            'alamat' => 'Padang Cermin',
            'created_at' => Time::now()
        ],
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO mahasiswa (npm, nama, alamat, created_at) VALUES(:npm:, :nama:, :alamat:, :created_at:)', $data);

        // Using Query Builder
        foreach($data_mahasiswa as $data){
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
