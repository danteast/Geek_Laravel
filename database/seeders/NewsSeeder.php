<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('news')->insert($this->getData());
    }
    private function getData() {
        $faker = \Faker\Factory::create('ru_Ru');
        $data = [];
        for ($i = 0; $i<10;$i++) {
            $title = $faker->sentence(mt_rand(3,10));
            $data[] = [
                'title'=>$title,
                // 'slug'=>Str::slug($title),
                'description'=>$faker->realText(rand(100,200)),
                'published'=>true,
                // 'created_at'=>now(),
                // 'updated_at'=>now()
            ];
        }
        return $data;
    }
}
