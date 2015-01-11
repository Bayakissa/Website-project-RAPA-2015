<?php

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert(
 
            array(
                array(
                    'username' => 'Bruno',
                    'email' => 'bruno@gmail.com',
                    'password' => Hash::make('Laravel')
                ),
 
 				array(
                    'username' => 'Monia',
                    'email' => 'monia@gmail.com',
                    'password' => Hash::make('Laravel')
                ),

                array(
                    'username' => 'Rémy',
                    'email' => 'remy@gmail.com',
                    'password' => Hash::make('Laravel')
                ),

                array(
                    'username' => 'Vincent',
                    'email' => 'vincent@gmail.com',
                    'password' => Hash::make('Laravel')
                )
            )
 
        );
    }
 
}

	/*public function run()
	{
		DB::table('users')->delete();
		$membreUn = Users::create(array(
			'username'         => 'Bruno',
			'email'         => 'bruno@gmail.com',
			'password' => Hash::make('Laravel')
		));
		
		$membreDeux = Users::create(array(
			'username'         => 'Monia',
			'email'         => 'monia@gmail.com',
			'password' => Hash::make('Laravel')
		));

		$membreTrois = Users::create(array(
			'username'         => 'Rémy',
			'email'         => 'remy@gmail.com',
			'password' => Hash::make('Laravel')
		));
		
		$membreQuatre = Users::create(array(
			'username'         => 'Vincent',
			'email'         => 'vincent@gmail.com',
			'password' => Hash::make('Laravel')
		));
	}*/

