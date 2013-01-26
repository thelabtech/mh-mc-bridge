<?php

class MissionHub
{
    private $_labels = null;
    private $_api_key;

    public function __construct($api_key)
    {
        $this->_api_key = $api_key;
    }

    public function build_labels()
    {
        if ($this->_labels === null)
        {
            $curl = curl_init('https://www.missionhub.com/apis/v3/roles?secret='.$this->_api_key);

            if ($curl === false)
                throw new HttpRequestException('Unable to connect to MissionHub URL!');

            $rc = true;
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true)  && $rc;
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false) && $rc;
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false) && $rc;
            curl_setopt($curl, CURLOPT_VERBOSE, false)        && $rc;

            if ($rc === false)
                throw new HttpException('Unable to set curl options.');

            $result = curl_exec($curl);

            if ($result === false)
                throw new HttpRequestException('Error returned from MissionHub REST API.');
            $object = json_decode($result);
            $this->_labels = array();
            foreach ($object->roles as $role)
                $this->_labels[$role->id] = $role->name;
        }
        return $this->_labels;
        
    }

    public function build_contacts($label_id)
    {
        return array();
    }
}