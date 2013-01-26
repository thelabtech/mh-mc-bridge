<?php namespace mh_mc_bridge\entities;

class Person extends Eloquent {

  public $firstName;
  public $lastName;
  public $emailAddress;

  public function __construct($firstName, $lastName, $emailAddress)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->emailAddress = $emailAddress;
  }
}