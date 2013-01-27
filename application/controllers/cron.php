<?php

class Cron_Controller extends Base_Controller {
    public function action_index()
    {
        $mappings = Mapping::all();
        foreach ($mappings as $mapping)
        {
            echo 'mapping: '.$mapping->id.'<br>';
            $mh = new MissionHub($mapping->mission_hub_api_key);
            echo 'MissionHub: '.$mapping->mission_hub_api_key.'<br>';
            $mc = new MailChimp($mapping->target_system_api_key);
            echo 'Mailchimp: '.$mapping->target_system_api_key.'<br>';
            $list_id = $mapping->target_system_list;
            echo 'list id: '.$list_id.'<br>';
            $role = $mapping->mission_hub_role;
            echo 'mh_role: '.$role.'<br>';
            $contacts = $mh->build_contacts($role);
            foreach ($contacts as $contact)
                echo $contact.'<br>';
            $mc->add_contacts($list_id, $contacts);
        }
    }
}