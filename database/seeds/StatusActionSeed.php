<?php

use Illuminate\Database\Seeder;

class StatusActionSeed extends Seeder
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
                'action' => 'makeDefault',
            ],
            [
                'status_id' => 2,
                'action' => 'makeBig',
            ],
            [
                'status_id' => 3,
                'action' => 'makeRed',
            ],
            [
                'status_id' => 4,
                'action' => 'makeSmall',
            ],
            [
                'status_id' => 5,
                'action' => 'makeGreen',
            ],
            [
                'status_id' => 6,
                'action' => 'makeYellow',
            ],

            /* Second graph */
            [
                'status_id' => 7,
                'action' => 'increaseValue',
            ],
            [
                'status_id' => 8,
                'action' => 'increaseValue',
            ],
            [
                'status_id' => 9,
                'action' => 'decreaseValue',
            ],
            [
                'status_id' => 10,
                'action' => 'increaseValue',
            ],
            [
                'status_id' => 11,
                'action' => 'increaseValue',
            ],

        ];
        foreach($items as $item) {
            DB::table('status_actions')->insert($item);
        }
    }
}
