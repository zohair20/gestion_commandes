<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Client;
use App\Models\Commande;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $articles = Article::factory(15)->create();

        Client::factory(8)->create()->each(function ($client) use ($articles) {
            // كنكريو الكوموند وكنعطيوها الساروت اللي بغينا حنا بيدينا
            $commandes = Commande::factory(4)->create([
                'clients_id' => $client->id,
            ]);

            foreach ($commandes as $commande) {
                $commande->articles()->attach(
                    $articles->random(rand(1, 3))->pluck('id')->toArray(),
                    ['QTECOMD' => rand(1, 10)]
                );
            }
        });

    }
}
