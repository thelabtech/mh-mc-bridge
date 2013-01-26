<?php

/**
 * Defines a mapping between MissionHub and a target system for contact syncing.
 */
class AccountMapping extends Eloquent
{
    public $mission_hub_api_key;
    public $target_system;
    public $target_system_api_key;

    public static function createTable() {

        Schema::create('AccountMappings', function($table) {
            $table->increments('id');
            $table->string('mission_hub_api_key');
            $table->string('target_system');
            $table->string('target_system_api_key');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->unique(array('mission_hub_api_key', 'target_system'));
        });
    }
}
