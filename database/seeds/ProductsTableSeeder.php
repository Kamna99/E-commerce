<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**$p1=[
          'name'=>'Learn to build websites in HTML',
            'image'=>'uploads/products/book.png',
            'price'=>5000,
            'description'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, at voluptas autem ipsum quidem impedit veritatis. Voluptatem aut esse ea repudiandae praesentium aliquid iusto'
        ];
         $p2=[
          'name'=>'PHP Development',
            'image'=>'uploads/products/book.png',
            'price'=>7000,
            'description'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, at voluptas autem ipsum quidem impedit veritatis. Voluptatem aut esse ea repudiandae praesentium aliquid iusto'
        ];
        Product::create($p1);
        Product::create($p2);**/
        
        factory(\App\Product::class,30)->create();
    }
}
