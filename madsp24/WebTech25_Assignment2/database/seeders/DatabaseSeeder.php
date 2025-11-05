<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pet;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Pet::factory()->create([
            'fullName' => 'John Doe',
            'email' => 'JohnD@gmail.com',
            'address' => '123 Main St',
            'city' => 'New York',
            'postcode' => '90210',
            'petName' => 'Fido',
            'petAge' => 5,
            'type' => 'Dog',
            'training' => true,
            'petDescription' => 'Super cute labrador
            who loves long walks in the park and
            carrying the biggest stick',
            //Figure out how to do this later
            'image' => 'Insert image URL here',
        ]);

        Pet::factory()->create([
            'fullName' => 'Sophie Williams',
            'email' => 'SophieWilliams@Hotmail.com',
            'address' => '20 Maple Road',
            'city' => 'Seattle',
            'postcode' => '12345',
            'petName' => 'Snuffles',
            'petAge' => 14,
            'type' => 'Cat',
            'training' => false,
            'petDescription' => 'Old cat who loves
            napping in the sun and hates water',
            //Figure out how to do this later
            'image' => 'Insert image URL here',
        ]);

        Pet::factory()->create([
            'fullName' => 'Maple Road Pet Shelter',
            'email' => 'MapleRoadShelter@outlook.com',
            'address' => '5 Maple Road',
            'city' => 'Seattle',
            'postcode' => '12345',
            'petName' => 'Bubbles',
            'petAge' => 2,
            'type' => 'Fish',
            'training' => false,
            'petDescription' => 'Loves swimming
            around their fishtank and has great
            memory for a goldfish',
            //Figure out how to do this later
            'image' => 'Insert image URL here',
        ]);
    }
}
