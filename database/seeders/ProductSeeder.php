<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'iphone',
                'price'=>'1000',
                'category'=>'phones',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, nihil voluptatum laborum minima ipsa iusto quidem optio voluptas sunt dignissimos! A neque dignissimos iusto nihil ab. Id magnam laudantium tempore.',
                'gallery'=>'public\productimg\samsungjpg.jpg',
            ],
            [
                'name'=>'samsung',
                'price'=>'1000',
                'category'=>'phones',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, nihil voluptatum laborum minima ipsa iusto quidem optio voluptas sunt dignissimos! A neque dignissimos iusto nihil ab. Id magnam laudantium tempore.',
                'gallery'=>'public\productimg\iphonejpg.jpg',
            ],
            [
                'name'=>'huawei',
                'price'=>'1000',
                'category'=>'phones',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, nihil voluptatum laborum minima ipsa iusto quidem optio voluptas sunt dignissimos! A neque dignissimos iusto nihil ab. Id magnam laudantium tempore.',
                'gallery'=>'public\productimg\huaweijpg.jpg'
            ],
        ]);
    }
}
