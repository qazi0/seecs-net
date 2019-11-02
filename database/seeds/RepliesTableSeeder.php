<?php

use Illuminate\Database\Seeder;
use App\Reply;
class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1 = [
            'user_id' => 2,
            'discussion_id' => 1,
            'content' => 'Rather than being incomprehensible to an unauthorized third party, as is the case with cryptography, steganography is designed to be hidden from a third party. Not only must the hidden data be discovered—considered a formidable task in and of itself—it must be encrypted, which can be nearly impossible.'
        ];

        $r2 = [
            'user_id' => 1,
            'discussion_id' => 2,
            'content' => 'On the lighter side, steganography usage has occurred in the military for decades, even if not computer based. One example was having a secret message was tattooed on a soldier’s shaved head. His hair would of course grow out and, once it did, he would have his hair shaved again only to reveal the hidden tattooed message to the designated recipient.'
        ];

        $r3 = [
            'user_id' => 1,
            'discussion_id' => 3,
            'content' => 'People have desired to keep certain sensitive communications secret for thousands of years. In our new age of digital media and internet communications, this need often seems even more pressing. This paper presents general information about steganography, the art of data hiding. The paper provides an overview of steganography, general forms of steganography, specific steganographic methods, and recent developments in the field. The information presented in this paper is also applied to a program developed by the author, and some sample runs of the program are presented.'
        ];

        $r4 = [
            'user_id' => 2,
            'discussion_id' => 4,
            'content' => 'To start your installation, boot with your chosen installation medium. You should be greeted with the Kali Boot screen. Select Live, and you should be booted into the Kali Linux default desktop. '
        ];

        $r5 = [
            'user_id' => 1,
            'discussion_id' => 4,
            'content' => 'Select your Windows partition. Depending on your system, it will usually be the second, larger partition. In our example, there are two partitions; the first is the System Recovery partition, and Windows is actually installed in /dev/sda2. Resize your Windows partition and leave enough space (20 GB minimum) for the Kali installation.'
        ];

        Reply::create($r1);
        Reply::create($r2);
        Reply::create($r3);
        Reply::create($r4);
        Reply::create($r5);
    }
}
