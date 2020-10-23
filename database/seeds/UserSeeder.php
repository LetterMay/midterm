<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
            $data = [
                [
                    'lname'    => 'May',
                    'fname'    => 'Lettermay Mulles',
                    'address'  => 'Genonocan, Tubigon, Bohol',
                    'phone'    => '09231550732',
                    'email'    => 'mullesmay@gmail.com',
                    'password' => bcrypt('mulles0520')
                ],
                [
                    'lname'    => 'Mary',
                    'fname'    => 'Mary Bagsoling',
                    'address'  => 'Ubojan, Tubigon, Bohol',
                    'phone'    => '09051668829',
                    'email'    => 'marybag@gmail.com',
                    'password' => bcrypt('mary123')
                ],
                [
                    'lname'    => 'Tamayo',
                    'fname'    => 'NJ',
                    'address'  => 'Lumbang, Consolacion, Cebu',
                    'phone'    => '09550732691',
                    'email'    => 'niñajoneza@gmail.com',
                    'password' => bcrypt('joneza569')
                ]
            ];
            foreach($data as $user){
                \App\User::create($user);
            }
    }
}
