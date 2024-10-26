<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MealSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Pizza Margherita',
                'description' => 'Classic Italian pizza with tomatoes, mozzarella, and basil.',
                'price' => 8.99,
            ],
            [
                'name' => 'Spaghetti Carbonara',
                'description' => 'Pasta with eggs, cheese, pancetta, and pepper.',
                'price' => 10.99,
            ],
            [
                'name' => 'Caesar Salad',
                'description' => 'Salad with romaine lettuce, croutons, and Caesar dressing.',
                'price' => 6.99,
            ],
            [
                'name' => 'Grilled Chicken',
                'description' => 'Grilled chicken breast with herbs and spices.',
                'price' => 12.99,
            ],
        ];


        $this->db->table('meals')->insertBatch($data);
    }
}
