<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 2)->create()->each(function($u) {
            $u->issues()->save(factory(App\Category::class)->make());
        });
    }
}
