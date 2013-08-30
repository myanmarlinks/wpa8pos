<?php

class ProductTableSeeder extends Seeder {
	public function run()
	{
		$products = [
            ['name' => 'Mamee'],
            ['name' => 'Beer'],
            ['name' => 'Alcohol']
        ];
 
        DB::table('products')->insert($products);
	}
}