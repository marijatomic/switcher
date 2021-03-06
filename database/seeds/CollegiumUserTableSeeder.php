<?php

use App\CollegiumUser;
use Illuminate\Database\Seeder;

class CollegiumUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collegiumusers = [
            [
                'user_id' => 1,
                'collegium_id' => 1,
            ],
            [
                'user_id' => 2,
                'collegium_id' => 2,
            ]
        ];
        foreach ($collegiumusers as $collegiumuser)
            CollegiumUser::create($collegiumuser);

    }
}
