<?php

use Illuminate\Database\Seeder;

class EntityOneSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            [
                'status_id' => 1,
            ],

        ];
        foreach($items as $item) {
            DB::table('entity_one')->insert($item);
        }
    }
}
