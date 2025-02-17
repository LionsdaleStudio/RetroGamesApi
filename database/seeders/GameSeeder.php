<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::create([
            'name' => 'Age of Mithology',
            'description' => 'Lorem ipsum odor kamehame...',
            'picture' => 'ageofmithology.jpg',
            'metacritic' => 8.8
        ]);

        Game::create([
            'name' => 'Desperados - Wanted Dead or Alive',
            'description' => 'Lorem ipsum odor kamehame...',
            'picture' => 'desperados.jpg',
            'metacritic' => 8.6
        ]);

        Game::create([
            'name' => 'Harry Potter and the Philosopher\'s Stone',
            'description' => 'Lorem ipsum odor kamehame...',
            'picture' => 'harrypotter1.jpg',
            'metacritic' => 6.4
        ]);

        Game::create([
            'name' => 'Heroes of Might and Magic III',
            'description' => 'Lorem ipsum odor kamehame...',
            'picture' => 'heroes3.jpg',
            'metacritic' => 8.4
        ]);

        Game::create([
            'name' => 'James Bond - Nightfire',
            'description' => 'Lorem ipsum odor kamehame...',
            'picture' => 'jamesbond.jpg',
            'metacritic' => 7.9
        ]);

        Game::create([
            'name' => 'Prince of Persia - Sands of Time',
            'description' => 'Lorem ipsum odor kamehame...',
            'picture' => 'pop.jpg',
            'metacritic' => 8.6
        ]);

        Game::create([
            'name' => 'Wizard of Wor',
            'description' => 'Lorem ipsum odor kamehame...',
            'picture' => 'wizardofwor.jpg',
            'metacritic' => 6.1
        ]);
    }
}
