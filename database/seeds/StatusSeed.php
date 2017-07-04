<?php

use Illuminate\Database\Seeder;

class StatusSeed extends Seeder
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
                'id' => 1,
                'label' => 'Default',
            ],
            [
                'id' => 2,
                'label' => 'Go big',
            ],
            [
                'id' => 3,
                'label' => 'Go red',
            ],
            [
                'id' => 4,
                'label' => 'Go small',
            ],
            [
                'id' => 5,
                'label' => 'Go green',
            ],
            [
                'id' => 6,
                'label' => 'Go yellow',
            ],

            /* Second graph */
            [
                'id' => 7,
                'label' => 'One',
            ],
            [
                'id' => 8,
                'label' => 'Two',
            ],
            [
                'id' => 9,
                'label' => 'Three',
            ],
            [
                'id' => 10,
                'label' => 'Four',
            ],
            [
                'id' => 11,
                'label' => 'Five',
            ],
            [
                'id' => 12,
                'label' => 'Six',
            ],

        ];
        foreach($items as $item) {
            DB::table('statuses')->insert($item);
        }
    }
}
