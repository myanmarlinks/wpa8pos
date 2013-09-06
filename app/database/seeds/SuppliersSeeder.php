<?php

/**
* 
*/
class SuppliersSeeder extends Seeder
{
	
	public function run()
	{
		# code...
		$suppliers=array(
			 
			'company_name'           =>'Myanmar',
			'first_name'           =>'Aung',
			'last_name'    =>'Aung ',
			'email'       =>'fiction@gmail.com',
			'phone_number'          =>5000,
			'address_1'        =>'addreess1',
			'address_2'  =>'address2',
			'city'  =>'yangon',
			'state'  =>'yangon',
			'zip'  =>3,
			'country'  =>'myanmar',
			'comment'  =>'arrrrrrrrrr',
			'account'  =>'eee'

			 
			 
			);
		DB::table('suppliers')->insert($suppliers);
	}
}
?>