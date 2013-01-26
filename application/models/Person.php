<?php

/**
 * A contact.
 */
class Person extends Eloquent
{
    public $first_name;
    public $last_name;
    public $email_address;

    public static function createTable() {

        Schema::create('people', function($table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_lame');
            $table->string('email_address');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->unique('email_address');
        });
    }
}