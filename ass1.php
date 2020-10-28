<?php
/*NAME:Wang zexue
  ID: 602110191
  Wechat name: Wang*/
  function my_compare($a,$b){
      if($a['score']==$b['score']) return 0;
      return ($a['score']>$b['score'])? -1:1;
  }
  $fp=fopen($_SERVER['argv'][1],'r');
  fscanf($fp,"%d",$n);
  $a=[];
  for($i=0;$i<$n;$i++){
   $info=[];
   fscanf($fp,"%s  %s %f",$info['name'],$info['num'],$info['score']);
   $a[]=$info;
  }
  fclose($fp);
  usort($a,"my_compare");
  foreach($a as $value)
  printf("%-4s %s : %.2f \n",$value['name'],$value['num'],$value['score']);