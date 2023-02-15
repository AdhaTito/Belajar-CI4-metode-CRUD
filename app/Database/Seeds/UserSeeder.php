<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'nama' => 'Adha Mastito',
        //         'email'    => 'adhamastito55@gmail.com',
        //         'create_at' => Time::now(),
        //         'update_at' => Time::now()
        //     ],
        //     [
        //         'nama' => 'Adha Tito',
        //         'email'    => 'adhatito@gmail.com',
        //         'create_at' => Time::now(),
        //         'update_at' => Time::now()
        //     ],
        //     [
        //         'nama' => 'Zitcheron',
        //         'email'    => 'zitcheron@gmail.com',
        //         'create_at' => Time::now(),
        //         'update_at' => Time::now()
        //     ]
        // ];
        // Fake database menggunakan Faker
        for ($i = 0; $i < 2; $i++) {
            $faker = \Faker\Factory::create('id_ID');
            $data = [
                'nama'      => $faker->name,
                'email'     => $faker->email,
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now()
            ];
            $this->db->table('user')->insert($data);
        }

        // Simple Queries
        // $this->db->query('INSERT INTO user (nama, email, create_at, update_at) VALUES(:nama:, :email:, :create_at:, :update_at:)', $data);

        // Using Query Builder
        // $this->db->table('user')->insertBatch($data);
    }
}
