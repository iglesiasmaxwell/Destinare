<?php

include '../api/selectData.php';
$json = file_get_contents('../api/data.json');
$array = json_decode($json, true);

/**
 * Country.
 */
$countryKey = array_keys($array);
$countryArray = $array[$countrySelect];

/**
 * Province.
 */
$provinceKey = array_keys($countryArray);
$provinceArray = $countryArray[$provinceSelect];

/**
 * Regency / City.
 */
$regencityKey = array_keys($provinceArray);
$regencityArray = $provinceArray[$regencitySelect];

// var_dump($regencityKey);
