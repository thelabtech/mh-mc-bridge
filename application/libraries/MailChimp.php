<?php

class MailChimp {
    private $lists = null;
    private $api_key;
    
    public function __construct($api_key) {
        $this->api_key = $api_key;
    }

    public function build_lists()
    {
        if ($this->lists === null)
        {
            $api = new MCAPI($this->api_key);
            $object = $api->lists();
            $lists = $object['data'];
            $this->lists = array();
            foreach ($lists as $list)
                $this->lists[$list['id']] = $list['name'];
        }
        return $this->lists;
    }
    
    public function container_function()
    {
        return $this->api_key;
    }
       
}