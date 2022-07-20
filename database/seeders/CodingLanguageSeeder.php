<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CodingLanguage;

class CodingLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            ['language' => 'C'],
            ['language' => 'C#'],
            ['language' => 'C++'],
            ['language' => 'COBOL'],
            ['language' => 'Go'],
            ['language' => 'Java'],
            ['language' => 'JavaScript'],
            ['language' => 'Kotlin'],
            ['language' => 'Objective-C'],
            ['language' => 'Perl'],
            ['language' => 'PHP'],
            ['language' => 'Python'],
            ['language' => 'Ruby'],
            ['language' => 'sh'],
            ['language' => 'Swift'],
            ['language' => 'Visual Basic'],
        ];
        foreach ($languages as $value) {CodingLanguage::create($value);
        }
    }
}
