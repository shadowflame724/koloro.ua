<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(PermissionTableSeeder::class); //moved to User..
        $this->call(UserTableSeeder::class);
//        $this->call(BlogCategoryTableSeeder::class);
//        $this->call(ServiceCategoryTableSeeder::class);
//        $this->call(BriefServiceTableSeeder::class);
//        $this->call(BriefAboutTableSeeder::class);
    }
}
