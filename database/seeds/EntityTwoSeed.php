<?php

use Illuminate\Database\Seeder;

class EntityTwoSeed extends Seeder
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
                'status_id' => 7,
                'value' => 0
            ],

        ];
        foreach($items as $item) {
            DB::table('entity_two')->insert($item);
        }
    }
}
