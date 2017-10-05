<?php

use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

class ServiceCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicecategory = [
            [
                'name' => 'Создание сайтов',
                'description' => 'Которые продают и радуют глаз',
                'order' => '6',
            ],
            [
                'name' => '3D печать и моделирование',
                'description' => 'Любой сложности',
                'order' => '5',
            ],
            [
                'name' => 'Стратегия развития и продвижения бренда',
                'description' => 'Навстречу потребителю',
                'order' => '4',
            ],
            [
                'name' => 'Корпоративный и ритейл-брендинг',
                'description' => 'Для крупных компаний',
                'order' => '3',
            ],
            [
                'name' => 'Бренд-дизайн упаковки',
                'description' => 'Вдохновляет и привлекает',
                'order' => '2',
            ],
            [
                'name' => 'Создание новой ТМ',
                'description' => 'Фундамент сильного бренда',
                'order' => '1',
            ],
        ];

        foreach ($servicecategory as $key => $value) {
            ServiceCategory::create($value);
        }
    }
}
