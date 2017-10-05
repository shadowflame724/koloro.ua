<?php

use App\Models\BriefAbout;
use Illuminate\Database\Seeder;

class BriefAboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $briefabout = [
            [
                'name' => 'brief_search',
            ],
            [
                'name' => 'brief_social',
            ],
            [
                'name' => 'brief_recommendations',
            ],
//            [
//                'name' => 'brief_other',
//            ],
        ];

        foreach ($briefabout as $key => $value) {
            BriefAbout::create($value);
        }
    }
}
