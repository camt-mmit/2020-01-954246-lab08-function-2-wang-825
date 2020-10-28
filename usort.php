<?php
$arr = [
    ['num' => '1','heat' => 32,'name' => '北京'],
    ['num' => '18','heat' => 36,'name' => '上海'],
    ['num' => '9','heat' => 4,'name' => '广州'],
    ['num' => '19','heat' => 36,'name' => '意义'],
    ['num' => '6','heat' => 43, 'name' => '深圳'],
    ['num' => '77','heat' => 99,'name' => '杭州'],
    ['num' => '78','heat' => 99,'name' => '成都'],
    ['num' => '6','heat' => 4,'name' => '昆明'],
    ['num' => '60','heat' => 99,'name' => '重庆'],
];
 
foreach ($arr as $key => $row) {
    $heat[$key] = $row['heat'];
    $num[$key] = $row['num'];
}
//将把 heat 降序排列，把 num 升序排列, 把 $arr 作为最后一个参数，以通用键排序
array_multisort($heat, SORT_ASC, $num, SORT_ASC, $arr);
foreach($arr as $value){
printf("%d %d %s\n",$value['num'],$value['heat'],$value['name']);
}
