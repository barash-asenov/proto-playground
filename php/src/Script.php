#!/usr/bin/env php
<?php

require "./vendor/autoload.php";

use Addressbookv1\PhoneNumber as PhoneNumberV1;
use Addressbookv2\PhoneNumber as PhoneNumberV2;

// Note: inside docker. Run with makefile
$dataSrc = "/data/phone.pb";

// Read the existing address book or create a new one.
$phoneNumberV1 = new PhoneNumberV1();
$phoneNumberV1->mergeFromString(file_get_contents($dataSrc));

printf("V1: %s\n", $phoneNumberV1->serializeToJsonString());

$phoneNumberV2 = new PhoneNumberV2();
$phoneNumberV2->mergeFromString(file_get_contents($dataSrc));

printf("V2: %s\n", $phoneNumberV2->serializeToJsonString());

// Write the new address book back to disk.
// file_put_contents($argv[1], $addressBook->toStream());
