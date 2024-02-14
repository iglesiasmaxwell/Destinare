<?php

// include '../api/selectData.php';
// $json = file_get_contents('../api/data.json');
// $array = json_decode($json, true);

/**
 * Country
 */
// $countryKey = array_keys($array);
// $countryArray = $array[$countrySelect];

/**
 * Province
 */
// $provinceKey = array_keys($countryArray);
// $provinceArray = $countryArray[$provinceSelect];

/**
 * Regency / City
 */
// $regencityKey = array_keys($provinceArray);
// $regencityArray = $provinceArray[$regencitySelect];

// var_dump($regencityKey);

$json = file_get_contents('../api/EastKalimantan.json');
$array = json_decode($json, true);

$eastKalimantanKey = array_keys($array);
$eastKalimantanArray = $array['East Kalimantan'];

$eastKalimantanStay = $eastKalimantanArray['Stay'];
$eastKalimantanStayKey = array_keys($eastKalimantanStay);

$eastKalimantanEat = $eastKalimantanArray['Eat'];
$eastKalimantanEatKey = array_keys($eastKalimantanEat);

$eastKalimantanDo = $eastKalimantanArray['Do'];
$eastKalimantanDoKey = array_keys($eastKalimantanDo);

$eastKalimantanAll = array_merge($eastKalimantanStay, $eastKalimantanEat, $eastKalimantanDo);
$eastKalimantanAllKey = array_keys($eastKalimantanAll);
