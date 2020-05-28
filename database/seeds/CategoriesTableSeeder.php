<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [   'name' => 'Праздничные торты',
                'code' => 'celebratory_cakes',
                'description' => 'Описание праздничных тортиков.',
                'image' => 'categories/celebratory_cakes.jpg',
            ],

            [   'name' => 'Детские торты',
                'code' => 'children_cakes',
                'description' => 'Описание детских тортиков.',
                'image' => 'categories/children_cakes.png',
            ],
            [   'name' => 'Корпоративные торты',
                'code' => 'corporate_cakes',
                'description' => 'Описание корпоративных тортиков.',
                'image' => 'categories/corporate_cakes.jpg',
            ]
        ]);
    }
}
