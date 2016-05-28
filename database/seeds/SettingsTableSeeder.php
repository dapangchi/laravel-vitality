<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'name' => 'email.driver',
                'module' => 'email',
                'value' => 'sendmail',
            ),
            1 => 
            array (
                'name' => 'email.host',
                'module' => 'email',
                'value' => 'http://stmp.com ',
            ),
            2 => 
            array (
                'name' => 'email.password',
                'module' => 'email',
                'value' => 'password',
            ),
            3 => 
            array (
                'name' => 'email.port',
                'module' => 'email',
                'value' => '566',
            ),
            4 => 
            array (
                'name' => 'email.sender_email',
                'module' => 'email',
                'value' => 'no-reply@vitality.com',
            ),
            5 => 
            array (
                'name' => 'email.sender_name',
                'module' => 'email',
                'value' => 'Site Owner',
            ),
            6 => 
            array (
                'name' => 'email.username',
                'module' => 'email',
                'value' => 'rockdesign',
            ),
            7 => 
            array (
                'name' => 'site.author',
                'module' => 'site',
                'value' => 'Vitality',
            ),
            8 => 
            array (
                'name' => 'site.description',
                'module' => 'site',
                'value' => 'Vitality',
            ),
            9 => 
            array (
                'name' => 'site.keywords',
                'module' => 'site',
                'value' => 'Vitality',
            ),
            10 => 
            array (
                'name' => 'site.name',
                'module' => 'site',
                'value' => 'Vitality',
            ),
            11 => 
            array (
                'name' => 'site.patience',
                'module' => 'site',
                'value' => '0',
            ),
            12 => 
            array (
                'name' => 'site.phone',
                'module' => 'site',
                'value' => '1-888-504-1116',
            ),
            13 => 
            array (
                'name' => 'site.status',
                'module' => 'site',
                'value' => '0',
            ),
            14 => 
            array (
                'name' => 'site.title',
                'module' => 'site',
                'value' => 'Vitality',
            ),
        ));
        
        
    }
}
