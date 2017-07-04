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
        // $this->call(UsersTableSeeder::class);
        $this->call(StatusSeed::class);
        $this->call(StatusGraphSeed::class);
        $this->call(StatusActionSeed::class);
        $this->call(EntityOneSeed::class);
        $this->call(EntityTwoSeed::class);
    }
}
