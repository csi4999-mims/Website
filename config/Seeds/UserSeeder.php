<?php

use Phinx\Seed\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

class UserSeeder extends AbstractSeed
{
    public function run()
    {
        $faker = Faker\Factory::create();
        $password_hasher = new DefaultPasswordHasher;

        $data = [];

        for ($i = 0; $i < 20; $i++) {
            $data[] = [
                'FirstName' => $faker->firstName,
                'LastName'  => $faker->lastName,
                'password'  => $password_hasher->hash('password'),
                'email'     => $faker->email,
                'phone'     => (string)mt_rand(100000000000000, 999999999999999),
                'role'      => $faker->randomElement(['thepublic', 'lawenforcement']),
            ];
        }

        $this->insert('users', $data);
    }
}
