<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // $this->call('ItemsTableSeeder');
        ItemsTableSeeder::run();
        $this->command->info('Items table seeded!');
    }
}

class ItemsTableSeeder extends Seeder
{


    public static function run()
    {
        $faker = Factory::create();
        DB::table('items')->delete();

        for ($i = 0; $i < 100; $i++) {
            DB::insert('insert into items (name) values (?)', [$faker->name]);
        }
    }
}
