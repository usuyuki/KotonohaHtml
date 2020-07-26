<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $this->call(MailsTableSeeder::class);
        $this->call(FoldsTableSeeder::class);
        $this->call(ScentsTableSeeder::class);
        $this->call(SheetsTableSeeder::class);
        $this->call(FlowersTableSeeder::class);
    }
}
