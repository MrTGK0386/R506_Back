<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['id' => 1, 'color' => '#919AA2', 'icon' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesLogo/Normal.svg', 'background' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesBG/Normal.png'],  // Normal
            ['id' => 2, 'color' => '#CE416B', 'icon' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesLogo/Fighting.svg', 'background' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesBG/Fighting.png'],  // Combat
            ['id' => 3, 'color' => '#89AAE3', 'icon' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesLogo/Fly.svg', 'background' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesBG/Fly.png'], // Vol
            ['id' => 4, 'color' => '#C699E5', 'icon' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesLogo/Poinson.svg', 'background' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesBG/Poison.png'], // Poison
            ['id' => 5, 'color' => '#DB9E6E', 'icon' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesLogo/Ground.svg', 'background' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesBG/Ground.png'], // Sol
            ['id' => 6, 'color' => '#C5B78C', 'icon' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesLogo/Rock.svg', 'background' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesBG/Rock.png'], // Roche
            ['id' => 7, 'color' => '#95BD43', 'icon' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesLogo/Bug.svg', 'background' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesBG/Bug.png'], // Insect
            ['id' => 8, 'color' => '#5269AD', 'icon' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesLogo/Ghost.svg', 'background' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesBG/Ghost.png'], // Spectre
            ['id' => 9, 'color' => '#5A8EA2', 'icon' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesLogo/Steel.svg', 'background' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesBG/Steel.png'], // Acier
            ['id' => 10, 'color' => '#FF9D55', 'icon' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesLogo/Fire.svg', 'background' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesBG/Fire.png'], // Feu
            ['id' => 11, 'color' => '#71B1FF', 'icon' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesLogo/Water.svg', 'background' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesBG/Water.png'], // Eau
            ['id' => 12, 'color' => '#9CDB8D', 'icon' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesLogo/Grass.svg', 'background' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesBG/Grass.png'], // Plante
            ['id' => 13, 'color' => '#F4D23C', 'icon' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesLogo/Elek.svg', 'background' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesBG/Elek.png'], // Electrik
            ['id' => 14, 'color' => '#D76088', 'icon' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesLogo/Psy.svg', 'background' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesBG/Psy.png'], // Psy
            ['id' => 15, 'color' => '#73CEC0', 'icon' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesLogo/Ice.svg', 'background' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesBG/Ice.png'], // Glace
            ['id' => 16, 'color' => '#0B6DC3', 'icon' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesLogo/Dragon.svg', 'background' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesBG/Dragon.png'], // Dragon
            ['id' => 17, 'color' => '#7B6C8F', 'icon' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesLogo/Dark.svg', 'background' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesBG/Dark.png'], // Tenebres
            ['id' => 18, 'color' => '#FFA3E5', 'icon' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesLogo/Fairy.svg', 'background' => 'https://raw.githubusercontent.com/MrTGK0386/R505-front/refs/heads/master/public/assets/TypesBG/Fairy.png'], // Fée
        ];

        foreach ($types as $type) {
            Type::updateOrCreate(
                ['id' => $type['id']], // Condition de recherche
                [
                    'color' => $type['color'],
                    'icon' => $type['icon'],
                    'background' => $type['background'],
                ]
            );
            $this->command->info("Un type a été ajouté/mis à jour dans la base");
        }
    }
}
