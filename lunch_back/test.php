<?php
$menuList = "마이카츠 4,900 | 더블카츠 8,900 | 마이산도 4,500 | 가츠동(돈카츠덮밥) 7,900 | 깐풍치킨동 7,900 | 에비동 7,900 | 메가동 9,900 | 가라아게동 7,900 | 에비라이스 9,900 | 가라아게라이스 9,900 | 마이라이스 6,900 | 카츠라이스 9,900 | 돈코츠라멘 6,500 | 카라이라멘 6,900 | 얼큰우동 6,500 | 가쓰오어묵우동 5,900 | 유부우동 4,900 | 히야시소바 6,500 | 야끼소바 6,900 | 비빔쫄면 5,900 | 새우튀김 3,500";
$menu_price = explode("|", $menuList);
$aaa = [];

foreach($menu_price as $item) {
    $item = trim($item);
    $eee = substr($item,-4);
    if(preg_match('/\d+/', $item, $match)) {
        $ccc = $match[0];
    }
    $ddd = [
        "name" => preg_split('/\d/', $item, 2)[0],
        "price" => $ccc . $eee
    ];
    array_push($aaa, $ddd);
}

// print_r($aaa);

echo "<br>";

foreach($aaa as $list) {
    echo $list["name"];
    echo $list["price"] . "<br>";
}