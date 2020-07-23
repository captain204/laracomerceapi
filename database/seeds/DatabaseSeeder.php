<?php

use App\Model\Review;
use App\Model\Product;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(App\User::class,5)->create();
        factory(App\Model\Product::class,50)->create();
        factory(App\Model\Review::class,3000)->create();

    }
}
