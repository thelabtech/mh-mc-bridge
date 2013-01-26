<?php

/**
 * An example of how to call the MissionHub API.
 *
 * @param $secretKey
 * @throws HttpRequestException
 */

function testMissionHubAPI($secretKey) {

  $curl = curl_init("https://www.missionhub.com/apis/v3/roles?secret="+$secretKey);

  if ($curl === false)
    throw new HttpRequestException('Unable to connect to MissionHub URL!');

  $rc = true;
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true)  && $rc;
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false) && $rc;
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false) && $rc;
  curl_setopt($curl, CURLOPT_VERBOSE, false)        && $rc;

  if ($rc === false)
    throw new HttpException('Unable to set curl options.');

  $response = curl_exec($curl);

  if ($response === false)
    throw new HttpRequestException('Error returned from MissionHub REST API.');

  $results = json_decode($response, true);

  if (!array_key_exists('roles', $results))
    throw new HttpResponseException('Invalid response from MissionHub REST API');

  return $results['roles'];
}

// $key =
// print_r(testMissionHubAPI($key))

