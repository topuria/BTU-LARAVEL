<?php

use App\Topic;
use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $topic = new Topic();
        $topic->title = 'ასდსადას';
        $topic->save();
    }
}
