<?php

namespace App\Database\Seeds;
use App\Models\Product;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        helper('text');
        $image[0] = 'iphone.jpeg';
        $image[1] = 'realme.jpg';
        $image[2] = 'samsung.jpg';
        $image[3] = 'vivo.png';

        $name[0] = 'iphone 15';
        $name[1] = 'realme 11 pro plus 5g'; 
        $name[2] = 'samsung galaxy s23 ultra 5g';
        $name[3] = 'vivo v29';

        $desc[0] = 'iPhone 15 models in the same sizes as the iPhone 14 models, including two 6.1-inch iPhones and two 6.7-inch iPhones. One of the 6.1-inch iPhones will be the standard iPhone 15, while one of the 6.7-inch models will be an iPhone 15 "Plus."';
        $desc[1] = 'Developed in collaboration with Samsung, we’re bringing game-changing 1X/2X/4X multi-focal length lossless zoom, all in a single lens. Built around the 200MP ultra-clear resolution and advanced In-sensor Zoom technology, the realme 11 Pro+ 5G introduces a breakthrough shooting experience that captures stunners more seamlessly than ever.';
        $desc[2] = 'The Samsung Galaxy S23 Ultra is the headliner of the S23 series. Specifications are top-notch including 6.8-inch Dynamic AMOLED display with 120Hz refresh rate, Snapdragon 8 Gen 2 processor, 5000mAh battery, up to 12gigs of RAM, and 1TB of storage. In the camera department, a quad-camera setup is presented with two telephoto sensors.';
        $desc[3] = "Unique at first sight, the diamond pattern combines the Glossy Matte Splicing texture, revealing your premium taste and catching everyone's eye.Once you feel how sleek it is, you won't forget how effortless it is to hold, as the ultra-slim body provides ultimate comfort without causing fatigue.";

        for($num=0;$num<4;$num++){
            $product = new Product();

            $insertdata['name'] = $name[$num];
            $insertdata['price'] = rand(9999,1000000);
            $insertdata['description'] = $desc[$num];
            $insertdata['image'] = $image[$num]; 
            $insertdata['created_at'] = date("y-m-d H:i:s");
            $insertdata['updated_at'] = date("y-m-d H:i:s");

            $product->insert($insertdata);
       }
    }
}

