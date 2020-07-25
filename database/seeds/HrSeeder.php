<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class HrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <=20; $i++){
            DB::table('hr')->insert([
                'nama' => $faker,
                'jenishr' => $faker,
                'tgl' => $faker,
                'nominal' => $faker,
                'keterangan' => $faker
            ]);
    }
    }
}
