<?php

use Illuminate\Database\Seeder;

class StatusGraphSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            /* First graph */
            [
                'status_id' => 1,
                'status_to' => 2,
            ],
            [
                'status_id' => 1,
                'status_to' => 3,
            ],
            [
                'status_id' => 2,
                'status_to' => 1,
            ],
            [
                'status_id' => 2,
                'status_to' => 5,
            ],
            [
                'status_id' => 3,
                'status_to' => 1,
            ],
            [
                'status_id' => 3,
                'status_to' => 4,
            ],
            [
                'status_id' => 4,
                'status_to' => 3,
            ],
            [
                'status_id' => 4,
                'status_to' => 6,
            ],
            [
                'status_id' => 5,
                'status_to' => 2,
            ],
            [
                'status_id' => 5,
                'status_to' => 6,
            ],
            [
                'status_id' => 6,
                'status_to' => 4,
            ],
            [
                'status_id' => 6,
                'status_to' => 5,
            ],

            /* Second graph */
            [
                'status_id' => 7,
                'status_to' => 8,
            ],
            [
                'status_id' => 8,
                'status_to' => 9,
            ],
            [
                'status_id' => 9,
                'status_to' => 10,
            ],
            [
                'status_id' => 10,
                'status_to' => 11,
            ],
            [
                'status_id' => 11,
                'status_to' => 12,
            ],
            [
                'status_id' => 12,
                'status_to' => 7,
            ],

        ];
        foreach($items as $item) {
            DB::table('status_graphs')->insert($item);
        }
    }
}
