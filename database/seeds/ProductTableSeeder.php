<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
          'imagePath' => 'src/images/img-9.png',
          'title' => 'Nike Air (Man)',
          'size' => 'Size 9',
          'price' => '175.99',
        ]);
        $product->save();
    }
}
