<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//Models
use App\Models\Train;
class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 10; $i++){
            $trians = new Train();
            $trians->company=fake()->company();
            $trians->Dep_Station= fake()->city();
            $trians->Arr_Station= fake()->city();
            $trians->Dep_time= fake()->time();
            $trians->Arr_time= fake()->time();
            $trians->code_train=fake()->bothify('?#?#?#?#');
            $trians->carriages_number=rand(2,20);
            $trians->On_time= fake()->boolean(70);
            $trians->Canceled= fake()->boolean(25);
            $trians->save();
        }
    }
}
