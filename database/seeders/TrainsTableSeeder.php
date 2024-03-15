<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0;$i < 10; $i++){
            $newTrain = new Train();
            
            $newTrain->azienda = $faker->randomElement(['Trenitalia', 'Trenord', 'Deutsche Bahn']);
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->dateTimeThisYear()->format('H:i'); // formato orario ore minuti
            $newTrain->orario_arrivo = $faker->dateTimeThisYear()->format('H:i');
            $newTrain->codice_treno = $faker->regexify('[A-Z]{2}[0-9]{3}'); // selezione lettere e numeri casuali
            $newTrain->numero_carrozze = $faker->numberBetween(4, 10);
            $newTrain->in_orario = $faker->boolean(80); // 80% di probabilità di essere in orario
            $newTrain->cancellato = $faker->boolean(5); // 5% di probabilità di essere cancellato
            
            $newTrain->save();
        }
    }
}
