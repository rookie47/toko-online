<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Processor
        for ($i=1; $i <= 30; $i++) {
            Product::create([
                'name' => 'Processor'.$i,
                'slug' => 'processor'.$i,
                'details' => [13,14,15][array_rand([13,14,15])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] .' TB SSD, 32GB RAM',
                'price' => rand(149999, 249999),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'products/dummy/processor-'.$i.'.jpg',
                'images' => '["products\/dummy\/processor-2.jpg","products\/dummy\/processor-3.jpg","products\/dummy\/processor-4.jpg"]',
            ])->categories()->attach(1);
        }


        // VGA
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Graphic card ' . $i,
                'slug' => 'vga' . $i,
                'details' => [24, 25, 27][array_rand([24, 25, 27])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] . ' TB SSD, 32GB RAM',
                'price' => rand(249999, 449999),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'products/dummy/vga-'.$i.'.jpg',
                'images' => '["products\/dummy\/vga-2.jpg","products\/dummy\/vga-3.jpg","products\/dummy\/vga-4.jpg"]',
            ])->categories()->attach(2);
        }

        // Ram
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Random acces memory ' . $i,
                'slug' => 'ram' . $i,
                'details' => [16, 32, 64][array_rand([16, 32, 64])] . 'GB, 5.' . [7, 8, 9][array_rand([7, 8, 9])] . ' inch screen, 4GHz Quad Core',
                'price' => rand(79999, 149999),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'products/dummy/phone-'.$i.'.jpg',
                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
            ])->categories()->attach(3);
        }

        //  Power supplies
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Power suplies ' . $i,
                'slug' => 'Psu' . $i,
                'details' => [16, 32, 64][array_rand([16, 32, 64])] . 'GB, 5.' . [10, 11, 12][array_rand([10, 11, 12])] . ' inch screen, 4GHz Quad Core',
                'price' => rand(49999, 149999),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'products/dummy/psu-'.$i.'.jpg',
                'images' => '["products\/dummy\/psu-2.jpg","products\/dummy\/psu-3.jpg","products\/dummy\/psu-4.jpg"]',
            ])->categories()->attach(4);
        }

        // TVs
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Display' . $i,
                'slug' => 'display' . $i,
                'details' => [46, 50, 60][array_rand([7, 8, 9])] . ' inch screen, Smart TV, 4K',
                'price' => rand(79999, 149999),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'products/dummy/tv-'.$i.'.jpg',
                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
            ])->categories()->attach(5);
        }

        // Cameras
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Storage ' . $i,
                'slug' => 'storage' . $i,
                'details' => 'Full Frame DSLR, with 18-55mm kit lens.',
                'price' => rand(79999, 249999),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'products/dummy/camera-'.$i.'.jpg',
                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
            ])->categories()->attach(6);
        }

        // Appliances
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Motherboard ' . $i,
                'slug' => 'Mobo' . $i,
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(120, 300),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'products/dummy/appliance-'.$i.'.jpg',
                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
            ])->categories()->attach(7);
        }

        
    }
}
