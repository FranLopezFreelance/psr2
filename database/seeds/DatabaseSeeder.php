<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SectionSeeder::class);
        $this->call(TypeviewSeeder::class);
        $this->call(ContentSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(TypesectionSeeder::class);
    }
}
