<?php

class WelcomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	*/

	/**
	 * Show Welcome Page
	 * @author Naing Win
	 **/
	public function showWelcome()
	{
		if (! Sentry::check())
		{
			return View::make('pages.welcome');
		} else {
			return Redirect::to('/');
		}
	}

	/**
	 * Login 
	 * Authenticate with Sentry2
	 * @author Naing Win
	 **/
	public function login() 
	{
		try
	    {
	        // Set login credentials
	        $credentials = array(
	            'email' => Input::get('email'),
	            'password' => Input::get('password')
	        );


	        // Try to authenticate the user
	        $user = Sentry::authenticate($credentials, false); 

	        // Get User Name 
	        $userid = $user->id;
	        $user = Sentry::getUserProvider()->findById($userid);
	        $username = $user['first_name'] . ' ' . $user['last_name'];
	        
	        Session::flash('success', 'Your are successfully login' . ' ' . $username);
	        return Redirect::to('/');
	               
	    }
	    catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
	    {
	        Session::flash('error', 'Login field is required!!');
	        return Redirect::to('/login');
	    }
	    catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
	    {
	        Session::flash('error', 'Password field is required!!');
	        return Redirect::to('/login');
	    }
	    catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
	    {
	        Session::flash('error', 'Email or Password is wrong, try again!!');
	        return Redirect::to('/login');
	    }
	    catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
	    {
	        Session::flash('error', 'User was not found!!');
	        return Redirect::to('/login');
	    }
	    catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
	    {
	        Session::flash('error', 'User is not activated!!');
	        return Redirect::to('/login');
	    }

	    // The following is only required if throttle is enabled
	    catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
	    {
	        Session::flash('error', 'User is suspended!!');
	        return Redirect::to('/login');
	    }
	    catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
	    {
	        Session::flash('error', 'User is banned!!');
	        return Redirect::to('/login');
	    }
	}

	
	/**
	 * Register
	 * Authenticate with Sentry2
	 * @author Naing Win
	 **/
	public function register() {

	} 

}