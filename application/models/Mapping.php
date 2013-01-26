<?php

/**
 * Defines a mapping between a MissionHub role and a target system contact list for contact syncing.
 */
class Mapping extends Eloquent
{
    public $mission_hub_api_key;
    public $mission_hub_role;
    public $target_system;
    public $target_system_api_key;
    public $target_system_list;
}
