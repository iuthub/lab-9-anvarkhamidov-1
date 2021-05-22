<?php

use Illuminate\Database\Seeder;
use \App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post([
            'title' => 'Learning Laravel',
            'content' => 'This blog post will get you right on track with Laravel!'
        ]);
        $post->save();

        $post = new Post([
            'title' => "The complete beginner's guide to photography lights",
            'content' => "How to start using graphic artists. 17 facts about photographers that will impress your friends. How graphic effects are making the world a better place. 17 things about photography courses your kids don't want you to know. 10 myths uncovered about graphic organizers. How nature images can help you live a better life. Unbelievable graphic organizer success stories. 15 things about cutest baby contests your kids don't want you to know."
        ]);
        $post->save();
    }
}
