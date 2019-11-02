<?php

use Illuminate\Database\Seeder;
use App\Discussion;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = 'The Types And Techniques Of Steganography';
        $t2 = 'A New Method of Image Steganography Using 7th Bit of a Pixel as Indicator';
        $t3 = 'An Efficient Hybrid Steganography Method Based on Edge Adaptive and Tree Based Parity Check';
        $t4 = 'Kali Linux Dual Boot with Windows';


        $d1 = [
            'title' => $t1,
            'content' => 'The initial footages of Steganography were by the Greek historian Herodotus in hischronicles known as “Histories” and date back to around 440 BC. Herodotus recorded two stories of Steganographic techniques during this time in Greece. The first stated that King Darius of Susa shaved the head of one of his prisoners and wrote a secret message on his scalp. When the prisoner’s hair grew back, he was sent to the Kings son in law Aristogoras in Miletus undetected. ',
            
            'user_id' => 1,
            'channel_id' => 11,
            'slug' => str_slug($t1)
        ];

        $d2 = [
            'title' => $t2,
            'content' => 'Steganography has emerged as a glowing research area in which various methods have been proposed in several carrier media. Here, we are going to present the brief overview of some already proposed methods, and at last, we will be presenting the comparison work with these methods. LSB method [6] provides the very basic idea of steganography in an easy manner. This method states that the secret message bits can be placed by replacing the least significant bits of the pixels of the image.
            
            Suppose the message string to be sent over the internet is 10010101, and the value of continuous pixels are as follows:
            
            01101000 10101001 01101000 11110000 00011101 10000001 11110000 10101010.
            
            Then after inserting the message, pixels would be as follows:
            
            01101001 10101000 01101000 11110001 00011100 10000001 11110000 10101011.
            
            This method was vulnerable to attack as the message was present at LSB, and by only picking LSBs, the intruder can access the data. Singh et al. proposed a method based on first and second bit plane. In this method, on the combination of 1st and 2nd bit plane the message was hidden. The main result of the method was that the probability of message insertion at a pseudorandom location at first chance was 50%. The probability was 50% when there was no need to change the pixel value. The probability was 12.5% when a change in pixel value was required. ',
            'user_id' => 2,
            'channel_id' => 11,
            'slug' => str_slug($t2)
        ];

        $d3 = [
            'title' => $t3,
            'content' => 'A major requirement for any steganography method is to minimize the changes that are introduced to the cover image by the data embedding process. Since the Human Visual System (HVS) is less sensitive to changes in sharp regions compared to smooth regions, edge adaptive has been proposed to discover edge regions and enhance the quality of the stego image as well as improve the embedding capacity. However, edge adaptive does not apply any coding scheme, and hence it embedding efficiency may not be optimal. In this paper, we propose a method that enhances edge adaptive by incorporating the Tree-Based Parity Check (TBPC) algorithm.',
            'user_id' => 2,
            'channel_id' => 11,
            'slug' => str_slug($t3)
        ];

        $d4 = [
            'title' => $t4,
            'content' => 'Installing Kali alongside a Windows installation can be quite useful. However, you need to exercise caution during the setup process. First, make sure that you’ve backed up any important data on your Windows installation. Since you’ll be modifying your hard drive, you’ll want to store this backup on external media. Once you’ve completed the backup, we recommend you peruse Kali Linux Hard Disk Install, which explains the normal procedure for a basic Kali install.

            In our example, we will be installing Kali Linux alongside an installation of Windows 7, which is currently taking up 100% of the disk space in our computer. We will start by resizing our current Windows partition to occupy less space and then proceed to install Kali Linux in the newly-created empty partition.
            
            Download Kali Linux and either burn the ISO to DVD, or prepare a USB stick with Kali linux Live as the installation medium. If you do not have a DVD or USB port on your computer, check out the Kali Linux Network Install. ',
            'user_id' => 1,
            'channel_id' => 9,
            'slug' => str_slug($t4)
        ];

        Discussion::create($d1);
        Discussion::create($d2);
        Discussion::create($d3);
        Discussion::create($d4);
        }
}
