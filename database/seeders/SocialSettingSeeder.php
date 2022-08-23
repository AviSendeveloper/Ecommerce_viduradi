<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\socialsetting;

class SocialSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $SocialSettingRecords = [
            ['id'=>1,'name'=>'Google', 'app_id'=>'503140663460329', 'app_secret'=>'f66cd670ec43d14209a2728af26dcc43','url'=>'https://ecom.viduradi.com','redirect_url'=>'https://ecom.viduradi.com/auth/facebook/callback'],
           	['id'=>2,'name'=>'Google', 'app_id'=>'904681031719-sh1aolu42k7l93ik0bkiddcboghbpcfi.apps.googleusercontent.com', 'app_secret'=>'904681031719-sh1aolu42k7l93ik0bkiddcboghbpcfi.apps.googleusercontent.com','url'=>'https://ecom.viduradi.com','redirect_url'=>'https://ecom.viduradi.com/auth/google/callback'],
        ];
         socialsetting::insert($SocialSettingRecords);
    }
}
