<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $categories = [
        'Electronics',
        'Clothes',
        'Beauty and Health',
        'Home and Gardening',
        'Games',
        'Sport',
        'Animals',
        'Books and Magazines',
        'Accessories',
        'Engines',
    ];
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach($this->categories as $category){
            Category::create(['name'=>$category]);
        }

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
