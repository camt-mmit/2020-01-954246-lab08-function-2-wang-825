<?php
/*NAME:Wang zexue
  ID: 602110191
z  Wechat name: Wang*/
  $fp=fopen($_SERVER['argv'][1],'r');
  fscanf($fp,"%d",$n);
  $students=[];
  $s=[];
  for($i=0;$i<$n;$i++){
    $stu=[];
    fscanf($fp,"%s %s %f %f",$stu['name'],$stu['num'],$stu['score1'],$stu['score2']);
   $students[]=$stu;
  $sum=$stu['score1']+$stu['score2'];
  printf("%-7s %s: %-7.2f %-7.2f = %.2f\n",$stu['name'],$stu['num'],$stu['score1'],$stu['score2'],$sum);
 $s[]=$sum;
}
$avg=array_reduce($s,function($carry,$sum){
  return $carry+$sum;
},0)/count($s);
printf("Average total score : %.2f",$avg);
$p=array_filter($s,function($value) use ($avg){
  return $value>=$avg;
});
$pp=array_reduce($p, function($carry,$item){
  return $carry+$item;
},0);
printf("\nSummation of total score greater than or equal %.2f: %.2f ",$avg,$pp);
