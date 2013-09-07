<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();


		/**
		 * admin group seed
		 */
		try
		    {
		        // Create the group
		        $group = Sentry::getGroupProvider()->create(array(
		            'name'        => 'Admins',
		            'permissions' => array(
		                'admin' => 1,
		                'users' => 1,
		            ),
		        ));
		    }
		    catch (Cartalyst\Sentry\Groups\NameRequiredException $e)
		    {
		        echo 'Name field is required';
		    }
		    catch (Cartalyst\Sentry\Groups\GroupExistsException $e)
		    {
		        echo 'Group already exists';
		    }



		/**
		 * user group seed
		 */
		try
		    {
		        // Create the group
		        $group = Sentry::getGroupProvider()->create(array(
		            'name'        => 'Users',
		            'permissions' => array(
		                'admin' => 0,
		                'users' => 1,
		            ),
		        ));
		    }
		    catch (Cartalyst\Sentry\Groups\NameRequiredException $e)
		    {
		        echo 'Name field is required';
		    }
		    catch (Cartalyst\Sentry\Groups\GroupExistsException $e)
		    {
		        echo 'Group already exists';
		    }


		/**
		 * admin seed
		 */
		try     
		    {         // Create theuser         
		        $user = Sentry::getUserProvider()->create(array(
		        'email'       => 'pos@mmpos.com',             
		        'password'    => 'test',
		        'permissions' => array(                 
		        'admin' => 1,             
		        ),
		        'activated' => 1,         
		        ));

		        // Find the group using the group id
		        $adminGroup = Sentry::getGroupProvider()->findById(1);

		        // Assign the group to the user
		        $user->addGroup($adminGroup);
		    }
		    catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		    {
		        echo 'Login field is required.';
		    }
		    catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		    {
		        echo 'Password field is required.';
		    }
		    catch (Cartalyst\Sentry\Users\UserExistsException $e)
		    {
		        echo 'User with login already exists.';
		    }

		/**
		 * table seed
		 */
	}

}