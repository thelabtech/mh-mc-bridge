<?php

class Cron_Controller extends Base_Controller {
    public function action_index()
    {
        $mappings = Mapping::all();
        foreach ($mappings as $mapping)
        {
            echo '<h1>Mapping: ID#'.$mapping->id.'</h1>';
            $mh = new MissionHub($mapping->mission_hub_api_key);
            echo '<p>MissionHub API Key: '.$mapping->mission_hub_api_key.'</p>';
            $mc = new MailChimp($mapping->target_system_api_key);
            echo '<p>Mailchimp API Key: '.$mapping->target_system_api_key.'</p>';
            $list_id = $mapping->target_system_list;
            echo '<p>Mailchimp list id: '.$list_id.'</p>';
            $role = $mapping->mission_hub_role;
            echo '<p>Missionhub Role(Label?) ID: '.$role.'</p>';
            $contacts = $mh->build_contacts($role);
            echo '<h3>Contacts</h3><ul>';
            foreach ($contacts as $contact)
                echo '<li>'.$contact['FNAME'].' '.$contact['LNAME'].(isset($contact['EMAIL']) ? ' ('.$contact['EMAIL'].')' : '(NO EMAIL)').'</li>';
            echo '</ul>';
            if (($error = $mc->add_contacts($list_id, $contacts)) != 1)
                echo '<h3 style="color: #FF0000;">Error: '.$error.'</h3>';
        }
    }
}