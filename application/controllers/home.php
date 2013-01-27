<?php

class Home_Controller extends Base_Controller {

    public $restful = true;

	/*
	|--------------------------------------------------------------------------
	| The Default Controller
	|--------------------------------------------------------------------------
	|
	| Instead of using RESTful routes and anonymous functions, you might wish
	| to use controllers to organize your application API. You'll love them.
	|
	| This controller responds to URIs beginning with "home", and it also
	| serves as the default controller for the application, meaning it
	| handles requests to the root of the application.
	|
	| You can respond to GET requests to "/home/profile" like so:
	|
	|		public function action_profile()
	|		{
	|			return "This is your profile!";
	|		}
	|
	| Any extra segments are passed to the method as parameters:
	|
	|		public function action_profile($id)
	|		{
	|			return "This is the profile for user {$id}.";
	|		}
	|
	*/

	public function get_index()
	{
		return View::make('home.landing_page');
	}

    public function post_index()
    {
        Session::put('mh_key', Input::get('mh_key'));
        Session::put('mc_key', Input::get('mc_key'));
        return Redirect::to_action('home@select_labels');
    }

    public function get_select_labels()
    {
        $mc = new MailChimp(Session::get('mc_key'));
        $mh = new MissionHub(Session::get('mh_key'));
        $lists = $mc->build_lists();
        $labels = $mh->build_labels();
        $params = array('lists' => $lists, 'labels' => $labels, 'mc_key' => Session::get('mc_key'), 'mh_key' => Session::get('mh_key'));
        return View::make('home.select_labels')->with($params);
    }

    public function post_select_labels()
    {
        $mapping = new Mapping();
        $mapping->mission_hub_api_key = Session::get('mh_key');
        $mapping->target_system_api_key = Session::get('mc_key');
        $mapping->mission_hub_role = Input::get('mh_label');
        $mapping->target_system = 'MailChimp';
        $mapping->target_system_list = Input::get('mc_list');
        $mapping->save();
        return View::make('home.success');
    }
}