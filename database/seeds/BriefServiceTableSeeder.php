<?php

use App\Models\BriefService;
use Illuminate\Database\Seeder;

class BriefServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $briefservice = [
            [
                'name' => 'brief_comments',
            ],
            [
                'name' => 'brief_logo',
            ],
            [
                'name' => 'brief_style',
            ],
            [
                'name' => 'brief_packaging',
            ],
            [
                'name' => 'brief_interface',
            ],
            [
                'name' => 'brief_site',
            ],
            [
                'name' => 'brief_layout',
            ],
            [
                'name' => 'brief_maintenance',
            ],
            [
                'name' => 'brief_mobile',
            ],
        ];

        foreach ($briefservice as $key => $value) {
            BriefService::create($value);
        }
    }
}
