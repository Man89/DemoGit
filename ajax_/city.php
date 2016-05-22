<?php
header('Content-Type: application/json');
$term = trim($_GET['q']);


$listCity=[
    'ha Noi',
    'tp HCM',
    'da Nang',
    'can tho',
    'soc trang',
    'Binh Thuan',
    'Ha Tinh',
    'Quang Ngai',
    'Quang Ninh',
    'Quang Binh',
    'Quang Nam',
    'Lao Cai',
    'Dien Bien',
    'Lai Chau',
    'Phu Tho',
];
$results = [];

foreach($listCity as $city)
    if (strstr($city,$term)) $results[] = $city;
//echo var_dump($results);
echo json_encode($results);
?>