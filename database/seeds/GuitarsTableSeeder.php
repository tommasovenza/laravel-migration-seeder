<?php

use Illuminate\Database\Seeder;
use App\Guitar;
use Faker\Generator as Faker;

class GuitarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       
        for ($i=0; $i < 10; $i++) { 
            
            $new_guitar = new Guitar();
            $new_guitar->nome_modello = $faker->randomElement(['Fender Stratocaster', 'Gibson Les Paul', 'Fender Telecaster', 'Superstrat', 'Gibson SG', 'Gibson Flying V']);
            $new_guitar->manico = $faker->randomElement(['Acero', 'Palissandro', 'Mogano']);
            $new_guitar->pickup = $faker->randomElement(['Humbucker', 'Single Coil', 'P90']);
            $new_guitar->colore = $faker->randomElement(['Sonic Blue', 'Fiesta Red', 'Olympic White', 'Surf Green', 'Gold', 'Black']);
            $new_guitar->ponte = $faker->randomElement(['Ponte Fisso', 'Ponte Mobile', 'Floyd Rose']);
            $new_guitar->codice_id = $faker->numberBetween(100000, 10000000);
            $new_guitar->descrizione = $faker->paragraph();

            $new_guitar->save();
        }


    }
}
