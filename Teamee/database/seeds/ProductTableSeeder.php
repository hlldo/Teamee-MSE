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
          'imagePath' => 'image/menu/63855f1c6de9cd3e997926f88fb5f76e.jpg',
          'title' => 'Green Tea Latte',
          'description' => 'Creamy green tea with low fat milk. Made with real matcha powder.',
          'price' => 4
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'image/menu/rosemary-tea-TS-160595872.jpg',
          'title' => 'Herbal Tea',
          'description' => 'The tea to help you feel healthier. Drink it everyday and see the difference!',
          'price' => 4
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'image/menu/TheHealthBenefitsOfTea.jpg',
          'title' => 'Mint Tea',
          'description' => 'The fresh minty taste will sure to wake you up!',
          'price' => 3
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'image/menu/milk-tea-recipe.jpg',
          'title' => 'Milk Tea',
          'description' => 'Freshly made milk tea. Savor the delicious taste of dark tea.',
          'price' => 3
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'image/menu/517828033_XS.jpg',
          'title' => 'Lavender Tea',
          'description' => 'Made with real lavender. A drink sure to sooth and relax you.',
          'price' => 4
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'image/menu/il-mondo-in-una-tazzina-69-1.jpg',
          'title' => 'Vanilla Latte',
          'description' => 'Wake up with our Vanilla Latte. Creamy and delicious with a hint of vanilla.',
          'price' => 4
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'image/menu/product-capp.jpg',
          'title' => 'Cappuccino',
          'description' => 'Try our cappuccino with its creamy and strong coffee flavor.',
          'price' => 4
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'image/menu/coffee.jpg',
          'title' => 'Caffe Americano',
          'description' => 'Rich coffee made from the finest beans imported from Columbia.',
          'price' => 4
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'image/menu/asnim-asnim-142813.jpg',
          'title' => 'Tuna Sandwhich',
          'description' => 'Made everyday fresh everyday. A light sandwhich to keep you sated.',
          'price' => 5
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'image/menu/stephanie-mccabe-92136.jpg',
          'title' => 'Garlic Fries',
          'description' => 'Homemade fries with chopped garlic. Nothing beats freshly cooked fries.',
          'price' => 5
        ]);
        $product->save();
        $product = new \App\Product([
          'imagePath' => 'image/menu/aldyth-moyla-152340.jpg',
          'title' => 'Fruit Tart',
          'description' => 'Try our fruit tart. A small healthy alternative snack.',
          'price' => 3
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'image/menu/worthy-of-elegance-6731.jpg',
          'title' => 'Chocolate Chip Cookies',
          'description' => 'Baked in store to guarantee freshness. A little light sweet snack to curve your sweet tooth.',
          'price' => 1
        ]);
        $product->save();
    }
}
