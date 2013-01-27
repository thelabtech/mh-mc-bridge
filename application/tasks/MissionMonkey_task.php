<?php

class MissionMonkey_Task{
    
    public function run($args)
    {
        $mappings = Mapping::all();
        foreach ($mappings as $mapping)
        {
            $mh = new MissionHub($mapping->mission_hub_api_key);
            $mc = new MailChimp($mapping->mail_chimp_api_key);
            
            $list_id = $mapping->target_system_list;
            $role = $mapping->mission_hub_role;
            
            $contacts = $mh->build_contacts($role);
            $mc->add_contacts($list_id, $contacts);
            
        }
                
    }
}