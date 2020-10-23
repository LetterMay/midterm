<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
                'user_id'     => 1,
                'acct_name'   => 'Lettermay Mulles Regular Account',
                'init_invest' => 510000,
                'start_date'  => '2020-01-29',
                'remarks'     => 'Done with the transaction'
            ],
            [
                'user_id'     => 2,
                'acct_name'   => 'Mary Bagsoling Regular Account',
                'init_invest' => 12500,
                'start_date'  => '2016-05-30',
                'remarks'     => 'Done with the transaction'
            ],
            [
                'user_id'     => 3,
                'acct_name'   => 'NJ Tamayo  Regular Account',
                'init_invest' => 15000,
                'start_date'  => '2020-12-13',
                'remarks'     => 'Done with the transaction'
            ]
        ];

        foreach($data as $acc) {
            \App\Accounts::create($acc);
        }
    }
}
