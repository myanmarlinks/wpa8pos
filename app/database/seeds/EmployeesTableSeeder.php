<?php

class EmployeesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('photos')->truncate();

		$employees = array(
			['first_name' => 'Sithu', 
			 'last_name' => 'Aung', 
			 'email' => 'sithu@yahoo.com',
			 'username' => 'sithuaung',
			 'password' => Hash::make('sithu'), 
			 'phone_number' => '095422221',
			 'address1' => 'Yangon',
			 'address2' => 'Tarmwe',
			 'city' => 'Yangon',
			 'state' => 'Yangon',
			 'zip' => '95',
			 'country' => 'Myanmar',
			 'comment' => 'This site is awesome',
			 'created_at' => new DateTime, 'updated_at' => new DateTime,
			 'updated_at' => new DateTime, 'updated_at' => new DateTime],

			['first_name' => 'Kyaw', 
			 'last_name' => 'Kyaw', 
			 'email' => 'kyawkyaw@yahoo.com',
			 'username' => 'kyawkyaw',
			 'password' => Hash::make('kyawkyaw'), 
			 'phone_number' => '251512122',
			 'address1' => 'NPT',
			 'address2' => 'OatKyin',
			 'city' => 'NPT',
			 'state' => 'Mandalay',
			 'zip' => '65',
			 'country' => 'Myanmar',
			 'comment' => 'This site is amazing',
			 'created_at' => new DateTime, 'updated_at' => new DateTime,
			 'updated_at' => new DateTime, 'updated_at' => new DateTime],
			
		);

		// Uncomment the below to run the seeder
		DB::table('employees')->insert($employees);
	}

}

?>