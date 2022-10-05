<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([[
            'title'=> 'TODOROKI TEE - BLACK',
            'description'=> 'DBTK x My Hero Academia Collab.',
            'currency' => 'PHP',
            'price' => 900,
            'brand' => 'DBTK',
            'category' => 'apparel',
            'image' => 'https://cdn.shopify.com/s/files/1/0416/4029/products/TodoriTee_Black_1_2048x2048.jpg?v=1661953831'
        ],
        [

            'title'=> 'Diary of a Wimpy Kid: Rodrick Rules',
            'description'=> 'By Jeff Kinney. Secrets have a way of getting out, especially when a diary is involved.',
            'currency' => 'PHP',
            'price' => 140,
            'brand' => 'Wimpy Kid, Inc.',
            'category' => 'book',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3tGaZOXD5pCHszlXnmFE9U9GyFpDPUHHNeYxz_AJE9tjfhzJ0VzWVq59lLJNThvH55L8&usqp=CAU'
        ],
        [
            'title'=> 'Acer Nitro 5',
            'description'=> 'Reign over the game world with the combined power of an 12th Gen Intel® Core™ i7 processor1 and up to NVIDIA® GeForce RTX™ 30 Series GPUs(fully optimized for maximum MGP). Configure your laptop for top speed and massive storage with two slots for GEN 4 M.2 PCIe and up to 32GB of DDR4 3200 RAM.',
            'currency' => 'PHP',
            'price' => 50999,
            'brand' => 'Acer',
            'category' => 'electronics',
            'image' => 'https://laptopmedia.com/wp-content/uploads/2020/04/3-12-scaled.jpg'
        ]]);
    }
}
