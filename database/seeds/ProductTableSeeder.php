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
            'imgProduct' => 'https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/23844497_1800362690263996_7020076248969463199_n.jpg?oh=d0fd8269aeaac40129f70257df62736d&oe=5A97A7D4',
            'title' => 'Hoa oải hương',
            'description' => 'Hoa oải hương dành cho bạn gái ngày Giáng sinh',
            'price' => '300000',
        ]);
        $product->save();

        $product = new \App\Product([
            'imgProduct' => 'https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/23844497_1800362690263996_7020076248969463199_n.jpg?oh=d0fd8269aeaac40129f70257df62736d&oe=5A97A7D4',
            'title' => 'Hoa oải hương',
            'description' => 'Hoa oải hương dành cho bạn gái ngày Giáng sinh',
            'price' => '300000',
        ]);
        $product->save();

        $product = new \App\Product([
            'imgProduct' => 'https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/23844497_1800362690263996_7020076248969463199_n.jpg?oh=d0fd8269aeaac40129f70257df62736d&oe=5A97A7D4',
            'title' => 'Túi thơm',
            'description' => 'Túi thơm dành cho bạn gái ngày Giáng sinh',
            'price' => '50000',
        ]);
        $product->save();

         $product = new \App\Product([
            'imgProduct' => 'https://scontent.fhan5-1.fna.fbcdn.net/v/t1.0-9/23517532_1796586463974952_4824817335290821877_n.jpg?oh=034bddade85e773c1f85d216ed19569a&oe=5A965471',
            'title' => 'Hộp hoa khô',
            'description' => 'Hộp hoa khô dành cho bạn gái ngày Giáng sinh',
            'price' => '500000',
        ]);
        $product->save();
    }
}
