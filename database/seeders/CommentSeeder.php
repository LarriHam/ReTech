<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create([
            'text'=>"Samsung is not the best by they're trying their hardest to achieve the most sustainable product.",
            'date'=>'2/3/22',
            'user_id' => '1'    
        ]);

        Comment::create([
            'text'=>"I should really get the Fairphone!",
            'date'=>'2/3/22',
            'user_id' => '3'    
        ]);
    }
}
