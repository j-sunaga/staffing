<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'category_name' => 'メール',
            ],
            [
                'id' => 2,
                'category_name' => '資料作成',
            ],
            [
                'id' => 3,
                'category_name' => '雑作業',
            ]
        ]);
    }
}
