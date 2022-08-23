<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\socialpage;

class socialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $socialRecords = [
            ['id'=>1, 'name'=>'Facebook','url'=>'https://www.facebook.com/', 'status'=>1],
            ['id'=>2, 'name'=>'Google Plus', 'url'=>'https://plus.google.com','status'=>1],
            ['id'=>3, 'name'=>'Twitter', 'url'=>'https://twitter.com/','status'=>1],
            ['id'=>4, 'name'=>'Linkedin ', 'url'=>'https://www.linkedin.com/','status'=>1],
            ['id'=>5, 'name'=>'Dribble ', 'url'=>'https://dribbble.com/','status'=>1],
        ];

        socialpage::insert($socialRecords);
    }
}
