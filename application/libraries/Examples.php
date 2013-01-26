<?php

/**
 * An example of how to call the MissionHub
 *
 * @param $secretKey
 * @throws HttpRequestException
 */
function testMissionHubAPI($secretKey) {

  $curl = curl_init('https://www.missionhub.com/apis/v3/roles?secret=f8602fea64e7c02d3c198a8316e507615f6e976c5798f538f4d0c3bb92452258');

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

  print_r(json_decode($result, true));
}

testMissionHubAPI("");