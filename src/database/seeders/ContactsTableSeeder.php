<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;
Use App\Models\Category;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Contact::factory(35)->create();
        /*$categories = [
            ['content' => '1.商品のお届けについて'],
            ['content' => '2.商品の交換について'],
            ['content' => '3.商品トラブル'],
            ['content' => '4.ショップへのお問い合わせ'],
            ['content' => '5.その他'],
        ];
        
        foreach ($categories as $category){
            Contact::factory(7)->create(['category_id' => $category->id]);
        }*/

        $categories = [
            ['content' => '1.商品のお届けについて'],
            ['content' => '2.商品の交換について'],
            ['content' => '3.商品トラブル'],
            ['content' => '4.ショップへのお問い合わせ'],
            ['content' => '5.その他'],
        ];

        foreach ($categories as $category){
            Category::create($category)->each(function($mycategory){
                Contact::factory(7)->create([
                    'category_id' => $mycategory->id
                ]);
            });
        }






    }
}
