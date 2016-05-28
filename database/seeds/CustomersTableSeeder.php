<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'test@test.com',
                'password' => '6a478f6d96107760724c3418cafbe5b7',
                'passsalt' => 'jLpGUlU6',
                'first_name' => 'Test',
                'last_name' => 'test',
                'gender' => 1,
                'birthday' => '1988-10-10',
                'picture' => NULL,
                'address' => '44-46 Morningside Road',
                'phone' => '123 345 2341',
                'facebook_name' => 'andreypp28',
                'twitter_name' => 'andreypp28',
                'summary' => NULL,
                'logdate' => '2016-04-21 07:37:53',
                'lognum' => 161,
                'is_active' => 1,
                'active_code' => NULL,
                'is_subscribed' => 0,
                'created_at' => '2015-10-04 07:43:55',
                'updated_at' => '2016-04-21 07:37:53',
            ),
            1 => 
            array (
                'id' => 2,
                'email' => 'test@gmail.com',
                'password' => '2af8bd95ada1be553cb90322909d68e4',
                'passsalt' => 'nDXPLJKh',
                'first_name' => 'Teest',
                'last_name' => 'test',
                'gender' => 2,
                'birthday' => '2016-07-06',
                'picture' => NULL,
                'address' => 'sdgdsg',
                'phone' => '234423532',
                'facebook_name' => 'test',
                'twitter_name' => 'dsgsd',
                'summary' => NULL,
                'logdate' => NULL,
                'lognum' => 0,
                'is_active' => 1,
                'active_code' => NULL,
                'is_subscribed' => 0,
                'created_at' => '2016-04-21 08:22:52',
                'updated_at' => '2016-04-21 08:22:52',
            ),
        ));
        
        
    }
}
