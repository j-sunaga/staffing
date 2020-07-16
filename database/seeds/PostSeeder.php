<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'id' => 1,
                'title' => 'example様にメール送信',
                'detail' => '見積書を添付して送付する',
                'deadline' => '2020-07-20',
                'status' => 1,
                'priority' => 2,
                'user_id' => 1,
            ],
            [
                'id' => 2,
                'title' => 'コピー',
                'detail' => '資料を印刷',
                'deadline' => '2020-07-20',
                'status' => 0,
                'priority' => 1,
                'user_id' => 1,
            ],
            [
                'id' => 3,
                'title' => 'イベント参加',
                'detail' => '社内イベント参加',
                'deadline' => '2020-07-20',
                'status' => 0,
                'priority' => 0,
                'user_id' => 1,
            ],
        ]);
    }
}
