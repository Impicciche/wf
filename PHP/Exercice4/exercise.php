<?php


function getAllMondaysOfMonth(int $year, int $month) : array 
{
    $selectedDate = new DateTime($year . "-" . $month . "-" . "01");

    $dateFirstMonday = new DateTime("first monday of " . $selectedDate->format("Y-m"));

    $dateLastMonday = new DateTime("last monday of " . $selectedDate->format("Y-m"));

    $mondaysArray = [];

    for($currentDate = $dateFirstMonday;$currentDate<=$dateLastMonday;$currentDate->modify("+1 week"))
        array_push($mondaysArray,$currentDate->format("l j, M Y"));

    return $mondaysArray;


}
var_dump(getAllMondaysOfMonth(2019,4))
?>