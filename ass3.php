<?php
/*NAME:Wang zexue
  ID: 602110191
  Wechat name: Wang*/

  $fp=fopen($_SERVER['argv'][1],'r');
  fscanf($fp,"%d",$n);
  $students=[];
  $sum=[];
  for($i=0;$i<$n;$i++){
   $stu=[];
   fscanf($fp,"%s %s %f %f %f",$stu['name'],$stu['num'],$stu['score1'],$stu['score2'],$stu['score3']);
   $stu['total']=$stu['score1']+$stu['score2']+$stu['score3'];
    $students[]=$stu;
    $sum=$stu['total'];
} fclose($fp);
$t=$_SERVER['argv'][3];
 if($_SERVER['argc']>=4){
  $st=array_filter($students,function($stu){
    return $stu['num']==$_SERVER['argv'][3];
});

}
 else if($_SERVER['argc']<=3){
   $st=$students;
  }
  if($_SERVER['argv'][2]=="total"){
    foreach ($st as $key => $row) {
      $total[$key]=$row['total'];
      $num[$key] = $row['num'];
      $name[$key]=$row['name'];
  }
  array_multisort($total,SORT_ASC,$name, SORT_ASC, $num, SORT_ASC, $st);
}
  else if($_SERVER['argv'][2]=="1"){
    foreach ($st as $key => $row) {
      $score1[$key]=$row['score1'];
      $num[$key] = $row['num'];
      $name[$key]=$row['name'];
  }
  array_multisort($score1,SORT_ASC,$name, SORT_ASC, $num, SORT_ASC, $st);
    
  }
  else if($_SERVER['argv'][2]=="2"){
    foreach ($st as $key => $row) {
      $score2[$key] = $row['score2'];
      $num[$key] = $row['num'];
      $name[$key]=$row['name'];
    }
    array_multisort($score2,SORT_ASC,$name, SORT_ASC, $num, SORT_ASC, $st);
  }
  else if($_SERVER['argv'][2]=="3"){
    foreach ($st as $key => $row) {
      $score3[$key] = $row['score3'];
      $num[$key] = $row['num'];
      $name[$key]=$row['name'];
    }
    array_multisort($score3,SORT_ASC,$name, SORT_ASC, $num, SORT_ASC, $st);
  }
  else if($_SERVER['argv'][2]=="section"){
    foreach ($st as $key => $row) {
      $num[$key] = $row['num'];
      $name[$key] = $row['name'];
  }
  array_multisort($num, SORT_ASC, $name, SORT_ASC, $st);
  }
  else if($_SERVER['argv'][2]=="name"){
    foreach ($st as $key => $row) {
      $num[$key] = $row['num'];
      $name[$key] = $row['name'];
  }
  array_multisort($name, SORT_ASC, $num, SORT_ASC, $st);
}
foreach($st as $value)
printf("%-5s %-5s : %-6.2f %-6.2f %-6.2f = %4.2f \n",$value['name'],$value['num'],$value['score1'],$value['score2'],$value['score3'],$value['total']);
$avg=array_reduce($st,function($carry,$stu){
  return $carry+$stu['total'];
},0)/count($st);
printf("Average total score = %.2f",$avg);


