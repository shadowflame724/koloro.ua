<?php

use App\Models\BlogCategory;
use App\Models\Meta;
use Illuminate\Database\Seeder;

class BlogCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogcategory = [
            [
                'name' => 'Брендинг и маркетинг',
                'slug' => str_slug('Брендинг и маркетинг'),
            ],
            [
                'name' => 'Дизайн',
                'slug' => str_slug('Дизайн'),
            ],
            [
                'name' => 'Исследования',
                'slug' => str_slug('Исследования'),
            ],
            [
                'name' => 'Менеджмент',
                'slug' => str_slug('Менеджмент'),
            ],
            [
                'name' => '3д технологии',
                'slug' => str_slug('3д технологии'),
            ],
            [
                'name' => 'Журнал',
                'slug' => str_slug('Журнал'),
            ],
        ];

        $meta = [
            'title' => 'todo',
            'description' => 'todo',
            'name' => 'todo',
            'keywords' => 'todo',
        ];

        foreach ($blogcategory as $value) {
            $new_m = Meta::create($meta);
            $new_b = BlogCategory::create($value);
//            $new_b->meta()->save($new_m);
        }
    }
}
