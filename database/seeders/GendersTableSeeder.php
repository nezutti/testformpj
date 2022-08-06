<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\models\Gender;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            "gender"=>"男性"
        ];
        Gender::create($param);

        $param=[
            "gender"=>"女性"
        ];
        Gender::create($param);
    }
}
