<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class dataseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('database')->insert([
            'name' => 'ramushamu ',
            'email' => 'ramushamu@example.com',
            'password'=>Hash::make('rsrsrs')
        ]);
    }
}
