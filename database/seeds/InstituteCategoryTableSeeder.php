<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InstituteCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3 ; $i++) { 
            DB::table('institute_categories')->insert([
                'isVisible' => 1,
                'categoryName' => str_random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
