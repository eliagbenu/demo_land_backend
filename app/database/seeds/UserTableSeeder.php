<?php
 
class UserTableSeeder extends Seeder 
{
 
    public function run()
    {
        DB::table('users')->delete();
 
        User::create(array(
            'username' => 'eli',
            'email'=>'eli@gmail.com',
            'password' => Hash::make('123456')
        ));
 
        User::create(array(
            'username' => 'tony',
            'email'=>'tony@gmail.com',            
            'password' => Hash::make('123456')
        ));
		
        User::create(array(
            'username' => 'fred',
            'email'=>'fred@gmail.com',            
            'password' => Hash::make('123456')
        ));		
		
    }
 
}

?>