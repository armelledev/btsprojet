<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories =['Direction', 'Professeur','Surveillant', 'Comptabilite', 'Securite'];

        foreach ($categories as $cat) {
           Category::create(['libelle' => $cat]);
        }
        //
    }
}
