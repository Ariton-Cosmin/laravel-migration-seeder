<?php

use App\Travels;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) {

            $new_travel = new Travels();
            $new_travel->reference = $faker->bothify('??-#####');
            $new_travel->fly = $faker->fly();
            $new_travel->hotel = $this->hotelRand();
            $new_travel->city =  $faker->city();
            $new_travel->state =  $faker->state();
            $new_travel->car =  $faker->car();  
            $new_travel->price =  $faker->randomFloat(2,500,10000);
            $new_travel->energy_rating = $this->energyRandom();
            $new_travel->save();

        }

        private function hotelRand(){
            $arr = ['unaStanza', 'dueStanze', 'attico'];
            shuffle($arr);
            return $arr[0];
        } 
        private function energyRand(){
            $arr = ['A', 'B', 'C', 'D', 'E'];
            shuffle($arr);
            return $arr[0];
        }
    }
}
