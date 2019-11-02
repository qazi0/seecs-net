<?php

use Illuminate\Database\Seeder;
use App\Channel;
class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channels = [
            ['title' =>  'General', 'slug' => str_slug( 'General')] ,
            ['title' =>  'Trending', 'slug' => str_slug('Trending' )],
            ['title' =>  'Seecs News', 'slug' => str_slug('Seecs News' )],
            ['title' =>  'Random', 'slug' => str_slug('Random' )],
            ['title' =>  'Programming', 'slug' => str_slug('Programming' )],
            ['title' =>  'TUKL - NUST', 'slug' => str_slug( 'TUKL - NUST')],
            ['title' =>  'CRIMSON - SEECS', 'slug' => str_slug( 'CRIMSON - SEECS')],
            ['title' =>  'Cyber Security', 'slug' => str_slug('Cyber Security' )],
            ['title' =>  'Deep Learning', 'slug' => str_slug('Deep Learning' )],
            ['title' =>  'Cyber Security', 'slug' => str_slug('Cyber Security')],
            ['title' =>  'Steganography', 'slug' => str_slug( 'Steganography')],
            ['title' =>  'Digital Forensics', 'slug' => str_slug('Digital Forensics' )],
        ];

        foreach($channels as $channel):
            Channel::create($channel);
        endforeach;
    }
}
