<?php

use App/Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains=[1020, 2506, 1540, 3056, 2498];
        foreach ($trains as $train){
            $newTrains = new $Train();
            $newTrains->code_train($train);
            $newTrains->save();
        }
    }
}
