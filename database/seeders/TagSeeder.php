<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Tags\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            [
                'id'=>1,
                'name' => 'Unknown',
                'description' => 'ERROR: Unknown Category',
            ],
            [
                'id'=>860,
                'name' => 'OS',
                'description' => 'Operating System',
            ],
            [
                'id'=>10,
                'name' => 'Windows',
                'description' => 'Windows',
            ],
            [
                'id'=>20,
                'name' => 'Linux',
                'description' => 'Linux',
            ],
            [
                'id'=>30,
                'name' => 'MacOS',
                'description' => 'Apple MacOS',
            ],
            [
                'id'=>31,
                'name' => 'OS X',
                'description' => 'Apple OS X',
            ],
            [
                'id'=>100,
                'name' => 'Server',
                'description' => 'Server software',
            ],
            [
                'id'=>110,
                'name' => 'Web',
                'description' => 'Web',
            ],
            [
                'id'=>140,
                'name' => 'Mail',
                'description' => 'eMail',
            ],
            [
                'id'=>120,
                'name' => 'Database',
                'description' => 'Database',
            ],
            [
                'id'=>121,
                'name' => 'SQL',
                'description' => 'Structured Query Language',
            ],
            [
                'id'=>122,
                'name' => 'NoSQL',
                'description' => 'Not Only SQL',
            ],
            [
                'id'=>130,
                'name' => 'Communication',
                'description' => 'Communications',
            ],
            [
                'id'=>200,
                'name' => 'IDE',
                'description' => 'Integrated Development Environments',
            ],
            [
                'id'=>210,
                'name' => 'Code',
                'description' => 'Code Editors',
            ],
            [
                'id'=>220,
                'name' => 'Graphic',
                'description' => 'Graphic software',
            ],
            [
                'id'=>230,
                'name' => 'Office',
                'description' => 'Office Software',
            ],
            [
                'id'=>300,
                'name' => 'Book',
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
                'name' => 'Application',
                'description' => 'Client applications',
            ],
            [
                'id'=>810,
                'name' => 'Desktop',
                'description' => 'Desktop',
            ],
            [
                'id'=>820,
                'name' => 'Mobile',
                'description' => 'Mobile',
            ],
            [
                'id'=>700,
                'name' => 'Z: DO NOT USE',
                'description' => 'ERROR: DO NOT USE THIS CATEGORY',
            ],
            [
                'id'=>600,
                'name' => 'Language',
                'description' => 'Computer languages',
            ],
        ];

        foreach($tags as $newTag){
            $tag = Tag::findOrCreate($newTag['name']);

        }

        $countItems = count($tags);
        $this->command->getOutput()->writeln("<info>            Added {$countItems} tags.");
    }
}
