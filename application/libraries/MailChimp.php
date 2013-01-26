<?php

class MailChimp {
    private $_lists = null;
    private $_api_key;
    private $_api;
    
    public function __construct($api_key) {
        $this->api_key = $api_key;
    }

    public function build_lists()
    {
        if ($this->_lists === null)
        {
            $object = $this->api()->lists();
            $lists = $object['data'];
            $this->_lists = array();
            foreach ($lists as $list)
                $this->_lists[$list['id']] = $list['name'];
        }
        return $this->_lists;
    }
    
    public function add_contacts($list_id, $contacts)
    {
        $this->api()->listBatchSubscribe($list_id,$contacts);
        return ;
    }

    public function api()
    {
        if ($this->_api === null)
            $this->_api = new MCAPI($this->_api_key);
        return $this->_api;
    }
}