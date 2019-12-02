<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //I will create 3 people
        DB::table('students')->insert([
            'first_name' => 'Jay Paul',
            'middle_name' => 'Baluran',
            'last_name' => 'Aying'
        ]);

        DB::table('students')->insert([
            'first_name' => 'John Paul',
            'middle_name' => 'Baluran',
            'last_name' => 'Aying'
        ]);

        DB::table('students')->insert([
            'first_name' => 'Jeyson',
            'middle_name' => 'Baluran',
            'last_name' => 'Aying'
        ]);
    }
}
