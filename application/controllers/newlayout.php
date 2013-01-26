<?php

class NewLayout_Controller extends Base_Controller {

    public $restful = true;

    public function get_index()
    {
        return View::make('newlayout.landing_page');
    }
}