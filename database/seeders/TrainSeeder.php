<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $city = ['Napoli', 'Milano', 'Roma', 'Lazio', 'Palermo', 'Catania'];
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->Azienda = $faker->unique()->name();
            $newTrain->Stazione_Di_Partenza = $faker->randomElement($city);
            $newTrain->Stazione_Di_Arrivo = $faker->randomElement($city);
            $newTrain->Orario_Di_Partenza = $faker->time();
            $newTrain->Orario_Di_Arrivo = $faker->time();
            $newTrain->Codice_Treno = $faker->randomLetter(6);
            $newTrain->Numero_Carrozze = $faker->randomDigit();
            $newTrain->In_Orario = $faker->boolean();
            $newTrain->Cancellato = $faker->boolean();
            $newTrain->save();
        }
    }
}
