<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'id'=>1,
                'name' => 'UNKNOWN',
                'description' => 'ERROR: Unknown Category',
            ],
            [
                'id'=>100,
                'name' => 'Servers',
                'description' => 'Servers (General)',
            ],
            [
                'id'=>110,
                'name' => 'Servers: Web',
                'description' => 'Servers (Web)',
            ],
            [
                'id'=>120,
                'name' => 'Servers: Database',
                'description' => 'Servers (Database)',
            ],
            [
                'id'=>130,
                'name' => 'Servers: Communications',
                'description' => 'Servers (Communications)',
            ],
            [
                'id'=>200,
                'name' => 'IDEs',
                'description' => 'Integrated Development Environments',
            ],
            [
                'id'=>300,
                'name' => 'Books',
                'description' => 'Open-source, public-domain, and creative-commons books',
            ],
            [
                'id'=>400,
                'name' => 'Code',
                'description' => 'Code examples',
            ],
            [
                'id'=>500,
                'name' => 'Cheatsheet',
                'description' => 'Cheat Sheets of various forms',
            ],
            [
                'id'=>900,
                'name' => 'z: DO NOT USE',
                'description' => 'ERROR: DO NOT USE THIS CATEGORY',
            ],
            [
                'id'=>800,
                'name' => 'Z: DO NOT USE',
                'description' => 'ERROR: DO NOT USE THIS CATEGORY',
            ],
            [
                'id'=>700,
                'name' => 'Z: DO NOT USE',
                'description' => 'ERROR: DO NOT USE THIS CATEGORY',
            ],
            [
                'id'=>600,
                'name' => 'Z: DO NOT USE',
                'description' => 'ERROR: DO NOT USE THIS CATEGORY',
            ],
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
