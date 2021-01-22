<?php

namespace Database\Seeders;
use App\Models\post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('posts')->insert([
        //     'title' => '',
        //     'content' => Str::random(10),
        //     'tag' => Str::random(5),
        // ]);

        $row = new post();
        $row->title = ('post2');
        $row->content = 'YOYOY2';
        $row->tag = 'chill2';
        $row->save();
    }
}
